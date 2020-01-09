@extends('master')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Du lịch</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style/css/bootstrap.css">
        <link rel="stylesheet" href="style/vendors/linericon/style.css">
        <link rel="stylesheet" href="style/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="style/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="style/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="style/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="style/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="style/css/style.css">
        <link rel="stylesheet" href="style/css/responsive.css">
    </head>
    <body>
        <!--================Home Banner Area =================-->
        <div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
				<div class="bannercontainer" >
					<div class="banner" >
						<ul>
						
							<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/a.jpg" data-src="source/image/slide/a.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/a.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

						</li>
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/b.jpg" data-src="source/image/slide/b.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/b.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

						</li>
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/c.jpg" data-src="source/image/slide/c.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/c.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

						</li>
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/d.jpg" data-src="source/image/slide/d.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/d.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

						</li>
						</ul>
					</div>
				</div>

				<div class="tp-bannertimer"></div>
			</div>
		</div>
        <!--================End Home Banner Area =================-->
        
        <!--================Work Area =================-->
        
        <!--================End Work Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Miền Bắc</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Miền Trung</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Miền Nam</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="edge-tab" data-toggle="tab" href="#edge" role="tab" aria-controls="edge" aria-selected="false">Quốc tế</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>Miền Bắc <br /></h3>
										<h6></h6>
										<p>Là thủ đô 1000 năm tuổi có lịch sử lâu đời, truyền thống văn hóa đa dạng và giàu bản sắc, Hà Nội thực sự là một trung tâm du lịch lớn của Việt Nam. Hà Nội luôn là một trong những địa điểm thu hút nhiều khách du lịch nội địa và quốc tế....</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/1">Xem chi tiết</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="style/img/sapa.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>Miền trung <br /></h3>
										<h6></h6>
										<p>Nha Trang được mệnh danh là một trong những vịnh đẹp nhất thế giới. Những bờ cát trắng trải dài, nước biển trong xanh và khí hậu quanh năm nóng nắng đã thu hút một lượng lớn khách du lịch yêu biển đến với Nha Trang. Đến Nha Trang thì chắc chắn bạn phải vào tận hưởng sự thoải mái của một trong những khu nghỉ dưỡng sang trọng nhất Việt Nam Vinpearl....</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/2">Xem chi tiết</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="style/img/bana.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>Miền nam <br /></h3>
										<h6></h6>
										<p>Thành phố Hồ Chí Minh là thành phố phát triển sầm uất nhất cả nước. Đặc điểm nơi đây là những phố xá đèn sáng choang, sinh hoạt và vui chơi giải trí kéo dài đến tận khuya. Những dòng xe cộ hối hả trên khắp các ngả đường như không bao giờ dứt....</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/3">Xem chi tiết</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="style/img/nam.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="edge" role="tabpanel" aria-labelledby="edge-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>Quốc tế <br /></h3>
										<h6></h6>
										<p>Oia là một ngôi làng xinh đẹp nằm trên đảo Santorini, Hy Lạp. Những ngôi nhà nhỏ xinh, với màu trắng, xanh, be, hồng tạo nên vẻ đẹp làm say lòng du khách khi đến đây. Oia được ví như viên ngọc của vùng Địa Trung Hải....</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/4">Xem chi tiết</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="style/img/qte.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
        
        <!--================Screen Area =================-->
        <section class="screen_area text-center p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Môi trường giao lưu thân thiện</h2>
        			<p>Chúng tôi luôn đẩy mạnh gắn kết mọi người ở mọi nơi trên thế giới.</p>
        		</div>
        		<img class="img-fluid" style="" src="style/img/ketnoi.png" alt="">
        	</div>
        </section>
        <!--================End Screen Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<div class="row made_life_text">
						<div class="col-lg-6">
							<div class="left_side_text">
								<h3>Luôn cập nhật tin tức nhanh<br /> và chính xác nhất</h3>
								<p>Chúng tôi luôn cập nhật mọi tin tức về lĩnh vực du lịch</p>
								<p>nhanh và chính xác, giúp mọi người có một trải nghiệm tốt.</p>
								<a class="main_btn" href="/baiviet">Get Started Now</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="chart_img">
								<img class="img-fluid" style="" src="style/img/he.png" alt="">
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
        
        <!--================Price Area =================-->
        <section class="price_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Các bài viết nổi bật</h2>
        			<p>Mang đến sự đánh giá chân thật nhất từ mọi người</p>
        		</div>
        		<div class="price_inner row">
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Du lịch Sapa</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">Không khí trong lành,có chút se lạnh</a></li>
        							<li><a href="#">Khung cảnh đẹp</a></li>
        							<li><a href="#">Thích hợp đi vào mùa ...</a></li>
									<li><a href="#">Chi phí tương đối rẻ</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 90 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="/tintuc">Xem chi tiết</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Du lịch Tràng An</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">Nếu đi mùa hè thì hơi nóng,..</a></li>
        							<li><a href="#">Khung cảnh đẹp</a></li>
        							<li><a href="#">Thích hợp đi vào mùa ...</a></li>
									<li><a href="#">Chi phí tương đối rẻ</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 50 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="/tintuc">Xem chi tiết</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Du lịch Sầm Sơn</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">Biển sạch,sóng khá đẹp</a></li>
        							<li><a href="#">Khung cảnh đẹp</a></li>
        							<li><a href="#">Thích hợp đi vào mùa ...</a></li>
									<li><a href="#">Chi phí tương đối rẻ</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 80 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="/tintuc">Xem chi tiết</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Price Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Đánh giá của người dùng</h2>
        			<p>Sự góp ý của các bạn sẽ giúp chúng tôi hoàn thiện hơn.</p>
        		</div>
        		<div class="testi_slider owl-carousel">
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="style/img/testimonials/testi-1.png" alt="">
								</div>
								<div class="media-body">
									<p>Trang web này đáp ứng được nhu cầu của tôi.</p>
									<h4>Nguyễn Thị A</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="style/img/testimonials/testi-2.png" alt="">
								</div>
								<div class="media-body">
									<p>Tìm kiếm nhanh chóng.</p>
									<h4>Lê Thị B</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="style/img/testimonials/testi-1.png" alt="">
								</div>
								<div class="media-body">
									<p>Trang web này đáp ứng được nhu cầu của tôi.</p>
									<h4>Nguyễn Thị A</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="style/img/testimonials/testi-2.png" alt="">
								</div>
								<div class="media-body">
									<p>Tìm kiếm nhanh chóng.</p>
									<h4>Lê Thị B</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
        <!--================Made Life Area =================-->
        
        <!--================End Impress Area =================-->
        
        <!--================Footer Area =================-->
        
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="style/js/jquery-3.2.1.min.js"></script>
        <script src="style/js/popper.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        <script src="style/js/stellar.js"></script>
        <script src="style/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="style/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="style/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="style/vendors/isotope/isotope-min.js"></script>
        <script src="style/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="style/js/jquery.ajaxchimp.min.js"></script>
        <script src="style/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="style/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="style/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="style/js/gmaps.min.js"></script>
        <script src="style/js/theme.js"></script>
    </body>
</html>
@endsection