<?php
include '../models/pdo.php';
include '../models/adminModel/categoryModel.php';
include '../models/adminModel/phimModel.php';
include '../models/adminModel/dashboardModel.php';
include '../models/adminModel/orderModel.php';

$action = $_GET['action'] ?? 'dashboard';

include 'partitions/header.php';
include 'partitions/sideBar.php';

$listCategory = listDanhmuc();

switch ($action) {
    case 'dashboard':
        $day=3;
        $totalPrice=doanhThuGanDay($day);
        $donHangGanDay=donHangGanDay($day);
        $totalCustomer=totalCustomer();

        include 'dashboard.php';
        break;

    // list
    case 'listProduct':
        $listProduct = listProduct();
        include 'product/listProduct.php';
        break;

    case 'listCategory':
        
        include 'category/listCategory.php';
        break;

    case 'listOrder':
        $allOrder=allOrder();
        include 'order/listOrder.php';
        break;

    case 'listOrder_detail':
       
        include 'order/listOrder_detail.php';
        break;
    case 'listComment_statistical':
        
        include 'comment/listComment_statistical.php';
        break;
    case 'listComment':
        $product_id=$_GET['product_id']??0;
       
        include 'comment/listComment.php';
        break;

    case 'listCustomer':
       
        include 'customer/listCustomer.php';
        break;


    //add
    case 'addProduct':
        if (isset($_POST['addProduct'])) {
            $filename = time() . basename($_FILES['image']['name']);
            $target = "../public/upload/" . $filename;
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

            $ma_phim = insert__phim($_POST['tenphim'],$filename,$_POST['date'],$_POST['daodien'],$_POST['thoigian'],$_POST['selectCategory']);
            foreach ($_POST['lich_chieu'] as $lichChieu){
                addLichChieu($ma_phim,$lichChieu);
            }
            
//            header('location: index.php?action=listProduct');
            die;
        }
        include 'product/addProduct.php';
        break;


    case 'addCategory':
        if (isset($_POST['addcategory'])) {
            addCategory($_POST['theloai']);
            header('location: index.php?action=listCategory');
        }

        include 'category/addCategory.php';
        break;


    case 'addCustomer':
        if (isset($_POST['addUser'])) {
            $path = "../public/upload/image/user/";
            move_uploaded_file($_FILES['user_image']['tmp_name'], $path . $_FILES['user_image']['name']);
            // addData('users', [
            //     'firth_name' => $_POST['firth_name'],
            //     'last_name' => $_POST['last_name'],
            //     'user_image' => $_FILES['user_image']['name'],
            //     'email' => $_POST['email'],
            //     'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
            //     'phone' => $_POST['phone'],
            // ]);
            header("location: index.php?action=listCustomer");
        }
        
        include 'customer/addCustomer.php';
        break;


    //edit
    case 'editProduct':
        if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
            $idProduct = $_GET['id_product'];
            $lichChieu=allLichChieu($idProduct);
            // Lấy ra 1 sản phẩm edit theo id
            $productInfo = selectIdproduct($idProduct);
        } else {
            $idProduct = "";
            $productInfo = "";
        }
        $filename='';
        if (isset($_POST['updatePro'])) {
            $oldImage = $_POST['oldImage'];

            if ($_FILES['image']['name']) {

                $filename = time() . basename($_FILES['image']['name']);
                $target = "../public/upload/" . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], $target);

            }

            updateProduct($_POST['id'],$_POST['tenphim'],$filename ? $filename : $oldImage,$_POST['date'],$_POST['daodien'],$_POST['thoigian'],$_POST['selectCategory']);
            $maSuatChieu=$_POST['ma_suat_chieu'];
            $suatChieu=$_POST['lich_chieu'];
            $length=9999;
//            echo "<pre>";
//            print_r($_POST);
//            echo "</pre>";

            for ($i = 0; $i < $length; $i++) {
                //nếu cả 2 tồn tại update
                if (isset($maSuatChieu[$i]) && isset($suatChieu[$i])) {
                    updateLichChieu($maSuatChieu[$i],$suatChieu[$i]);
                }
                if (!isset($maSuatChieu[$i]) && isset($suatChieu[$i])) {
                    addLichChieu($_POST['id'],$suatChieu[$i]);
                    $length=count($suatChieu);
                }
                if(!isset($suatChieu[$i])&&isset($maSuatChieu[$i])) {
                    deleteLichChieu($maSuatChieu[$i]);
                    $length=count($maSuatChieu);
                }


            }
            header('location: index.php?action=listProduct');
            die;
        }

        include 'product/editProduct.php';
        break;


    case 'editCategory':
        if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
            $categoryId = $_GET['category_id'];
            $succesEditCate = editCategory($categoryId);
        } else {
            $categoryId = "";
            $succesEditCate = "";
        }

        if (isset($_POST['updateCate'])) {
            $id = $_POST['id'];

            updateCategory($id,$_POST['theloai']);
            header('location: index.php?action=listCategory');
        }

        include 'category/editCategory.php';
        break;
    case 'editComment':
        include './comment/editComment.php';
        break;

    case 'editCustomer':
        // $user = getDataBy('users', [
        //     'user_id' => $_GET['user_id']
        // ]);

        // if (isset($_POST['firth_name'])) {
        //     $path = "../public/upload/image/user/";
        //     move_uploaded_file($_FILES['user_image']['tmp_name'], $path . $_FILES['user_image']['name']);
        //     updateData('users', [
        //         'firth_name' => $_POST['firth_name'],
        //         'last_name' => $_POST['last_name'],
        //         'user_image' => $_FILES['user_image']['name'] !='' ? $_FILES['user_image']['name']:  $user['user_image'],
        //         'email' => $_POST['email'],
        //         'password' => $_POST['password']==$user['password']?$_POST['password']:password_hash($_POST['password'],PASSWORD_DEFAULT),
        //         'phone' => $_POST['phone'],
        //     ], "user_id=" . $_GET['user_id']);
        //     header("location: index.php?action=listCustomer");
        // }

        include 'customer/editCustomer.php';
        break;

    // Delete
    case 'deleteCustomer':
        // deleteData("users", "user_id=" . $_GET['user_id']);
        header("location:index.php?action=listCustomer");
        break;


    case 'deleteProduct':
        if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
            $idProduct = $_GET['id_product'];
            // Lấy ra 1 sản phẩm edit theo id
        } else {
            $idProduct = "";
        }
        
        
        deleteProduct($idProduct);
        header('location: index.php?action=listProduct');
        break;
    case 'deleteCategory':
        if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
            $categoryId = $_GET['category_id'];

            deleteCategory($categoryId);

            header('location: index.php?action=listCategory');
        } else {
            $categoryId = "";
        }
    case 'deleteComment':
        $comment_id=$_GET['comment_id']??0;
        // deleteData('comments','comment_id='.$comment_id);
        header("Location: ".$_SERVER['HTTP_REFERER']);
        break;

    //other
    case 'order_detail':


    default:
        include 'dashboard.php';
}
include 'partitions/footer.php';
