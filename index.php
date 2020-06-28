<?php
error_reporting(0);
session_start();
require 'include/controller/database.php';
use DB\Controller\Database as DB;
$db     = new DB();
$d      = $_SERVER['PHP_SELF'];
$dir    = str_replace('index.php','',$d);

// semua req get 
$v      = $_GET['view'];
$p      = $_GET['p'];        
$id     = $_GET['id'];
// var_dump($_GET);


// semua post req 
$id_req = $_POST['id'];
$title = $_POST['title'];
$sub_title = $_POST['sub_title'];
$content = $_POST['content'];


// saya isi sub_title dengan paragraf pertama yg diakiri dengan .(titik)
$p_title = '/<p>.*\./';
$m_title = preg_match_all($p_title,$content,$arr_title,PREG_PATTERN_ORDER);
$sub_title =$arr_title[0][0];

//mengambil gambar pertama di dalam content
$re_img = '/<img.*?src="([^"]+)".*?>/';
$r =  preg_match_all($re_img, $content, $arr_img);
//var_dump($arr_img[1]);
$img = $arr_img[1][0];
// echo $img;

// var_dump($_POST);

// buat header
include 'include/view/header.html';

// buat isi
if($_GET != ''|| isset($_GET)){
    if($v == 'list'){
        include 'include/view/list.php';
    }else if($v == 'add'){
        include 'include/view/add.php';
    }else if($v == 'edit'){
        $edit = $db->edit($id);
        include 'include/view/edit.php';
    }else if($v == 'read'){
        $read = $db->read($id); 
        include 'include/view/read.php';
   
    }else if($p == 'add'){
        $db->store($title,$sub_title,$content,$img,1);
        header("location:".$dir."?view=list");
    }else if($p == 'del'){
        $db->delete($id);
        header("location:".$dir."?view=list");
    }else if($p == 'update'){
        $db->update($id_req,$title,$sub_title,$content,$img);
        header("location:".$dir."?view=list");

    }else if($p == 'logout'){
        session_destroy();
        session_write_close();
        header("location:".$dir."");
    }else{
        $show = $db->show();
        include 'include/view/show.php';
    }
}


// footer
include 'include/view/footer.html';
?>