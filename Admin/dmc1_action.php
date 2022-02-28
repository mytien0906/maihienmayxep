<?php 
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if($_GET['atc']=='dmc1'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateNoiBat($id);
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
        $res = $UserModel->updateNoiBatProduct($id);
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
        $res = $UserModel->updateNoiBatChinhanh($id);
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
        $res = $UserModel->updateNoiBatCongtrinh($id);
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
        $res = $UserModel->updateNoiBatDichvu($id);
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
        $res = $UserModel->updateNoiBatTieuchi($id);
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
        $res = $UserModel->updateNoiBatTintuc($id);
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
        $res = $UserModel->updateNoiBatVideo($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}