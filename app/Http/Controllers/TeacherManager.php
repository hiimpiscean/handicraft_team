<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class TeacherManager extends Controller
{
    public function index(){

        $teacher = [];
        if (Session::has('teacher')) {

            $teacher = Session::get('teacher');
        } else {

            $teacher = [
                ['id' => 1,
                    'name' => 'John Main',
                    'dob' => '19/04/1983',
                    'ssid' => '01830412345'
                ],
                ['id' => 2,
                    'name' => 'Mary X',
                    'dob' => '30/02/1986',
                    'ssid' => '11860298765'
                ]
            ];
            Session::put('teacher', $teacher);
        }

        return view('teacherManager.index', ['teacher' => $teacher]);
    }

    public function create()
    {
        return view('teacherManager.new');
    }
    public function store(Request $request)
    {

//        dd($request->all());
//        $out = new ConsoleOutput();
//
        $validation = $this->formValidate($request);
        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

//        $this->formValidate($request)->validate(); //shortcut

        $teacher = [];
        $teacher['id'] = count(Session::get('teacher')) + 1;
        $teacher['name'] = $request->input('name');
        $teacher['dob'] = $request->input('dob');
        $teacher['ssid'] = $request->input('ssid');

//        $out->writeln(join("|", $book));
        Session::push('teacher', $teacher);
        return redirect()->action('TeacherManager@index');
    }



    public function edit($id)
    {
//                return 'Updating student id:' . $id;
        $updatedTeacher = Session::get('teacher')[$id - 1];
        return view('TeacherManager.update',
            ['teacher' => $updatedTeacher]);//teacher la o dong nay $teacher['dob'] = $request->input('dob');
    }

    public function update(Request $request, $id)
        //$request : là form ghi cái gì thì sẽ đẩy toàn bộ giữ liệu vào request
        //$id là trên đường link
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('TeacherManager@index');
        }

        $this->formValidate($request)->validate();

        $teacher = Session::get('teacher');
        $teacher[$id - 1]['name'] = $request->input('name');
        $teacher[$id - 1]['dob'] = $request->input('dob');
        $teacher[$id - 1]['ssid'] = $request->input('ssid');

        Session::forget('teacher');
        // teacher lay o dong nay : Session::push('teacher', $teacher);
        Session::put('teacher', $teacher);

        return redirect()->action('TeacherManager@index');
    }
    public function confirm($id){
        $deleteTeacher = Session::get('teacher')[$id - 1];
        return view('teacherManager.confirm',
            ['teacher' => $deleteTeacher]);
    }

    public function destroy(){
        Session::forget('teacher');
//            Session::put('books', $books);

//            Session :: save ();


        return redirect()->action('TeacherManager@index');
    }

    function formValidate($request){
        return Validator::make(
            $request->all(),
        [
//          VD: 'name' trung voi cai name o' input
            'name' => [ 'required'],
            'dob'=>['required','date_format:d/m/Y'],
            'ssid' =>[ 'required','digits:11','starts_with:00,01,10,11',
                function($attribute,$value,$fail){

                }
            ]
        ],
            [
//               'name.required' => 'Please enter the name ',
                'ssid.starts_with' => 'start with 00 or 01 or 10 or 11'
            ]
        );
    }
}
