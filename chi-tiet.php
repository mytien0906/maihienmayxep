<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
if(isset($_GET['id_tintuc'])){
    $getTintucbyId = $UserModel->getTintucbyId($_GET['id_tintuc']);
}
else{
    header('Location: 404.php');
}
if(isset($_GET['essifd'])){
    $getcongtrinhbyId = $UserModel->getcongtrinhbyId($_GET['essifd']);
}
else{
    header('Location: 404.php');
}
if(isset($_GET['tsst'])){
    $getdichvubyId = $UserModel->getdichvubyId($_GET['tsst']);
}
else{
    header('Location: 404.php');
}
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><span>Trang chủ</span></a></li>
                        <li class="breadcrumb-item active"><a href="#"><span>Chi tiết</span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="row main-content-details">
        <div class="container">
            <div class="row main-content-wrapper">
                   <?php include 'danhmuc.php' ?>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 main-content-right">
                    <div class="title">
                        <h2>
                            <p class="title">
                                <?php if(!empty($getTintucbyId[0]['tintuc_name'])) echo $getTintucbyId[0]['tintuc_name'] ?>
                                <?php if(!empty($getcongtrinhbyId[0]['congtrinh_name'])) echo $getcongtrinhbyId[0]['congtrinh_name'] ?> 
                                <?php if(!empty($getdichvubyId[0]['dichvu_name'])) echo $getdichvubyId[0]['dichvu_name'] ?>
                            </p>
                        </h2>
                    </div>
                    <div class="detail-block">
                        <div class="detail-item-wrapper">
                            <?php if(!empty($getTintucbyId[0]['tintuc_noidung'])) echo htmlspecialchars_decode($getTintucbyId[0]['tintuc_noidung']) ?>
                            <?php if(!empty($getcongtrinhbyId[0]['congtrinh_noidung'])) echo htmlspecialchars_decode($getcongtrinhbyId[0]['congtrinh_noidung']) ?>
                            <?php if(!empty($getcongtrinhbyId[0]['congtrinh_photo'])) {?> <br><img src="./Admin/thumb/<?= $getcongtrinhbyId[0]['congtrinh_photo'] ?>" alt=""> <?php } ?>
                            <?php if(!empty($getdichvubyId[0]['dichvu_noidung'])) echo htmlspecialchars_decode($getdichvubyId[0]['dichvu_noidung']) ?>
                            <?php if(!empty($getdichvubyId[0]['photo'])) {?> <br><img src="./Admin/thumb/<?= $getdichvubyId[0]['photo'] ?>" alt=""> <?php } ?>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    