<style>
    .lichChieu {
        margin: 10px 0;
        gap: 20px;
    }
</style>
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
                    <input type="hidden" name="id" value="<?= $productInfo['ma_phim'] ?>">
                    <div class="form-group">
                        <label for="" class="form-label">Tên phim</label>
                        <input type="text" name="tenphim" value="<?= $productInfo['ten_phim'] ?>" class="form-control">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ảnh</label>
                        <input type="file" id="imageInput" class="upFile form-control" name="image">
                        <input type="hidden" id="imageInput" class="upFile form-control"
                               value="<?= $productInfo['image_phim'] ?>" name="oldImage">
                    </div>
                    <div class="product__images">
                        <img src="../public/upload/<?= $productInfo['image_phim'] ?>" alt="">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Giá</label>
                        <input type="text" class="form-control" value="<?= $productInfo['price'] ?>" name="price">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ngày phát hành</label>
                        <input type="date" class="form-control" name="date"
                               value="<?= $productInfo['ngay_phat_hanh'] ?>">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Mô tả</label>
                        <textarea class="form-control" name="mota" placeholder="Nhập mô tả phim..."><?= $productInfo['mo_ta'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Thể loại</label>
                        <select class="form-select" name="selectCategory" id="">
                            <?php
                            foreach ($listCategory as $key) {
                                ?>
                                <option value="<?= $key['ma_theloai'] ?>" <?= $key['ma_theloai'] == $productInfo['ma_theloai'] ? 'selected' : '' ?>><?= $key['ten_theloai'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Đạo diễn</label>
                        <input type="text" class="form-control" value="<?= $productInfo['dao_dien'] ?>" name="daodien">
                        <small></small>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Thời lượng phim</label>
                        <input type="text" class="form-control" value="<?= $productInfo['thoi_luong_phut'] ?>"
                               name="thoigian">
                        <small></small>
                    </div>
                    <div class="list_lichChieu d-flex flex-column">
                        <label for="">Lịch chiếu</label>
                        <?php foreach ($lichChieu as $key => $value): ?>
                            <input type="hidden" value="<?=$value['ma_suat_chieu']?>" name="ma_suat_chieu[]">
                            <div class="lichChieu d-flex">
                                <input type="datetime-local" class="form-control" value="<?=$value['thoi_gian_chieu']?>" name="lich_chieu[]">
                                <?php if ($key > 0): ?>
                                    <input onclick="deleteLc(this)" type="button" class="btn btn-sm btn-danger"
                                           value="Xoá">
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btnAddLc" type="button" value="Thêm lịch chiếu">
                        <input class="btn btn-primary" type="submit" name="updatePro" value="Cập nhật phim">
                        <a href="index.php?action=listProduct" class="btn btn-dark">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<script src="../public/js/product.js"></script>
<script src="../public/js/script.js"></script>
<!-- CONTENT -->

<script>
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const fileList = event.target.files;

        var removeImg = document.querySelectorAll('.remove_img');
        for(let i = 0; i < removeImg.length; i++) {
            removeImg[i].parentElement.remove()
        }
        
        for (let i = 0; i < fileList.length; i++) {
            const file = fileList[i];
            if (file.type.startsWith('image/')) {
                const imgElement = document.createElement('img');
                imgElement.src = URL.createObjectURL(file);
                imgElement.classList.add('remove_img')

                const imageContainer = document.createElement('div');
                imageContainer.appendChild(imgElement);

                document.querySelector('.product__images').appendChild(imageContainer);
            }
        }

    });
</script>