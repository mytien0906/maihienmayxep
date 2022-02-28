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
if (!empty($_GET['congtrinh_id'])) {
    $id = $_GET['congtrinh_id'];
    $UserModel->Deletecongtrinh($id);//Delete existing user
}
else{
    $UserModel->TruncatePCongtrinh();
}
header('Location: cong-trinh.php');
