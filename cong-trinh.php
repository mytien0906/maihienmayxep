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
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item active"><a href="#"><span>Công Trinh</span></a></li>
            </ol>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Main Content -->
<div class="main-content-construct">
    <div class="container">
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">CÔNG TRÌNH</p>
                    </h2>
                </div>
                <div class="project-block">
                    <?php foreach ($congtrinhs as $congtrinh) { ?>
                        <?php if ($congtrinh['hienthi'] == 1) { ?>
                            <div class="row project-item-wrapper">
                                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-xs-3">
                                    <div>
                                        <a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="project-item-link">
                                            <img src="/Admin/thumb/<?= $congtrinh['congtrinh_photo'] ?>" alt="hinh anh cong trinh"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-xs-9 project-item-info">
                                    <h3><a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="project-item-title">
                                            <?= $congtrinh['congtrinh_name'] ?>
                                        </a></h3>
                                        <div class="congtrinh_noidung">
                                            <p><?= htmlspecialchars_decode($congtrinh['congtrinh_noidung']) ?></p>
                                        </div>
                                    <a href="chi-tiet.php?essifd=<?= md5($congtrinh['congtrinh_id'] . "maixep") ?>" class="btn-load-more">Xem Thêm</a>
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
<script>
    function trimText(str, wordCount) {
        var strArray = str.split(' ');
        var subArray = strArray.slice(0, wordCount);
        var result = subArray.join(" ");
        return result + '...';
    }

    var str = $('.congtrinh_noidung').text();
    var result = trimText(str,80);
    $('.congtrinh_noidung').text(result);
</script>