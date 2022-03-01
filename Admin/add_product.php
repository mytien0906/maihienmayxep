<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
$error = "";
$getdanhsasch1 = $UserModel->getAlleDanhSach1();
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  if(isset($_POST['tenvi']) && isset($_POST['motavi']) && !empty($_FILES['fileupload'])) {
    // echo(1);die();
    $foderPath = 'thumb/' . time() . $_FILES['fileupload']['name'];
    $target_file = $_FILES["fileupload"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','');
    // echo $getdanhsasch1[0]['photo'];die();
    if (!in_array($imageFileType,$allowtypes ))
    {
      $error = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    }
    else{
      if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
        $tenvi = $_POST['tenvi'];
        $motavi = $_POST['motavi'];
        $photo = time().$_FILES['fileupload']['name'];
        $ds_id = $_POST['manufacture'];
          // echo $getdanhsasch1[0]['photo'];die();
            $a = $UserModel->insertproduct($tenvi, $motavi, $photo, $ds_id);
            // var_dump( $UserModel->insertproduct($tenvi, $motavi, $photo, $ds_id)); die();
            header('Location: san-pham.php');
        }
      else{
        $error = "Insert failed";
      } 
    } 
  }
}

 ?>
<div class="container-scroller">
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
          <form action="add_product.php" method="post" enctype="multipart/form-data" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Tên</label>
              <input
                name="tenvi"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="motavi"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ></textarea>
            </div>
            <div class="from-group">
              <select name="manufacture" id="select" class="form-control">
                <option value="0">Xin chọn loại</option>
                <?php if (isset($getdanhsasch1)) {
                    foreach ($getdanhsasch1 as $getds) { ?>
                <option value="<?= $getds['id'] ?>"><?= $getds['tenvi'] ?></option>
                <?php }
                } ?>
              </select>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
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
  CKEDITOR.replace( 'motavi' );
</script>