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
                        <a href="#">Quản lí danh mục</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Danh sách danh mục</a>
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
                    <h3>Danh sách danh mục</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <div class="alert alert-primary add__btn__click">
                    <a class="btn btn-primary w100hz" href="index.php?action=addCategory">Thêm danh mục</a>
                </div>
                <table class="tbl__tab">
                    <thead>
                        <tr class="tr_th">
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Ảnh danh mục</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($listCategory as $keycategory => $category) {

                                ?>
                                    <tr class="tr_td">
                                        <td><?= $keycategory + 1 ?></td>
                                        <td><?= $category['category_name'] ?></td>
                                        <td><img src="../public/upload/image/category/<?= $category['image_cate'] ?>" alt=""></td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm" href="index.php?action=editCategory&category_id=<?= $category['category_id'] ?>">Sửa</a>
                                            <a class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $category['category_id'] ?>">Xoá</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $category['category_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có muốn xóa danh muc: <?= $category['category_name'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <a class="btn btn-primary" href="index.php?action=deleteCategory&category_id=<?= $category['category_id'] ?>">Xoá</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>
<script src="../js/categoryAdmin.js"></script>
<!-- CONTENT -->