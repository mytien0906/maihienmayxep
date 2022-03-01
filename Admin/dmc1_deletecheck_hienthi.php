<?php 
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
if($_GET['atc']=='dmc1'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhong($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongProduct($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongChinhanh($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongCongtrinh($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongDichvu($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongTieuchi($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongTintuc($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongVideo($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongDoitac($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='hienthi'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongSlide($id);
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
        // echo($id);die();
        $res = $UserModel->updateHienThibangkhongMangxh($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
if($_GET['atc']=='thongtinlienhe'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // echo($id);die();
        $res = $UserModel->updateXacNhanBangKhongThongTinLienHe($id);
        if($res){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}