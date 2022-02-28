<?php 
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if($_GET['atc']=='dmc1'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThi($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='sanpham'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiProduct($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='chinhanh'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiChinhanh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='congtrinh'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiCongtrinh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='dichvu'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiDichvu($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='tieuchi'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiTieuchi($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='tintuc'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiTintuc($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='video'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiVideo($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='doitac'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiDoitac($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='slide'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiSlide($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='mangxh'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $res = $UserModel->updateHienThiMangxh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}