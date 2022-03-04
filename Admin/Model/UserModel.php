<?php
require_once ('BaseModel.php');

class UserModel extends BaseModel{
    // Danh mục
    public function getAlleDanhSach1(){
        $sql = 'SELECT * FROM `table_product_list`';
        $product = $this->select($sql);
        return $product;
    }
    public function geteDanhSach1byId($id){
        $ds = 'SELECT id FROM table_product_list';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            
            if($id == $md5id){
            // var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_product_list` WHERE  id = '.$vd['id'];
            $product = $this->select($sql);
            return $product;
            }
        }
        
        
    }
    public function insertDanhSach1($tenvi, $motavi, $photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_product_list`(`tenvi`,`motavi`, `photo`, `ngaytao`) VALUES ('$tenvi','$motavi','$photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updayteDanhSach1($id,$tenvi, $motavi, $photo){
        
        $ds = 'SELECT id FROM table_product_list';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$motavi);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            
            if($id == $md5id){
            // var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_product_list` SET `tenvi`="'.$tenvi.'",`motavi`="'.$nd.'",`photo`= "'.$photo.'",`ngaysua`= "'.date("Y-m-d").'" WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }

        
    }
    public function DeleteDanhSach1($id){
        $ds = 'SELECT id FROM table_product_list';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            
            if($id == $md5id){
            // var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_product_list` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
       
    }
    public function selectNameDS($id_ds){
        $sql = "SELECT `id`,`tenvi` FROM `table_product_list` WHERE table_product_list.id= ".$id_ds;
        $product = $this->select($sql);
        return $product;
    }
    public function updateNoiBat($id){
        $sql = "UPDATE `table_product_list` SET `noibat`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhong($id){
        $sql = "UPDATE `table_product_list` SET `noibat`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThi($id){
        $sql = "UPDATE `table_product_list` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhong($id){
        $sql = "UPDATE `table_product_list` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Product
    public function getAlleproduct(){
        $sql = 'SELECT * FROM `table_product`';
        $product = $this->select($sql);
        return $product;
    }
    public function getproductbyId($id_pro){
        $pro = 'SELECT id FROM table_product';
        $pros = $this->select($pro);
        // var_dump($id_pro);die();
        foreach($pros as $pr){
            $md5id = md5($pr['id'] . "maixep");
            // var_dump($md5id);die();
            if($id_pro == $md5id){
            //     var_dump($id_pro);
            // var_dump($md5id);die();
                $sql = 'SELECT * FROM `table_product` WHERE  id = '.$pr['id'];
                // echo($sql);die();
                $product = $this->select($sql);
                return $product;
            }
        }
        
    }
    public function insertproduct($tenvi, $motavi, $photo,$id_list){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_product`(`tenvi`,`noidungvi`, `photo`, `ngaytao`, `id_list`) VALUES ('$tenvi','$motavi','$photo','$date', '$id_list')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        // echo( $product);die();
        return $product;
    }
    public function updateproduct($id,$tenvi, $motavi, $photo,$id_list){
        $ds = 'SELECT id FROM table_product';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$motavi);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_product` SET `tenvi`="'.$tenvi.'",`noidungvi`="'.$nd.'",`photo`= "'.$photo.'",`ngaysua`= "'.date("Y-m-d").'", id_list = "'.$id_list.'" WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            // var_dump( $product);die();
            return $product;
            }
        }
        
    }
    public function Deleteproduct($id){
        
        $ds = 'SELECT id FROM table_product';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_product` WHERE  id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    }
    public function updateNoiBatProduct($id){
        $sql = "UPDATE `table_product` SET `noibat`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongProduct($id){
        $sql = "UPDATE `table_product` SET `noibat`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiProduct($id){
        $sql = "UPDATE `table_product` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongProduct($id){
        $sql = "UPDATE `table_product` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Công trình
    public function getAllcongtrinh(){
        $sql = 'SELECT * FROM `table_congtrinh`';
        $product = $this->select($sql);
        return $product;
    }
    public function getcongtrinhbyId($id){
        $ds = 'SELECT congtrinh_id FROM table_congtrinh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['congtrinh_id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_congtrinh` WHERE  congtrinh_id = '.$vd['congtrinh_id'];
            // var_dump($sql);die();
            $product = $this->select($sql);
            return $product;
            }
        }
        
    }
    public function insertcongtrinh($congtrinh_name, $congtrinh_noidung, $congtrinh_photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_congtrinh`(`congtrinh_name`,`congtrinh_noidung`, `congtrinh_photo`, `congtrinh_ngaytao`) VALUES ('$congtrinh_name','$congtrinh_noidung','$congtrinh_photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updaytecongtrinh($congtrinh_id,$congtrinh_name, $congtrinh_noidung, $congtrinh_photo){
        $ds = 'SELECT congtrinh_id FROM table_congtrinh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['congtrinh_id'] . "maixep");
            if($congtrinh_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_congtrinh` SET `congtrinh_name`="'.$congtrinh_name.'",`congtrinh_noidung`="'.$congtrinh_noidung.'",`congtrinh_photo`= "'.$congtrinh_photo.'",`congtrinh_ngaytao`= "'.date("Y-m-d").'" WHERE congtrinh_id = '.$vd['congtrinh_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
    }
    public function Deletecongtrinh($congtrinh_id){
        $ds = 'SELECT congtrinh_id FROM table_congtrinh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['congtrinh_id'] . "maixep");
            if($congtrinh_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_congtrinh` WHERE  congtrinh_id = '.$vd['congtrinh_id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
        
    }
    public function updateNoiBatCongtrinh($id){
        $sql = "UPDATE `table_congtrinh` SET `noibat`= 1 WHERE `congtrinh_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongCongtrinh($id){
        $sql = "UPDATE `table_congtrinh` SET `noibat`= 0 WHERE `congtrinh_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiCongtrinh($id){
        $sql = "UPDATE `table_congtrinh` SET `hienthi`= 1 WHERE `congtrinh_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongCongtrinh($id){
        $sql = "UPDATE `table_congtrinh` SET `hienthi`= 0 WHERE `congtrinh_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Dịch vụ
    public function getAlldichvu(){
        $sql = 'SELECT * FROM `table_dichvu`';
        $product = $this->select($sql);
        return $product;
    }
    public function getdichvubyId($id){
        $ds = 'SELECT dichvu_id FROM table_dichvu';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['dichvu_id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_dichvu` WHERE  dichvu_id = '.$vd['dichvu_id'];
            $product = $this->select($sql);
            return $product;
            }
        }
        
    }
    public function insertdichvu($dichvu_name, $dichvu_noidung, $dichvu_photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_dichvu`(`dichvu_name`,`dichvu_noidung`, `photo`, `dichvu_ngaytao`) VALUES ('$dichvu_name','$dichvu_noidung','$dichvu_photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updaytedichvu($dichvu_id,$dichvu_name, $dichvu_noidung, $dichvu_photo){
        $ds = 'SELECT dichvu_id FROM table_dichvu';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['dichvu_id'] . "maixep");
            if($dichvu_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_dichvu` SET `dichvu_name`="'.$dichvu_name.'",`dichvu_noidung`="'.$dichvu_noidung.'",`photo`= "'.$dichvu_photo.'",`dichvu_ngaytao`= "'.date("Y-m-d").'" WHERE dichvu_id = '.$vd['dichvu_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
    }
    public function Deletedichvu($dichvu_id){
        $ds = 'SELECT dichvu_id FROM table_dichvu';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['dichvu_id'] . "maixep");
            if($dichvu_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_dichvu` WHERE  dichvu_id = '.$vd['dichvu_id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
       
    }
    public function updateNoiBatDichvu($id){
        $sql = "UPDATE `table_dichvu` SET `noibat`= 1 WHERE `dichvu_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongDichvu($id){
        $sql = "UPDATE `table_dichvu` SET `noibat`= 0 WHERE `dichvu_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiDichvu($id){
        $sql = "UPDATE `table_dichvu` SET `hienthi`= 1 WHERE `dichvu_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongDichvu($id){
        $sql = "UPDATE `table_dichvu` SET `hienthi`= 0 WHERE `dichvu_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Tin Tức
    public function getAllTintuc(){
        $sql = 'SELECT * FROM `table_tintuc`';
        $product = $this->select($sql);
        return $product;
    }
    public function getTintucbyId($id){
        $ds = 'SELECT tintuc_id FROM table_tintuc';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['tintuc_id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_tintuc` WHERE  tintuc_id = '.$vd['tintuc_id'];
            $product = $this->select($sql);
            return $product;
            }
        }
        
    }
    public function insertTintuc($tintuc_name, $tintuc_noidung, $tintuc_photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_tintuc`(`tintuc_name`,`tintuc_noidung`, `photo`, `tintuc_ngaytao`) VALUES ('$tintuc_name','$tintuc_noidung','$tintuc_photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updayteTintuc($tintuc_id,$tintuc_name, $tintuc_noidung, $tintuc_photo){
        $ds = 'SELECT tintuc_id FROM table_tintuc';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$tintuc_noidung);
        foreach($dss as $vd){
            $md5id = md5($vd['tintuc_id'] . "maixep");
            if($tintuc_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_tintuc` SET `tintuc_name`="'.$tintuc_name.'",`tintuc_noidung`="'.$nd.'",`photo`= "'.$tintuc_photo.'",`tintuc_ngaytao`= "'.date("Y-m-d").'" WHERE tintuc_id = '.$vd['tintuc_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
    }
    public function DeleteTintuc($tintuc_id){
        $ds = 'SELECT tintuc_id FROM table_tintuc';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['tintuc_id'] . "maixep");
            if($tintuc_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_tintuc` WHERE  tintuc_id = '.$vd['tintuc_id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
        
    }
    public function updateNoiBatTintuc($id){
        $sql = "UPDATE `table_tintuc` SET `noibat`= 1 WHERE `tintuc_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongTintuc($id){
        $sql = "UPDATE `table_tintuc` SET `noibat`= 0 WHERE `tintuc_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiTintuc($id){
        $sql = "UPDATE `table_tintuc` SET `hienthi`= 1 WHERE `tintuc_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongTintuc($id){
        $sql = "UPDATE `table_tintuc` SET `hienthi`= 0 WHERE `tintuc_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Tiêu chí
    public function getAllTieuchi(){
        $sql = 'SELECT * FROM `table_tieuchi`';
        $product = $this->select($sql);
        return $product;
    }
    public function getTieuchibyId($id){
        $ds = 'SELECT tieuchi_id FROM table_tieuchi';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['tieuchi_id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_tieuchi` WHERE  tieuchi_id = '.$vd['tieuchi_id'];
            $product = $this->select($sql);
            return $product;
            }
        }
    }
    public function insertTieuchi($tieuchi_name, $tieuchi_noidung, $tieuchi_photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_tieuchi`(`tieuchi_name`,`tieuchi_noidung`, `photo`, `tieuchi_ngaytao`) VALUES ('$tieuchi_name','$tieuchi_noidung','$tieuchi_photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updayteTieuchi($tieuchi_id,$tieuchi_name, $tieuchi_noidung, $tieuchi_photo){
        $ds = 'SELECT tieuchi_id FROM table_tieuchi';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$tieuchi_noidung);
        foreach($dss as $vd){
            $md5id = md5($vd['tieuchi_id'] . "maixep");
            if($tieuchi_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_tieuchi` SET `tieuchi_name`="'.$tieuchi_name.'",`tieuchi_noidung`="'.$nd.'",`photo`= "'.$tieuchi_photo.'",`tieuchi_ngaytao`= "'.date("Y-m-d").'" WHERE tieuchi_id = '.$vd['tieuchi_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
    }
    public function DeleteTieuchi($tieuchi_id){
        $ds = 'SELECT tieuchi_id FROM table_tieuchi';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['tieuchi_id'] . "maixep");
            if($tieuchi_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_tieuchi` WHERE  tieuchi_id = '.$vd['tieuchi_id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
        
    }
    public function updateNoiBatTieuchi($id){
        $sql = "UPDATE `table_tieuchi` SET `noibat`= 1 WHERE `tieuchi_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongTieuchi($id){
        $sql = "UPDATE `table_tieuchi` SET `noibat`= 0 WHERE `tieuchi_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiTieuchi($id){
        $sql = "UPDATE `table_tieuchi` SET `hienthi`= 1 WHERE `tieuchi_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongTieuchi($id){
        $sql = "UPDATE `table_tieuchi` SET `hienthi`= 0 WHERE `tieuchi_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Chi nhánh
    public function getAllChinhanh(){
        $sql = 'SELECT * FROM `table_chinhanh`';
        $product = $this->select($sql);
        return $product;
    }
    public function getChinhanhbyId($id){
        $ds = 'SELECT chinhanh_id FROM table_chinhanh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['chinhanh_id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_chinhanh` WHERE  chinhanh_id = '.$vd['chinhanh_id'];
            $product = $this->select($sql);
            return $product;
            }
        }
    }
    public function insertChinhanh($chinhanh_name, $chinhanh_noidung){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_chinhanh`(`chinhanh_name`,`chinhanh_noidung`, `chinhanh_ngaytao`) VALUES ('$chinhanh_name','$chinhanh_noidung','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updateChinhanh($chinhanh_id,$chinhanh_name, $chinhanh_noidung){
        $ds = 'SELECT chinhanh_id FROM table_chinhanh';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$chinhanh_noidung);
        foreach($dss as $vd){
            $md5id = md5($vd['chinhanh_id'] . "maixep");
            if($chinhanh_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_chinhanh` SET `chinhanh_name`="'.$chinhanh_name.'",`chinhanh_noidung`="'.$nd.'",`chinhanh_ngaytao`= "'.date("Y-m-d").'" WHERE chinhanh_id = '.$vd['chinhanh_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
    }
    public function DeleteChinhanh($chinhanh_id){
        $ds = 'SELECT chinhanh_id FROM table_chinhanh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['chinhanh_id'] . "maixep");
            if($chinhanh_id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_chinhanh` WHERE  chinhanh_id = '.$vd['chinhanh_id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
        
    }
    public function updateNoiBatChinhanh($id){
        $sql = "UPDATE `table_chinhanh` SET `noibat`= 1 WHERE `chinhanh_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongChinhanh($id){
        $sql = "UPDATE `table_chinhanh` SET `noibat`= 0 WHERE `chinhanh_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiChinhanh($id){
        $sql = "UPDATE `table_chinhanh` SET `hienthi`= 1 WHERE `chinhanh_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongChinhanh($id){
        $sql = "UPDATE `table_chinhanh` SET `hienthi`= 0 WHERE `chinhanh_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Video
    public function getAllVideo(){
        $sql = 'SELECT * FROM `table_video`';
        $product = $this->select($sql);
        return $product;
    }
    public function getVideobyId($id){
        $video = 'SELECT video_id FROM table_video';
        $videos = $this->select($video);
        foreach($videos as $vd){
            $md5id = md5($vd['video_id'] . "maixep");
            
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
                $sql = 'SELECT * FROM `table_video` WHERE  video_id = '.$vd['video_id'];
                $product = $this->select($sql);
            }
        }
        
        return $product;
    }
    public function insertVideo($video_name, $video_noidung){
        $date = date("Y-m-d");
        $video_nd = substr($video_noidung,-11);
        $sql = "INSERT INTO `table_video`(`video_name`,`video_noidung`, `video_ngaytao`) VALUES ('$video_name','$video_nd','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updateVideo($video_id,$video_name, $video_noidung){
        $video = 'SELECT video_id FROM table_video';
        $videos = $this->select($video);
        $video_nd = substr($video_noidung,-11);
        // echo( $video_nd);die();
        foreach($videos as $vd){
            $md5id = md5($vd['video_id'] . "maixep");
            
            if($video_id == $md5id){
            $sql = 'UPDATE `table_video` SET `video_name`="'.$video_name.'",`video_noidung`="'.$video_nd.'",`video_ngaytao`= "'.date("Y-m-d").'" WHERE video_id = '.$vd['video_id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
        
    }
    public function DeleteVideo($video_id){
        $video = 'SELECT video_id FROM table_video';
        $videos = $this->select($video);
        foreach($videos as $vd){
            $md5id = md5($vd['video_id'] . "maixep");
            
            if($video_id = $md5id){
                $sql = 'DELETE FROM `table_video` WHERE  video_id = '.$vd['video_id'];
                // echo($sql);die();
                $product = $this->delete($sql);
                return $product;
            }
        }
        
    }
    public function updateNoiBatVideo($id){
        $sql = "UPDATE `table_video` SET `noibat`= 1 WHERE `video_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateNoiBatbangkhongVideo($id){
        $sql = "UPDATE `table_video` SET `noibat`= 0 WHERE `video_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThiVideo($id){
        $sql = "UPDATE `table_video` SET `hienthi`= 1 WHERE `video_id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongVideo($id){
        $sql = "UPDATE `table_video` SET `hienthi`= 0 WHERE `video_id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }

    // Doi tac
    public function getAllDoitac(){
        $sql = 'SELECT * FROM `table_doitac`';
        $product = $this->select($sql);
        return $product;
    }
    public function getDoitacbyId($id){
        $ds = 'SELECT id FROM table_doitac';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_doitac` WHERE  id = '.$vd['id'];
            $product = $this->select($sql);
            return $product;
            }
        }
    }
    public function insertDoitac($doitac_name, $link, $doitac_photo, $noidung){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_doitac`(`doitac_name`, `link`,`photo`,`noidung`, `doitac_ngaytao`) VALUES ('$doitac_name','$link','$doitac_photo','$noidung','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updayteDoitac($id,$doitac_name, $link, $photo, $noidung){
        $ds = 'SELECT id FROM table_doitac';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_doitac` SET `doitac_name`="'.$doitac_name.'",`link`="'.$link.'",`photo`= "'.$photo.'",`noidung` = "'.$noidung.'",`doitac_ngaytao`= "'.date("Y-m-d").'" WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }

    }
    public function DeleteDoitac($id){
        $ds = 'SELECT id FROM table_doitac';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_doitac` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }

    }
    public function updateHienThiDoitac($id){
        $sql = "UPDATE `table_doitac` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongDoitac($id){
        $sql = "UPDATE `table_doitac` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Mang xh
    public function getAllMangXH(){
        $sql = 'SELECT * FROM `table_mxh` WHERE `loai` = 0';
        $product = $this->select($sql);
        return $product;
    }
    public function getAllMangXHTop(){
        $sql = 'SELECT * FROM `table_mxh` WHERE `loai` = 1';
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }
    public function getMangXhbyId($id){
        $ds = 'SELECT id FROM table_mxh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_mxh` WHERE  id = '.$vd['id'];
            $product = $this->select($sql);
            return $product;
            }
        }
    }
    public function insertMangxh($name, $link, $photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_mxh`(`name`, `link`,`photo`, `ngaytao`) VALUES ('$name','$link','$photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function insertMangxhTop($name, $link, $photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_mxh`(`name`, `link`,`photo`, `ngaytao`,`loai`) VALUES ('$name','$link','$photo','$date','1')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updaytMangxh($id,$name, $link, $photo){
        $ds = 'SELECT id FROM table_mxh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_mxh` SET `name`="'.$name.'",`link`="'.$link.'",`photo`= "'.$photo.'",`ngaytao`= "'.date("Y-m-d").'" WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
    
    }
    public function updaytMangxhTop($id,$name, $link, $photo){
        // $loai = 1;
        $ds = 'SELECT id FROM table_mxh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_mxh` SET `name`="'.$name.'",`link`="'.$link.'",`photo`= "'.$photo.'",`ngaytao`= "'.date("Y-m-d").' " WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
    
    }
    public function DeleteMangxh($id){
        $ds = 'SELECT id FROM table_mxh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_mxh` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    }
    public function DeleteMangxhTop($id){
        $ds = 'SELECT id FROM table_mxh';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_mxh` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    }
    public function updateHienThiMangxh($id){
        $sql = "UPDATE `table_mxh` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongMangxh($id){
        $sql = "UPDATE `table_mxh` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Slide
    public function getAllSlide(){
        $sql = 'SELECT * FROM `slide`';
        $product = $this->select($sql);
        return $product;
    }
    public function getSlidebyId($id){
        $ds = 'SELECT id FROM slide';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `slide` WHERE  id = '.$vd['id'];
            $product = $this->select($sql);
            return $product;
            }
        }
    }
    public function insertSlide($name, $photo){
        $sql = "INSERT INTO `slide`(`name`,`photo`) VALUES ('$name','$photo')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updaytSlide($id,$name, $photo){
        $ds = 'SELECT id FROM slide';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `slide` SET `name`="'.$name.'",`photo`= "'.$photo.'"WHERE id = '.$vd['id'];
            // echo( $sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
    
    }
    public function DeleteSlide($id){
        $ds = 'SELECT id FROM slide';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `slide` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    
    }
    public function updateHienThiSlide($id){
        $sql = "UPDATE `slide` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongSlide($id){
        $sql = "UPDATE `slide` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // Gioi thieu
    public function getAllGioiThieu(){
        $sql = 'SELECT * FROM `table_gioithieu`';
        $product = $this->select($sql);
        return $product;
    }
    public function getGioiThieuhbyId(){
        $sql = 'SELECT * FROM `table_gioithieu` WHERE  id = 1';
            $product = $this->select($sql);
            return $product;
    }
    public function insertGioithieu($name, $mota,$noidung, $photo){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_gioithieu`(`name`,`mota`,`noidung`,`photo`, `ngaytao`) VALUES ('$name','$mota','$noidung','$photo','$date')";
        // echo( $sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    public function updaytGioithieu($name, $mota,$noidung, $photo){
        $mt = str_replace('"',"'",$mota);
        $nd = str_replace('"',"'",$noidung);
        $sql = 'UPDATE `table_gioithieu` SET `name`="'.$name.'",`mota`="'.$mt.'",`noidung`="'.$nd.'",`photo`= "'.$photo.'",`ngaytao`= "'.date("Y-m-d").'" WHERE id = 1';
        // echo( $sql);die();
        $product = $this->update($sql);
        return $product;
    
    }
    public function DeleteGioithieu($id){
        $ds = 'SELECT id FROM table_gioithieu';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_gioithieu` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    
    }
    public function updateHienThiGioithieu($id){
        $sql = "UPDATE `table_gioithieu` SET `hienthi`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateHienThibangkhongGioithieu($id){
        $sql = "UPDATE `table_gioithieu` SET `hienthi`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // footer
    public function updatefooter($tieude, $noidung){
        $sql = 'UPDATE `footer` SET `tieude` = "'.$tieude.'",`noidung` = "'.$noidung.'" WHERE `footer`.`id` = 1;';
        // echo( $sql);die();
        $product = $this->update($sql);
        return $product;
    }
    public function getfooterhbyId(){
        $sql = 'SELECT * FROM `footer`';
            $product = $this->select($sql);
            return $product;
    }
    // lienhe
    public function updatelienhe($noidung){
        $nd = str_replace('"',"'",$noidung);
        $sql = 'UPDATE `lienhe` SET `noidung` = "'.$nd.'" WHERE `lienhe`.`id` = 1;';
        // echo( $sql);die();
        $product = $this->update($sql);
        return $product;
    }
    public function getlienhehbyId(){
        $sql = 'SELECT * FROM `lienhe`';
            $product = $this->select($sql);
            return $product;
    }
    // Logo
    public function updatelogo($photo){
        $sql = 'UPDATE `logo` SET `photo` = "'.$photo.'" WHERE `logo`.`id` = 1;';
        // echo( $sql);die();
        $product = $this->update($sql);
        return $product;
    }
    public function getlogobyId(){
        $sql = 'SELECT * FROM `logo`';
            $product = $this->select($sql);
            return $product;
    }
    // TRUNCATE 
    public function TruncateDanhSach(){
        $sql = "TRUNCATE `maixep`.`table_product_list`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateProduct(){
        $sql = "TRUNCATE `maixep`.`table_product`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncatePCongtrinh(){
        $sql = "TRUNCATE `maixep`.`table_congtrinh`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncatePDichVu(){
        $sql = "TRUNCATE `maixep`.`table_dichvu`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateTintuc(){
        $sql = "TRUNCATE `maixep`.`table_tintuc`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateChinhanh(){
        $sql = "TRUNCATE `maixep`.`table_chinhanh`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateTieuchi(){
        $sql = "TRUNCATE `maixep`.`table_tieuchi`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateVideo(){
        $sql = "TRUNCATE `maixep`.`table_video`";
        $product = $this->insert($sql);
        return $product;
    }
    public function TruncateThongTinLienHe(){
        $sql = "TRUNCATE `maixep`.`ThongTinLienHe`";
        $product = $this->insert($sql);
        return $product;
    }

    // Login
    public function login($username, $password){
        $md5pw = md5("maixep".$password."abc");
        $sql = 'SELECT * FROM `user` WHERE `name` = "'.$username.'" AND `password` = "'.$md5pw.'"';
        $product = $this->select($sql);
        return $product;
    }
    public function admin($id){
        $sql = 'SELECT * FROM `user` WHERE `id` = '.$id;
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }
    public function Updateadmin($id,$fullname,$email,$gender,$address){
        $sql = 'UPDATE `user` SET `fullname`="'.$fullname.'",`email`="'.$email.'",`gender`="'.$gender.'",`address`="'.$address.'" WHERE id = '.$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product;
    }
    public function UpdatePassword($id,$password){
        $pass = md5("maixep".$password."abc");
        $sql = 'UPDATE `user` SET `password`="'.$pass.'" WHERE id = '.$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product;
    }
    //thông tin Liên hệ

    public function getAllThongTinLienHe(){
        $sql = 'SELECT * FROM `table_lienhe_user`';
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }
    public function getAllThongTinLienHeByHienThi(){
        $sql = 'SELECT * FROM `table_lienhe_user` WHERE `xacnhan` = 0';
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }
    public function getAllThongTinLienHeById($id){
        $ds = 'SELECT id FROM table_lienhe_user';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            
            if($id == $md5id){
            // var_dump($id);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_lienhe_user` WHERE id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->select($sql);
            return $product;
            }
        }
        
    }
    public function UpdateThongTinLienHe($id,$name, $sdt,$diachi,$email,$chude,$noidung,$file){

        $ds = 'SELECT id FROM table_lienhe_user';
        $dss = $this->select($ds);
        $nd = str_replace('"',"'",$noidung);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            
            if($id == $md5id){
            // var_dump($id);
            // var_dump($md5id);die();
            $sql = 'UPDATE `table_lienhe_user` SET `name`= "'.$name.'",`sđt`= "'.$sdt.'",`address`= "'.$diachi.'",`email`= "'.$email.'",`chude`="'.$chude.'",`noidung`= "'.$nd.'",`file`= "'.$file.'",`ngaytao`="'.date("Y-m-d").'" WHERE `id` =' .$vd['id'];
            // echo($sql);die();
            $product = $this->update($sql);
            return $product;
            }
        }
        
    }
    public function DeleteThongTinLienHe($id){
        $ds = 'SELECT id FROM table_lienhe_user';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            $md5id = md5($vd['id'] . "maixep");
            if($id == $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
            $sql = 'DELETE FROM `table_lienhe_user` WHERE  id = '.$vd['id'];
            // echo($sql);die();
            $product = $this->delete($sql);
            return $product;
            }
        }
    
    }
    public function updateXacNhanThongTinLienHe($id){
        $sql = "UPDATE `table_lienhe_user` SET `xacnhan`= 1 WHERE `id` = " .$id;
        $product = $this->update($sql);
        return $product; 
    }
    public function updateXacNhanBangKhongThongTinLienHe($id){
        $sql = "UPDATE `table_lienhe_user` SET `xacnhan`= 0 WHERE `id` = " .$id;
        // echo($sql);die();
        $product = $this->update($sql);
        return $product; 
    }
    // thiet lap thong tin
    public function updateThieLapThongTin($diachi,$email,$hotline,$dienthoai,$zalo,$wbsite,$fanpage,$toado,$google_map,$google_analytics,$google_webmaster,$head_js,$Body_js,$tieude,$seo_title,$seo_keyword,$seo_description){
        $analytics = str_replace('"',"'",$google_analytics);
        $webmaster = str_replace('"',"'",$google_webmaster);
        $map = str_replace('"',"'",$google_map);
        $sql = 'UPDATE `thongtin` SET `diachi`="'.$diachi.'",`email`="'.$email.'",`hotline`="'.$hotline.'",`dienthoai`="'.$dienthoai.'",`zalo`="'.$zalo.'",`wbsite`="'.$wbsite.'",`fanpage`="'.$fanpage.'",`toado`="'.$toado.'",`google_map`= "'.$map.'",`google_analytics`="'.$analytics.'",`google_webmaster`="'.$webmaster.'",`head_js`="'.$head_js.'",`Body_js`="'.$Body_js.'",`tieude`="'.$tieude.'",`seo_title`="'.$seo_title.'",`seo_keyword`="'.$seo_keyword.'",`seo_description`="'.$seo_description.'" WHERE `id` = 1';

        // echo($sql);die();
        $product = $this->update($sql);
        // echo($product);die();
        return $product; 
    }
    public function GetAllThietLapThongTin(){
        $sql = 'SELECT * FROM `thongtin`';
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }

    public function getAllCouter(){
        $sql = 'SELECT * FROM `table_counter` ';
        $product = $this->select($sql);
        return $product;
    }

    public function getAllCountByMonth($month,$year){
        // echo($month);die();
        $ds = 'SELECT * FROM table_counter';
        $dss = $this->select($ds);
        foreach($dss as $vd){
            // $dates = date('m',$vd['date']) ;
            // echo($vd['Year']);die();
            if($month == $vd['month'] && $year == $vd['Year']){
            // var_dump($month);
            // var_dump($vd['month']);die();

            $sql = 'SELECT * FROM `table_counter` WHERE `month` = '.$month.' AND `Year` = '.$year.'';
            // echo($sql);die();
            $product = $this->select($sql);
            return $product;
            }
        }
        
        
        
    }
}