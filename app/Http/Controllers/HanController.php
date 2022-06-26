<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\CustomerRepos;
use App\Repository\FunctionRepos;
use App\Repository\ProductRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HanController extends Controller
{

    public function index()
    {

        $product = ProductRepos::getAllProductWithCategory();

        return view('hanUi.index',
            [
                'product' => $product,

            ]);
    }

    public function view()
    {

        $product = ProductRepos::getAllProductWithCategory();

        return view('hanUi.menu',
            [
                'product' => $product,

            ]);
    }

    public function show($id_p)
    {

        $product = ProductRepos::getProductById($id_p); //xuống lại Database lấy đúng cuốn sách có ID này

        $category = CategoryRepos::getCategoryByProductId($id_p);

        return view('hanUi.show',
            [
                'product' => $product[0],//get the first element

                'category' => $category[0],

            ]
        );
    }

    public function create()
    {

        return view(
            'hanUi.new',
            ["customer" => (object)[
                'id_c' => '',
                'fullName_c' => '',
                'dob' => '',
                'gender'=>'',
                'phone_c' => '',
                'email_c' => '',
                'address_c' => ''
            ]]);

    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $product_search = FunctionRepos::searchForProducts($query);

        return view('hanUi.search',
            [
                'product' => $product_search,

            ]);
    }

    public function listcate()
    {
        $category = CategoryRepos::getAllCategory();

        return view('hanUi.category',
            [
                'category' => $category,

            ]);
    }

    public function storecustomer(Request $request)
    {
//        dd($request->all());
        $this->formValidate($request)->validate(); //shortcut

        $customer = (object)[
            'fullName_c' => $request->input('fullName_c'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'phone_c' => $request->input('phone_c'),
            'email_c' => $request->input('email_c'),
            'address_c' => $request->input('address_c'),
        ];

        $newId = CustomerRepos::insert($customer);

        return view('hanUi.success');/*
            ->action('HanController@success')
            ->with('msg', 'New Customer with id: '.$newId.' has been inserted');*/
    }

    public function getproductsfromcate($id)
    {
        $products = FunctionRepos::getProductsByCateId($id);
        $cat = CategoryRepos::getCategoryById($id);
        return view('hanUi.productsfromcategory',
            [
                'product' => $products,
                'category' => $cat[0],

            ]);
    }

    public function showdetails($id_p)
    {
        $product = ProductRepos::getProductById($id_p);
        return view('hanUi.details',
            [
                'product' => $product[0],

            ]);
    }

    public function thank(){
        return view('hanUi.thank');
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
