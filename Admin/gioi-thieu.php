
  <?php
  session_start();
   require_once ('./Model/UserModel.php');
   include "/head.php" ;
   $UserModel = new UserModel();
   $gioithieus=$UserModel->getAllGioiThieu();
   $getGioiThieuhbyId = $UserModel->getGioiThieuhbyId();
   if(isset($_POST['reset'])){
    echo '<script type="text/javascript"> 
    form.reset() 
    </script>';
  }
   if(isset($_POST['submit'])){
    //  echo($_FILES['fileupload']['tmp_name']);die();
      $foderPath = 'thumb/' . time() . $_FILES['fileupload']['name'];
      $target_file = $_FILES["fileupload"]["name"];
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $allowtypes    = array('jpg', 'png', 'jpeg', 'gif', '');
      // echo(1);die();
      if (!in_array($imageFileType,$allowtypes ))
      {
        $error = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
      }
      else{
        if($_FILES['fileupload']['tmp_name'] == ''){
          // echo($getdanhsach1[0]['photo']);die();
          $name = $_POST['name'];
          $mota = $_POST['mota'];
          $noidung = $_POST['noidung'];
          $photo = $getGioiThieuhbyId[0]['photo'];
          $UserModel->updaytGioithieu($name, $mota,$noidung, $photo);
          header('Location: gioi-thieu.php');
        }
        else{
          if(is_uploaded_file($_FILES['fileupload']['tmp_name']) && move_uploaded_file($_FILES['fileupload']['tmp_name'], $foderPath)){
            $name = $_POST['name'];
            $mota = $_POST['mota'];
            $noidung = $_POST['noidung'];
            $photo = time().$_FILES['fileupload']['name'];
              // echo(2);die();
              $UserModel->updaytGioithieu($name, $mota,$noidung, $photo);
                header('Location: gioi-thieu.php');
            }
          else{
            $error = "uploaded failed";
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
                  <h4 class="card-title">Thông tin giới thiệu</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?= $getGioiThieuhbyId[0]['name'] ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Mo ta</label>
                      <textarea name="mota" id="" cols="100" rows="10"><?= htmlspecialchars_decode($getGioiThieuhbyId[0]['mota']) ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Noi dung</label>
                      <textarea name="noidung" id="" cols="100" rows="10"><?= htmlspecialchars_decode($getGioiThieuhbyId[0]['noidung']) ?></textarea>
                    </div>
                    <div class="form-group form-hinhanh">
                      Chọn file để upload:
                      <input type="file" name="fileupload" id="fileupload"/>
                      <?php if(!empty($getGioiThieuhbyId[0]['photo'])){ ?>
                      <img src="./thumb/<?php  echo $getGioiThieuhbyId[0]['photo']?>" alt="">
                      <?php } ?>
                    </div>
                    <button type="submit" name="submit"  value="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" name="reset">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script>
  CKEDITOR.replace( 'mota' );
  CKEDITOR.replace( 'noidung' );
</script>