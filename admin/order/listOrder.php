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
    <style>
        th, td, p {
            text-align: left !important;
        }
    </style>
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
                        <a class="active" href="#">Danh sách đơn hàng</a>
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
                    <h3>Danh sách đơn hàng</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th style="padding-right: 20px">STT</th>
                        <th>Người đặt hàng</th>
                        <th>Người nhận</th>
                        <th>Tổng cộng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Thanh toán</th>
                        <th>Vận chuyển</th>
                        <th>Chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listOrder as $key => $value): ?>
                        <tr>
                            <td style="margin-top: 45px"><?= $key + 1 ?></td>
                            <td>
                                <img src="../public/upload/image/user/<?= $value['user_image'] ?>" alt="">
                                <span><?= $value['fullName'] ?></span>
                            </td>
                            <td>
                                <p><i><?=$value['receiver_name']?></i></p>
                                <p style="width: 200px;"><b>ĐC: </b><?= $value['receiver_address'] ?></p>
                                <p><b>SĐT: </b><?= $value['receiver_phone'] ?></p>
                            </td>
                            <td style="color: #ff7d7d;font-weight: 500;"><?= number_format($value['total'], 0, ',', '.') ?></td>
                            <td><?= $value['create_at'] ?></td>
                            <td><span style="cursor: pointer" onclick="toggleStatus(this,'togglePayment','<?=$value['order_id']?>')"
                                      class="status <?= $value['payment_status'] ?>"><?= $value['payment_status'] ?></span>
                            </td>
                            <td><span style="cursor: pointer" onclick="toggleStatus(this,'toggleShipping','<?=$value['order_id']?>')"
                                      class="status <?= $value['shipping_status'] ?>"><?= $value['shipping_status'] ?></span>
                            </td>
                            <td><a class="btn btn-success btn-sm"
                                   href="index.php?action=listOrder_detail&order_id=<?= $value['order_id'] ?>">Chi
                                    tiết</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<script>
    let xmlHttp = new XMLHttpRequest();
      function toggleStatus(e,action,id) {
        xmlHttp.onreadystatechange = function () {
            e.setAttribute('class','status '+xmlHttp.responseText);
            e.innerHTML=xmlHttp.responseText;
            console.log(xmlHttp.responseText);
        }
        xmlHttp.open('GET', `./xmlHttpRequest/statusOrder.php?action=${action}&order_id=${id}`, true);
        xmlHttp.send();
    }
</script>