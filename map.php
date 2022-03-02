<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$thongtinthietlap = $UserModel->GetAllThietLapThongTin();
?>
<div class="map">
  <div class="container">
    <?= $thongtinthietlap[0]['google_map'] ?>
  </div>
</div>
