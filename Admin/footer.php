
  <?php
   require_once ('./Model/UserModel.php');
   include "/head.php" ;
   $UserModel = new UserModel();
   $footer = $UserModel->getfooterhbyId();
   if(isset($_POST['submit'])){
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    $updatefooter=$UserModel->updatefooter($tieude, $noidung);
    // var_dump($updatefooter);die();
    header('Location: footer.php');
  }
  if(isset($_POST['reset'])){
    echo '<script type="text/javascript"> 
    form.reset() 
    </script>';
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
                  <p class="card-description">
                    Thông tin footer
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Tiêu Đề</label>
                      <input type="text" name="tieude" class="form-control" id="exampleInputName1" value="<?php if(!empty($footer[0]['tieude'])) echo $footer[0]['tieude'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nội Dung</label>
                      <textarea name="noidung" id="" cols="100" rows="10" ><?php if(!empty($footer[0]['noidung'])) echo htmlspecialchars_decode($footer[0]['noidung']) ?></textarea>
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
  CKEDITOR.replace( 'noidung' );
</script>