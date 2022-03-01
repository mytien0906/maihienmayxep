<?php
require_once ('./Model/UserModel.php');
$UserModel = new UserModel();

$error = "";
if(!empty($_GET['id'])){
  $getthongtinlienhe = $UserModel->getAllThongTinLienHeById($_GET['id']);
}
$file_url = $getthongtinlienhe[0]['file'];
// echo($file_url);die();
$file = "http://maihienmayxep.local/admin/file/$file_url";

$readableStream = fopen("$file", 'rb');
$writableStream = fopen('php://output', 'wb');

header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=\"" . $file_url . "\"");
stream_copy_to_stream($readableStream, $writableStream);
ob_flush();
flush();
header('Location: add_thongtinlienhe.php');