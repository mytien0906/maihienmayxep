<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
$dichvus = $UserModel->getAlldichvu();
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
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 main-content-right">
                <div class="title">
                    <h2>
                        <p class="title">DỊCH VỤ</p>
                    </h2>
                </div>
                <?php foreach ($dichvus as $dichvu) { ?>
                    <?php if ($dichvu['hienthi'] == 1) { ?>
                        <div class="project-block">
                            <div class="project-item-wrapper">
                                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3">
                                    <div>
                                        <a href="chi-tiet.php?tsst=<?= md5($dichvu['dichvu_id'] . "maixep") ?>" class="project-item-link">
                                            <img src="./Admin/thumb/<?= $dichvu['photo'] ?>" alt="hinh anh cong trinh"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-9 project-item-info">
                                    <a href="chi-tiet.php?tsst=<?= md5($dichvu['dichvu_id'] . "maixep") ?>" class="project-item-title">
                                            <?= $dichvu['dichvu_name'] ?>
                                        </a>
                                        <div class="congtrinh_noidung">

                                            <p><?= htmlspecialchars_decode($dichvu['dichvu_noidung']) ?></p>
                                        </div>
                                    <a href="chi-tiet.php?tsst=<?= md5($dichvu['dichvu_id'] . "maixep") ?>" class="btn-load-more">Xem Thêm</a>
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

    var str = $('.congtrinh_noidung').text();
    var result = trimText(str, 200);
    $('.congtrinh_noidung').text(result);
</script>