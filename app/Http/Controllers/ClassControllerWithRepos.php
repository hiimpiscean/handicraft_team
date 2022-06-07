<?php

namespace App\Http\Controllers;

use App\Repository\ClassRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassControllerWithRepos extends Controller
{

    public function index()
    {
        $class = ClassRepos::getAllClass();
        return view('classWithRepos.index',
            [
                'class' => $class,
            ]);
    }
    public function show($id)
    {

        $class = ClassRepos::getClassById($id); //this is always an array of objects
        return view('classWithRepos.show',
            [
                'class' => $class[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'classWithRepos.new',
            ["class" => (object)[
                'id' => '',
                'name' => '',
                'date' => '',
                'size' => 0
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $class = (object)[
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'size' => $request->input('size'),
        ];

        $newId = ClassRepos::insert($class);

        return redirect()
            ->action('ClassControllerWithRepos@index')
            ->with('msg', 'New Class with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $class = ClassRepos::getClassById($id); //this is always an array


        return view(
            'classWithRepos.update',
            ["class" => $class[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('ClassControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $class = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'size' => $request->input('size'),
        ];
        ClassRepos::update($class);

        return redirect()->action('ClassControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $class = ClassRepos::getClassById($id); //this is always an array

        return view('classWithRepos.confirm',
            [
                'class' => $class[0]
            ]
        );
    }
    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('ClassControllerWithRepos@index');
        }

        ClassRepos::delete($id);


        return redirect()->action('ClassControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    function formValidate($request){
        return Validator::make(
            $request->all(),
            [
                'name'=>['required','min:6','max:8','regex:/^C/','regex:/L|G|I$/','regex:/[0-9]{4}/',
//                      function($attribute, $value, $fail){
//                          $re = 'regex:/[0-9]{4}/';
//                      }
                ],
                'date'=>['required','date_format:"Y-m-d"', 'after:2000-01-01'
//                      function($attribute, $value, $fail){
//                             $date = $value;
//                             if($re != $value){
//                                $fail('abc');
//                             }
//
//                      }
                ],
                'size'=>['required','integer',
                    function ($attribute, $value, $fail){
                        $failCondition = ((int)$value < 13);
                        if($failCondition){
                            $fail('wrong value in pages');
                        }
                    }
                ]
            ]
        );
    }

}
