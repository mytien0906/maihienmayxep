<?php
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
// ----------Factory----------

// $productModel = new ProductModel();
$user = NULL; //Add new user
$id = NULL;
// echo $_GET['ds_id'];die();
if (!empty($_GET['ds_id'])) {
    $id = $_GET['ds_id'];
    $UserModel->DeleteDanhSach1($id);//Delete existing user
}
else{
    $UserModel->TruncateDanhSach();
}
header('Location: dan-muc-cap-1.php');
