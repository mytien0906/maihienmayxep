<?php
require_once ('./Admin/Model/UserModel_index.php');
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$getTintucbyId = $UserModel->getTintucbyId($_GET['id_tintuc']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/gioi-thieu.css">
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick-theme.css" />
    <link rel="stylesheet" href="./assets/css/cong-trinh.css">
    <link rel="stylesheet" href="./assets/css/tin-tuc.css">
    <link rel="stylesheet" href="./assets/css/chi-tiet.css">
</head>

<body>
    <!-- Start Header-->
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-block">
                    <div class="company-address">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>Địa chỉ: Số 29 Đường số 4, Khu Phố 17, Phường Bình Hưng Hòa A, Quận Bình Tân, TP. Hồ Chí
                            Minh</span>
                    </div>
                    <div class="contact-block">
                        <ul class="contact-block-list">
                            <li class="contact-block-item">
                                <a href="#" class="contact-block-link">
                                    <img src="./assets/images/face-5727.png" alt="">
                                </a>
                            </li>
                            <li class="contact-block-item">
                                <a href="#" class="contact-block-link">
                                    <img src="./assets/images/gg-6227.png" alt="">
                                </a>
                            </li>
                            <li class="contact-block-item">
                                <a href="#" class="contact-block-link">
                                    <img src="./assets/images/tt-3790.png" alt="">
                                </a>
                            </li>
                            <li class="contact-block-item">
                                <a href="#" class="contact-block-link">
                                    <img src="./assets/images/rss-1322.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 company-logo">
                        <a href="#" class="company-logo-link">
                            <img src="./assets/images/logo-4752.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="company-info">
                            <div class="company-name">
                                <span>MÁI HIÊN DI ĐỘNG</span>
                                <span>HOÀNG DƯƠNG</span>
                            </div>
                            <div class="company-des">
                                <span>CHUYÊN:</span>
                                <span>Thi công và lắp đặt Mái Hiên, Mái Xếp, Mái Che, Bạt Kéo, Mái Vòm, ...
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="company-hotline">
                            <div class="company-hotline-img">
                                <img src="./assets/images/logo-phone.png" alt="">
                            </div>
                            <div class="company-hotline-text">
                                <p>HOTLINE:</p>
                                <p class="company-hotline-number">
                                    <span>0972378247</span>
                                    <span>(MR.Dương)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header" id="myHeader">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light header-navbar">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav header-navbar-list">
                                <li class="nav-item header-navbar-item active">
                                    <a href="#" class="header-navbar-link">Danh Mục Sản
                                        phẩm</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="index.php" class="header-navbar-link">Trang chủ</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="gioi-thieu.php" class="header-navbar-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="cong-trinh.php" class="header-navbar-link">Công trình</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="dich-vu.php" class="header-navbar-link">Dịch vụ</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="tin-tuc.php" class="header-navbar-link">Tin tức</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="video.php" class="header-navbar-link">Video</a>
                                </li>
                                <li class="nav-item header-navbar-item">
                                    <a href="lien-he.php" class="header-navbar-link">Liên hệ</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                        <li class="breadcrumb-item active"><a href="#"><span>Tin tức</span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-details">
        <div class="container">
            <div class="main-content-wrapper">
                <div class="main-content-left">
                    <div class="category-block">
                        <div class="category-content">
                            <h3>Danh mục sản phẩm</h3>
                            <div class="category-menu">
                                <ul>
                                <?php foreach($danhsachs as $danhsach){ ?>
                                <?php if($danhsach['hienthi']==1){ ?>
                                    <li>
                                        <a href=""><?= $danhsach['tenvi'] ?></a>
                                    </li>
                                    <?php } }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-block">
                        <div class="news-content">
                        <?php foreach($tintucs as $tintuc){ ?>
                            <?php if($tintuc['noibat'] == 1) {?>
                            <div class="new-item-wrapper">
                                <a href="" class="new-item-link">
                                    <img src="./Admin/thumb/<?= $tintuc['photo'] ?>"
                                        alt="hinh anh cong trinh"></a>
                                <div class="new-item-info">
                                    <h3><a href="" class="new-item-title">
                                            <?= $tintuc['tintuc_name'] ?>
                                        </a></h3>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
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
    <footer class="footer">
        <div class="scrollToTop" style="display: none;">
            <img src="assets/images/top.png" alt="Go Top">
        </div>
        <!-- CHUA CO ICON ZALO & HOTLINE -->
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sx-1">
                        <div class="fp-wrapper">
                            <div class="img-fanpage">
                                <img src="./assets/images/icon-facebook.png" alt="">
                                <p>Fanpage Mái Hiên Hoàng Dương</p>
                            </div>
                            <p class="fg-text">Like để cập nhật những thông tin hoạt động mới nhất</p>
                            <a href="#" class="fp-link"><span>THAM GIA NGAY</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sx-1">
                        <div class="fp-wrapper">
                            <div class="img-fanpage">
                                <img src="./assets/images/icon-youtube.png" alt="">
                                <p>Fanpage Mái Hiên Hoàng Dương</p>
                            </div>
                            <p class="fg-text">Like để cập nhật những thông tin hoạt động mới nhất</p>
                            <a href="#" class="fp-link"><span>THAM GIA NGAY</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sx-1">
                        <div class="fp-wrapper">
                            <div class="img-fanpage">
                                <img src="./assets/images/icon-zalo.png" alt="">
                                <p>Fanpage Mái Hiên Hoàng Dương</p>
                            </div>
                            <p class="fg-text">Like để cập nhật những thông tin hoạt động mới nhất</p>
                            <a href="#" class="fp-link"><span>THAM GIA NGAY</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="main-footer">
            <h2 class="main-footer-title">Mái Hiên Mái Xếp 247</h2>
            <p class="copy-right">Copyright © 2022 Mái Hiên Mái Xếp Hoàng Dương. All rights reserved. Design by
                SotaGroup Co.,Ltd</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>