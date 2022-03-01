<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$dichvus = $UserModel->getAlldichvu();
$mangxhs = $UserModel->getAllMangXH();
?>
    <!-- Start Header-->
   <?php include 'header.php' ?>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-construct">
        <div class="container">
            <div class="main-content-wrapper">
                <div class="main-content-left">
                    <?php include 'danhmuc.php' ?>
                </div>
                <div class="main-content-right">
                    <div class="title">
                        <h2><p class="title">DỊCH VỤ</p></h2>
                    </div>
                    <?php foreach($dichvus as $dichvu){ ?>
                        <?php if($dichvu['hienthi']==1) {?>
                    <div class="project-block">
                        <div class="project-item-wrapper">
                            <div>
                                <div>
                                    <a href="" class="project-item-link">
                                        <img src="./Admin/thumb/<?= $dichvu['photo'] ?>" alt="hinh anh cong trinh"></a>
                                </div>
                            </div>
                            <div class="project-item-info">
                                <h3><a href="" class="project-item-title">
                                        <?= $dichvu['dichvu_name'] ?>
                                    </a></h3>
                                <p><?= htmlspecialchars_decode($dichvu['dichvu_noidung']) ?></p>
                                    <a href="chi-tiet.html" class="btn-load-more">Xem Thêm</a>
                            </div>
                        </div>

                    </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    