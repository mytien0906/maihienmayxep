<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
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
<!-- Start Header-->
<?php include 'header.php';
include 'slide-index.php' ?>
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
            <?php foreach ($danhsachs as $danhsach) { ?>
                <?php if ($danhsach['noibat'] == 1) { ?>
                    <div class="container">
                        <input type="hidden" name="id_loai" value="<?= $danhsach['id'] ?>">
                        <h2><span class="title"><?= $danhsach['tenvi'] ?></span></h2>
                        <div class="row box-product-block">
                            <?php foreach ($getAlleproduct as $proudct) { ?>
                                <?php if ($proudct['id_list'] == $danhsach['id']) { ?>
                                    <?php if ($proudct['noibat'] == 1) { ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6 box-product-item-wrapper">
                                            <a href="" class="box-product-link">
                                                <img src="./Admin/thumb/<?= $proudct['photo'] ?>" alt="cong trinh"></a>
                                            <h3><?= $proudct['tenvi'] ?></h3>
                                            <a href="">Chi tiết</a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="box-projects">
            <div class="container">
                <h2><a href="#" class="title">DỰ ÁN CÔNG TRÌNH</a></h2>
                <div class="row project-block">
                    <?php foreach ($congtrinhs as $congtrinh) { ?>
                        <?php if ($congtrinh['noibat'] == 1) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 project-item-wrapper">
                                <div>
                                    <div>
                                        <a href="" class="project-item-link">
                                            <img src="./Admin/thumb/<?= $congtrinh['congtrinh_photo'] ?>" alt="hinh anh cong trinh"></a>
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
                <div class="row box-fields-wrapper">
                    <?php foreach ($dichvus as $dichvu) { ?>
                        <?php if ($dichvu['noibat'] == 1) { ?>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 box-field-item">
                                <a href="" class="box-field-link">
                                    <img src="./Admin/thumb/<?= $dichvu['photo'] ?>" alt="hinh anh cong trinh"></a>
                                <div class="box-field-info">
                                    <a href="" class="box-field-title">
                                            <?= $dichvu['dichvu_name'] ?>
                                        </a>
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
                <div class="row box-product-block">
                    <?php foreach ($videos as $video) { ?>
                        <?php if ($video['noibat'] == 1) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 card">
                                <iframe width="360" height="215" src="https://www.youtube.com/embed/
<?= $video['video_noidung'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-sx-12">
                        <div class="news-block">
                            <h2><a href="#" class="title">TIN TỨC & SỰ KIỆN</a></h2>
                            <?php foreach ($tintucs as $tintuc) { ?>
                                <?php if ($tintuc['noibat'] == 1) { ?>
                                    <div class="new-item">
                                        <div class="new-item-wrapper">
                                            <a href="chi-tiet.php?id=<?= $tintuc['tintuc_id'] ?>" class="new-item-link">
                                                <img src="./Admin/thumb/<?= $tintuc['photo'] ?>" alt="hinh anh cong trinh"></a>
                                            <div class="new-item-info">
                                                <h3><a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep")  ?>" class="new-item-title">
                                                        <?= $tintuc['tintuc_name'] ?>
                                                    </a></h3>
                                                <p><?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-sx-12 customers-block-col">
                        <div class="customers-block">
                            <h2><a href="#" class="title">KHÁCH HÀNG</a></h2>
                            <div class="customer-item">
                                <div class="customer-item-block">
                                    <div class="slider">
                                        <div class="slider-item">
                                            <div class="your-class">
                                                <?php foreach ($doitacs as $doitac) { ?>
                                                    <?php if ($doitac['hienthi'] == 1) { ?>
                                                        <div>
                                                            <img src="./Admin/thumb/<?= $doitac['photo'] ?>" alt="">
                                                            <div class="info-customer">
                                                                <p class="cus-name">
                                                                    <?= $doitac['doitac_name'] ?>
                                                                </p>
                                                                <span class="cus-des"><?= htmlspecialchars_decode($doitac['noidung']) ?></span>
                                                            </div>
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
                </div>


            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
<!-- Start Footer -->
<?php include 'footer.php';
include 'map-index.php' ?>
<script>
    function trimText(str, wordCount) {
        var strArray = str.split(' ');
        var subArray = strArray.slice(0, wordCount);
        var result = subArray.join(" ");
        return result + '...';
    }

    var str = $('.tintuc .tintuc_noidung').text();
    var result = trimText(str, 200);
    $('.tintuc .tintuc_noidung').text(result);
</script>