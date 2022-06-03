<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmins() {
        $sql = 'select b.* ';
        $sql .= 'from category as b ';
        $sql .= 'order by b.id_cate';

        return DB::select ($sql);
    }

    public static function getAdminById($id){
        $sql = 'select b.* ';
        $sql .= 'from category as b ';
        $sql .= 'where b.id_cate = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($admin){
        $sql = 'insert into category ';
        $sql .= '(id_cate, name_cate, image_cate) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$admin->id_cate, $admin->name_cate, $admin->image_cate]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($admin){
        $sql = 'update category ';
        $sql .= 'set name_cate = ?, image_cate = ? ';
        $sql .= 'where id_cate = ? ';

        DB::update($sql, [$admin->name_cate, $admin->image_cate, $admin->id_cate]);

    }

    public static function delete($id){
        $sql = 'delete from category ';
        $sql .= 'where id_cate = ? ';

        DB::delete($sql, [$id]);
    }
}
