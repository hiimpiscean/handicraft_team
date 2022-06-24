<?php

namespace App\Http\Controllers;

use App\Repository\adminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManualAuthHanController extends Controller
{
    public function ask(){
        return view('handicraftWithRepos.manualAuthHan.login');
    }

    public function signin(Request $request){
//        $this->formValidateLogin($request)->validate();
        $adminInformations = adminRepos::getAllAdmin();
        $username = $request->input('username');
        $password = $request->input('password');
        $loop = 0;
        foreach($adminInformations as $adminInformation){
            if(($adminInformation->username) == $username && ($adminInformation->password) == sha1($password)) {
                $loop = 0;
                Session::put('username', $request->input('username'));
                 return redirect()->route('handicraft.index');
            }

            else{
                $loop += 1;
            }



        }
        if($loop != 0){
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

}
