<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class BookRepos // trong class sẽ định nghĩa thuộc tính và các phương thức
{
    // nơi chứa tất cả các thư mục Repos
    //public thì có thể được truy cập từ bất cứ đâu trong code
    //static nghĩa là variable hay method đó được định nghĩa cho bản thân class đó
    public static function getAllBooks() {
        $sql = 'select b.* ';
        $sql .= 'from books as b ';
        $sql .= 'order by b.title';
// phải có dấu cách ở cuối mỗi đoạn để ko bị liền nhau "b.* "b "
        return DB::select ($sql);// DB là thư viện Database
    }
    public static function getAllBooksWithPublishers() {
        $sql = 'select b.*, p.name as publisherName ';
        $sql .= 'from books as b ';
        $sql .= 'join publishers as p on b.publisherId = p.id ';
        $sql .= 'order by b.title';

        return DB::select ($sql);

    }



    public static function getBookById($id){
        $sql = 'select b.* ';
        $sql .= 'from books as b ';
        $sql .= 'where b.id = ? ';// where lấy dòng có b.id = một tham số
        // ? là tham số (cho một giá trị nào đó)
        // nếu where ko ra sách nào thì vẫn sẽ ra array nhưng array là array rỗng
        // nếu ra 1 thì là array có 1 phẩn tử
        return DB::select($sql, [$id]);
        // [$id] tương ứng với ? , dù có một hay nhiều ta luôn đưa dưới dạng array
        // [$id] là $id ở trên getBookById($id)
    }

    public static function insert($book){
        $sql = 'insert into books ';
        $sql .= '(title, author, pages, publisherId) ';
        $sql .= 'values (?, ?, ?, ?) ';
//
        $result =  DB::insert($sql,
            [$book->title, $book->author, $book->pages , $book->publisherId]);
//        $book->publisherId trùng tên với -> 'publisherId' => $request->input('publisher')
//        insert là một câu đặc biệt có lúc insert được có lúc ko
        if($result){
            return DB::getPdo()->lastInsertId();//lastInsertId : lấy id cuối cùng vừa được insert vào database
            // nếu mà đúng thì ta insert dc thì ta sẽ phải lấy ID mới
            //DB::getPdo()->lastInsertId() : câu lấy lại ID.Muốn kết nối xuống database dùng Pdo (Pdo: php data object)
        } else {
            return -1;
        }
    }

    public static function update($book){
        $sql = 'update books ';
        $sql .= 'set title = ?, author = ?, pages = ?, publisherId = ? ';
        // set cái mới
        $sql .= 'where id = ? ';

        DB::update($sql,
            [
                $book->title,
                $book->author,
                $book->pages,
                $book->publisherId,
                $book->id]);

    }
    public static function delete($id){
        $sql = 'delete from books ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
        //thực hiện câu sql là delete
    }

}
