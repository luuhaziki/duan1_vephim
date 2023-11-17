<?php
function allOrder(){
    $sql="SELECT nd.ten_dang_nhap,p.* ,dv.so_phong, dv.so_ghe, dv.so_ve, DATE(dv.ngay_dat_ve) AS ngay_dat_ve, p.price * dv.so_ve AS tong_cong
    FROM datve dv
    JOIN nguoidung nd ON dv.ma_nguoi_dung= nd.ma_nguoi_dung
    JOIN phim p ON dv.ma_phim=p.ma_phim";
    return pdo_query($sql);
}