<?php
function getAccById($acc_id){
    $sql="SELECT * FROM nguoidung WHERE ma_nguoi_dung=$acc_id";
    return pdo_query_one($sql);
}
function allAccount(){
    $sql="SELECT * FROM nguoidung";
    return pdo_query($sql);
}
function addAccount($ten_dang_nhap,$mat_khau,$email){
    $sql="INSERT INTO `nguoidung` (`ten_dang_nhap`, `mat_khau`, `email`) VALUES 
    ('$ten_dang_nhap', '$mat_khau', '$email')";
    pdo_execute($sql);
}
function updateAccount($acc_id,$ten_dang_nhap,$mat_khau,$email){
    $sql="UPDATE nguoidung SET ten_dang_nhap='$ten_dang_nhap',mat_khau='$mat_khau',email='$email' WHERE ma_nguoi_dung=$acc_id";
    pdo_execute($sql);
}
function deleteAccount($acc_id){
    $sql="DELETE FROM nguoidung WHERE ma_nguoi_dung=$acc_id";
    pdo_execute($sql);
}
