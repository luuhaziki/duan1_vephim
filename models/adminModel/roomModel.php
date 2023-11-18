<?php
function allRoom(){
    $sql="SELECT * FROM phong";
    return pdo_query($sql);
}
function getRoomById($ma_phong){
    $sql="SELECT * FROM phong WHERE ma_phong=$ma_phong";
    return pdo_query_one($sql);
}
function addRoom($ten_phong,$so_luong_ghe){
    $sql="INSERT INTO `phong` (`ten_phong`, `so_luong_ghe`) VALUES ('$ten_phong', '$so_luong_ghe')";
    return pdo_execute_returnLastInsertId($sql);
}
function editRoom($ma_phong,$ten_phong){
    $sql="UPDATE phong SET ten_phong='$ten_phong' WHERE ma_phong=$ma_phong";
    pdo_execute($sql);
}
function deleteRoom($ma_phong){
    $sql="DELETE FROM phong WHERE ma_phong=$ma_phong";
    pdo_execute($sql);
}
function addGhe($so_ghe,$ma_phong){
    $sql="INSERT INTO `ghe` (`so_ghe`, `ma_phong`) VALUES ($so_ghe, $ma_phong)";
    pdo_execute($sql);
}