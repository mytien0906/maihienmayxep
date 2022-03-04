<?php
require_once('./Admin/Model/UserModel_index.php');
// include 'head.php';
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
<div class="main-content-construct">
    <div class="container">
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">TIN TỨC</p>
                    </h2>
                </div>
                <?php foreach ($tintucs as $tintuc) {
                    if ($tintuc['hienthi'] == 1) { ?>
                        <div class="project-block">
                            <div class="project-item-wrapper">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-5">
                                    <div>
                                        <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="project-item-link">
                                            <p style="background-image: url('/Admin/thumb/<?= $tintuc['photo'] ?>');"></p>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-7 project-item-info new-item-info">
                                    <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="project-item-title">
                                        <?= $tintuc['tintuc_name'] ?>
                                    </a>
                                    <p class="date-publish">Ngày đăng: <?= $tintuc['tintuc_ngaytao'] ?></p>
                                    <div class="congtrinh_noidung tintuc_noidung">

                                        <p> <?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?> </p>
                                    </div>
                                    <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="btn-load-more">Xem Thêm</a>
                                </div>
                            </div>

                        </div>
                <?php }
                } ?>
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

    var str = $('.tintuc_noidung').text();
    var result = trimText(str, 80);
    $('.tintuc_noidung').text(result);
</script>