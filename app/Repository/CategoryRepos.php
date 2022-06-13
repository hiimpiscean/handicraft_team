<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategory(){
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'order by c.name_cate ';

        return DB::select($sql);
    }



    /////////////sai//////////////
    public static function getCategoryByProductId($productId){
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'join product as p on c.id_cate = p.categoryId ';
//        join : nối giữa hai bảng
        $sql .= 'where p.id_p = ?';

        return DB::select($sql, [$productId]);
    }
}