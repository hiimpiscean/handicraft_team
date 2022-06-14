<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomer() {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'order by c.fullName_c';

        return DB::select ($sql);
    }

    public static function getCustomerById($id_c){
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'where c.id_c = ? ';

        return DB::select($sql, [$id_c]);
    }

    public static function insert($customer){
        $sql = 'insert into customer ';
        $sql .= '(fullName_c, dob, phone_c, email_c, address_c) ';
        $sql .= 'values (?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [
            $customer->fullName_c,
            $customer->dob,
            $customer->phone_c,
            $customer->email_c,
            $customer->address_c

        ]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }


    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'set fullName_c = ?, dob = ?, phone_c = ?, email_c = ?, address_c = ? ';
        $sql .= 'where id_c = ? ';

        DB::update($sql, [
            $customer->fullName_c,
            $customer->dob,
            $customer->phone_c,
            $customer->email_c,
            $customer->address_c,
            $customer->id_c


        ]);

    }


    public static function delete($id_c){
        $sql = 'delete from customer ';
        $sql .= 'where id_c = ? ';

        DB::delete($sql, [$id_c]);
    }


}
