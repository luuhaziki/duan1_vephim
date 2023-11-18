<?php
    ob_start();
    session_start();

    include "models/pdo.php";
    include "models/userModel/phimModel.php";
    include "models/userModel/theloaiModel.php";

    $list_theloai = list_theloai();

    if(isset($_GET['action'])) {

        if($_GET['action'] == "seat_booking") {
            include "views/seat_booking.php";
        } else if($_GET['action'] == "thanh_toan") {
            include "views/thanhtoan.php";
        } else {
            if(isset($_GET['action']) == "") {
                include "views/header.php";
                include "views/slider.php";
            } else {
                include "views/header.php";
            }
            
            $action = $_GET['action'] ?? include "views/home.php";
        
            switch($action) {
                case 'home':
                    $listphim = list_phim();
                    include "views/home.php";
                    include "views/slider.php";
                    break;
                case 'movie_category':
                    include "views/movie_category.php";
                    break;
                case 'chi_tiet_phim':
                    include "views/chitietphim.php";
                    break;
                case 'home':
                    break;
                case 'home':
                    break;
                case 'home':
                    break;
            }
        
            include "views/footer.php";
        }
        
        
    } else {
        include "views/header.php";
        include "views/slider.php";
        include "views/home.php";
        include "views/footer.php";
    }

    

?>