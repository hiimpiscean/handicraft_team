<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategories() {
        $sql = 'select b.* ';
        $sql .= 'from category as b ';
        $sql .= 'order by b.id_cate';

        return DB::select ($sql);
    }

    public static function getCategoryById($id){
        $sql = 'select b.* ';
        $sql .= 'from category as b ';
        $sql .= 'where b.id_cate = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($category){
        $sql = 'insert into category ';
        $sql .= '(id_cate, name_cate, image_cate) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$category->id_cate, $category->name_cate, $category->image_cate]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($category){
        $sql = 'update category ';
        $sql .= 'set name_cate = ?, image_cate = ? ';
        $sql .= 'where id_cate = ? ';

        DB::update($sql, [$category->name_cate, $category->image_cate, $category->id_cate]);

    }

    public static function delete($id){
        $sql = 'delete from category ';
        $sql .= 'where id_cate = ? ';

        DB::delete($sql, [$id]);
    }
}
