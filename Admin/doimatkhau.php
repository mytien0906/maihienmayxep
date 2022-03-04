
  <?php
  session_start();
   require_once ('./Model/UserModel.php');
   include "/head.php" ;
   $UserModel = new UserModel();
   $admin=$UserModel->admin($_SESSION['userid']);
   if(isset($_POST['reset'])){
    echo '<script type="text/javascript"> 
    form.reset() 
    </script>';
  }
  $error = "";
  // echo ($_SESSION['userid']);die();
   if(!empty ($_POST['submit'])){
       $id = $_SESSION['userid'];
       $mkhientai = $_POST['mkhientai'];
       $mkmoi = $_POST['mkmoi'];
       $mk = md5("maixep"."$mkhientai"."abc");
      //  var_dump($admin[0]['password']);var_dump($mk);die();
       if($admin[0]['password'] == $mk){
        $admins = $UserModel->UpdatePassword($id,$mkmoi);
        $error = "Cập nhật thàng công";
       }
       else{
         $error = "Mật khẩu sai";
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
      <div class="col-12 grid-margin stretch-card" style="width: 83%">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Thông tin Admin
                  </p>
                  <?php 
                if($error != "") {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
              <?php } ?>
                  <form class="forms-sample" method="post">
                      <?php foreach ($admin as $ad) {?>
                    <div class="form-group">
                      <label for="exampleInputName1">Mật Khẩu Hiện Tại</label>
                      <input type="text" class="form-control" name="mkhientai" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Mật Khẩu Mới</label>
                      <input type="text" name="mkmoi" class="form-control" id="exampleInputName1">
                    </div>
                      <?php } ?>
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

