<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function index()
    {
        $tests = array();
        if (Session::has('tests')) {
            $tests = Session::get('tests');


        } else {
            $tests = [
                ['id' => 1,
                    'name' => 'minh',
                    'author' => 'Green',
                    'pages' => 456

                ],
                [
                    'id' => 2,
                    'name' => 'viet',
                    'author' => 'red',
                    'pages' => 123
                ],
                [
                    'id' => 3,
                    'name' => 'van',
                    'author' => 'blue',
                    'pages' => 789
                ]
            ];
            Session::put('tests', $tests);

        }
        return view('test.index',['tests' =>$tests]);
    }
}
