<?php
    ob_start();
    session_start();

    include "models/pdo.php";
    include "models/userModel/phimModel.php";
    include "models/userModel/theloaiModel.php";
    include "models/userModel/binhluanModel.php";

    // Phim
    $list_theloai = list_theloai();
    $list_phim = list_phim();

    if(isset($_GET['action'])) {

        if($_GET['action'] == "seat_booking") {
            if(isset($_GET['id_phim']) && ($_GET['id_phim'] > 0)) {
                $idPhim = $_GET['id_phim'];
                $chitietphim = chitiet_phim($idPhim);
                $listtime = list_time_seatBooking($idPhim);
                $timePage = time_page($_GET['time'] ?? $listtime[0]['ma_suat_chieu']);
                $listGhe = load_ghe();
            } else {
                $idPhim = "";
            }


            include "views/seat_booking.php";
        } else if($_GET['action'] == "thanh_toan") {

            $_GET['id_chieu'] = $_GET['id_chieu'] ?? $_POST['id_chieu'];
            $_GET['id_phim'] = $_GET['id_phim'] ?? $_POST['id_phim'];

            $idchieu = $_POST['id_chieu'] ?? $_GET['id_chieu'];
            $idphim = $_POST['id_phim'] ?? $_GET['id_phim'];
            
            $load_xuatchieu = select_suatchieu($idchieu);
            $load_phim = select_phim($idphim);

            
            if(isset($_POST['xacnhan'])) {

                foreach(explode(",",$_POST['ghe2']) as $value) {
                    datcho($value);
                }

                datve(2,$_POST['id_phim'],$_POST['id_chieu'],$_POST['ghe2'],$_POST['quantity']);

                echo "<script>alert('Đặt vé thành công!')</script>";
                echo "<script>setTimeout(function() {window.location.href = 'index.php'}, 2000)</script>";
                
            }

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
                    if(isset($_GET['id_phim']) && ($_GET['id_phim'] > 0)) {
                        $idPhim = $_GET['id_phim'];
                        $chitietphim = chitiet_phim($idPhim);
                        $listtime = list_time_suatchieu($idPhim);
                        $timePage = time_page($_GET['time'] ?? $listtime[0]['ma_suat_chieu']);
                        $load_all_comment = loadall__comment__Byid($idPhim);
                    } else {
                        $idPhim = "";
                    }

                    if($_SERVER['REQUEST_METHOD'] == "POST") {
                        insert_binhluan(2,$_POST['productid'],$_POST['noidung']);
                        header('Location'.$_SERVER['HTTP_REFERER']);
                    }

                    include "views/chitietphim.php";
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