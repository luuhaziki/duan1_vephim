<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Trang chủ</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Tìm kiếm">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lý tài khoản</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Danh sách tài khoản</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Sửa tài khoản</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Tải xuống PDF</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Sửa tài khoản</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="form-label">Firth Name</label>
                        <input type="text" class="form-control first blurinp" name="firth_name" value="<?=$user['firth_name']?>">
                        <small class="error er_firstname"></small>
                    </div>
                    <div class="form-group">
                        <label onclick="" for="" class="form-label">Last Name</label>
                        <input type="text" class="form-control last blurinp" name="last_name" value="<?=$user['last_name']?>">
                        <small class="error er_lastname"></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ảnh</label>
                        <input type="file" class="upFile form-control" name="user_image">
                        <img src="../public/upload/image/user/<?=$user['user_image']?>" width="100px" height="100px" style="border-radius: 50%;object-fit: cover" alt="">
                        <small class="error "></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control email blurinp" name="email" value="<?=$user['email']?>">
                        <small class="error er_email"></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control phone blurinp" name="phone" value="<?=$user['phone']?>">
                        <small class="error er_phone"></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control password blurinp" name="password" value="<?=$user['password']?>">
                        <small class="error er_pass"></small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Sửa tài khoản">
                        <a href="index.php?action=listCustomer" class="btn btn-dark">Danh sách</a>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>
<!--<script src="../public/js/Admin_pro.js"></script>-->
<script src="../js/customModel.js"></script>
<!-- CONTENT -->