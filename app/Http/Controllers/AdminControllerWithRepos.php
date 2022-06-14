<?php

namespace App\Http\Controllers;

use App\Repository\adminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminControllerWithRepos extends Controller
{
    public function index()
    {
        $admin = adminRepos::getAllAdmin();
        return view('adminWithRepos.index',
            [
                'admin' => $admin,
            ]);
    }
    public function show($id_a)
    {

        $admin = adminRepos::getAdminById($id_a); //this is always an array of objects
        return view('adminWithRepos.show',
            [
                'admin' => $admin[0] //get the first element
            ]
        );
    }
    public function create()
    {

        return view(
            'adminWithRepos.new',
            ["admin" => (object)[
                'id_a' => '',
                'username' => '',
                'fullName_a' => '',
                'phone_a' => '',
                'email_a' => '',
                'password' => ''

            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'username' => $request->input('username'),
            'fullName_a' => $request->input('fullName_a'),
            'phone_a' => $request->input('phone_a'),
            'email_a' => $request->input('email_a'),
//            'password' =>$request->input('password'),
//            $request->user()->fill([
//                'password' => Hash::make($request->newPassword)
            'password' => Hash::make($request->input('password'))
//            ])->save()

//            'password' => $request->input('password'),
        ];

        $newId = AdminRepos::insert($admin);

        return redirect()
            ->action('AdminControllerWithRepos@index')
            ->with('msg', 'New Admin with id: '.$newId.' has been inserted');
    }

    public function edit($id_a)
    {
        $admin = AdminRepos::getAdminById($id_a); //this is always an array


        return view(
            'adminWithRepos.update',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $id_a)
    {
        if ($id_a != $request->input('id_a')) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminControllerWithRepos@index');
        }


        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'id_a' => $request->input('id_a'),
            'username' => $request->input('username'),
            'fullName_a' => $request->input('fullName_a'),
            'phone_a' => $request->input('phone_a'),
            'email_a' => $request->input('email_a'),
//            'password' => $request->input('password'),
//            $request->user()->fill([
//             'password' => Hash::make($request->newPassword)
//            'password' => Hash::make($request->input('password'))

           'password' => Hash::make(md5($request->input('password')))


//            if (Hash::check('secret', $hashedPassword))
//            {
//                $hashedPassword = newPassword;
//                // The passwords match...
//            }
//            ])->save()



        ];

        AdminRepos::update($admin);

        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id_a){
        $admin = AdminRepos::getAdminById($id_a); //this is always an array

        return view('adminWithRepos.confirm',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function destroy(Request $request, $id_a)
    {
        if ($request->input('id_a') != $id_a) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminControllerWithRepos@index');
        }

        AdminRepos::delete($id_a);


        return redirect()->action('AdminControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }
//    public function updatePassword(Request $request)
//    {
//        $this->validate($request, [
//            'old_password'     => 'required',
//            'new_password'     => 'required|min:6',
//            'confirm_password' => 'required|same:new_password',
//        ]);
//
//        $data = $request->all();
//
//        if(!\Hash::check($data['old_password'], auth()->user()->password)){
//
//            return back()->with('error','You have entered wrong password');
//
//        }
//    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'username' => ['required'],
                'fullName_a' => ['required','min:5'],
//                'dob' => ['required','date_format:"Y-m-d"'],
                'phone_a' => ['required','starts_with:0','digits:11'],
                'email_a' => ['required','email'],
                'password' => ['required'],
//                'password' => ['required_with:password|same:password'],
//                'password' => ['required','same:new_password'],

            ],
            [
//                //change validation message
//                'title.starts_with' => 'Title must start with letter a'
                'fullName_a.required' => 'Please enter Full Name',
                'phone_a.required' => 'Please enter Phone',
                'email_a.required' => 'Please enter Email',
                'password.required' => 'Please enter Password',
                'password' => 'Please enter Password',
                'fullName_a.min' => 'Enter Full Name up to 5 characters',
                'phone_a.digits' => 'Please enter phone exactly 11 numbers',
                'phone_a.starts_with' => 'Enter a phone number starting with 0',
                'email_a' => 'Please enter email form',
            ]
        );
    }


}
