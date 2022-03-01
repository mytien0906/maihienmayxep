<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();

$error = "";
if(!empty($_GET['ds_id'])){
  $getdanhsach1 = $UserModel->geteDanhSach1byId($_GET['ds_id']);
}
if(isset($_POST['reset'])){
  echo '<script type="text/javascript"> 
  form.reset() 
  </script>';
}
if(isset($_POST['submit'])){
  if(!empty($_POST['tenvi']) && !empty($_POST['motavi'])) {
    $foderPath = 'thumb/' . time() . $_FILES['fileupload']['name'];
    $target_file = $_FILES["fileupload"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif', '');
    if (!in_array($imageFileType,$allowtypes ))
    {
      $error = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    }
    else{
      if($_FILES['fileupload']['tmp_name'] == ''){
        // echo($getdanhsach1[0]['photo']);die();
        $tenvi = $_POST['tenvi'];
        $motavi = $_POST['motavi'];
        $photo = $getdanhsach1[0]['photo'];
        if(isset($_GET['ds_id'])) {
          // echo(2);die();
            $UserModel->updayteDanhSach1($_GET['ds_id'],$tenvi, $motavi, $photo);
            header('Location: dan-muc-cap-1.php');
        }
        else{
          $error = "Không được bỏ trống trường dữ liệu";
        }
      }
      else{
        if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
          $tenvi = $_POST['tenvi'];
          $motavi = $_POST['motavi'];
          $photo = time().$_FILES['fileupload']['name'];
          
          if(isset($_GET['ds_id'])) {
            // echo(2);die();
              $UserModel->updayteDanhSach1($_GET['ds_id'],$tenvi, $motavi, $photo);
              header('Location: dan-muc-cap-1.php');
          }
          else{
            // echo(1);die();
              $UserModel->insertDanhSach1($tenvi, $motavi, $photo);
              header('Location: dan-muc-cap-1.php');
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
                name="tenvi"
                type="text"
                class="form-control"
                id="exampleInputName1"
                placeholder="Name" 
                value="<?php if(!empty($getdanhsach1[0]['tenvi'])) echo $getdanhsach1[0]['tenvi']?>"
              />
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Mô tả</label>
              <textarea
                name="motavi"
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ><?php if(!empty($getdanhsach1[0]['motavi'])) echo $getdanhsach1[0]['motavi']?></textarea>
            </div>
            <div class="form-group form-hinhanh">
                Chọn file để upload:
              <input type="file" name="fileupload" id="fileupload"/>
              <?php if(!empty($getdanhsach1[0]['photo'])){ ?>
              <img src="./thumb/<?php  echo $getdanhsach1[0]['photo']?>" alt="">
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
  CKEDITOR.replace( 'motavi' );
</script>