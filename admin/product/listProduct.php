<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Sản phẩm</a>
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
                <h1>Quản lý sản phẩm</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lí sản phẩm</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Danh sách sản phẩm</a>
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
                    <h3>Danh sách sản phẩm</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <div class="alert alert-primary add__btn__click">
                    <a class="btn btn-primary w100hz" href="index.php?action=addProduct">Thêm sản phẩm</a>
                </div>
                <table class="tbl__tab">
                    <thead>
                        <tr class="tr_th">
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Danh mục</th>
                            <th>Ngày đăng</th>
                            <th>Thao tác</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>

                        
                        <?php
                            foreach($listProduct as $keysanpham => $valueSanpham) {
                                ?>
                                    <tr class="tr_td">
                                        <td><?= $keysanpham + 1 ?></td>
                                        <td class="img__productadd">
                                            <img src="../public/upload/image/product/<?= explode(",", $valueSanpham['images'])[0] ?>" alt="">
                                        </td>
                                        <td class="name__product__admin"><?= $valueSanpham['product_name'] ?></td>
                                        <td class="name__product__admin" style="color: #ff8080;font-weight: 500;width: 150px!important;"><?= $valueSanpham['price'] ?></td>
                                        <td><?= $valueSanpham['category_name'] ?></td>
                                        <td><?= date("d-m-Y H:i:s", strtotime($valueSanpham['create_at'])) ?></td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm" href="index.php?action=editProduct&id_product=<?= $valueSanpham['product_id'] ?>">Sửa</a>
                                            <a class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $valueSanpham['product_id'] ?>">Xoá</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="../index.php?action=chi-tiet-sanpham&detail_product=<?=$valueSanpham['product_id']?>">Xem</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $valueSanpham['product_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có muốn xóa sản phẩm: <?= $valueSanpham['product_name'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <a class="btn btn-primary" href="index.php?action=deleteProduct&id_product=<?= $valueSanpham['product_id'] ?>">Xoá</a>
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
<!-- CONTENT -->