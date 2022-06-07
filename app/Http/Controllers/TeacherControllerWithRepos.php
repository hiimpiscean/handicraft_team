<?php

namespace App\Http\Controllers;

use App\Repository\TeacherRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherControllerWithRepos extends Controller
{
    public function index()
    {
        $teachers = TeacherRepos::getAllTeachers();
        return view('teacherWithRepos.index',
            [
                'teachers' => $teachers,
            ]);
    }

    public function show($id)
    {

        $teacher = TeacherRepos::getTeacherById($id); //this is always an array of objects
        return view('teacherWithRepos.show',
            [
                'teacher' => $teacher[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'teacherWithRepos.new',
            ["teacher" => (object)[
                'id' => '',
                'name' => '',
                'dob' => '',
                'ssid' => 0
            ]]);

    }
    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $teacher = (object)[
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'ssid' => $request->input('ssid'),
        ];

        $newId = TeacherRepos::insert($teacher);

        return redirect()
            ->action('TeacherControllerWithRepos@index')
            ->with('msg', 'New Teacher with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $teacher = TeacherRepos::getTeacherById($id);
        //this is always an array


        return view(
            'teacherWithRepos.update',
            ["teacher" => $teacher[0]]);
    }


    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('TeacherControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $teacher = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'ssid' => $request->input('ssid'),
        ];
        TeacherRepos::update($teacher);

        return redirect()->action('TeacherControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $teacher = TeacherRepos::getTeacherById($id); //this is always an array

        return view('teacherWithRepos.confirm',
            [
                'teacher' => $teacher[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('TeacherControllerWithRepos@index');
        }

        TeacherRepos::delete($id);


        return redirect()->action('TeacherControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    function formValidate($request){
        return Validator::make(
            $request->all(),
            [
//          VD: 'name' trung voi cai name o' input
                'name' => [ 'required'],
                'dob'=>['required','date_format:Y-m-d'],
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
