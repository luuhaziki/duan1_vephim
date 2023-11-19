<?php

    // Select Danh sách phim
    function list_phim() {
        $sql = "SELECT 
                    phim.ma_phim,
                    phim.ten_phim,
                    phim.image_phim,
                    theloai.ma_theloai,
                    theloai.ten_theloai
                FROM 
                    phim 
                INNER JOIN
                    theloai ON phim.ma_theloai = theloai.ma_theloai
                WHERE 1 ORDER BY ma_phim DESC";
        return pdo_query($sql); 
    }

    // Chi tiết phim by id
    function chitiet_phim($id) {
        $sql = "SELECT 
                    phim.ma_phim,
                    phim.price,
                    phim.ten_phim,
                    phim.image_phim,
                    phim.ngay_phat_hanh,
                    phim.mo_ta,
                    phim.dao_dien,
                    phim.thoi_luong_phut,
                    theloai.ma_theloai,
                    theloai.ten_theloai,
                    suatchieu.ma_suat_chieu,
                    suatchieu.ma_phim,
                    suatchieu.thoi_gian_chieu 
                FROM
                    phim
                INNER JOIN
                    theloai ON phim.ma_theloai = theloai.ma_theloai
                INNER JOIN
                    suatchieu ON suatchieu.ma_phim = phim.ma_phim
                WHERE phim.ma_phim = $id
        ";
        return pdo_query_one($sql);
    }

    function list_time_suatchieu($id_maphim) {
        $sql = "SELECT 
                    ma_suat_chieu,
                    ma_phim,
                    thoi_gian_chieu,
                    LEFT(DATE_FORMAT(thoi_gian_chieu, '%W'), 3) AS thu,
                    DAY(thoi_gian_chieu) AS ngay
                FROM 
                    suatchieu
                WHERE
                    ma_phim = '$id_maphim'";
        return pdo_query($sql);
    }

    function list_time_seatBooking($id_maphim) {
        $sql = "SELECT 
                    ma_suat_chieu,
                    ma_phim,
                    thoi_gian_chieu,
                    DAYNAME(thoi_gian_chieu) AS thu,
                    DAY(thoi_gian_chieu) AS ngay,
                    TIME(thoi_gian_chieu) AS time,
                    MONTHNAME(thoi_gian_chieu) AS thang,
                    YEAR(thoi_gian_chieu) AS nam
                FROM 
                    suatchieu
                WHERE
                    ma_phim = '$id_maphim'";
        return pdo_query_one($sql);
    }

    function time_page($id_time) {
        $sql = "SELECT 
                    suatchieu.ma_suat_chieu,
                    suatchieu.ma_phim,
                    suatchieu.thoi_gian_chieu,
                    TIME(thoi_gian_chieu) AS time,
                    phim.price
                FROM 
                    suatchieu
                INNER JOIN
                    phim ON suatchieu.ma_phim = phim.ma_phim
                WHERE 
                    ma_suat_chieu = $id_time";
        return pdo_query_one($sql);
    }

    function load_ghe() {
        $sql = "SELECT * FROM ghe";
        return pdo_query($sql);
    }

    function datve($ma_nguoidung,$ma_phim,$ma_suat_chieu,$so_ghe,$so_ve) {
        $sql = "INSERT INTO `datve`(`ma_nguoi_dung`, `ma_phim`, `ma_suat_chieu`, `so_ghe`, `so_ve`) 
                VALUES 
                ('$ma_nguoidung','$ma_phim','$ma_suat_chieu','$so_ghe','$so_ve')";
        pdo_execute($sql);
    }


    function select_suatchieu($id_xuatchieu) {
        $sql = "SELECT 
                    thoi_gian_chieu,
                    TIME(thoi_gian_chieu) as time
                FROM suatchieu WHERE ma_suat_chieu = $id_xuatchieu";
        return pdo_query_one($sql);
    }

    function select_phim($idPhim) {
        $sql = "SELECT * FROM phim WHERE ma_phim = $idPhim";
        return pdo_query_one($sql);
    }

    
    // function check_cho($so_ghe) {
    //     $sql = "SELECT ghe SET trang_thai = 'da_dat' WHERE so_ghe = '$so_ghe'";
    //     pdo_execute($sql);
    // }

    function datcho($so_ghe) {
        $sql = "UPDATE ghe SET trang_thai = 'da_dat' WHERE so_ghe = '$so_ghe'";
        pdo_execute($sql);
    }

?>