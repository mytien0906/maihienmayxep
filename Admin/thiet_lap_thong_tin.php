
<?php
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
  
// if(isset($_POST['reset'])){
//  echo '<script type="text/javascript"> 
//  form.reset() 
//  </script>';
// }

if(isset ($_POST['submit'])){
  // $phantrang_sp = $_POST['phantrang_sp'];
  // $phantrang_baivet = $_POST['phantrang_baivet'];
  $diachi = $_POST['diachi'];
  $email = $_POST['email'];
  $hotline = $_POST['hotline'];
  $dienthoai = $_POST['dienthoai'];
  $zalo = $_POST['zalo'];
  $wbsite = $_POST['wbsite'];
  $fanpage = $_POST['fanpage'];
  $toado = $_POST['toado'];
  $google_map = $_POST['google_map'];
  $google_analytics = $_POST['google_analytics'];
  $google_webmaster = $_POST['google_webmaster'];
  $head_js = $_POST['head_js'];
  $Body_js = $_POST['Body_js'];
  $tieude = $_POST['tieude'];
  $seo_title = $_POST['seo_title'];
  $seo_keyword = $_POST['seo_keyword'];
  $seo_description = $_POST['seo_description'];
  $thongtinmins = $UserModel->updateThieLapThongTin($diachi,$email,$hotline,$dienthoai,$zalo,$wbsite,$fanpage,$toado,$google_map,$google_analytics,$google_webmaster,$head_js,$Body_js,$tieude,$seo_title,$seo_keyword,$seo_description);
}
$thongtinthietlap = $UserModel->GetAllThietLapThongTin();
  //  if(!empty($thongtinthietlap[0]['phantrang_baivet'])) echo $thongtinthietlap[0]['phantrang_baivet'];die();
  //  var_dump($thongtinthietlap[0]['email']);die()
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
                <div class="card-body body_thongtin">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Thông tin 
                  </p>
                  <form class="forms-sample" method="post">
                    <div class="row">
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Phân trang index</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="phantrang_sp" placeholder="Phân trang index" value="<?php if(!empty($thongtinthietlap[0]['phantrang_sp'])) echo $thongtinthietlap[0]['phantrang_sp']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Phân Trang bài viết</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="phantrang_baivet" placeholder="Phân Trang bài viết" value="<?php if(!empty($thongtinthietlap[0]['phantrang_baivet'])) echo $thongtinthietlap[0]['phantrang_baivet'] ?>">
                        </div>
                      </div> -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Địa Chỉ</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="diachi" placeholder="Địa Chỉ" value="<?php if(!empty($thongtinthietlap[0]['diachi'])) echo $thongtinthietlap[0]['diachi'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="email" placeholder="Email" value="<?php if(!empty($thongtinthietlap[0]['email'])) echo $thongtinthietlap[0]['email'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Hotline</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="hotline" placeholder="Hotline" value="<?php if(!empty($thongtinthietlap[0]['hotline'])) echo $thongtinthietlap[0]['hotline'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Điện Thoại</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="dienthoai" placeholder="Điện Thoại" value="<?php if(!empty($thongtinthietlap[0]['dienthoai'])) echo $thongtinthietlap[0]['dienthoai'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Zalo</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="zalo" placeholder="Zalo" value="<?php if(!empty($thongtinthietlap[0]['zalo'])) echo $thongtinthietlap[0]['zalo'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Website</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="wbsite" placeholder="Website" value="<?php if(!empty($thongtinthietlap[0]['wbsite'])) echo $thongtinthietlap[0]['wbsite'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputName1">Fanpage</label>
                          <input type="text" class="form-control" id="exampleInputName1" name="fanpage" placeholder="Fanpage" value="<?php if(!empty($thongtinthietlap[0]['fanpage'])) echo $thongtinthietlap[0]['fanpage'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Tọa độ google map</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="toado" placeholder="Tọa độ google map" value="<?php if(!empty($thongtinthietlap[0]['toado'])) echo $thongtinthietlap[0]['toado'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tọa độ google map iframe (Lấy mã nhúng) </label>
                      <textarea nid="" cols="150" rows="8" class="form-control" name="google_map" placeholder="Google map iframe"><?php if(!empty($thongtinthietlap[0]['google_map'])) echo htmlspecialchars_decode($thongtinthietlap[0]['google_map']) ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Google Analytics</label>
                      <textarea id="" cols="150" rows="8" class="form-control" name="google_analytics" placeholder="Google Analytics" id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['google_analytics'])) echo $thongtinthietlap[0]['google_analytics'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Google Webmaster Tool</label>
                      <textarea  id="" cols="150" rows="8" class="form-control" name="google_webmaster" placeholder="Webmaster tool " id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['google_webmaster'])) echo $thongtinthietlap[0]['google_webmaster'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Head JS</label>
                      <textarea  id="" cols="150" rows="8" class="form-control" name="head_js" placeholder="Head Js" id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['head_js'])) echo $thongtinthietlap[0]['head_js'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Body JS</label>
                      <textarea id="" cols="150" rows="8" class="form-control" name="Body_js" placeholder="Body Js" id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['Body_js'])) echo $thongtinthietlap[0]['Body_js'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tiêu Đề</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="tieude" placeholder="Tiêu Đề" value="<?php if(!empty($thongtinthietlap[0]['tieude'])) echo $thongtinthietlap[0]['tieude'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">SEO Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="seo_title" placeholder=" Seo Title" value="<?php if(!empty($thongtinthietlap[0]['seo_title'])) echo $thongtinthietlap[0]['seo_title'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">SEO Keywords</label>
                      <textarea id="" cols="150" rows="8" class="form-control" name="seo_keyword" placeholder="seo_keyword" id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['seo_keyword'])) echo $thongtinthietlap[0]['seo_keyword'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">SEO Description</label>
                      <textarea id="" cols="150" rows="8" class="form-control" name="seo_description" placeholder="seo_description" id="exampleInputName1"><?php if(!empty($thongtinthietlap[0]['seo_description'])) echo $thongtinthietlap[0]['seo_description'] ?></textarea>
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

