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
if (!empty($_GET['dichvu_id'])) {
    $id = $_GET['dichvu_id'];
    $UserModel->Deletedichvu($id);//Delete existing user
}
else{
    $UserModel->TruncatePDichVu();
}
header('Location: dich-vu.php');
