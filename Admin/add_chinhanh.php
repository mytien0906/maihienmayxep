<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if(!empty($_GET['chinhanh_id'])){
  $getchinhanh = $UserModel->getChinhanhbyId($_GET['chinhanh_id']);
}
$error = "";
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  $chinhanh_name = $_POST['chinhanh_name'];
$chinhanh_noidung = $_POST['chinhanh_noidung'];
// echo $_POST['chinhanh_name'];die();
  if(!empty($_POST['chinhanh_name']) && !empty($_POST['chinhanh_noidung']) ) {
        if(isset($_GET['chinhanh_id'])) {
            // echo(1);die();
            
            $UserModel->updateChinhanh($_GET['chinhanh_id'],$chinhanh_name, $chinhanh_noidung);
            header('Location: chi-nhanh.php');
        }
        else{
          // echo(1);die();
            $UserModel->insertChinhanh($chinhanh_name, $chinhanh_noidung);
            header('Location: chi-nhanh.php');
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
              <label for="exampleInputName1">Chi Nhanh</label>
              <input
                name="chinhanh_name"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($getchinhanh[0]['chinhanh_name'])) echo $getchinhanh[0]['chinhanh_name']?>"
              />
            </div>
            <div class="form-group form-hinhanh">
              <label for="exampleTextarea1">Mô tả Chi Nhanh</label>
              <textarea
                name="chinhanh_noidung"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($getchinhanh[0]['chinhanh_noidung'])) echo $getchinhanh[0]['chinhanh_noidung']?></textarea>
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
  CKEDITOR.replace( 'chinhanh_noidung' );
</script>