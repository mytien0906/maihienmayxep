<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
$error = "";
if(!empty ($_POST['submit'])){
  $userName = trim($_POST["username"]);
  $passWord = trim($_POST["password"]);
  if ($userName != "" && $passWord != "") {
    $rows = $UserModel->login($userName, $passWord);
    if(!empty($rows)){
      foreach($rows as $row){
        $_SESSION['admin_login'] = true;
        $_SESSION['userid'] = $row['id'];
        // echo ($_SESSION['userid']);die();
        header("location:index.php");
      }
    }
    else{
      // echo(2);
      $error .= "Tên hoặc mật khẩu không đúng";
    }
  }
  else{
    $error .= "Bạn phải nhập đủ thông tin";
  }
}

?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
<div class="container-scroller">

    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <a href="/index.php"><img src="./thumb/iconsota.png" alt="logo"></a>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php 
                if($error != "") {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
              <?php } ?>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"  name="password">
                </div>
                <div class="mt-3">
                  <button name="submit"type="submit" value="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.php">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>