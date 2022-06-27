<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.username';

        return DB::select ($sql);
    }

    public static function getAdminById($id_a){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.id_a = ? ';

        return DB::select($sql, [$id_a]);
    }

/*    public static function insert($admin){
        $sql = 'insert into admin ';
        $sql .= '(username, fullName_a, phone_a, email_a, password) ';
        $sql .= 'values (?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [
            $admin->username,
            $admin->fullName_a,
            $admin->phone_a,
            $admin->email_a,
            $admin->password
        ]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }*/

    public static function update($admin){
        $sql = 'update admin ';
        $sql .= 'set username = ?, fullName_a = ?, phone_a = ?, email_a = ?, password = sha1(?) ';
//          $sql .= 'set admin_username = ?, admin_password = sha1(?), admin_name = ?, admin_DOB = ?, phone_number = ?, admin_email = ? ';
        $sql .= 'where id_a = ? ';

        DB::update($sql, [
            $admin->username,
            $admin->fullName_a,
            $admin->phone_a,
            $admin->email_a,
            $admin->password,
            $admin->id_a]);

    }



/*    public static function delete($id_a){
        $sql = 'delete from admin ';
        $sql .= 'where id_a = ? ';

        DB::delete($sql, [$id_a]);
    }*/




}
