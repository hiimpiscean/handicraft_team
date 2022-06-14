<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandiControllerRepos extends Controller
{
    public function index()
    {
        $product = HandiRepos::getAllHandi();
        return view('handiWithRepos.index',
            [
                'product' => $product,
            ]);
    }

    public function show($id)
    {

        $product = HandiRepos::getHandiById($id); //this is always an array of objects
        return view('handiWithRepos.show',
            [
                'product' => $product[0] //get the first element
            ]
        );
    }


    public function create()
    {

        return view(
            'handiWithRepos.new',
            ["product" => (object)[
                'id_p' => '',
                'name_p' => '',
                'image_p' => '',
                'price_p' => '',
                'size_p' => '',
                'description_p' => '',
                'categoryId' => '',
            ]]);

    }

    public function store(Request $request)
    {
        //  $this->formValidate($request)->validate(); //shortcut

        $product = (object)[
            'id_p' => $request->input('id'),
            'name_p' => $request->input('name'),
            'image_p' => $request->input('image'),
            'price_p' => $request->input('price'),
            'size_p' => $request->input('size'),
            'description_p' => $request->input('description'),
            'categoryId' => $request->input('category'),
        ];

        $newId = HandiRepos::insert($product);

        return redirect()
            ->action('HandiControllerRepos@index')
            ->with('msg', 'New product with id: '.$newId.' has been inserted');
    }

    public function edit($id)
    {
        $product = HandiRepos::getHandiById($id); //this is always an array


        return view(
            'handiWithRepos.update',
            ["product" => $product[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('HandiControllerRepos@index');
        }

        //   $this->formValidate($request)->validate(); //shortcut

        $product = (object)[
            'id_p' => $request->input('id'),
            'name_p' => $request->input('name'),
            'image_p' => $request->input('image'),
            'price_p' => $request->input('price'),
            'size_p' => $request->input('size'),
            'description_p' => $request->input('description'),
            'categoryId' => $request->input('category'),
        ];
        HandiRepos::update($product);

        return redirect()->action('HandiControllerRepos@index')
            ->with('msg', 'Update Successfully');;
    }


    public function confirm($id){
        $product = HandiRepos::getHandiById($id); //this is always an array

        return view('handiWithRepos.confirm',
            [
                "product" => $product[0]
            ]
        );
    }


    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('HandiControllerRepos@index');
        }

        HandiRepos::delete($id);


        return redirect()->action('HandiControllerRepos@index')
            ->with('msg', 'Delete Successfully');
    }
}
