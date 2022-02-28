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
if (!empty($_GET['video_id'])) {
    $id = $_GET['video_id'];
    $UserModel->DeleteVideo($id);//Delete existing user
}
else{
    $UserModel->TruncateVideo();
}
header('Location: video.php');
