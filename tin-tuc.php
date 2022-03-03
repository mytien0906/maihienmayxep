<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$mangxhs = $UserModel->getAllMangXH();
?>
<!-- Start Header-->
<?php include 'header.php' ?>
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                <li class="breadcrumb-item active"><a href="#"><span>Tin Tức</span></a></li>
            </ol>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Main Content -->
<div class="main-content-news">
    <div class="container">
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-8 col-lg-8  main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">TIN TỨC</p>
                    </h2>
                </div>
                <div class="new-block">
                    <?php foreach ($tintucs as $tintuc) {
                        if ($tintuc['hienthi'] == 1) { ?>
                            <div class="row new-item-wrapper">
                                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-xs-3">
                                    <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-link"
                                    >
                                        <img src="./Admin/thumb/<?= $tintuc['photo'] ?>" alt="hinh anh cong trinh">
                                    </a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-xs-9 new-item-info tintuc">
                                    <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-title">
                                        <?= $tintuc['tintuc_name'] ?>
                                    </a>
                                    <span class="date-publish">Ngày đăng: <?= $tintuc['tintuc_ngaytao'] ?></span>
                                    <div class="tintuc_noidung">
                                        <p> <?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?> </p>
                                    </div>
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
<script>
    function trimText(str, wordCount) {
        var strArray = str.split(' ');
        var subArray = strArray.slice(0, wordCount);
        var result = subArray.join(" ");
        return result + '...';
    }

    var str = $('.tintuc .tintuc_noidung').text();
    var result = trimText(str, 250);
    $('.tintuc .tintuc_noidung').text(result);
</script>