<?php
namespace DB\Controller\Admin;
// require "../../include/controller/database.php";
use DB\Controller\Database;

class Admin extends Database{
    public function login($user,$pass){
        if(isset($user) && isset($pass)){
            $sql    = "SELECT * FROM `user` WHERE username = '$user' and password = '$pass'";
            $data   = mysqli_query($this->conn,$sql);
            while($i = mysqli_fetch_assoc($data)){
                $out[] = $i;
            }
            return $out;
        }else{
            return false;
        }
    }

  

    public function show(){
        // $sql = "SELECT * FROM `article` ORDER BY `article`.`post_date` DESC";
        $sql = "SELECT\n"
            . "    article.ID,\n"
            . "    article.title,\n"
            . "    article.sub_title,\n"
            . "    article.content,\n"
            . "    article.img,\n"
            . "    article.post_date,\n"
            . "    USER.nama_depan,\n"
            . "    USER.nama_belakang\n"
            . "FROM\n"
            . "    article\n"
            . "INNER JOIN USER ON article.user_id = USER.id_user ORDER BY article.post_date DESC";

        $data = mysqli_query($this->conn,$sql);
        while($i = mysqli_fetch_assoc($data)){
            $out[] = $i;
        }
        return $out;
    }


    public function store($title,$sub_title,$content,$img,$user_id){
        parent::store($title,$sub_title,$content,$img,$user_id);
    }

    public function delete($id){
       parent::delete($id);
    }

    public function update($id,$title,$sub_title,$content,$img){
        parent::update($id,$title,$sub_title,$content,$img);
     }

}
?>