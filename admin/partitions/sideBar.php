<!-- SIDEBAR -->
<section id="sidebar" class="">
    <a href="#" class="brand logo__admin">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul style="padding-left: 0" class="side-menu top">
        <li class="<?=$action=='dashboard' ?'active':''?>">
            <a href="index.php?action=dashboard">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Thống kê trang web</span>
            </a>
        </li>
        <li class="<?=$action=='listProduct'|| $action=='addProduct' || $action=='editProduct' ?'active':''?>">
            <a href="index.php?action=listProduct">
                <i class='bx bxl-product-hunt'></i>
                <span class="text">Quản lí phim</span>
            </a>
        </li>
        <li class="<?=$action=='listCategory' || $action=='addCategory' || $action=='editCategory' ?'active':''?>">
            <a href="index.php?action=listCategory">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Quản lí thể loại</span>
            </a>
        </li>
        <li class="<?=$action=='listCustomer' || $action=='addCustomer' || $action=='editCustomer' ?'active':''?>">
            <a href="index.php?action=listCustomer">
                <i class='bx bxs-group' ></i>
                <span class="text">Quản lí tài khoản</span>
            </a>
        </li>
        <li class="<?=$action=='listOrder' || $action=='listOrder_detail' ?'active':''?>">
            <a href="index.php?action=listOrder">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Quản lí đặt vé</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu px-0">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Cài đặt</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Đăng xuất</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
