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
                <h1>Quản lý phim</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Danh sách phim</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Thêm phim</a>
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
                    <h3>Thêm phim</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="form-label">Tên phim</label>
                        <input type="text" name="tenphim" class="form-control">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ảnh</label>
                        <input type="file" id="imageInput" class="upFile form-control" name="image">
                    </div>
                    <div class="product__images">

                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ngày phát hành</label>
                        <input type="date" class="form-control" name="date">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Thể loại</label>
                        <select class="form-select" name="selectCategory" id="">
                            <?php
                                foreach($listCategory as $key) {
                                    ?>
                                        <option value="<?= $key['ma_theloai'] ?>"><?= $key['ten_theloai'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Đạo diễn</label>
                        <input type="text" class="form-control" name="daodien">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Thời lượng phim</label>
                        <input type="text" class="form-control" name="thoigian">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="addProduct" value="Thêm sản phẩm">
                        <a href="index.php?action=listCus" class="btn btn-dark">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<script src="../public/js/Admin_pro.js"></script>
<script src="../public/js/script.js"></script>
<!-- CONTENT -->