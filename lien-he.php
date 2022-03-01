<?php
require_once ('./Admin/Model/UserModel_index.php');
include '/head.php';
$UserModel = new UserModel();
$lienhe = $UserModel->getlienhehbyId();
?>
    <!-- Start Header-->
    <?php include 'header.php' ?>
    <!-- End Header -->
    <!-- Main Content -->
    <div class="main-content-contacts">
        <div class="container">
            <div class="main-content-wrapper">
                    <h2><span class="title">LIÊN HỆ</span></h2>
                    <div id="main-content">
                        <div class="lienhe">
                            <?= $lienhe[0]['noidung'] ?>
                        </div>
                        <form class="form-contact validation-contact" novalidate="" method="post" action=""
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-contact col-sm-6">
                                    <input type="text" class="form-control" id="ten" name="ten" placeholder="Họ tên"
                                        required="">
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="input-contact col-sm-6">
                                    <input type="number" class="form-control" id="dienthoai" name="dienthoai"
                                        placeholder="Số điện thoại" required="">
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-contact col-sm-6">
                                    <input type="text" class="form-control" id="diachi" name="diachi"
                                        placeholder="Địa chỉ" required="">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                                </div>
                                <div class="input-contact col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        required="">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                                </div>
                            </div>
                            <div class="input-contact">
                                <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Chủ đề"
                                    required="">
                                <div class="invalid-feedback">Vui lòng nhập chủ đề</div>
                            </div>
                            <div class="input-contact">
                                <textarea class="form-control" id="noidung" name="noidung" placeholder="Nội dung"
                                    required=""></textarea>
                                <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                            </div>
                            <div class="input-contact">
                                <input type="file" class="custom-file-input" name="file">
                                <label class="custom-file-label" for="file" title="Chọn">Đính kèm file</label>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit-contact" value="Gửi">
                            <input type="reset" class="btn btn-secondary" value="Nhập lại">
                            <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <?php include 'map.php' ?>
   <?php include 'footer.php' ?>