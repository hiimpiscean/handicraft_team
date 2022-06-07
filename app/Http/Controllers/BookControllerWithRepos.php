<?php

namespace App\Http\Controllers;

use App\Repository\BookRepos;
use App\Repository\PublisherRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookControllerWithRepos extends Controller
{
    // phương thức with để truyền dữ liệu cho view
    // trong thu mục Repository sẽ chứa tất cả các thư mục Repos
    // ta ko lấy từ session nữa mà ta lấy ở database
    public function index()
    {
//        $books = BookRepos::getAllBooks();//inport class// gọi xuống BookRepos thực hiện lấy tất cả book được bao nhiêu sách lưu vào book
        $books = BookRepos::getAllBooksWithPublishers();

        return view('bookworm.bookWithRepos.index',
            [
                'books' => $books,
                //'books' này là $books = BookRepos::getAllBooks()
            ]);
    }
    public function show($id)
    {

        $book = BookRepos::getBookById($id); //xuống lại Database lấy đúng cuốn sách có ID này
        // sau khi lấy được book đó ta sẽ đưa về view
        $publisher = PublisherRepos::getPublisherByBookId($id);
//        lấy tên của pub lên book
        return view('bookworm.bookWithRepos.show',
            [
                'book' => $book[0],//get the first element
                // $book[0] : book này là một array nên ta lấy array tại vị trí 0
                // 'book ' là $book = BookRepos::getBookById($id);
                'publisher' => $publisher[0],
//                câu select luôn luôn ra array cho nên là dù biết chỉ có 1 thì chúng ta cũng chỉ lấy ở vị trí 0
            ]
        );
    }

    public function create()
    {
        $publishers = PublisherRepos::getAllPublishers();
//      lấy toàn bộ pub để làm dropdown
        return view(
            'bookworm.bookWithRepos.new',
//            gửi kèm một modal ( modal rỗng) để luôn luôn có đầy đủ MVC

            ["book" => (object)[
                'id' => '',
                'title' => '',
                'author' => '',
                'pages' => 0,
                'publisherId' => ''
            ],
                "publishers" => $publishers
//                danh sách tất cả các pub để làm dropdown
            ]);

    }

    public function store(Request $request)
        //vì là form trống nên ta chỉ lấy toàn bộ dữ liệu từ form thông qua request
    {
        $this->formValidate($request)->validate(); //shortcut

        $book = (object)[
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'pages' => $request->input('pages'),
            'publisherId' => $request->input('publisher')
        ];

        $newId = BookRepos::insert($book);
        // gọi Bookrepos rồi insert book (tạo một book mới). Kết quả của Insert sẽ là newI

        return redirect()// chuyển hướng
            ->action('BookControllerWithRepos@index')
            ->with('msg', 'New book with id: '.$newId.' has been inserted');
        // with gửi một dữ liệu mà ta muốn
    }



    public function edit($id)
    {
        $book = BookRepos::getBookById($id); //this is always an array
// lấy id của cuốn sách đó getBookById
        $publishers = PublisherRepos::getAllPublishers();
// Lấy tất cả publisher có sẵn trong database( để làm dropdown)
        return view(
            'bookworm.bookWithRepos.update',
            [
                "book" => $book[0],
//                trong book này đã có sẵn pub rồi khi lên update nó sẽ dùng chung bookFields
                "publishers" => $publishers
            ]);
//      book tại vị trí 0 vì select toàn
//      đưa ra array ko có thì array rỗng , có 1 thì array có 1 phần tử ,
//      có n thì array có n phần tử
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
//            đoạn check id trong form và id trên đường linh giống hệt nhau
            //id in query string must match id in hidden input
            return redirect()->action('BookControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $book = (object)[
            'id' => $request->input('id'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'pages' => $request->input('pages'),
            'publisherId' => $request->input('publisher')

        ];
        BookRepos::update($book);
// thực hiện bookRepos update
        return redirect()->action('BookControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $book = BookRepos::getBookById($id); //this is always an array
//        lấy lại cuốn sách đó ta đưa lên id là bookconfirm
        $publisher = PublisherRepos::getPublisherByBookId($id);
        return view('bookworm.bookWithRepos.confirm',
            [
                'book' => $book[0],
                'publisher' => $publisher[0],
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('BookSessionController@index');
        }

        BookRepos::delete($id);
        // ta delete trong ID



        return redirect()->action('BookControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'title' => ['required', 'min:2'],
                'pages' => [
                    function ($attribute, $value, $fail) {
                        //both page number and day of month must be odd or even
                        $day = date('d');
                        $failCondition = ((int)$day + (int)$value) % 2 == 1;
                        if ($failCondition) {
                            $fail('Wrong value in pages');
                        }
                    }
                ],
                'publisher' => ['gt:0'],
                //gt: greater than > 0
            ],
            [
                //change validation message
                'title.starts_with' => 'Title must start with letter a',
                'publisher.gt' => 'Please select a publisher',
            ]
        );
    }

}
