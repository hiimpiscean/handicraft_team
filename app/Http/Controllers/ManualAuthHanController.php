<?php

namespace App\Http\Controllers;

use App\Repository\adminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthHanController extends Controller
{
    public function ask(){
        return view('handicraftWithRepos.manualAuthHan.login');
    }
    public function signin(Request $request){
       $this->formValidateLogin($request)->validate();
        $adminInformations = adminRepos::getAllAdmin();
        $username = $request->input('username');
        $password = $request->input('password');
        $a = 0;
        foreach($adminInformations as $adminInformation){
            if(($adminInformation->username) == $username && ($adminInformation->password) == sha1($password)) {

                Session::put('username', $request->input('username'));
                 return redirect()->route('handicraft.index');
            }
            else{
                $a += 1;
            }
        }
        if($a != 0){
            return redirect()->action('ManualAuthHanController@ask');
        }
//        Session::put('username', $request->input('username'));
//        return redirect()->route('handicraft.index');
    }
    public function signout() {
        if(Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('ManualAuthHanController@ask');
    }
    private function formValidateLogin($request) {
        return Validator::make(
            $request->all(),
            [
                'username' => ['required',
                    function($attribute,  $value, $fail) {
                        $adminInformations = adminRepos::getAllAdmin();
                        $loop = 0;
                        foreach ($adminInformations as $adminInformation) {
                            if($value == $adminInformation->username){
                                $loop = 0;
                                break;
                            }
                            else {
                                $loop += 1;
                            }
                        }
                        if($loop != 0 ){
                            $fail('Username is not correct');
                        }
                    }
                ],
                'password' => ['required',
                    function($attribute,  $value, $fail) {
                        $adminInformations = adminRepos::getAllAdmin();
                        $loop = 0;
                        foreach ($adminInformations as $adminInformation) {
                            if(sha1($value) == $adminInformation->password){
                                $loop = 0;
                                break;
                            }
                            else {
                                $loop += 1;
                            }
                        }
                        if($loop != 0 ){
                            $fail('Password is not correct');
                        }
                    }
                ]
            ]
        );
    }

//    private function formValidateLogin($request) {
//        return Validator::make(
//            $request->all(),
//            [
//                'username' => ['required',
//                    function($attribute,  $value, $fail) {
//                        $adminInformations = adminRepos::getAllAdmin();
//                        $loop = 0;
//                        foreach ($adminInformations as $adminInformation) {
//                            if($value == $adminInformation->username){
//                                $loop = 0;
//                                break;
//                            }
//                            else {
//                                $loop += 1;
//                            }
//                        }
//                        if($loop != 0 ){
//                            $fail('Username is not correct');
//                        }
//                    }
//                ],
//                'password' => ['required',
//                    function($attribute,  $value, $fail) {
//                        $adminInformations = adminRepos::getAllAdmin();
//                        $loop = 0;
//                        foreach ($adminInformations as $adminInformation) {
//                            if(sha1($value) == $adminInformation->password){
//                                $loop = 0;
//                                break;
//                            }
//                            else {
//                                $loop += 1;
//                            }
//                        }
//                        if($loop != 0 ){
//                            $fail('Password is not correct');
//                        }
//                    }
//                ]
//            ]
//        );
//    }

}
