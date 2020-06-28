<?php
error_reporting(0);
include 'include/view/header.html';

require '../include/controller/database.php';
require 'controller/database.php';

use DB\Controller\Admin\Admin;
use DB\Controller\Database as DB;

$db     = new DB();
$admin  = new Admin(); 
$d      = $_SERVER['PHP_SELF'];
$dir    = str_replace('index.php','',$d);

session_start();
// session_destroy();
// session_write_close();
// var_dump($_SESSION);


// all post data 
// var_dump($_POST);
$user = $_POST['username'];
$pass = md5($_POST['password']);

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


// get session 
$user_id = $_SESSION['user_id'];
// all get data 
$v      = $_GET['v'];
$p      = $_GET['p'] ;
$id     = $_GET['id'];

if(isset($_SESSION['username'])){
    // echo $_SESSION['username'];
    if($_GET != ''|| isset($_GET)){
        if(isset($_GET['logout'])){
            session_destroy();
            session_write_close();
            header("location:".$dir);

        }else if($_GET['add'] == 'user'){
            include 'include/view/add_user.php';

        }else if($_GET['v'] == 'add'){
            include 'include/view/add.php';

        }else if($v == 'edit'){
            $edit = $db->edit($id);
            include 'include/view/edit.php';
            
        }else if($p == 'add'){
            $admin->store($title,$sub_title,$content,$img,$user_id);
            header("location:".$dir);
            // var_dump($_POST);
        }else if($p == 'del'){
            $admin->delete($id);
            header("location:".$dir."?view=list");
        }else if($p == 'update'){
            $admin->update($id_req,$title,$sub_title,$content,$img);
            header("location:".$dir."?view=list");
        }else{
            $show = $admin->show();
            include 'include/view/dashboard.php';
        }


    }


}else{
    // header("location:".$dir."?login");
    // $error = true;
    if($_GET['p'] == 'login'){
        $show = $admin->login($user,$pass);
        if($show == false){
            $error = true;
        }else{
            $now    = time();
            ini_set('session.gc_maxlifetime',$now + 3600);
            session_set_cookie_params($now + 3600);
            session_start();
            foreach($show as $s){
                $_SESSION['user_id'] = $s['id_user'];
                $_SESSION['username'] = $s['username'];     
            }
            if(isset($_GET['redirect'])){
                header('location:'.$dir);
            }
        }

    
    }else{
        if(isset($_GET['logout'])){
            header("location:".$dir);
        }
    }
    include 'include/view/login.php';
}
include 'include/view/footer.html';
?>