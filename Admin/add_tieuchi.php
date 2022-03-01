<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

if(!empty($_GET['tieuchi_id'])){
  $gettieuchi = $UserModel->getTieuchibyId($_GET['tieuchi_id']);
}
$error = "";
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  // echo $_POST['tieuchi_name'];die();
  if(!empty($_POST['tieuchi_name']) && !empty($_POST['tieuchi_noidung']) && !empty($_FILES['fileupload'])) {
    // echo(1);die();
    $foderPath = 'thumb/' . time() . $_FILES['fileupload']['name'];
    $target_file = $_FILES["fileupload"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
    if (!in_array($imageFileType,$allowtypes ))
    {
      $error = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    }
    else{
      if($_FILES['fileupload']['tmp_name'] == ''){
        // echo($getdanhsach1[0]['photo']);die();
        $tieuchi_name = $_POST['tieuchi_name'];
        $tieuchi_noidung = $_POST['tieuchi_noidung'];
        $photo = $gettieuchi[0]['photo'];
        if(isset($_GET['tieuchi_id'])) {
          // echo(1);die();
          $UserModel->updayteTieuchi($_GET['tieuchi_id'],$tieuchi_name, $tieuchi_noidung, $photo);
          header('Location: tieu-chi.php');
      }
      else{
        $error = "Không được bỏ trống trường dữ liệu";
      }
      }
      else{
        if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
          $tieuchi_name = $_POST['tieuchi_name'];
          $tieuchi_noidung = $_POST['tieuchi_noidung'];
          $photo = time().$_FILES['fileupload']['name'];
          
          if(isset($_GET['tieuchi_id'])) {
              // echo(1);die();
              $UserModel->updayteTieuchi($_GET['tieuchi_id'],$tieuchi_name, $tieuchi_noidung, $photo);
              header('Location: tieu-chi.php');
          }
          else{
            // echo(1);die();
              $UserModel->insertTieuchi($tieuchi_name, $tieuchi_noidung, $photo);
              header('Location: tieu-chi.php');
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
                name="tieuchi_name"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($gettieuchi[0]['tieuchi_name'])) echo $gettieuchi[0]['tieuchi_name']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="tieuchi_noidung"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($gettieuchi[0]['tieuchi_noidung'])) echo $gettieuchi[0]['tieuchi_noidung']?></textarea>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
              <?php if(!empty($gettieuchi[0]['photo'])) {?>
              <img src="./thumb/<?php echo $gettieuchi[0]['photo']?>" alt="">
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
  CKEDITOR.replace( 'tieuchi_noidung' );
</script>