<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$getTintucbyId = $UserModel->getTintucbyId($_GET['id_tintuc']);
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-details">
        <div class="container">
            <div class="main-content-wrapper">
                <div class="main-content-left">
                   <?php include 'danhmuc.php' ?>
                </div>
                <div class="main-content-right">
                    <?php foreach($getTintucbyId as $tintuc){ ?>
                    <div class="title">
                        <h2>
                            <p class="title"><?= $tintuc['tintuc_name'] ?> </p>
                        </h2>
                    </div>
                    <div class="detail-block">
                        <div class="detail-item-wrapper">
                            <?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?>
                        </div>

                    </div>
                    <div class="share-block">
                        <b>Chia sẻ:</b>
                    </div>
                    <!-- <div class="share-block">
                        <b>Bài viết khác:</b>
                        <br> 
                        <a href="">Tính Năng An Toàn Của Cửa Cuốn Austdoor Lâm Đồng - 22/07/2021</a>
                    </div> -->
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    