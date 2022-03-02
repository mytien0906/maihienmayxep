<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$congtrinhs = $UserModel->getAllcongtrinh();
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
                        <h2><p class="title">CÔNG TRÌNH</p></h2>
                    </div>
                    <div class="project-block">
                        <?php foreach($congtrinhs as $congtrinh) {?>
                        <?php if($congtrinh['hienthi'] == 1){ ?>
                        <div class="project-item-wrapper">
                            <div>
                                <div>
                                    <a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="project-item-link">
                                        <img src="/Admin/thumb/<?= $congtrinh['congtrinh_photo'] ?>" alt="hinh anh cong trinh"></a>
                                </div>
                            </div>
                            <div class="project-item-info">
                                <h3><a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="project-item-title">
                                        <?= $congtrinh['congtrinh_name'] ?>
                                    </a></h3>
                                <p><?= htmlspecialchars_decode($congtrinh['congtrinh_noidung']) ?></p>
                                    <a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="btn-load-more">Xem Thêm</a>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    