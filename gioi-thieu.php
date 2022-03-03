<?php
require_once('./Admin/Model/UserModel_index.php');
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
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item active"><a href="#"><span>Giới Thiệu</span></a></li>
            </ol>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Main Content -->
<div class="main-content-intro">
    <div class="container">
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">GIỚI THIỆU</p>
                    </h2>
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