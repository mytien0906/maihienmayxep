<?php
require_once('./Admin/Model/UserModel_index.php');
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
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-8 col-lg-8 main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">CÔNG TRÌNH</p>
                    </h2>
                </div>
                <div class="project-block">
                    <?php foreach ($congtrinhs as $congtrinh) { ?>
                        <?php if ($congtrinh['hienthi'] == 1) { ?>
                            <div class="project-item-wrapper">
                                <div>
                                    <div>
                                        <a href="" class="project-item-link">
                                            <img src="/Admin/thumb/<?= $congtrinh['congtrinh_photo'] ?>" alt="hinh anh cong trinh"></a>
                                    </div>
                                </div>
                                <div class="project-item-info">
                                    <h3><a href="" class="project-item-title">
                                            <?= $congtrinh['congtrinh_name'] ?>
                                        </a></h3>
                                    <p><?= htmlspecialchars_decode($congtrinh['congtrinh_noidung']) ?></p>
                                    <a href="chi-tiet.html" class="btn-load-more">Xem Thêm</a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
<!-- Start Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->