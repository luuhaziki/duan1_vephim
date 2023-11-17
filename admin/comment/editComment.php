

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Danh mục</a>
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
                <h1>Quản lý bình luận</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Danh sách bình luận</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Sửa bình luận</a>
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
                    <h3>Sửa bình luận</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>

                <form action="index.php?action=editCategory&category_id=" onsubmit="return sendCategory()" method="post">
                    <div class="form__cateadd">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label class="form-label">Nội dung bình luận</label>
                            <input type="text" value="" name="danhmuc" class="form-control danhmuc">
                        </div>
                        <div class="error error_category"></div>
                        <div class="form-group mg_tb">
                            <input class="btn btn-primary" type="submit" name="updateCate" value="Cập nhật bình luận">
                            <a href="index.php?action=listCategory" class="btn btn-dark">Danh sách</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>
<script src="../public/js/Admin_pro.js"></script>
<script src="../js/categoryAdmin.js">
