<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ClassRoomController extends Controller
{
    public function index(){

        $class = [];
        if (Session::has('class')) {

            $class = Session::get('class');
        } else {
            //chưa có books trong session
            $class = [
                ['id' => 1,
                    'name' => 'C1808G',
                    'date' => '17/08/2018',
                    'size' => 24
                ],
                ['id' => 2,
                    'name' => 'C19091',
                    'date' => '03/09/2019',
                    'size' => 15
                ],
                ['id' => 3,
                    'name' => 'C2010G3',
                    'date' => '07/10/2020',
                    'size' => 20
                ],
                ['id' => 4,
                'name' => 'C2108G1',
                'date' => '23/08/2021',
                'size' => 22
                ]
            ];
            Session::put('class', $class);
        }

        return view('classRoom.index', ['class' => $class]);
    }

    public function create()
    {
        return view('classRoom.new');
    }

    public function store(Request $request)
    {
//        dd($request->all());
//        $out = new ConsoleOutput();

        $validation = $this->formValidate($request);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

//        $this->formValidate($request)->validate(); //shortcut

        $class = array();
        $class['id'] = count(Session::get('class')) + 1;
        $class['name'] = $request->input('name');
        $class['date'] = $request->input('date');
        $class['size'] = $request->input('size');

//        $out->writeln(join("|", $book));
        Session::push('class', $class);
        return redirect()->action('ClassRoomController@index');
    }

    public function edit($id)//id từ url(đường link)
    {
//        return 'Updating book id:' . $id;
        $updatedClass = Session::get('class')[$id - 1];
        return view('classRoom.update',
            ['class' => $updatedClass]);
    }


    public function update(Request $request, $id)
    {
        if ($request->input('id') != $id) // kiểm tra  ID trong form nếu mà khác với id trên đường link thì quay trở về trang índex
        {
            //id in query string must match id in hidden input
            return redirect()->action('ClassRoomController@index');
        }

//        $validation = $this->formValidate($request);
//        if ($validation->fails()) {
//            return redirect()->back()
//                ->withErrors($validation)//saved in session
//                ->withInput();//saved in session
//        }


        $this->formValidate($request)->validate();

            $class = Session::get('class');
        $class[$id - 1]['name'] = $request->input('name');
        $class[$id - 1]['date'] = $request->input('date');
        $class[$id - 1]['size'] = $request->input('size');

        Session::forget('class');
        Session::put('class', $class);

        return redirect()->action('ClassRoomController@index');
    }

    public function confirm($id){
        $deleteClass = Session::get('class')[$id - 1];
        return view('classRoom.confirm',
            ['class' => $deleteClass]);
    }


    public function destroy(){
        Session::forget('class');


        return redirect()->action('ClassRoomController@index');
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
                  'date'=>['required','date_format:"d/m/Y"', 'after:01-01-2000'
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
