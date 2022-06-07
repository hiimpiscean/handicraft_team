<?php

namespace App\Http\Controllers;

use App\Repository\StudentRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentControllerWithRepos extends Controller
{
    public function index()
    {
        $students = StudentRepos::getAllStudents();
        return view('studentWithRepos.index',
            [
                'students' => $students,
            ]);
    }
    public function show($id)
    {

        $student = StudentRepos::getStudentById($id); //this is always an array of objects
        return view('studentWithRepos.show',
            [
                'student' => $student[0] //get the first element
            ]
        );
    }
    public function create()
    {

        return view(
            'studentWithRepos.new',
            ["student" => (object)[
                'id' => '',
                'name' => '',
                'email' => '',
                'contact' => 0
            ]]);
    }




    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $student = (object)[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
        ];

        $newId = StudentRepos::insert($student);

        return redirect()
            ->action('StudentControllerWithRepos@index')
            ->with('msg', 'New Student with id: '.$newId.' has been inserted');
    }
    public function edit($id)
    {
        $student = StudentRepos::getStudentById($id); //this is always an array


        return view(
            'studentWithRepos.update',
            ["student" => $student[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('StudentControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $student = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
        ];
        StudentRepos::update($student);

        return redirect()->action('StudentControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $student = StudentRepos::getStudentById($id); //this is always an array

        return view('studentWithRepos.confirm',
            [
                'student' => $student[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('StudentControllerWithRepos@index');
        }

        StudentRepos::delete($id);


        return redirect()->action('StudentControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
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
