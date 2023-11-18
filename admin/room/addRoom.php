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
                <h1>Quản lý phòng chiếu</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Danh sách phòng chiếu</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Thêm phòng chiếu</a>
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
                    <h3>Thêm phòng chiếu</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <form action="<?= $_SERVER['REQUEST_URI'] ?>" autocomplete="off" method="post" onsubmit="return sendUser(this)" enctype="multipart/form-data">
                    <div class="form-group">
                        <label onclick="" for="" class="form-label">Tên phòng</label>
                        <input type="text" class="form-control last blurinp" name="ten_phong">
                        <small class="error er_lastname"></small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control blurinp" name="so_luong_ghe" value="60">
                        <small class="error er_email"></small>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="addUser" value="Thêm phòng chiếu">
                        <a href="index.php?action=listRoom" class="btn btn-dark">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->