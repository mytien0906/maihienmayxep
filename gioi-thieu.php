<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$mangxhs = $UserModel->getAllMangXH();
$gioithieu = $UserModel->getGioiThieuhbyId();
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-intro">
        <div class="container">
            <div class="main-content-wrapper">
                <div class="main-content-left">
                    <?php include 'danhmuc.php' ?>
                </div>
                <div class="main-content-right">
                    <div class="title">
                        <h2><p class="title">GIỚI THIỆU</p></h2>
                    </div>
                    <div class="intro-block">
                        <?= $gioithieu[0]['noidung'] ?>
                    </div>
                    <div class="share-block">
                        <b>Chia sẻ:</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    