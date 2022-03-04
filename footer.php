<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$GetAllThietLapThongTin = $UserModel->GetAllThietLapThongTin();
?>
<footer class="footer-contacts">

    <div class="scrollToTop" style="display: none;">
        <img src="assets/images/top.png" alt="Go Top">
    </div>

    <a href="https://zalo.me/<?= $GetAllThietLapThongTin[0]['dienthoai'] ?>" class="btn-effect btn-contact-block">
        <div class="child-nth-1 animate__animated animate__zoomIn"></div>
        <div class="child-nth-2 animate__animated animate__pulse"></div>
        <p class="btn-img">
            <img src="./assets/images/zl.png" alt="">
        </p>
    </a>
    <!-- Optional JavaScript -->
    <a href="tel:<?= $GetAllThietLapThongTin[0]['dienthoai'] ?>" class="btn-effect btn-contact-block">
        <div class="child-nth-1 animate__animated animate__zoomIn"></div>
        <div class="child-nth-2 animate__animated animate__pulse"></div>
        <p class="btn-img">
            <img src="./assets/images/hl.png" alt="">
        </p>
    </a>
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