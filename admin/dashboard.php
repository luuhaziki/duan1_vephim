<style>
    p {
        display: block;
        width: 85%;
        font-size: 20px;
    }

    p:focus {
        outline: none;
    }

    .menu_option {
        position: relative;
    }

    .menu_option > ul {
        top: -50px;
        right: -34px;
        opacity: 0;
        width: auto !important;
        height: auto;
        padding: 0;
        position: absolute;
        background: transparent;
        color: black;
        box-shadow: 0 0 1px;
        border-radius: 5px;
        overflow: hidden;
        pointer-events: none;
        transition: 0.3s;
        display: flex;
    }

    .show {
        opacity: 1 !important;
        pointer-events: auto !important;
    }

    .menu_option > ul > li {
        border-radius: unset !important;
        padding: 10px !important;
        margin: 0 !important;
        display: block;
        background: white !important;
        transition: 0.3s;
        font-size: 20px;
    }
    .todo-list>li>i{
        font-size: 30px;
    }

    .menu_option > ul > li:first-child {
        border-right: 1px solid #cbcbcb;
    }

    .menu_option > ul > li:hover {
        background: #eeeeee !important;
        color: red;
    }
    .menu_option > ul > li:first-child:hover {
        color: #0d6efd;
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
                <h1>Bảng điều khiển</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Trang chủ</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Tải xuống PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
						<h3>20</h3>
						<p>Đơn đặt hàng mới</p>
					</span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
						<h3>2</h3>
						<p>Khách hàng</p>
					</span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
						<h3>20.000</h3>
						<p>Tổng doanh thu</p>
					</span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Đơn đặt hàng gần đây</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th style="padding-right: 20px">STT</th>
                        <th>Người đặt hàng</th>
                        <th>Tổng cộng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Thanh toán</th>
                        <th>Vận chuyển</th>
                        <th>Chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="margin-top: 7px"></td>
                            <td>
                                <img src="../public/upload/image/user/" alt="">
                                <span>admin</span>
                            </td>
                            <td style="color: #ff7d7d;font-weight: 500;">20000</td>
                            <td>20/11/2002</td>
                            <td><span style="cursor: pointer"
                                onclick="toggleStatus(this,'togglePayment','')"
                                class="status">OK</span>
                            </td>
                            <td><span style="cursor: pointer"
                                        onclick="toggleStatus(this,'toggleShipping','')"
                                        class="status">OK</span>
                            </td>
                            <td><a class="btn btn-success btn-sm"
                                    href="index.php?action=listOrder_detail&order_id=">Chi
                                    tiết</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Việc cần làm</h3>
                    <i class='bx bx-plus'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <ul class="todo-list">
                    <li todoList_id="" class="">
                        <p contenteditable="true">Content</p>
                        <i class='bx bx-dots-vertical-rounded menu_option'>
                            <ul>
                                <li class="toggle_status"><i class="fa-solid fa-arrow-right-arrow-left "></i></li>
                                <li class="delete_todolist"><i class="fa-solid fa-trash"></i></li>
                            </ul>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<script src="../js/scriptDashboard.js"></script>
<!-- CONTENT -->