<?php
function doanhThuGanDay($day){
    $sql="SELECT SUM(p.price * dv.so_ve) AS tong_cong
    FROM datve dv
    JOIN phim p
    ON dv.ma_phim =p.ma_phim
    WHERE dv.ngay_dat_ve >= DATE_SUB(NOW(), INTERVAL $day DAY)";
    return pdo_query_one($sql)['tong_cong'];
}
function totalCustomer(){
    $sql="SELECT COUNT(ma_nguoi_dung) AS tong_cong FROM nguoidung";
    return pdo_query_one($sql)['tong_cong'];
}
function donHangGanDay($day){
    $sql="SELECT nd.ten_dang_nhap,p.* ,dv.so_phong, dv.so_ghe, dv.so_ve, DATE(dv.ngay_dat_ve) AS ngay_dat_ve, p.price * dv.so_ve AS tong_cong
    FROM datve dv
    JOIN nguoidung nd ON dv.ma_nguoi_dung= nd.ma_nguoi_dung
    JOIN phim p ON dv.ma_phim=p.ma_phim
    WHERE dv.ngay_dat_ve >= DATE_SUB(NOW(), INTERVAL $day DAY)";
    return pdo_query($sql);
}

