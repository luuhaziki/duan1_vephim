<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Bình luận</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
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
                        <a href="#">Quản lí bình luận</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a href="">Danh sách thống kê bình luận</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>

                    <li>
                        <a class="active" href="#">Danh sách bình luận</a>
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
                    <h3>Tài khoản bình luận</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr class="tr_th">
                        <th>STT</th>
                        <th>Người dùng</th>
                        <th>Nội dung bình luận</th>
                        <th>Tạo ngày</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($listComment as $key => $comment) {
                                ?>
                                    <tr class="tr_td">
                                        <td><?=$key + 1?></td>
                                        <td>
                                            <span><?=$comment['ten_dang_nhap']?></span>
                                        </td>
                                        <td><?=$comment['content']?></td>
                                        <td><?= date('d-m-Y H:i:s', strtotime($comment['create_at'])) ?></td>
                                        <td>
                                            <a class="btn btn-outline-danger btn-sm" onclick="return confirm('bạn có chắc không')" href="index.php?action=deleteComment&comment_id=<?=$comment['ma_binh_luan']?>">Xoá</a>
                                        </td>
                                    </tr>
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
<script>