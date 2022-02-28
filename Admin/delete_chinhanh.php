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
if (!empty($_GET['chinhanh_id'])) {
    $id = $_GET['chinhanh_id'];
    $UserModel->DeleteChinhanh($id);//Delete existing user
}
else{
    $UserModel->TruncateChinhanh();
}

header('Location: chi-nhanh.php');
