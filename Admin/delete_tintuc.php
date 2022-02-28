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
if (!empty($_GET['tintuc_id'])) {
    $id = $_GET['tintuc_id'];
    $UserModel->DeleteTintuc($id);//Delete existing user
}
else{
    $UserModel->TruncateTintuc();
}
header('Location: tin-tuc.php');
