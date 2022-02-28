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
if (!empty($_GET['tieuchi_id'])) {
    $id = $_GET['tieuchi_id'];
    $UserModel->DeleteTieuchi($id);//Delete existing user
}
else{ $UserModel->TruncateTieuchi();}
header('Location: tieu-chi.php');
