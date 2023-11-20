<!DOCTYPE html>
<!-- 
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/moviepro/html/seat_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:22:53 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Movie Pro Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Movie Pro" />
    <meta name="keywords" content="Movie Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/dl-menu.css" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/layers.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/navigation.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/settings.css" />
    <link rel="stylesheet" type="text/css" href="css/seat.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- color picker start -->
    <!-- st top header Start -->
    <form action="index.php?action=thanh_toan" method="post">
        <input type="hidden" name="id_phim" value="<?= $chitietphim['ma_phim'] ?>">
        <input type="hidden" name="id_chieu" value="<?= $timePage['ma_suat_chieu'] ?>">
        <input type="hidden" name="price" value="<?= $timePage['price'] ?>">
        <div class="st_bt_top_header_wrapper float_left">
            <div class="container container_seat">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"> 
                            <a href="index.php?action=chi_tiet_phim&id_phim=<?= $chitietphim['ma_phim'] ?>&time=<?= $_GET['time'] ?>"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Quay lại</a>
                        </div>
                        
                        <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                            <p>Số Vé</p>
                            <div class="select_number">
                                <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>
                                </button>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                            <h3><?= $chitietphim['ten_phim'] ?></h3>
                            <h4><?= $listtime['thu'] ?>, <?= $listtime['ngay'] ?> <?= $listtime['thang'] ?>, <?= $listtime['time'] ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"> <a href="#"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="st_seatlay_btn float_left">
                            <button class="btn_comment" name="thanhtoan">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- st top header Start -->
        <!-- st seat Layout Start -->
        <div class="st_seatlayout_main_wrapper float_left">
            <div class="container container_seat">
                <div class="st_seat_lay_heading float_left">
                    <h3>Màn Hình</h3>
                </div>
                <div class="st_seat_full_container">
                    <div class="st_seat_lay_economy_wrapper float_left">
                        <div class="screen">
                            <img style="width: 1312px !important;" src="images/content/screen.png">
                        </div>
                    </div>
                    <div style="width: auto;" class="st_seat_lay_economy_wrapper st_seat_lay_economy_wrapperexicutive float_left">
                        <div class="st_seat_lay_economy_heading float_left">
                            <h3>KHU VỰC GHẾ NGỒI</h3>
                        </div>
                        <div style="padding: 0 282px;" class="st_seat_lay_row float_left">
                            <ul class="st_eco_second_row">
                                <?php
                                    for($i = 0; $i < 23; $i++) {
                                        ?>
                                            <li class="<?= $listGhe[$i]['trang_thai'] == 'da_dat' ? 'seat_disable' : "" ?>"> 
                                                <span><?= number_format($timePage['price'], 0, ',', '.') ?> VNĐ</span>
                                                <input <?= $listGhe[$i]['trang_thai'] == 'da_dat' ? 'disabled' : "" ?> type="checkbox" id="c<?= $listGhe[$i]['so_ghe'] ?>" value="<?= $listGhe[$i]['so_ghe'] ?>" name="ghe[]">
                                                <label for="c<?= $listGhe[$i]['so_ghe'] ?>"></label>
                                            </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- st seat Layout End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <!-- <script src="js/modernizr.js"></script> -->
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/smothscroll_part1.js"></script>
    <script src="js/smothscroll_part2.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>
    <script src="js/custom.js"></script>
    <!--main js file end-->
    <script>
        //* Isotope js
        function protfolioIsotope() {
            if ($('.st_fb_filter_left_box_wrapper').length) {
                // Activate isotope in container
                $(".protfoli_inner, .portfoli_inner").imagesLoaded(function() {
                    $(".protfoli_inner, .portfoli_inner").isotope({
                        layoutMode: 'masonry',
                    });
                });

                // Add isotope click function 
                $(".protfoli_filter li").on('click', function() {
                    $(".protfoli_filter li").removeClass("active");
                    $(this).addClass("active");
                    var selector = $(this).attr("data-filter");
                    $(".protfoli_inner, .portfoli_inner").isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 450,
                            easing: "linear",
                            queue: false,
                        }
                    });
                    return false;
                });
            };
        };
        protfolioIsotope();

        function changeQty(increase) {
            var qty = parseInt($('.select_number').find("input").val());
            if (!isNaN(qty)) {
                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                $('.select_number').find("input").val(qty);
            } else {
                $('.select_number').find("input").val(1);
            }
        }
    </script>
</body>


<!-- Mirrored from www.webstrot.com/html/moviepro/html/seat_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:22:54 GMT -->

</html>