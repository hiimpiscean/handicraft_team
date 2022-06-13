<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryRepos::getAllCategories();
        return view('category.index',
            [
                'categories' => $categories,
            ]);
    }

    public function show($id)
    {

        $category = CategoryRepos::getCategoryById($id); //this is always an array of objects
        return view('category.show',
            [
                'category' => $category[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'category.new',
            ["category" => (object)[
                'id_cate' => '',
                'name_cate' => '',
                'image_cate' => ''
            ]]);

    }

    public function store(Request $request)
    {
   //     $this->formValidate($request)->validate(); //shortcut
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpg,jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
        }
        $request->file->store('category', 'public');
        $category = (object)[
            'id_cate' => $request->input('id'),
            'name_cate' => $request->input('name_cate'),
            "image_cate" => $request->file->Name(),
        ];
        // ensure the request has a file before we attempt anything else.

            // Store the record, using the new file hashname which will be it's new filename identity.

        $newId = CategoryRepos::insert($category);

        return redirect()
            ->action('CategoryController@index')
            ->with('msg', 'New category with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $category = CategoryRepos::getCategoryById($id); //this is always an array


        return view(
            'category.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryController@index');
        }


   //     $this->formValidate($request)->validate(); //shortcut
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpg,jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
        }
        $request->file->store('category', 'public');
        $category = (object)[
            'id_cate' => $request->input('id'),
            'name_cate' => $request->input('name_cate'),
            "image_cate" => $request->file->hashName(),
        ];
        CategoryRepos::update($category);

        return redirect()->action('CategoryController@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id){
        $category = CategoryRepos::getCategoryById($id); //this is always an array

        return view('category.confirm',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id_cate') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryController@index');
        }

        CategoryRepos::delete($id);


        return redirect()->action('CategoryController@index')
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
