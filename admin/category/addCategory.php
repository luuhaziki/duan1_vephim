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
                <h1>Quản lý danh mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Danh sách danh mục</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Thêm danh mục</a>
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
                    <h3>Thêm danh mục</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>

                <form action="index.php?action=addCategory" enctype="multipart/form-data" onsubmit="return sendCategory()" method="post">
                    <div class="form__cateadd">
                        <div class="form-group">
                            <label class="form-label">Tên danh mục</label>
                            <input type="text" placeholder="Nhập tên danh mục" name="danhmuc" class="form-control danhmuc">
                        </div>
                        <div class="error error_category"></div>
                        <div class="form-group cate_img">
                            <label class="form-label">Ảnh danh mục</label>
                            <input type="file" name="imageCate" class="form-control danhmuc" multiple>
                        </div>
                        <div class="form-group mg_tb">
                            <input class="btn btn-primary" type="submit" name="addcategory" value="Thêm danh mục">
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
<script src="../js/categoryAdmin.js"></script>
<!-- CONTENT -->