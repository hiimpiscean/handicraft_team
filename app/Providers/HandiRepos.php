<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

class HandiRepos
{
    public static function getAllHandi() {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'order by p.name_p';

        return DB::select ($sql);
    }

    public static function getHandiById($id){
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where p.id_p = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($product){
        $sql = 'insert into product ';
        $sql .= '(name_p, image_p, price_p, size_p, description_p, categoryId) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';


        $result =  DB::insert($sql,
            [$product->name_p,
                $product->image_p,
                $product->price_p,
                $product->size_p,
                $product->description_p,
                $product->categoryId]);
//        'id_p' => $request->input('id'),
//            'name_p' => $request->input('name'),
//            'image_p' => $request->input('image'),
//            'price_p' => $request->input('price'),
//            'size_p' => $request->input('size'),
//            'description_p' => $request->input('description'),
//            'categoryId' => $request->input('category'),



        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function update($product){
        $sql = 'update product ';
        $sql .= 'set name_p = ?, image_p = ?, size_p = ?, price_p = ?, description_p = ?, categoryId = ? ';
        $sql .= 'where id_p = ? ';

        DB::update($sql,
            [
                $product->name_p,
                $product->image_p,
                $product->size_p,
                $product->price_p,
                $product->description_p,
                $product->categoryId,
                $product->id_p,
            ]);

    }


    public static function delete($id){
        $sql = 'delete from product ';
        $sql .= 'where id_p = ? ';

        DB::delete($sql, [$id]);
    }
}
