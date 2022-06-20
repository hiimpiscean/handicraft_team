<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManualAuthHanController extends Controller
{
    public function ask(){
        return view('handicraftWithRepos.manualAuthHan.login');
    }

    public function signin(Request $request){



        Session::put('username', $request->input('username'));
        return redirect()->route('handicraft.index');
    }
    public function signout() {
        if(Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('ManualAuthHanController@ask');
    }

}
