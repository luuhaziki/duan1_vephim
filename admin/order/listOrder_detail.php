
<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Đơn hàng</a>
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
                <h1>Quản lý đơn hàng</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lí đơn hàng</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="" href="#">Danh sách đơn hàng</a>
                    </li>
                    <li>
                        <a class="active" href="#">Chi tiết đơn hàng</a>
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
                    <h3>Chi tiết đơn hàng</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Sản phẩm</th>
                        <th>Size</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listOrder_detail as $key=>$value):?>
                        <tr>
                            <td style="margin-top: 25px"><?=$key+1?></td>
                            <td style="width: 650px">
                                <img style="border-radius: 0; width: 50px; height: 50px; object-fit: cover" src="../public/upload/image/product/<?=explode(',',$value['images'])[0]?>" alt="">
                                <span style="display: inline-block; width: 500px; "><?=$value['product_name']?></span>
                            </td>
                            <td style="padding-right: 100px"><?=$value['size']?></td>
                            <td><?=$value['price']?></td>
                            <td><?=$value['amount']?></td>
                            <td><?=$value['total']?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
