<?php
include "../../models/PDO_admin.php";
// check email
if(isset($_GET['email'])){
    if(getDataBy('users',[
        'email'=>$_GET['email']
    ])){
        echo 'đã có người dùng email này';
    }else{
        echo '';
    }
}
if(isset($_GET['phone'])){
    if(getDataBy('users',[
        'phone'=>$_GET['phone']
    ])){
        echo 'Đã có người dùng số điện thoại này';
    }else{
        echo '';
    }
}

