<?php 
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
if($_GET['atc']=='dmc1'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhong($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='sanpham'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongProduct($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='chinhanh'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongChinhanh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='congtrinh'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongCongtrinh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='dichvu'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongDichvu($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='tieuchi'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongTieuchi($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='tintuc'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongTintuc($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
elseif($_GET['atc']=='video'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateNoiBatbangkhongVideo($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}