<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookSessionController extends Controller
{
    public function index(){
//        $books = array();
        $books = [];
        if (Session::has('books')) {
//            đã có books trong session
            $books = Session::get('books');
        } else {
            //chưa có books trong session
            $books = [
                ['id' => 1,
                    'title' => 'PHP for Dummies',
                    'author' => 'Green Hulk',
                    'pages' => 431
                ],
                ['id' => 2,
                    'title' => 'Getting started with Laravel',
                    'author' => 'Iron Man',
                    'pages' => 209
                ],
                ['id' => 3,
                    'title' => 'Advanced Laravel',
                    'author' => 'Black Widow',
                    'pages' => 559
                ]

            ];
            Session::put('books', $books);
        }

        return view('bookworm.bookSession.index', ['books' => $books]);
    }

    public function create()
    {
        return view('bookworm.bookSession.new');
    }

    public function store(Request $request)
    {

//        dd($request->all());//dùng để hiển thị ra tất cả những gì ta nhập và dừng luôn ko chạy những dòng dưới
//        $out = new ConsoleOutput();
//
        $validation = $this->formValidate($request);
        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation)//saved in session
                ->withInput();//saved in session
        }

//        $this->formValidate($request)->validate(); //shortcut

        $book = [];
        $book['id'] = count(Session::get('books')) + 1;
        $book['title'] = $request->input('title');
        $book['author'] = $request->input('author');
        $book['pages'] = $request->input('pages');

//        $out->writeln(join("|", $book));
        Session::push('books', $book);//function push là nối thêm vào
        return redirect()->action('BookSessionController@index');//redirect là ta chuyển hướng về trang index
    }

    public function edit($id)//id từ url(đường link)
    {
//        return 'Updating book id:' . $id;
        $updatedBook = Session::get('books')[$id - 1];
        return view('bookworm.bookSession.update',
            ['book' => $updatedBook]);
    }
    public function update(Request $request, $id)
    {
        if ($request->input('id') != $id) // kiểm tra  ID trong form nếu mà khác với id trên đường link thì quay trở về trang índex
        {
            //id in query string must match id in hidden input
            return redirect()->action('BookSessionController@index');
        }

//        $validation = $this->formValidate($request);
//        if ($validation->fails()) {
//            return redirect()->back()
//                ->withErrors($validation)//saved in session
//                ->withInput();//saved in session
//        }


        $this->formValidate($request)->validate();

        $books = Session::get('books');
        $books[$id - 1]['title'] = $request->input('title');
        $books[$id - 1]['author'] = $request->input('author');
        $books[$id - 1]['pages'] = $request->input('pages');

        Session::forget('books');
        Session::put('books', $books);

        return redirect()->action('BookSessionController@index');
    }

//    public function confirm($id){
//        $deleteBook = Session::get('books')[$id - 1];
//        return view('bookworm.bookSession.confirm',
//            ['book' => $deleteBook]);
//    }

//////////////////////////////////////////////////////////////////////////////////////
///

    public function confirm($id){
        $deleteBook = Session::get('books')[$id - 1];
        return view('bookworm.bookSession.confirm',
            ['book' => $deleteBook]);
    }

    ///chay dc /
//    public function destroy(Request $request,$id){
//        if ($request->input('id') != $id)
//            // kiểm tra  ID trong form nếu mà khác với id trên đường link thì quay trở về trang índex
//        {
//            //id in query string must match id in hidden input
//        }

//
//        $books[$id - 1]['title'] = $request->unset('title');
//        $books[$id - 1]['author'] = $request->unset('author');
//        $books[$id - 1]['pages'] = $request->unset('pages');
//        unset($request['id']);
//        $request = Session::get('books');
//        unset($request['id']);
//        Session::get('books',$request)

//        Session::get('books');

//        Session::pull('books');

        public function destroy(Request $request,$id)
        {

//            $deleteData = Session::pull('books')[$id - 1];
//            $request->get('title') = $deleteData[$id - 1]['title'] ;
//            $deleteData[$id - 1]['author'] = $request->input('author');
//            $deleteData[$id - 1]['pages'] = $request->input('pages');


//            $deleteData = Session::pull('books')[$id - 1];
//
//            if ($deleteData) {
//                Session::flash('success', 'Xóa  thành công!');
//            }else {
//                Session::flash('error', 'Xóa thất bại!');
//            }
//            return redirect()->action('BookSessionController@index');
//        }

//            $books = Session::get('books');
//            $books[$id - 1]['id'] = count(Session::get('books')) - count(Session::get('books'));
//            $books[$id - 1]['title'] = $request->input('title');
//            $books[$id - 1]['author'] = $request->input('author');
//            $books[$id - 1]['pages'] = $request->input('pages');

            Session::forget('books');
//            Session::put('books', $books);

//            Session :: save ();


            return redirect()->action('BookSessionController@index');
            // muốn xóa hết session data có thể sử dụng phương thức flush.
            //Phương thức forget() sử dụng khi bạn chỉ muốn xóa  một hoặc nhiều Session thông qua key
            //Phương thức pull() sẽ lấy về giá trị của Session sau đó mới tiến hành xóa Session:


        }

////////////////////////////////////////////////////////////////////////////
    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),//lấy toàn bộ input trong request
            [
                'title' => ['required', 'min:2', 'starts_with:a'],
                'pages' => [
                    function ($attribute, $value, $fail) {
                    //attribute là tên của field cần validate tương ứng ở đây là pages
                        // value là giá trị khi ấn submit
                        // fail là một callback được gọi đến khi việc validate thất bại. //
                        //Đây chính là nơi mà bạn có thể truyền vào thông báo khi việc validate thất bại.
                        //both page number and day of month must be odd or even
                        $day = date('d');
                        $failCondition = ((int)$day + (int)$value) % 2 == 1;
                        if ($failCondition) {
                            $fail('Wrong value in pages');
                        }
                    }
                ]
            ],
            [
                //change validation message
                'title.required'=>' Please enter the title',
                'title.starts_with' => 'Title must start with letter a'
            ]
        );
    }

}
