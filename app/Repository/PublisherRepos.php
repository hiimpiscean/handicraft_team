<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class PublisherRepos
{
    public static function getAllPublishers(){
        $sql = 'select p.* ';
        $sql .= 'from publishers as p ';
        $sql .= 'order by p.name ';

        return DB::select($sql);
    }
    public static function getPublisherByBookId($bookId){
        $sql = 'select p.* ';
        $sql .= 'from publishers as p ';
        $sql .= 'join books as b on p.id = b.publisherId ';
//        join : nối giữa hai bảng
        $sql .= 'where b.id = ?';

        return DB::select($sql, [$bookId]);
    }
}
