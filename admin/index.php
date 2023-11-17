<?php
include '../models/pdo.php';
include '../models/adminModel/categoryModel.php';

$action = $_GET['action'] ?? 'dashboard';

include 'partitions/header.php';
include 'partitions/sideBar.php';



switch ($action) {
    case 'dashboard':

        include 'dashboard.php';
        break;

    // list
    case 'listProduct':
        
        include 'product/listProduct.php';
        break;

    case 'listCategory':
        $listCategory = listDanhmuc();
        include 'category/listCategory.php';
        break;

    case 'listOrder':
      
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
            $namePro = $_POST['namePro'];
            $image = $_FILES['image']['name'];
            $pricePro = $_POST['pricePro'];
            $sale = $_POST['sale'];
            $selectCategory = $_POST['selectCategory'];
            $color = $_POST['color'];
            $size = $_POST['size'];
            $amount = $_POST['amount'];
            $product_gender = $_POST['product_gender'];

            insert__phim($tenphim,$image,$date,$theloai,$daodien,$thoigian);

            $uploadedImages = array();

            foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                $filename = time() . basename($_FILES['image']['name'][$key]);
                $target = "../public/upload/image/product/" . $filename;

                if (move_uploaded_file($tmp_name, $target)) {
                    $uploadedImages[] = $filename;
                }
            }

            $filename = implode(",", $uploadedImages);

            // $product_id = addProduct($namePro, $pricePro, $sale, $filename, $product_gender, $selectCategory);

            for ($i = 0; $i < count($color); $i++) {
                // addVation($product_id, $color[$i], $size[$i], $amount[$i]);
            }

            header('location: index.php?action=listProduct');
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

            // Lấy ra 1 sản phẩm edit theo id
            // $productInfo = selectIdproduct($idProduct);

            // Lấy danh sách biến thể của sản phẩm cụ thể theo id
            // $listVariations = getVariationsByProductId($idProduct);
        } else {
            $idProduct = "";
            $productInfo = "";
            $listVariations = array();
        }

        if (isset($_POST['updatePro'])) {
            $id = $_POST['id'];
            $variant_id = $_POST['variant_id'];
            $namePro = $_POST['namePro'];
            $pricePro = $_POST['pricePro'];
            $sale = $_POST['sale'];
            $selectCategory = $_POST['selectCategory'];
            $color = $_POST['color'];
            $size = $_POST['size'];
            $amount = $_POST['amount'];
            $product_gender = $_POST['product_gender'];
            $oldImage = $_POST['oldImage'];

            if ($_FILES['image']['name']) {
                $uploadedImages = array();

                foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                    $filename = time() . basename($_FILES['image']['name'][$key]);
                    $target = "../public/upload/image/product/" . $filename;

                    if (move_uploaded_file($tmp_name, $target)) {
                        $uploadedImages[] = $filename;
                    }
                }

                $filename = implode(",", $uploadedImages);

            }

            if ($oldImage !== "" && $filename !== "") {
                $oldImage = $oldImage . ",";
            }

            // $product_id = updateProduct($id, $namePro, $pricePro, $sale, $filename ? $oldImage . $filename : $oldImage, $product_gender, $selectCategory);

            $length=9999;

            // for ($i = 0; $i < $length; $i++) {
            //     //nếu cả 2 tồn tại
            //     if (isset($variant_id[$i]) && isset($color[$i])) {
            //         updateVation($variant_id[$i], $color[$i], $size[$i], $amount[$i]);
            //     }

            //     if (!isset($variant_id[$i]) && isset($color[$i])) {
            //         addVation($id, $color[$i], $size[$i], $amount[$i]);
            //         $length=count($color);
            //     }
                
            //     if(!isset($color[$i])&&isset($variant_id[$i])) {
            //         deleteVation($variant_id[$i]);
            //         $length=count($variant_id);
            //     }


            // }

            header('location: index.php?action=listProduct');
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
        // if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
        //     $productId = $_GET['id_product'];

        //     $selectImage = selectIdproduct($productId);

        //     $selectImage = explode(",", $selectImage['images']);

        //     // echo "<pre>";
        //     // print_r($selectImage);


        //     foreach ($selectImage as $valueTarget) {
        //         $target = "../public/upload/image/product/" . $valueTarget;
        //         unlink($target);
        //     }

        //     deleteProduct($productId);
        //     header('location: index.php?action=listProduct');
        // } else {
        //     $productId = "";
        // }

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
