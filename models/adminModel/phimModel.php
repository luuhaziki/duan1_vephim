<?php
    function insert__phim($tenphim,$image,$date,$daodien,$thoigian,$theloai) {
        $sql = "INSERT INTO phim (`ten_phim`,`image_phim`,`ngay_phat_hanh`,`dao_dien`,`thoi_luong_phut`,`ma_theloai`)
        VALUES ('$tenphim','$image','$date','$daodien','$thoigian','$theloai')";
        // die($sql);
        pdo_execute($sql);
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
                    theloai ON phim.ma_phim = theloai.ma_theloai WHERE 1 ORDER BY phim.ma_phim DESC;
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
    function updateProduct($id,$tenphim,$image,$date,$daodien,$thoigian,$theloai) {
        $sql = "UPDATE phim SET ten_phim='".$tenphim."',image_phim='".$image."',ngay_phat_hanh='".$date."',dao_dien='".$daodien."',thoi_luong_phut='".$thoigian."',ma_theloai='".$theloai."'
            WHERE ma_phim = '$id'";

        return pdo_execute($sql);
    }

    // Delete Sản Phẩm
    function deleteProduct($id) {
        $sql = "DELETE FROM phim WHERE ma_phim = '$id'";
        pdo_execute($sql);
    }

?>