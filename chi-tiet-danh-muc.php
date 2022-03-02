<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
if(isset($_GET['ussd'])){
    $geteDanhSach1byId = $UserModel->geteDanhSach1byId($_GET['ussd']);
}
// echo($_GET['ussd']);die();
$getAlleproduct_chitiet = $UserModel->getproductbyIdlist($_GET['ussd']);
// var_dump(($getAlleproduct_chitiet[0]['tenvi']));die();
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-details">
        <div class="container">
            <div class="main-content-wrapper">
                <div class="main-content-left">
                   <?php include 'danhmuc.php' ?>
                </div>
                <div class="main-content-right">
                    <div class="box-product-categories">
                        <input type="hidden" name="id_loai" value="<?= $danhsach['id'] ?>">
                        <h2><span class="title"><?= $geteDanhSach1byId[0]['tenvi'] ?></span></h2>
                        <div class="box-product-block">
                            <?php foreach ($getAlleproduct_chitiet as $danhsach) { ?>
                                <?php if ($danhsach['hienthi'] == 1) { ?>
                                    <div class="box-product-item-wrapper">
                                        <a href="chi-tiet-san-pham.php?id=<?= md5($danhsach['id'] . "maixep") ?>&mssid=<?= md5($danhsach['id_list'] . "maixep") ?>" class="box-product-link">
                                            <img src="./Admin/thumb/<?= $danhsach['photo'] ?>" alt="cong trinh"></a>
                                        <h3><?= $danhsach['tenvi'] ?></h3>
                                        <a href="chi-tiet-san-pham.php?id=<?= md5($danhsach['id'] . "maixep") ?>&mssid=<?= md5($danhsach['id_list'] . "maixep") ?>">Chi tiết</a>
                                    </div>
                                <?php } ?>
                            <?php } ?>
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
    