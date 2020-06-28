<?php
namespace DB\Controller;


class Database{
    private $host   = 'localhost';
    private $user   = 'root';
    private $pass   = '';
    private $db     = 'db_portal_berita';
    public  $conn;
    
    public function __construct()
    {
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    }

    public function store($title,$sub_title,$content,$img,$user_id){
        $sql = "INSERT INTO `article` (`ID`, `title`,`sub_title`, `content`,`img`,`user_id`, `post_date`) VALUES (NULL, '$title','$sub_title', '$content','$img','$user_id', now())";
        mysqli_query($this->conn,$sql);
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
    
    public function read($id){
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
            . "INNER JOIN USER ON article.user_id = USER.id_user where article.ID = '$id' ";
        $data =  mysqli_query($this->conn,$sql);
        while($i = mysqli_fetch_assoc($data)){
            $out[] = $i;
        }
        return $out;
    }


    public function edit($id){
        $sql = "SELECT * FROM `article` where ID = '$id'";
        $data =  mysqli_query($this->conn,$sql);
        while($i = mysqli_fetch_assoc($data)){
            $out[] = $i;
        }
        return $out;
    }
    public function update($id,$title,$sub_title,$content,$img){
        $sql = "UPDATE `article` SET `title` = '$title',`sub_title` = '$sub_title',  `content` = '$content',`img` = '$img', `post_date` = now() WHERE `article`.`ID` = '$id'";
        mysqli_query($this->conn,$sql);
    }
    public function delete($id){
        $sql = "DELETE FROM `article` WHERE `ID` = '$id'";
        $query = mysqli_query($this->conn,$sql);
    }

    public function login($user,$pass){
        
    }
}   

?>