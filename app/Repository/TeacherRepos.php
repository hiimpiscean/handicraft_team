<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class TeacherRepos
{

    public static function getAllTeachers() {
        $sql = 'select t.* ';
        $sql .= 'from teachers as t ';
        $sql .= 'order by t.name';

        return DB::select ($sql);
    }
    public static function getTeacherById($id){
        $sql = 'select t.* ';
        $sql .= 'from teachers as t ';
        $sql .= 'where t.id = ? ';

        return DB::select($sql, [$id]);
    }
    public static function insert($teacher){
        $sql = 'insert into teachers ';
        $sql .= '(name, dob, ssid) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$teacher->name, $teacher->dob, $teacher->ssid]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }
    public static function update($teacher){
        $sql = 'update teachers ';
        $sql .= 'set name = ?, dob = ?, ssid = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$teacher->name, $teacher->dob, $teacher->ssid, $teacher->id]);

    }

    public static function delete($id){
        $sql = 'delete from teachers ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}
