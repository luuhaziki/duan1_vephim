<?php
function allRoom(){
    $sql="SELECT * FROM ghe";
    return pdo_query($sql);
}
function addGhe($so_ghe){
    $sql="INSERT INTO `ghe` (`so_ghe`) VALUES ($so_ghe)";
    pdo_execute($sql);
}