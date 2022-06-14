<?php

namespace App\Http\Controllers;

use App\Providers\CategoryRepos;
use Illuminate\Http\Request;

class CategoryControllerWithRepos extends Controller
{
    public function index()
    {
        $category = CategoryRepos::getAllCategory();
        return view('categoryWithRepos.index',
            [
                'category' => $category,
            ]);
    }

    public function show($id)
    {

        $category = CategoryRepos::getCategoryById($id); //this is always an array of objects
        return view('categoryWithRepos.show',
            [
                'category' => $category[0] //get the first element
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
                'image_cate' => '',

            ]]);

    }

    public function store(Request $request)
    {
        //  $this->formValidate($request)->validate(); //shortcut

        $category = (object)[
            'id_cate' => $request->input('id'),
            'name_cate' => $request->input('name'),
            'image_cate' => $request->input('image'),

        ];

        $newId = CategoryRepos::insert($category);

        return redirect()
            ->action('CategoryControllerRepos@index')
            ->with('msg', 'New category with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $category = CategoryRepos::getCategoryById($id); //this is always an array


        return view(
            'categoryWithRepos.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryControllerRepos@index');
        }

        //   $this->formValidate($request)->validate(); //shortcut

        $category = (object)[
            'id_cate' => $request->input('id'),
            'name_cate' => $request->input('name'),
            'image_cate' => $request->input('image'),

        ];
        CategoryRepos::update($category);

        return redirect()->action('CategoryControllerRepos@index')
            ->with('msg', 'Update Successfully');;
    }


    public function confirm($id){
        $category = CategoryRepos::getCategoryById($id); //this is always an array

        return view('categoryWithRepos.confirm',
            [
                "category" => $category[0]
            ]
        );
    }


    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryControllerRepos@index');
        }

        CategoryRepos::delete($id);


        return redirect()->action('CategoryControllerRepos@index')
            ->with('msg', 'Delete Successfully');
    }
}
