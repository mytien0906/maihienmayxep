<?php 
session_start();
require_once ('./Model/UserModel.php');
// include "/head.php" ;
$UserModel = new UserModel();
$videos = $UserModel->getAllVideo();
?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include "/header.php" ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <?php include "/menu.php" ?>
        <!-- partial -->
        <section class="content danhmuc1">
          <div class="card-footer text-sm sticky-top">
            <a
              class="btn btn-sm bg-gradient-primary text-white"
              href="add_video.php"
              title="Thêm mới"
              ><i class="fas fa-plus mr-2"></i>Thêm mới</a
            >
            <a
              class="btn btn-sm bg-gradient-danger text-white"
              id="delete-all"
              href="delete_video.php"
              title="Xóa tất cả"
              ><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a
            >
          </div>
          <div class="card card-primary card-outline text-sm mb-0">
            <div class="card-header">
              <h3 class="card-title">Danh sách Tiêu Chí</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover" id="order-listing">
                <thead>
                  <tr>
                    <th class="align-middle" width="5%">
                      <div class="custom-control custom-checkbox my-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                        />
                      </div>
                    </th>
                    <th class="align-middle text-center" width="10%">STT</th>
                    <th class="align-middle" style="width: 30%">Tiêu đề</th>
                    <th class="align-middle text-center">Nổi bật</th>
                    <th class="align-middle text-center">Hiển thị</th>
                    <th class="align-middle text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($videos as $video){ ?>
                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-checkbox my-checkbox">
                        <input
                          type="checkbox"
                          value="29"
                        />
                      </div>
                    </td>
                    <td class="align-middle">
                      <input
                        type="number"
                        class="form-control form-control-mini m-auto update-stt"
                        min="0"
                        value="1"
                        data-id="29"
                        data-table="product_list"
                      />
                    </td>
                    <td class="align-middle">
                      <a
                        class="text-dark"
                        href="index.php?com=product&amp;act=edit_list&amp;type=san-pham&amp;p=1&amp;id=29"
                        title="Cổng xếp tự động"
                        ><?= $video['video_name'] ?></a
                      >
                    </td>
                    <td class="align-middle text-center">
                      <div class="custom-control custom-checkbox my-checkbox">
                      <input
                          class="check_noibat"
                          value="1"
                          type="checkbox"
                          data-loai="noibat"
                          btn-id="btn-noibat-<?= $video['video_id'] ?>"
                          data-id-noibat="<?= $video['video_id'] ?>"
                          <?= $video['noibat'] == 1 ? "checked" : "" ?>
                        />
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="custom-control custom-checkbox my-checkbox">
                      <input
                          btn-id="btn-hienthi-<?= $video['video_id'] ?>"
                          data-id = "<?= $video['video_id'] ?>"
                          type="checkbox"
                          data-loai="hienthi"
                          <?= $video['hienthi'] == 1 ? "checked" : "" ?>
                        />
                      </div>
                    </td>
                    <td class="align-middle text-center text-md text-nowrap">
                      <a
                        class="text-primary mr-2"
                        href="add_video.php?video_id=<?= md5($video['video_id'] . "maixep") ?>"
                        title="Chỉnh sửa"
                        ><i class="bi bi-pencil-square"></i></a>
                      <a
                        class="text-danger"
                        id="delete-item"
                        href="delete_video.php?video_id=<?= md5($video['video_id'] . "maixep") ?>"
                        title="Xóa"
                        ><i class="bi bi-trash3-fill"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script>
    
    $(document).ready(function(){
      $("[data-id]").click(function(){
          var id =  $(this).attr("data-id")
          // alert(id);
          console.log(id);
          if ($(this).is(':checked')) {
            var id = $(this).attr('data-id');
            // console.log(id);
            $.ajax({
              url: "dmc1_action_hienthi.php?atc=video",
              method: "POST",
              data:{id:id},
              success:function(data){
                if(data = 1){
                console.log("Insert thanh cong");
                }
                else{
                  console.log("Insert khong thanh cong");
                }
              }
            });
            // console.log($(this).val() + ' is now checked');
        } else {
          var id = $(this).attr('data-id');
            // console.log(id);
            $.ajax({
              url: "dmc1_deletecheck_hienthi.php?atc=video",
              method: "POST",
              data:{id:id},
              success:function(data){
                if(data == 1){
                console.log("up thanh cong");
                }
                else{
                  console.log("Insert khong thanh cong");
                }
              }
            });
            // console.log(' is now unchecked');
        }
        });
        $("[data-id-noibat]").click(function(){
          var id = $(this).attr('data-id-noibat');
          // alert(id);
          if ($(this).is(':checked')) {
            
            console.log(id);
            $.ajax({
              url: "dmc1_action.php?atc=video",
              method: "POST",
              data:{id:id},
              success:function(data){
                if(data = 1){
                console.log("Insert thanh cong");
                }
                else{
                  console.log("Insert khong thanh cong");
                }
              }
            });
            console.log($(this).val() + ' is now checked');
        } else {
          // var id = $(this).attr('data-id');
            console.log(id);
            $.ajax({
              url: "dmc1_deletecheck.php?atc=video",
              method: "POST",
              data:{id:id},
              success:function(data){
                if(data == 1){
                console.log("up thanh cong");
                }
                else{
                  console.log("Insert khong thanh cong");
                }
              }
            });
            console.log(' is now unchecked');
        }
        });
    })
    
    </script>