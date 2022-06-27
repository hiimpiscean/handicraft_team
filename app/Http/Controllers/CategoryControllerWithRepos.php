<?php

namespace App\Http\Controllers;

use App\Repository\CategoryShowRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryControllerWithRepos extends Controller
{
    public function index()
    {
        $category = CategoryShowRepos::getAllCategory();
        return view('categoryWithRepos.index',
            [
                'category' => $category,
            ]);
    }

    public function show($id_cate)
    {

        $category = CategoryShowRepos::getCategoryById($id_cate);
        return view('categoryWithRepos.show',
            [
                'category' => $category[0]
            ]
        );
    }

    public function create()
    {

        return view(
            'categoryWithRepos.new',
            ["category" => (object)[
                'id_cate' => '',
                'name_cate' => '',
                'image_cate' => ''

            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $category = (object)[
            'name_cate' => $request->input('name_cate'),
            'image_cate' => $request->input('image_cate'),

        ];

        $newId = CategoryShowRepos::insert($category);

        return redirect()
            ->action('CategoryControllerWithRepos@index')
            ->with('msg', 'New Category with id: '.$newId.' has been inserted');
    }

    public function edit($id_cate)
    {
        $category = CategoryShowRepos::getCategoryById($id_cate); //this is always an array


        return view(
            'categoryWithRepos.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $id_cate)
    {
        if ($id_cate != $request->input('id_cate')) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $category = (object)[
            'id_cate' => $request->input('id_cate'),
            'name_cate' => $request->input('name_cate'),
            'image_cate' => $request->input('image_cate'),

        ];
        CategoryShowRepos::update($category);

        return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id_cate){
        $category = CategoryShowRepos::getCategoryById($id_cate); //this is always an array

        return view('categoryWithRepos.confirm',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroy(Request $request, $id_cate)
    {
        if ($request->input('id_cate') != $id_cate) {

            return redirect()->action('CategoryControllerWithRepos@index');
        }
        $product = CategoryShowRepos::getCategoryWithProductsById($id_cate);
        if (count($product) > 0) {
            return redirect()->action('CategoryControllerWithRepos@index')
                ->with('msg', 'Can not delete!!! Please check products before delete category!!!');
        } else {
            CategoryShowRepos::delete($id_cate);
            return redirect()->action('CategoryControllerWithRepos@index')
                ->with('msg', 'Delete Successfully');
        }
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'name_cate'=>['required','regex:/^[^0-9][A-Za-z]*$/'],
                'image_cate' =>['required'],
            ],
            [
                'name_cate.required'=>'please Enter name',
                'image_cate.required' => 'please enter image',
                'name_cate.regex'=>'you are not allowed to input numbers or special characters!',
            ]
        );
    }

}
