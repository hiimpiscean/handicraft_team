<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use App\Repository\ProductRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HandicraftFPControllerWithRepos extends Controller
{
    // phương thức with để truyền dữ liệu cho view
    // trong thu mục Repository sẽ chứa tất cả các thư mục Repos
    // ta ko lấy từ session nữa mà ta lấy ở database


    /////////////////////////////////
    public function index()
    {

        $product = ProductRepos::getAllProductWithCategory();

        return view('han.index',
            [
                'product' => $product,

            ]);
    }
    public function menu()
    {

        $product = ProductRepos::getAllProductWithCategory();

        return view('han.menu',
            [
                'product' => $product,

            ]);
    }

    public function create()
    {

        return view(
            'han.customer',


            ["customer" => (object)[
                'id_c' => '',
                'fullName_c' => '',
                'dob' => '',
                'gender' => '',
                'phone_c' => '',
                'email_c' => '',
                'address_c' => ''


            ]]);

    }

    public function store(Request $request)
    {
        //$this->formValidate($request)->validate(); //shortcut
        $gender = $request->input('gender');
        if ($gender == "Male") {
            $gender = "Nam";
        }
        elseif ($gender == "Female") {
            $gender = "Nu";
        }
        else {
            $gender = "Khac";
        }
        $customer = (object)[
            'fullName_c' => $request->input('fullName_c'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'phone_c' => $request->input('phone_c'),
            'email_c' => $request->input('email_c'),
            'address_c' => $request->input('address_c'),
        ];

        $newId = CustomerRepos::insert($customer);

        return redirect()
            ->action('HandicraftFPControllerWithRepos@index')
            ->with('msg', 'New Customer with id: '.$newId.' has been inserted');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'fullName_c' => ['required','min:5'],
                'dob' => ['required','date_format:"Y-m-d"'],
                'phone_c' => ['required','starts_with:0','digits:11'],
                'email_c' => ['required','email'],

            ],
            [
                'fullName_c.required'=>'Please enter Full name',
                'fullName_c.min'=>'Enter Full Name up to 5 characters',
                'phone_c.required'=>'Please enter Phone',
                'phone_c.starts_with'=>'Enter a phone number starting with 0',
                'phone_c.digits'=>'Please enter exactly 11 numbers',
                'email_c.required'=>'Please enter Email',
                'email_c.email'=>'Please enter email form',


            ]

        );
    }
}
