<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ClassRepos
{

    public static function getAllClass() {
        $sql = 'select c.* ';
        $sql .= 'from class as c ';
        $sql .= 'order by c.name';

        return DB::select ($sql);
    }

    public static function getClassById($id){
        $sql = 'select c.* ';
        $sql .= 'from class as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($class){
        $sql = 'insert into class ';
        $sql .= '(name, date, size) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$class->name, $class->date, $class->size]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($class){
        $sql = 'update class ';
        $sql .= 'set name = ?, date = ?, size = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$class->name, $class->date, $class->size, $class->id]);

    }

    public static function delete($id){
        $sql = 'delete from class ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

}
