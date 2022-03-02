<?php
require_once('./Admin/Model/UserModel_index.php');
include '/head.php';
$UserModel = new UserModel();
$lienhe = $UserModel->getlienhehbyId();
$error = "";
if (isset($_POST['reset'])) {
    echo '<script type="text/javascript"> 
    form.reset() 
    </script>';
}
if (isset($_POST['submit-contact'])) {
    // echo(1);die();
    if (isset($_POST['ten']) && isset($_POST['dienthoai']) && isset($_POST['diachi']) && isset($_POST['email']) && isset($_POST['tieude']) && isset($_POST['noidung'])) {
        $foderPath = './Admin/file/' . time() . $_FILES['fileupload']['name'];
        $target_file = $_FILES["fileupload"]["name"];
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)) {
            $name = $_POST['ten'];
            $dienthoai = $_POST['dienthoai'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $tieude = $_POST['tieude'];
            $noidung = $_POST['noidung'];
            $file = time() . $_FILES['fileupload']['name'];

            $UserModel->insertThongtinlienhe($name, $dienthoai, $diachi, $email, $tieude, $noidung, $file);
            header('Location: lien-he.php');
        } else {
            $error = "Lỗi File";
        }
    } else {
        $error = "Nhập Đủ Thông Tin";
    }
}
?>
<!-- Start Header-->
<?php include 'header.php' ?>
<!-- End Header -->
<!-- Main Content -->
<div class="main-content-contacts">
    <div class="container">
        <div class="main-content-wrapper">
            <h2><span class="title">LIÊN HỆ</span></h2>
            <div id="main-content" class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 lienhe">
                    <?= $lienhe[0]['noidung'] ?>
                </div>
                <form class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 form-contact validation-contact" novalidate="" method="post" action="" enctype="multipart/form-data">
                    <?php
                    if ($error != "") {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="input-contact col-sm-6">
                            <input type="text" class="form-control" id="ten" name="ten" placeholder="Họ tên" required="">
                            <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                        </div>
                        <div class="input-contact col-sm-6">
                            <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại" required="">
                            <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-contact col-sm-6">
                            <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" required="">
                            <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                        </div>
                        <div class="input-contact col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                            <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                        </div>
                    </div>
                    <div class="input-contact">
                        <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Chủ đề" required="">
                        <div class="invalid-feedback">Vui lòng nhập chủ đề</div>
                    </div>
                    <div class="input-contact">
                        <textarea class="form-control" id="noidung" name="noidung" placeholder="Nội dung" required=""></textarea>
                        <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                    </div>
                    <div class="input-contact">
                        <input type="file" class="custom-file-input" name="fileupload" id="fileupload">
                        <label class="custom-file-label" for="file" title="Chọn">Đính kèm file</label>
                    </div>
                    <!-- <div class="form-group form-hinhanh input-contact">
                                Chọn file để upload:
                                <input type="file" name="fileupload" id="fileupload"/>
                            </div> -->
                    <input type="submit" class="btn btn-primary" name="submit-contact" value="Gửi">
                    <input type="reset" class="btn btn-secondary" name="reset" value="Nhập lại">
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