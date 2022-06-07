<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\ProductRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HandicraftControllerWithRepos extends Controller
{
    // phương thức with để truyền dữ liệu cho view
    // trong thu mục Repository sẽ chứa tất cả các thư mục Repos
    // ta ko lấy từ session nữa mà ta lấy ở database
    public function index()
    {

        $product = ProductRepos::getAllProductWithCategory();

        return view('handicraftWithRepos.index',
            [
                'product' => $product,

            ]);
    }
    public function show($id_p)
    {

        $product = ProductRepos::getProductById($id_p); //xuống lại Database lấy đúng cuốn sách có ID này

        $category = CategoryRepos::getCategoryByProductId($id_p);

        return view('handicraftWithRepos.show',
            [
                'product' => $product[0],//get the first element

                'category' => $category[0],

            ]
        );
    }

    public function create()
    {
        $category = CategoryRepos::getAllCategory();

        return view(
            'handicraftWithRepos.new',


            ["product" => (object)[
                'id_p' => '',
                'name_p' => '',
                'image_p' => '',
                'price_p' => 0,
                'size_p' => '',
                'description_p' => '',
                'id_cate' => ''
            ],
                "category" => $category

            ]);

    }

    public function store(Request $request)

    {
        $this->formValidate($request)->validate(); //shortcut

        $product = (object)[
            'name_p' => $request->input('name_p'),
            'image_p' => $request->input('image_p'),
            'price_p' => $request->input('price_p'),
            'size_p' => $request->input('size_p'),
            'description_p' => $request->input('description_p'),
            'categoryId' => $request->input('category')
        ];

        $newId = ProductRepos::insert($product);


        return redirect()// chuyển hướng
        ->action('HandicraftControllerWithRepos@index')
            ->with('msg', 'New book with id: '.$newId.' has been inserted');

    }



    public function edit($id_p)
    {
        $product = ProductRepos::getProductById($id_p); //this is always an array

        $category = CategoryRepos::getAllCategory();

        return view(
            'handicraftWithRepos.update',
            [
                "product" => $product[0],

                "category" => $category
            ]);

    }

    public function update(Request $request, $id_p)
    {
        if ($id_p != $request->input('id_p')) {

            return redirect()->action('HandicraftControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $product = (object)[
            'id_p' => $request->input('id_p'),
            'name_p' => $request->input('name_p'),
            'image_p' => $request->input('image_p'),
            'price_p' => $request->input('price_p'),
            'size_p' => $request->input('size_p'),
            'description_p' => $request->input('description_p'),
            'categoryId' => $request->input('category')

        ];
        ProductRepos::update($product);

        return redirect()->action('HandicraftControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id_p){
        $product = ProductRepos::getProductById($id_p); //this is always an array





        $category = CategoryRepos::getCategoryByProductId($id_p);
        return view('handicraftWithRepos.confirm',
            [
                'product' => $product[0],
                'category' => $category[0],
            ]
        );
    }

    public function destroy(Request $request, $id_p)
    {
        if ($request->input('id_p') != $id_p) {
            //id in query string must match id in hidden input
            return redirect()->action('HandicraftControllerWithRepos@index');
        }

        ProductRepos::delete($id_p);




        return redirect()->action('HandicraftControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [

                'image_p' =>['required'],



            ],
            [
                'image_p.required' => 'please enter image',

            ]
        );
    }
}
