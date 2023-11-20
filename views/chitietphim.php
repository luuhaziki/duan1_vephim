<!-- prs title wrapper Start -->
<div class="prs_title_main_sec_wrapper">
		<div class="prs_title_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_title_heading_wrapper">
						<h2><?= $chitietphim['ten_phim'] ?></h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>&nbsp;&nbsp; >&nbsp;&nbsp; Chi tiết phim</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs title wrapper End -->
	<!-- prs video top Start -->
	<div class="prs_booking_main_div_section_wrapper">
	<div class="prs_top_video_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="st_video_slider_inner_wrapper float_left">
						<img class="bg__img__phim" src="./public/upload/<?= $chitietphim['image_phim'] ?>" alt="">
						<div class="st_video_slider_overlay"></div>
						<div class="st_video_slide_sec float_left">
							<a rel='external' href='' title='title' class="test-popup-link">
								<img src="images/index_III/icon.png" alt="img">
							</a>
							<h3><?= $chitietphim['ten_phim'] ?></h3>
							<p>TIẾNG ANH | TIẾNG VIỆT</p>
							<h4><?= $chitietphim['ten_theloai'] ?></h4>
							<h5><span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h5>
						</div>
						<div class="st_video_slide_social float_left box__bottom__position">
							<div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
								<h5><i class="fa fa-heart"></i> 85%</h5>
								<h4>52,291 votes</h4>
							</div>
							<div class="st_video_slide_social_left float_left">
								<ul>
									<li><a href="#"><i class="fa fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
							</div>
							<div class="st_video_slide_social_right float_left">
								<ul>
									<li data-animation="animated fadeInUp" class=""><i class="far fa-calendar-alt"></i> 14 Dec, 2022</li>
									<li data-animation="animated fadeInUp" class=""><i class="far fa-clock"></i> 2 hrs 23 mins</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs video top End -->
	<!-- st slider rating wrapper Start -->
	<div class="st_slider_rating_main_wrapper float_left">
		<div class="container">
			<div class="st_calender_tabs">
				<ul class="nav nav-tabs">
					<?php
						
						foreach($listtime as $key => $time) {
							?>
								<li class="active" style="cursor: pointer;">
									<a style="cursor: pointer;" href="index.php?action=chi_tiet_phim&id_phim=<?= $time['ma_phim'] ?>&time=<?= $time['ma_suat_chieu'] ?>">
										<span><?= $time['thu'] ?></span><br><?= $time['ngay'] ?>
									</a>
								</li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!-- st slider rating wrapper End -->
	<!-- st slider sidebar wrapper Start -->
	<div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="st_indx_slider_main_container float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="tab-content">
									<div id="home" class="tab-pane active">
										<div class="st_calender_contant_main_wrapper float_left">
											<div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">
												<div class="st_calender_asc">
													<div class="st_calen_asc_heart"><a href="#"><i class="fa fa-heart"></i></a>
													</div>
													<div class="st_calen_asc_heart_cont">
														<h3>Mua combo bỏng nước ngay thôi nào!!!</h3>
														<ul>
															<li>
																<img src="images/content/fast-food.png">
															</li>
														</ul>
													</div>
												</div>
												<div class="st_calen_asc_tecket_time_select">
													<ul>
														<li>	
															<span>
																<h4><?= number_format($timePage['price'], 0, ',', '.') ?></h4>
																<p class="asc_pera1"><?= $chitietphim['ten_theloai'] ?></p>
																<p class="asc_pera2">Giá tiền</p>
															</span>
															<a href="index.php?action=seat_booking&id_phim=<?= $chitietphim['ma_phim'] ?>&time=<?= $_GET['time'] ?? $listtime[0]['ma_suat_chieu'] ?>"><?= $timePage['time'] ?></a>
														</li>
													</ul>
													<p class="asc_bottom_pera">Thời gian chiếu</p>
												</div>
											</div>
										</div>
									</div>															
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 20px;">
							<div class="col-md-12">
								<div class="tab-content">
									<div id="home" class="tab-pane active">
										<div class="st_calender_contant_main_wrapper float_left">
											<div class="st_calender_row_cont st_calender_row_cont2 st_calender_row_cont_last float_left">
												<div class="st_calender_asc">
													<table class="table table-striped">
														<thead>
															<tr>
																<th style="width: 128px;">Người dùng</th>
																<th style="width: 340px;">Nội dung</th>
																<th>Ngày bình luận</th>
															</tr>
														</thead>
														<tbody>
															<?php
																foreach($load_all_comment as $binhluan) {
																	?>
																		<tr>
																			<td><?= $binhluan['ten_dang_nhap'] ?></td>
																			<td><?= $binhluan['content'] ?></td>
																			<td><?= date('d-m-Y', strtotime($binhluan['create_at'])) ?></td>
																		</tr>
																	<?php
																}
															?>
														</tbody>
													</table>
												</div>
												<?php
													if($nguoi_dung) {
														?>
															<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
																<div class="box_text__comment">
																	<input type="hidden" name="productid" value="<?= $chitietphim['ma_phim'] ?>">
																	<input type="text" class="noidung_comment" name="noidung" placeholder="Viết bình luận...">
																	<input type="submit" style="margin-left: 21px;" class="btn_comment" name="binhluan">
																</div>
															</form>
														<?php
													}
												?>
											</div>
											<div class="box_text__comment">
												<?php
													if(!$nguoi_dung) {
														?>
															Bạn cần đăng nhập để có thể sử dụng tính năng bình luận
														<?php
													}
												?>
											</div>
										</div>
									</div>															
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="prs_mcc_left_side_wrapper">
						<div class="prs_mcc_left_searchbar_wrapper">
							<input type="text" placeholder="Search Movie">
							<button><i class="flaticon-tool"></i>
							</button>
						</div>
						<div class="prs_mcc_bro_title_wrapper">
							<h2>browse title</h2>
							<ul>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">All <span>23,124</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Action <span>512</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Romantic <span>548</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Love <span>557</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Musical <span>554</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Drama <span>567</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Thriller <span>689</span></a> 
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Horror <span>478</span></a> 
								</li>
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="images/content/movie_category/event_img.jpg" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
							<h4>June 07 <span>08:00-12:00 pm</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- st slider sidebar wrapper End -->