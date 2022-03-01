<?php
require_once ('./Admin/Model/UserModel_index.php');
$UserModel = new UserModel();
$danhsachs = $UserModel->getAlleDanhSach1();
$congtrinhs = $UserModel->getAllcongtrinh();
$dichvus = $UserModel->getAlldichvu();
$videos = $UserModel->getAllVideo();
$tintucs = $UserModel->getAllTintuc();
$mangxhs = $UserModel->getAllMangXH();
$doitacs = $UserModel->getAllDoitac();
$footer = $UserModel->getfooterhbyId();
$logo = $UserModel->getlogobyId();
$gioithieu = $UserModel->getGioiThieuhbyId();
$getproductbyIdlists = $UserModel->getproductbyIdlist($danhsachs[0]['id']);
// var_dump($getproductbyIdlists);die();
$getAlleproduct = $UserModel->getAlleproduct();
$getAllSlide = $UserModel->getAllSlide();
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
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
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
                            <img src="./Admin/thumb/<?= $logo[0]['photo'] ?>" alt="">
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
            <nav class="header-navbar">
                <div class="container">
                    <ul class="header-navbar-list">
                        <li class="header-navbar-item active"><a href="#" class="header-navbar-link">Danh Mục Sản
                                phẩm</a></li>
                        <li class="header-navbar-item"><a href="index.php" class="header-navbar-link">Trang chủ</a>
                        </li>
                        <li class="header-navbar-item"><a href="gioi-thieu.php" class="header-navbar-link">Giới
                                thiệu</a></li>
                        <li class="header-navbar-item"><a href="cong-trinh.php" class="header-navbar-link">Công trình</a></li>
                        <li class="header-navbar-item"><a href="dich-vu.php" class="header-navbar-link">Dịch vụ</a></li>
                        <li class="header-navbar-item"><a href="tin-tuc.php" class="header-navbar-link">Tin tức</a></li>
                        <li class="header-navbar-item"><a href="video.php" class="header-navbar-link">Video</a></li>
                        <li class="header-navbar-item"><a href="lien-he.php" class="header-navbar-link">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 header-category-block">
                        <ul class="header-category">
                            <?php foreach($danhsachs as $danhsach){ ?>
                                <?php if($danhsach['hienthi']==1){ ?>
                            <li class="header-category-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                </svg>
                                <a href=""><?= $danhsach['tenvi'] ?></a>
                            </li>
                            <?php } ?>
                            <?php }?>
                        </ul>
                        <div class="header-form-search">
                            <input type="text" class="form-search-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-9 header-carousel-block">
                        <div class="header-carousel">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <?php foreach($getAllSlide as $key=>$slide){ ?>
                                    <div class="carousel-item<?= $key == 0 ? ' active' : '' ?>">
                                        <img src="/Admin/thumb/<?= $slide['photo'] ?>" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="/Admin/thumb/<?= $slide['photo'] ?>" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <?php }?>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <i class="fas fa-chevron-left icon-prev"></i>
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <i class="fas fa-chevron-right icon-next"></i>
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <div class="main-content">
        <div class="top-main-content">
            <div class="intro-block">
                <div class="container">
                    <h2><a href="#" class="title">GIỚI THIỆU</a></h2>
                    <div class="intro-des">
                        <?= $gioithieu[0]['mota'] ?>
                    </div>
                    <div class="btn-load-more">
                        <a href="gioi-thieu.php" class="load-more-link">
                            <span>Xem Thêm</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box-product-categories">
                <?php foreach($danhsachs as $danhsach){ ?>
                    <?php if($danhsach['noibat']==1){ ?>
                <div class="container">
                    <input type="hidden" name="id_loai" value="<?= $danhsach['id'] ?>">
                    <h2><span class="title"><?= $danhsach['tenvi'] ?></span></h2>
                    <div class="box-product-block">
                    <?php foreach($getAlleproduct as $proudct){ ?>
                    <?php if($proudct['id_list'] == $danhsach['id']) {?>
                        <?php if($proudct['noibat'] == 1){ ?>
                        <div class="box-product-item-wrapper">
                            <a href="" class="box-product-link">
                                <img src="./Admin/thumb/<?= $proudct['photo'] ?>"
                                    alt="cong trinh"></a>
                            <h3><?=  $proudct['tenvi'] ?></h3>
                            <a href="">Chi tiết</a>
                        </div>
                        <?php }?>
                        <?php }?>
                    <?php }?>
                    </div>
                </div>
                <?php }?>
                <?php }?>
            </div>
            <div class="box-projects">
                <div class="container">
                    <h2><a href="#" class="title">DỰ ÁN CÔNG TRÌNH</a></h2>
                    <div class="project-block">
                        <?php foreach($congtrinhs as $congtrinh){ ?>
                        <?php if($congtrinh['noibat'] == 1){ ?>
                        <div class="project-item-wrapper">
                            <div>
                                <div>
                                    <a href="" class="project-item-link">
                                        <img src="./Admin/thumb/<?= $congtrinh['congtrinh_photo'] ?>"
                                            alt="hinh anh cong trinh"></a>
                                </div>
                            </div>
                            <div class="project-item-info">
                                <h3><a href="" class="project-item-title">
                                        <?= $congtrinh['congtrinh_name'] ?>
                                    </a></h3>
                                <p><?= htmlspecialchars_decode($congtrinh['congtrinh_noidung']) ?></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="box-fields">
                <div class="container">
                    <div class="box-fields-wrapper">
                        <?php foreach($dichvus as $dichvu){ ?>
                        <?php if($dichvu['noibat'] == 1){ ?>
                        <div class="box-field-item">
                            <a href="" class="box-field-link">
                                <img src="./Admin/thumb/<?= $dichvu['photo'] ?>"
                                    alt="hinh anh cong trinh"></a>
                            <div class="box-field-info">
                                <h3><a href="" class="box-field-title">
                                        <?= $dichvu['dichvu_name'] ?>
                                    </a></h3>
                                <p><?= htmlspecialchars_decode($dichvu['dichvu_noidung']) ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="box-products">
                <div class="container">
                    <h2><span class="title">VIDEO CLIP</span></h2>
                    <div class="box-product-block">
                        <?php foreach($videos as $video){ ?>
                            <?php if($video['noibat'] == 1){ ?>
                            <div class="card">
                                <iframe width="360" height="215" src="https://www.youtube.com/embed/<?= $video['video_noidung'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="card-text"><?= $video['video_name'] ?></p>
                            </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="box-news">
                <div class="container box-news-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="news-block">
                                <h2><a href="#" class="title">TIN TỨC & SỰ KIỆN</a></h2>
                                <?php foreach($tintucs as $tintuc){ ?>
                                    <?php if($tintuc['noibat'] == 1) {?>
                                <div class="new-item">
                                    <div class="new-item-wrapper">
                                        <a href="chi-tiet.php?id=<?= $tintuc['tintuc_id'] ?>" class="new-item-link">
                                            <img src="./Admin/thumb/<?= $tintuc['photo'] ?>"
                                                alt="hinh anh cong trinh"></a>
                                        <div class="new-item-info">
                                            <h3><a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep")  ?>" class="new-item-title">
                                                   <?= $tintuc['tintuc_name'] ?>
                                                </a></h3>
                                            <p><?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-6 customers-block-col">
                            <div class="customers-block">
                                <h2><a href="#" class="title">KHÁCH HÀNG</a></h2>
                                <div class="customer-item">
                                    <div class="customer-item-block">
                                        <div class="slider">
                                            <div class="slider-item">
                                                <div class="your-class">
                                                    <?php foreach($doitacs as $doitac ){ ?>
                                                        <?php if($doitac['hienthi'] == 1){ ?>
                                                    <div>
                                                        <img src="./Admin/thumb/<?= $doitac['photo'] ?>"
                                                            alt="">
                                                        <div class="info-customer">
                                                            <p class="cus-name">
                                                                <?= $doitac['doitac_name'] ?>
                                                            </p>
                                                            <span class="cus-des"><?= htmlspecialchars_decode($doitac['noidung'] )?></span>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
        <div class="sticky-icon-block">
            <div class="sticky-icon-wrapper">
                <a href="" class="sticky-icon-link">
                    <p>
                        <img src="./assets/images/zl.png" alt="">
                    </p>
                </a>
            </div>
            <div class="sticky-icon-wrapper">
                <a href="" class="sticky-icon-link">
                    <p>
                        <img src="./assets/images/hl.png" alt="">
                    </p>
                </a>
            </div>
        </div>
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <?php foreach($mangxhs as $mangxh){ ?>
                    <div class="col-md-4 col-sx-1">
                        <div class="fp-wrapper">
                            <div class="img-fanpage">
                                <img src="./Admin/thumb/<?= $mangxh['photo'] ?>" alt="">
                                <p><?= $mangxh['name'] ?></p>
                            </div>
                            <p class="fg-text">Like để cập nhật những thông tin hoạt động mới nhất</p>
                            <a href="<?= $mangxh['link'] ?>" class="fp-link"><span>THAM GIA NGAY</span></a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <h2 class="main-footer-title"><?= $footer[0]['tieude'] ?></h2>
            <p class="copy-right">Copyright © 2022 Mái Hiên Mái Xếp Hoàng Dương. All rights reserved. Design by
                SotaGroup Co.,Ltd</p>
        </div>
        <div class="bottom-footer">
            <div class="box-maps ">
                <div class="wrap-content map-all">

                    <div class="box-branch">
                        <div class="map-item">
                            <div class="map-i">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6308789197965!2d106.63423761428754!3d10.839534160990924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752983c838188b%3A0xc37768d77e75a0e9!2zMTYvOUEgUGhhbiBIdXkgw41jaCwgUGjGsOG7nW5nIDE0LCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1645715983160!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                                <div class="inf_">
                                    <div>
                                        <h3>Văn Phòng</h3>
                                        <div class="desc">Địa chỉ: 545 Ql20 Thị Trân Liên Nghĩa, Đức Trọng, Lâm
                                            Dồng<br>
                                            <br>
                                            Điện Thoại: 0974 242 442<br>
                                            <br>
                                            Email: anhtuanglas7@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
