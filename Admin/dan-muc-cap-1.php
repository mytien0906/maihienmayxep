<?php 
session_start();
require_once ('./Model/UserModel.php');
include "/head.php" ;
$UserModel = new UserModel();
$danhsasch1 = $UserModel->getAlleDanhSach1();
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
              href="add_danhmuc1.php"
              title="Thêm mới"
              ><i class="fas fa-plus mr-2"></i>Thêm mới</a
            >
            <a
              class="btn btn-sm bg-gradient-danger text-white"
              id="delete-all"
              href="delete_danhmuc1.php"
              title="Xóa tất cả"
              ><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a
            >
            <div
              class="form-inline form-search d-inline-block align-middle ml-3"
            >
            </div>
          </div>
          <div class="card card-primary card-outline text-sm mb-0">
            <div class="card-header">
              <h3 class="card-title">Danh sách Danh mục cấp 1</h3>
            </div>
            <div class="card-body table-responsive p-0"  >
            <div class="row" >
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="order-listing_length">
                  <label>Show 
                    <select name="order-listing_length" aria-controls="order-listing" class="form-control">
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="-1">All</option>
                    </select> entries</label>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div id="order-listing_filter" class="dataTables_filter">
                    <label>
                      <input type="search" class="form-control" placeholder="Search" aria-controls="order-listing">
                    </label>
                  </div>
                </div>
              </div>
              <table class="table table-hover" >
                <thead >
                  <tr>
                    <th class="align-middle" width="5%">
                      <div class="custom-control custom-checkbox my-checkbox">
                      </div>
                    </th>
                    <th class="align-middle text-center" width="10%">STT</th>
                    <th class="align-middle">Hình</th>
                    <th class="align-middle" style="width: 30%">Tiêu đề</th>
                    <th class="align-middle text-center">Nổi bật</th>
                    <th class="align-middle text-center">Hiển thị</th>
                    <th class="align-middle text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody id="dmc1">
                  <?php foreach($danhsasch1 as $ds1){ ?>
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
                        href="index.php?com=product&amp;act=edit_list&amp;type=san-pham&amp;p=1&amp;id=29"
                        title="Cổng xếp tự động"
                        >
                        <img
                          class="rounded img-preview"
                          src="./thumb/<?php echo $ds1['photo'] ?>"
                          alt="Cổng xếp tự động"
                        />
                      </a>
                    </td>
                    <td class="align-middle">
                      <a
                        class="text-dark"
                        href="add_danhmuc.php?ds_id=<?= $ds1['id'] ?>"
                        title="Cổng xếp tự động"
                        ><?= $ds1['tenvi'] ?></a
                      >
                    </td>
                    <td class="align-middle text-center">
                      <div class="custom-control custom-checkbox my-checkbox">
                        <input
                          class="check_noibat"
                          value="1"
                          type="checkbox"
                          data-loai="noibat"
                          btn-id="btn-noibat-<?= $ds1['id'] ?>"
                          data-id-noibat="<?= $ds1['id'] ?>"
                          <?= $ds1['noibat'] == 1 ? "checked" : "" ?>
                        />
                      </div>
                    </td>
                    <td class="align-middle text-center ">
                      <div class="custom-control custom-checkbox my-checkbox">
                        <input
                          btn-id="btn-hienthi-<?= $ds1['id'] ?>"
                          data-id = "<?= $ds1['id'] ?>"
                          type="checkbox"
                          data-loai="hienthi"
                          <?= $ds1['hienthi'] == 1 ? "checked" : "" ?>
                        />
                      </div>
                    </td>
                    <td class="align-middle text-center text-md text-nowrap">
                      <a
                        class="text-primary mr-2"
                        href="add_danhmuc1.php?ds_id=<?= md5($ds1['id'] . "maixep") ?>"
                        title="Chỉnh sửa"
                        ><i class="bi bi-pencil-square"></i></a>
                      <a
                        class="text-danger"
                        id="delete-item"
                        href="delete_danhmuc1.php?ds_id=<?= md5($ds1['id'] . "maixep") ?>"
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
          url: "dmc1_action_hienthi.php?atc=dmc1",
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
          url: "dmc1_deletecheck_hienthi.php?atc=dmc1",
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
          url: "dmc1_action.php?atc=dmc1",
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
          url: "dmc1_deletecheck.php?atc=dmc1",
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