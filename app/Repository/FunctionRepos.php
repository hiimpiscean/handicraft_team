<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class FunctionRepos
{
    public static function searchForProducts($query) {
        $sql = 'select p.* ';
        $sql .= 'from product as p ';
        $sql .= 'where  LOCATE(?, name_p) > 0 ';
        return DB::select($sql, [$query]);
    }
    public static function getProductsByCateId($id_c){
            $sql = 'select p.* ';
            $sql .= 'from product as p ';
            $sql .= 'join category as c on c.id_cate = p.categoryId ';
            $sql .= 'where c.id_cate = ?';

            return DB::select($sql, [$id_c]);
    }
}

