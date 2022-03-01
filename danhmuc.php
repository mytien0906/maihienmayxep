<?php
require_once ('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
?>
<div class="category-block">
  <div class="category-content">
    <h3>Danh mục sản phẩm</h3>
    <div class="category-menu">
      <ul>
        <?php foreach($danhsachs as $danhsach){ ?>
        <?php if($danhsach['hienthi']==1){ ?>
        <li>
          <a href=""><?= $danhsach['tenvi'] ?></a>
        </li>
        <?php } }?>
      </ul>
    </div>
  </div>
</div>
<div class="news-block">
    <div class="news-content">
        <?php foreach($tintucs as $tintuc){ ?>
        <?php if($tintuc['noibat'] == 1) {?>
            <div class="new-item-wrapper">
                <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-link">
                    <img src="./Admin/thumb/<?= $tintuc['photo'] ?>"
                        alt="hinh anh cong trinh"></a>
                <div class="new-item-info">
                    <h3><a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-title">
                            <?= $tintuc['tintuc_name'] ?>
                        </a></h3>
                </div>
            </div>
        <?php } }?>
      </div>
</div>
