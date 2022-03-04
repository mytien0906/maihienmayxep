<?php
require_once('./Admin/Model/UserModel_index.php');
$UserModel = new UserModel();
$danhsachs = $UserModel->getAlleDanhSach1();
$tintucs = $UserModel->getAllTintuc();
?>
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 main-content-left">
  <div class="category-block">
    <div class="category-content">
      <h3>Danh mục sản phẩm</h3>
      <div class="category-menu">
        <ul>
          <?php foreach ($danhsachs as $danhsach) { ?>
            <?php if ($danhsach['hienthi'] == 1) { ?>
              <li>
                <a href="chi-tiet-danh-muc.php?ussd=<?= md5($danhsach['id'] . "maixep") ?>"><?= $danhsach['tenvi'] ?></a>
              </li>
          <?php }
          } ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="news-block">
    <div class="news-content">
      <?php foreach ($tintucs as $tintuc) { ?>
        <?php if ($tintuc['noibat'] == 1) { ?>
          <div class="row new-item-wrapper">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
              <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-link">
                <img src="./Admin/thumb/<?= $tintuc['photo'] ?>" alt="hinh anh cong trinh"></a>

            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-6">
              <div class="tintuc_danhmuc">
                  <a href="chi-tiet.php?id_tintuc=<?= md5($tintuc['tintuc_id'] . "maixep") ?>" class="new-item-title">
                    <?= $tintuc['tintuc_name'] ?>
                  </a>
                <div class="tintuc_noidung_danhmuc">
                  <!-- <p> </?= htmlspecialchars_decode($tintuc['tintuc_noidung']) ?> </p> -->
                </div>
              </div>

            </div>

          </div>
      <?php }
      } ?>
    </div>
  </div>
</div>
<script>
  function trimText(str, wordCount) {
    var strArray = str.split(' ');
    var subArray = strArray.slice(0, wordCount);
    var result = subArray.join(" ");
    return result + '...';
  }

  var str = $('.tintuc_danhmuc .tintuc_noidung_danhmuc').text();
  var result = trimText(str, 30);
  $('.tintuc_danhmuc .tintuc_noidung_danhmuc').text(result);
</script>