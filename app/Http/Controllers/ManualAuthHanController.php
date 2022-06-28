<?php

namespace App\Http\Controllers;

use App\Repository\adminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthHanController extends Controller
{
    public function ask()
    {
        return view('handicraftWithRepos.manualAuthHan.login');
    }

    public function signin(Request $request)
    {
        $this->formValidateLogin($request)->validate();
        $informations = adminRepos::getAllAdmin();
        $username = $request->input('username');
        $password = $request->input('password');
        foreach ($informations as $i) {
            if (($i->username) == $username && ($i->password) == sha1($password)) {
                Session::put('username', $request->input('username'));
                return redirect()->route('handicraft.index');
            }
        }
        return redirect()->action('ManualAuthHanController@ask');
    }


    public function signout()
    {
        if (Session::has('username')) {
            Session::forget('username');
        }
        return redirect()->action('ManualAuthHanController@ask');
    }

    private function formValidateLogin($request)
    {
        return Validator::make(
            $request->all(),
            [
                'username' => ['required',
                    function ($attribute, $value, $fail) {//closure
                        $informations = adminRepos::getAllAdmin();
                        $a = 0;
                        foreach ($informations as $i) {
                            if ($value == $i->username) {
                                $a = 0;
                                break;
                            } else {
                                $a += 1;
                            }
                        }
                        if ($a != 0) {
                            $fail('Username is not correct');
                        }
                    }
                ],
                'password' => ['required',
                    function ($attribute, $value, $fail) {
                        $informations = adminRepos::getAllAdmin();
                        $a = 0;
                        foreach ($informations as $i) {
                            if (sha1($value) == $i->password) {
                                $a = 0;
                                break;
                            } else {
                                $a += 1;
                            }
                        }
                        if ($a != 0) {
                            $fail('Password is not correct');
                        }
                    }
                ]
            ]
        );
    }
}
