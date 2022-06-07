<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $student = array();
        if (Session::has('students')) {
            $student = Session::get('students');
        } else {
            $student = [
                ['id' => 1,
                    'name' => 'Juliet Conroy',
                    'email' => 'hailey.nikolaus@hotmail.com',
                    'contact' => '0912345678'
                ],
                ['id' => 2,
                    'name' => 'Cillian Hartman',
                    'email' => 'willa.gerlach@gmail.com',
                    'contact' => '0888123456'
                ]

            ];
            Session::put('students', $student);
        }

        return view('studentManager.index', ['students' => $student]);
    }
    public function create()
    {
        return view('studentManager.new');
    }
    public function store(Request $request)
    {
//        dd($request->all());
//        $out = new ConsoleOutput();

        $validation = $this->formValidate($request);
        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

//        $this->formValidate($request)->validate(); //shortcut

        $student = array();
        $student['id'] = count(Session::get('students')) + 1;
        $student['name'] = $request->input('name');
        $student['email'] = $request->input('email');
        $student['contact'] = $request->input('contact');

//        $out->writeln(join("|", $book));
        Session::push('students', $student);
        return redirect()->action('StudentController@index');
    }

    public function edit($id)
    {
//        return 'Updating student id:' . $id;
        $updatedStudent = Session::get('students')[$id - 1];
        return view('studentManager.update',
//            student là student của dòng này : -> $student  <-  ['contact'] = $request->input('contact');
            ['student' => $updatedStudent]);
    }

    public function update(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('StudentController@index');
        }

        $this->formValidate($request)->validate();

        $student = Session::get('students');
        $student[$id - 1]['name'] = $request->input('name');
        $student[$id - 1]['email'] = $request->input('email');
        $student[$id - 1]['contact'] = $request->input('contact');

        Session::forget('students');

//        students là student của dòng này được lưu trong session :Session::push('students', $student);
        Session::put('students', $student);
//      => giống như ta tẩy trắng đi rồi cho lại
        return redirect()->action('StudentController@index');
    }


    public function confirm($id){
        $deleteStudent = Session::get('students')[$id - 1];
        return view('studentManager.confirm',
            ['students' => $deleteStudent]);
    }

    public function destroy(){
        Session::forget('students');


        return redirect()->action('StudentController@index');
    }


    function formValidate($request){
        return Validator::make(
            $request->all(),
            [
                'name'=>['required'],
                'email'=>['required','email'],
                'contact'=>['required','starts_with:0','digits:10']
            ],
            [
                'name.required'=>'please enter the name'
            ]
        );
    }
}
