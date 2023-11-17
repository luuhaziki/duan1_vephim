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
                        <th>Giá</th>
                        <th>Số phòng</th>
                        <th>Số ghế</th>
                        <th>Số vé</th>
                        <th>Tổng cộng</th>
                        <th>Ngày đặt</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($allOrder as $key=>$value):?>
                        <tr>
                            <td style="margin-top: 7px"><?=$key+1?></td>
                            <td><?=$value['ten_dang_nhap']?></td>
                            <td style="color: #ff7d7d;font-weight: 500;"><?=$value['price']?></td>
                            <td><?=$value['so_phong']?></td>
                            <td><?=$value['so_ghe']?></td>
                            <td><?=$value['so_ve']?></td>
                            <td><?=$value['tong_cong']?></td>
                            <td><span style="cursor: pointer"><?=$value['ngay_dat_ve']?></span></td>
                        </tr>
                    <?php endforeach;?>
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