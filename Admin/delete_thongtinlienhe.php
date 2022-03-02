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
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $UserModel->DeleteThongTinLienHe($id);//Delete existing user
}
else{
    $UserModel->TruncateThongTinLienHe();
}
header('Location: thong-tin-lien-he.php');
