<?php
require_once('./Admin/Model/UserModel_index.php');
include 'head.php';
$UserModel = new UserModel();
$thongtinthietlap = $UserModel->GetAllThietLapThongTin();
?>
<div class="bottom-footer">
    <div class="box-maps ">
        <div class="wrap-content map-all">
            <div class="box-branch">
                <div class="map-item">
                    <div class="map-i">
                    <?= $thongtinthietlap[0]['google_map'] ?>
                        <div class="inf_">
                            <div>
                                <h3>Văn Phòng</h3>
                                <div class="desc">Địa chỉ: 545 Ql20 Thị Trân Liên Nghĩa, Đức Trọng, Lâm Dồng<br>
                                    <br>
                                    Điện Thoại: 0974 242 442<br>
                                    <br>
                                    Email: anhtuanglas7@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>