<?php
require_once ('./Admin/Model/UserModel_index.php');
// include 'head.php';
$UserModel = new UserModel();
if(isset($_GET['ussd'])){
    $geteDanhSach1byId = $UserModel->geteDanhSach1byId($_GET['ussd']);
    $getAlleproduct_chitiet = $UserModel->getproductbyIdlist($_GET['ussd']);
}
else{
    header('Location: 404.php');
}
// echo($_GET['ussd']);die();

// var_dump(($getAlleproduct_chitiet));die();
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                        <li class="breadcrumb-item active"><a href="#"><span>Chi tiết danh mục</span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-details">
        <div class="container">
            <div class="row main-content-wrapper">
                   <?php include 'danhmuc.php' ?>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 main-content-right">
                    <div class="box-product-categories">
                        <h2><span class="title"><?= $geteDanhSach1byId[0]['tenvi'] ?></span></h2>
                        <div class="box-product-block">
                            <?php if( count($getAlleproduct_chitiet) != 0) {?>
                                <?php foreach ($getAlleproduct_chitiet as $danhsach_chitiet) { ?>
                                    <div class="box-product-item-wrapper">
                                        <a href="chi-tiet-san-pham.php?id=<?= md5($danhsach_chitiet['id'] . "maixep") ?>&mssid=<?= md5($danhsach_chitiet['id_list'] . "maixep") ?>" class="box-product-link">
                                            <img src="./Admin/thumb/<?= $danhsach_chitiet['photo'] ?>" alt="cong trinh"></a>
                                        <h3><?= $danhsach_chitiet['tenvi'] ?></h3>
                                        <a href="chi-tiet-san-pham.php?id=<?= md5($danhsach_chitiet['id'] . "maixep") ?>&mssid=<?= md5($danhsach_chitiet['id_list'] . "maixep") ?>">Chi tiết</a>
                                    </div>
                                <?php } ?>
                            <?php }?>
                            <?php if( count($getAlleproduct_chitiet) == 0 ){?>
                                <div class="alert alert-warning" role="alert">
                                    <strong><?= "Không Tìm Thấy Kết Quả" ?></strong>
                                </div>
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
    