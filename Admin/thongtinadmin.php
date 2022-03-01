
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
  // echo ($_SESSION['userid']);die();
   if(!empty ($_POST['submit'])){
       $id = $_SESSION['userid'];
       $fullname = $_POST['fullname'];
       $email = $_POST['email'];
       $address = $_POST['address'];
       $gender = $_POST['gender'];
       $admins = $UserModel->Updateadmin($id,$fullname,$email,$gender,$address);
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
                    Thông tin Admin
                  </p>
                  <form class="forms-sample" method="post">
                      <?php foreach ($admin as $ad) {?>
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="<?= $ad['name'] ?>" disabled="true">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">FullName</label>
                      <input type="text" name="fullname" class="form-control" id="exampleInputName1" value="<?= $ad['fullname'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail3" value="<?= $ad['email'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Dịa Chỉ</label>
                      <input type="text" name="address" class="form-control" id="exampleInputName1" value="<?= $ad['address'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" name="gender" id="exampleSelectGender">
                          <option><?= $ad['gender'] ?></option>
                          <option>Nam</option>
                          <option>Nữ</option>
                        </select>
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

