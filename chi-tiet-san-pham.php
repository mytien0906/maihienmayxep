<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$GetAllThietLapThongTin = $UserModel->GetAllThietLapThongTin();
$getproductbyId = $UserModel->getproductbyId($_GET['id']);
$selectSpTheoListId = $UserModel->selectSpTheoListId($_GET['mssid']);
?>
    <!-- End Header -->
    <?php include 'header.php' ?>
    <!-- Main Content -->
    <div class="main-content-detail-products">
        <div class="container">
            <div class="row main-content-wrapper">
                <?php include 'danhmuc.php' ?>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12  main-content-right">
                    <div class="new-block">
                        <div class="new-item-wrapper">
                            <?php foreach($getproductbyId as $chitiet){ ?>
                            <a href="" class="new-item-link none-border-radius">
                                <img src="./Admin/thumb/<?= $chitiet['photo'] ?>"
                                    alt="hinh anh cong trinh"></a>
                            <div class="new-item-info">
                                <h3><a href="" class="new-item-title none-border-radius">
                                       <?= $chitiet['tenvi'] ?>
                                    </a></h3>
                                <p><b>Luợt xem:</b> <span>20</span></p>
                                <div>
                                    <p><b>Giá</b></p>
                                    <a href="tel:<?= $GetAllThietLapThongTin[0]['dienthoai'] ?>" class="price-product">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                        <?= $GetAllThietLapThongTin[0]['dienthoai'] ?></a>
                                </div>
                                </p>
                                <div class="noidung_chitiet"><?= htmlspecialchars_decode($chitiet['noidungvi']) ?></div>
                            </div>
                            <?php } ?>
                        </div>


                    </div>
                    <div class="product-info-comment">
                        <button class="btn-show-info">Thông tin sản phẩm</button>
                        <div class="show-info">
                            <?= htmlspecialchars_decode($chitiet['noidungvi']) ?>
                        </div>
                    </div>
                    <div class="box-product-categories">
                        <div class="container">
                            <h2><span class="title">SẢN PHẨM CÙNG LOẠI</span></h2>
                            <div class="row">
                                <?php foreach($selectSpTheoListId as $select){ ?>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="box-product-item-wrapper">
                                        <a href="chi-tiet-san-pham.php?id=<?= md5($select['id'] . "maixep") ?>&mssid=<?= md5($select['id_list'] . "maixep") ?>" class="box-product-link">
                                            <img src="./Admin/thumb/<?= $select['photo'] ?>"
                                                alt="cong trinh"></a>
                                        <h3><?= $select['tenvi'] ?></h3>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>


                        </div>
                    </div>
                    <!-- <nav class="pagination-product">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
    <script>
function trimText(str ,wordCount){
    var strArray = str.split(' ');
    var subArray = strArray.slice(0, wordCount);
    var result = subArray.join(" ");
    return result + '...';
}

var str = $('.new-item-info .noidung_chitiet').text();
var result = trimText(str, 50);
$('.new-item-info .noidung_chitiet').text(result);
</script>