<?php
    function insert__phim($tenphim,$image,$date,$mota,$daodien,$thoigian,$theloai) {
        $sql = "INSERT INTO phim (`ten_phim`,`image_phim`,`ngay_phat_hanh`,`mo_ta`,`dao_dien`,`thoi_luong_phut`,`ma_theloai`)
        VALUES ('$tenphim','$image','$date','$mota','$daodien','$thoigian','$theloai')";
        // die($sql);
        return pdo_execute_returnLastInsertId($sql);
    }

    function listProduct() {
        $sql = "SELECT 
                    phim.ma_phim,
                    phim.ten_phim,
                    phim.image_phim,
                    phim.ngay_phat_hanh,
                    phim.dao_dien,
                    phim.thoi_luong_phut,
                    phim.ma_theloai,
                    theloai.ma_theloai,
                    theloai.ten_theloai
                FROM 
                    phim
                INNER JOIN
                    theloai ON phim.ma_theloai = theloai.ma_theloai WHERE 1 ORDER BY phim.ma_phim DESC;
                ";
        $result = pdo_query($sql);
        return $result;
    }

    function selectIdproduct($id) {
        $sql = "SELECT
                    phim.ma_phim,
                    phim.ten_phim,
                    phim.image_phim,
                    phim.ngay_phat_hanh,
                    phim.mo_ta,
                    phim.dao_dien,
                    phim.thoi_luong_phut,
                    phim.ma_theloai,
                    theloai.ma_theloai,
                    theloai.ten_theloai
                FROM 
                    phim
                INNER JOIN
                    theloai ON phim.ma_theloai = theloai.ma_theloai WHERE phim.ma_phim = '$id'";
                    
        $result = pdo_query_one($sql);
        return $result;
    }


    // Update sản phẩm
    function updateProduct($id,$tenphim,$image,$date,$mota,$daodien,$thoigian,$theloai) {
        $sql = "UPDATE phim SET ten_phim='".$tenphim."',image_phim='".$image."',ngay_phat_hanh='".$date."',mo_ta='".$mota."',dao_dien='".$daodien."',thoi_luong_phut='".$thoigian."',ma_theloai='".$theloai."'
            WHERE ma_phim = '$id'";

        return pdo_execute($sql);
    }

    // Delete Sản Phẩm
    function deleteProduct($id) {
        $sql = "DELETE FROM phim WHERE ma_phim = '$id'";
        pdo_execute($sql);
    }
    function addLichChieu($ma_phim,$thoi_gian_chieu){
        $sql="INSERT INTO suatchieu(ma_phim,thoi_gian_chieu) VALUES ('$ma_phim','$thoi_gian_chieu')";
        pdo_execute($sql);
    }
    function allLichChieu($ma_phim){
        $sql="SELECT * FROM suatchieu WHERE ma_phim=$ma_phim";
        return pdo_query($sql);
    }
    function deleteLichChieu($ma_lich_chieu){
        $sql="DELETE FROM suatchieu WHERE ma_suat_chieu=$ma_lich_chieu";
        pdo_execute($sql);
    }
    function updateLichChieu($ma_lich_chieu,$thoi_gian_chieu){
        $sql="UPDATE suatchieu SET thoi_gian_chieu='$thoi_gian_chieu' WHERE ma_suat_chieu=$ma_lich_chieu";
        pdo_execute($sql);
    }

?>