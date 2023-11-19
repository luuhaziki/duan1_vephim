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


<!-- Mirrored from www.webstrot.com/html/moviepro/html/booking_type.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:22:42 GMT -->
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
	<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body class="booking_type_back">
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
		</div>
	</div>
	<!-- color picker start -->
	<!-- st top header Start -->
	<div class="st_bt_top_header_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="st_bt_top_back_btn float_left">	<a href="index.php?action=seat_booking&id_phim=<?= $load_phim['ma_phim'] ?>&time=<?= $_POST['id_chieu'] ?>"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Quay lại</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="st_bt_top_center_heading float_left">
						<h3><?= $load_phim['ten_phim'] ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st top header Start -->
	<!-- st dtts section Start -->
	<div class="st_dtts_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<form action="index.php?action=thanh_toan" method="post">
						<input type="hidden" name="id_phim" value="<?= $load_phim['ma_phim'] ?>">
						<input type="hidden" name="id_chieu" value="<?= $_POST['id_chieu'] ?>">
						<input type="hidden" name="quantity" value="<?= $_POST['quantity'] ?>">
						<input type="hidden" name="price" value="<?= $_POST['price'] ?>">
						<input type="hidden" name="ghe2" value="<?= implode(",",$_POST['ghe']) ?>">
						<div class="st_dtts_left_main_wrapper float_left">
							<div class="row">
								<div class="col-md-12">
									<div class="st_dtts_ineer_box float_left">
										<ul>
											<li><span class="dtts1">Ngày</span>  <span class="dtts2"><?= date('d-m-Y', strtotime($load_xuatchieu['thoi_gian_chieu'])) ?></span>
											</li>
											<li><span class="dtts1">Thời gian</span>  <span class="dtts2"><?= $load_xuatchieu['time'] ?></span>
											</li>
											<li><span class="dtts1">Tên phim</span>  <span class="dtts2"><?= $load_phim['ten_phim'] ?></span>
											</li>
											<li><span class="dtts1">Số vé</span>  <span class="dtts2"><?= $_POST['quantity'] ?></span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="st_cherity_section float_left">
										<div class="st_cherity_img float_left">
											<img style="height:700px; object-fit:cover" src="./public/upload/<?= $load_phim['image_phim'] ?>" alt="img">
										</div>
										<div class="st_cherity_img_cont float_left">
											<div class="box">
												<p class="cc_pc_color1">
													<input type="checkbox" id="c201" name="cb">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="st_cherity_btn float_left">
										<h3>THANH TOÁN</h3>
										<ul>
											<li>
												<button type="submit" name="xacnhan">Xác nhận thanh toán</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="st_dtts_bs_wrapper float_left">
								<div class="st_dtts_bs_heading float_left">
									<p>Hóa đơn đặt vé</p>
								</div>
								<div class="st_dtts_sb_ul float_left">
									<?php
										$tongtien = $_POST['quantity'] * $_POST['price'];
									?>
									<ul>
										<li>
											Giá vé: <br> <span><?= number_format($_POST['price'], 0, ',', '.') ?> VNĐ / 1 vé</span>
										</li>
										<li>
											<br>( Tổng <?= $_POST['quantity'] ?> Vé ) <span><?= number_format($tongtien, 0, ',', '.') ?> VNĐ</span>
										</li>
									</ul>
								</div>
								<div class="st_dtts_sb_h2 float_left">
									<h5>Tổng thanh toán <span><?= number_format($tongtien, 0, ',', '.') ?> VNĐ</span></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st dtts section End -->
	<!--main js file start-->
	<script src="js/jquery_min.js"></script>
	<script src="js/modernizr.js"></script>
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
		    function protfolioIsotope(){
		        if ( $('.st_fb_filter_left_box_wrapper').length ){ 
		            // Activate isotope in container
		            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    layoutMode: 'masonry',  
		                }); 
		            });  
		            
		            // Add isotope click function 
		            $(".protfoli_filter li").on('click',function(){
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
		 protfolioIsotope (); 
		 
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


<!-- Mirrored from www.webstrot.com/html/moviepro/html/booking_type.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:22:44 GMT -->
</html>