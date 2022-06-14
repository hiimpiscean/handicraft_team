<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategory() {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'order by c.name_cate';

        return DB::select ($sql);
    }

    public static function getCategoryById($id){
        $sql = 'select c.* ';
        $sql .= 'from product as c ';
        $sql .= 'where c.id_cate = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($category){
        $sql = 'insert into category ';
        $sql .= '(name_cate, image_cate) ';
        $sql .= 'values (?, ?) ';


        $result =  DB::insert($sql,
            [$category->name_cate,
                $category->image_cate,
                ]);
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


    public static function update($category){
        $sql = 'update category ';
        $sql .= 'set name_p = ?, image_p = ? ';
        $sql .= 'where id_p = ? ';

        DB::update($sql,
            [
                $category->name_cate,
                $category->image_cate,
                $category->id_cate,
            ]);

    }


    public static function delete($id){
        $sql = 'delete from category ';
        $sql .= 'where id_cate = ? ';

        DB::delete($sql, [$id]);
    }
}
