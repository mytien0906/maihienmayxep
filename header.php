<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$logo = $UserModel->getlogobyId();
?>
<header class="header">
        <div class="top-header">
            <div class="container">
                <div class="row top-header-block">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 company-address">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>Địa chỉ: Số 29 Đường số 4, Khu Phố 17, Phường Bình Hưng Hòa A, Quận Bình Tân, TP. Hồ Chí
                            Minh</span>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 contact-block">
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
                    <div class="col-xl-2 col-lg-2 company-logo">
                        <a href="#" class="company-logo-link">
                            <img src="./Admin//thumb/<?= $logo[0]['photo'] ?>" alt="">
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-12">
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
                    <div class="col-xl-2 col-lg-2">
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
                <nav class="navbar navbar-expand-lg navbar-light">
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
        
    </header>