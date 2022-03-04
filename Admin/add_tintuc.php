<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if(!empty($_GET['tintuc_id'])){
  $gettintuc = $UserModel->getTintucbyId($_GET['tintuc_id']);
}
$error = "";
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  if(!empty($_POST['tintuc_name']) && !empty($_POST['tintuc_noidung']) && !empty($_FILES['fileupload'])) {
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
        $tintuc_name = $_POST['tintuc_name'];
        $tintuc_noidung = $_POST['tintuc_noidung'];
        $photo = $gettintuc[0]['photo'];
        if(isset($_GET['tintuc_id'])) {
          // echo(1);die();
          $UserModel->updayteTintuc($_GET['tintuc_id'],$tintuc_name, $tintuc_noidung, $photo);
          header('Location: tin-tuc.php');
      }
      else{
          // echo(1);die();
          $error = "Không được để trống trường dữ liệu";
          // $UserModel->insertTintuc($tintuc_name, $tintuc_noidung, $photo);
          // header('Location: tin-tuc.php');
      }
      }
      else{
        if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
          $tintuc_name = $_POST['tintuc_name'];
          $tintuc_noidung = $_POST['tintuc_noidung'];
          $photo = time().$_FILES['fileupload']['name'];
          
          if(isset($_GET['tintuc_id'])) {
              // echo(1);die();
              $UserModel->updayteTintuc($_GET['tintuc_id'],$tintuc_name, $tintuc_noidung, $photo);
              header('Location: tin-tuc.php');
          }
          else{
            // echo(1);die();
              $UserModel->insertTintuc($tintuc_name, $tintuc_noidung, $photo);
              header('Location: tin-tuc.php');
          }
          }
        else{
          $error = "uploaded failed";
        } 
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
                name="tintuc_name"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($gettintuc[0]['tintuc_name'])) echo $gettintuc[0]['tintuc_name']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="tintuc_noidung"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($gettintuc[0]['tintuc_noidung'])) echo $gettintuc[0]['tintuc_noidung']?></textarea>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
              <?php if(!empty($gettintuc[0]['photo'])){ ?>
              <img src="./thumb/<?php echo $gettintuc[0]['photo']?>" alt="">
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
  CKEDITOR.replace( 'tintuc_noidung' );
</script>