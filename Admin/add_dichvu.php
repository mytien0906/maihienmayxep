<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if(!empty($_GET['dichvu_id'])){
  $getdichvu = $UserModel->getdichvubyId($_GET['dichvu_id']);
}
$error = "";
// echo $_GET['ds_id'];die();
if(isset($_POST['submit'])){
  if(!empty($_POST['dichvu_name']) && !empty($_POST['dichvu_noidung']) && !empty($_FILES['fileupload'])) {
    $foderPath = 'thumb/' . time() . $_FILES['fileupload']['name'];
    $target_file = $_FILES["fileupload"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif','');
    if (!in_array($imageFileType,$allowtypes ))
    {
      $error = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    }
    else{
      if($_FILES['fileupload']['tmp_name'] == ''){
        // echo($getdanhsach1[0]['photo']);die();
        $dichvu_name = $_POST['dichvu_name'];
        $dichvu_noidung = $_POST['dichvu_noidung'];
        $photo =  $getdichvu[0]['photo'];
        $UserModel->updaytedichvu($_GET['dichvu_id'],$dichvu_name, $dichvu_noidung, $photo);
        header('Location: dich-vu.php');
      }
      else{
        if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
          $dichvu_name = $_POST['dichvu_name'];
          $dichvu_noidung = $_POST['dichvu_noidung'];
          $photo = time().$_FILES['fileupload']['name'];
          
          if(isset($_GET['congtrinh_id'])) {
              // echo(1);die();
              $UserModel->updaytedichvu($_GET['dichvu_id'],$dichvu_name, $dichvu_noidung, $photo);
              header('Location: dich-vu.php');
          }
          else{
            // echo(1);die();
              $UserModel->insertdichvu($dichvu_name, $dichvu_noidung, $photo);
              header('Location: dich-vu.php');
          }
          }
        else{
          $error = "uploaded failed";
        } 
      }
      
    } 
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
                name="dichvu_name"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($getdichvu[0]['dichvu_name'])) echo $getdichvu[0]['dichvu_name']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="dichvu_noidung"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($getdichvu[0]['dichvu_noidung'])) echo $getdichvu[0]['dichvu_noidung']?></textarea>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
              <?php if(!empty($getdichvu[0]['photo'])) { ?>
              <img src="./thumb/<?php echo $getdichvu[0]['photo']?>" alt="">
              <?php } ?>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<script>
  CKEDITOR.replace( 'dichvu_noidung' );
</script>