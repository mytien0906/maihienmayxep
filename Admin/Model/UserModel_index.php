<?php
require_once ('BaseModel_index.php');

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
    public function selectNameDS($id_ds){
        $sql = "SELECT `id`,`tenvi` FROM `table_product_list` WHERE table_product_list.id= ".$id_ds;
        $product = $this->select($sql);
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
    public function selectSpTheoListId($id_list){
        $pro = 'SELECT id FROM table_product';
        $pros = $this->select($pro);
        // var_dump($id_pro);die();
        foreach($pros as $pr){
            $md5id = md5($pr['id'] . "maixep");
            // var_dump($md5id);die();
            if($id_list == $md5id){
            //     var_dump($id_pro);
            // var_dump($md5id);die();
            $sql = 'SELECT * FROM `table_product` WHERE `id_list` = '.$pr['id'].' LIMIT 3';
            $product = $this->select($sql);
            return $product;
            }
        }
       
    }
    public function getproductbyIdlist($id_loai){
        $sql = 'SELECT * FROM `table_product` WHERE  id_list = '.$id_loai;
        // echo($sql);die();
        $product = $this->select($sql);
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
            
            if($id = $md5id){
            //     var_dump($id);
            // var_dump($md5id);die();
                $sql = 'SELECT * FROM `table_video` WHERE  video_id = '.$vd['video_id'];
                $product = $this->select($sql);
            }
        }
        
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
    
    // Mang xh
    public function getAllMangXH(){
        $sql = 'SELECT * FROM `table_mxh`';
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
// footer
    public function getfooterhbyId(){
        $sql = 'SELECT * FROM `footer`';
            $product = $this->select($sql);
            return $product;
    }
    // logo
    public function getlogobyId(){
        $sql = 'SELECT * FROM `logo`';
            $product = $this->select($sql);
            return $product;
    }
    // Gioi thieu
    public function getGioiThieuhbyId(){
        $sql = 'SELECT * FROM `table_gioithieu` WHERE  id = 1';
            $product = $this->select($sql);
            return $product;
    }
    // lienhe
    public function getlienhehbyId(){
        $sql = 'SELECT * FROM `lienhe`';
            $product = $this->select($sql);
            return $product;
    }
    // Thong tin lien he
    public function insertThongtinlienhe($name, $sdt,$diachi,$email,$chude,$noidung,$file){
        $date = date("Y-m-d");
        $sql = "INSERT INTO `table_lienhe_user`( `name`, `sđt`, `address`, `email`, `chude`, `noidung`, `file`, `ngaytao`) VALUES ('$name','$sdt','$diachi','$email','$chude','$noidung','$file','$date')";
        // echo($sql);die();
        $product = $this->insert($sql);
        return $product;
    }
    // thonong tin thiết lập
    public function GetAllThietLapThongTin(){
        $sql = 'SELECT * FROM `thongtin`';
        // echo($sql);die();
        $product = $this->select($sql);
        return $product;
    }
}