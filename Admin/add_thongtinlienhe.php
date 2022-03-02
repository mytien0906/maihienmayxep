<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

$error = "";
if(!empty($_GET['id'])){
  $getthongtinlienhe = $UserModel->getAllThongTinLienHeById($_GET['id']);
}
if(isset($_POST['dowload'])){

}
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['sđt'])&& !empty($_POST['diachi'])&& !empty($_POST['email'])&& !empty($_POST['chude'])&& !empty($_POST['noidung'])) {
    $foderPath = 'file/' . time() . $_FILES['fileupload']['name'];
    $target_file = $_FILES["fileupload"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if($_FILES['fileupload']['tmp_name'] == ''){
          $name = $_POST['name'];
          $dienthoai = $_POST['sđt'];
          $diachi = $_POST['diachi'];
          $email = $_POST['email'];
          $tieude = $_POST['chude'];
          $noidung = $_POST['noidung'];
          $file = $getthongtinlienhe[0]['file'];
          $UserModel->UpdateThongTinLienHe($_GET['id'],$name, $dienthoai,$diachi,$email,$tieude,$noidung,$file);
          header('Location: thong-tin-lien-he.php');
          $error = "Cập nhật thành công";
        }
        else{
          if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
            $name = $_POST['name'];
            $dienthoai = $_POST['sđt'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $tieude = $_POST['chude'];
            $noidung = $_POST['noidung'];
            $file = time().$_FILES['fileupload']['name'];
            
            $UserModel->UpdateThongTinLienHe($_GET['id'],$name, $dienthoai,$diachi,$email,$tieude,$noidung,$file);
            header('Location: thong-tin-lien-he.php');
            $error = "Cập nhật thành công";
            }
          else{
            $error = "uploaded failed";
          } 
        }
  } 
  else{
    $error = "Không được bỏ trống trường dữ liệu";
  }
}

 ?>
<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <?php include "/header.php" ?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <?php include "/menu.php" ?>
    <!-- partial -->
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic form elements</h4>
          <p class="card-description">Basic form elements</p>
          <?php 
                if($error != "") {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
              <?php } ?>
          <form method="post" enctype="multipart/form-data" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Tên</label>
              <input
                name="name"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($getthongtinlienhe[0]['name'])) echo $getthongtinlienhe[0]['name']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Số Điện Thoại</label>
              <input
                name="sđt"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Số Điện Thoại" 
                value="<?php if(!empty($getthongtinlienhe[0]['sđt'])) echo $getthongtinlienhe[0]['sđt']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Địa Chỉ</label>
              <input
                name="diachi"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Địa Chỉ" 
                value="<?php if(!empty($getthongtinlienhe[0]['address'])) echo $getthongtinlienhe[0]['address']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Email</label>
              <input
                name="email"
                type="email"
                class="form-control"
                id="exampleInputName1"
                placeholder="Email" 
                value="<?php if(!empty($getthongtinlienhe[0]['email'])) echo $getthongtinlienhe[0]['email']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Chủ Đề</label>
              <textarea
                name="chude"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($getthongtinlienhe[0]['chude'])) echo $getthongtinlienhe[0]['chude']?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="noidung"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($getthongtinlienhe[0]['noidung'])) echo $getthongtinlienhe[0]['noidung']?></textarea>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
              <?php if(!empty($getthongtinlienhe[0]['file'])){ ?>
              <input  name="file" class="file_name" value="<?= $getthongtinlienhe[0]['file'] ?>">
              <a class="dowload_file" href="dowload.php?id=<?= md5($getthongtinlienhe[0]['id'] . "maixep") ?>">Dowload File</a>
              <?php } ?>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light" name="reset">Cancel</button>
          </form>
        </div>
      </div>
    </div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<script>
  CKEDITOR.replace( 'chude' );
  CKEDITOR.replace( 'noidung' );

</script>