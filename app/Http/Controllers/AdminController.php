<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $admins = AdminRepos::getAllAdmins();
        return view('admin.category',
            [
                'admins' => $admins,
            ]);
    }

    public function show($id)
    {

        $admin = AdminRepos::getAdminById($id); //this is always an array of objects
        return view('admin.showCate',
            [
                'admin' => $admin[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'admin.newCate',
            ["admin" => (object)[
                'id_cate' => '',
                'name_cate' => '',
                'image_cate' => ''
            ]]);

    }

    public function store(Request $request)
    {
   //     $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'id_cate' => $request->input('id_cate'),
            'name_cate' => $request->input('name_cate'),
            'image_cate' => $request->input('image_cate'),
        ];

        $newId = AdminRepos::insert($admin);

        return redirect()
            ->action('AdminController@index')
            ->with('msg', 'New admin with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $admin = AdminRepos::getAdminById($id); //this is always an array


        return view(
            'admin.updateCate',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id_cate')) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)[
            'id_cate' => $request->input('id_cate'),
            'name_cate' => $request->input('name_cate'),
        ];
        AdminRepos::update($admin);

        return redirect()->action('AdminController@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $admin = AdminRepos::getAdminById($id); //this is always an array

        return view('admin.confirmCate',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id_cate') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('AdminController@index');
        }

        AdminRepos::delete($id);


        return redirect()->action('AdminController@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            /*[
                'title' => ['required', 'min:2'],
                'pages' => [
                    function ($attribute, $value, $fail) {
                        //both page number and day of month must be odd or even
                        $day = date('d');
                        $failCondition = ((int)$day + (int)$value) % 2 == 1;
                        if ($failCondition) {
                            $fail('Wrong value in pages');
                        }
                    }
                ]
            ],
            [
                //change validation message
                'title.starts_with' => 'Title must start with letter a'
            ]*/
        );
    }
}
