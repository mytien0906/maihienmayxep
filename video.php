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
<!-- End Header -->
<!-- Main Content -->
<div class="main-content-videos">
    <div class="container">
        <div class="row main-content-wrapper">
            <?php include 'danhmuc.php' ?>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 main-content-right">
                <div class="box-products">
                    <div class="container">
                        <h2><span class="title">VIDEO CLIP</span></h2>
                        <div class="row box-product-block">
                            <?php foreach ($videos as $video) { ?>
                                <?php if ($video['hienthi'] == 1) { ?>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 card">
                                        <iframe width="360" height="215" src="https://www.youtube.com/embed/<?= $video['video_noidung'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <p class="card-text"><?= $video['video_name'] ?></p>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
<!-- Start Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->