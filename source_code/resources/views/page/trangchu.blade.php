@extends('master')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Nexus SaaS</title>
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
						@foreach($slide as $sl)
							<!-- THE FIRST SLIDE -->
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

						</li>
						@endforeach
						</ul>
					</div>
				</div>

				<div class="tp-bannertimer"></div>
			</div>
		</div>
        <!--================End Home Banner Area =================-->
        
        <!--================Work Area =================-->
        <section class="work_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Chúng tôi mang đến gì cho bạn</h2>
        			<p>.</p>
        		</div>
        		<div class="work_inner row">
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-screen"></i>
        					<a href="#"><h4>Mang đến thông tin chính xác nhất</h4></a>
        					<p></p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-code"></i>
        					<a href="#"><h4>Luôn cập nhật những thông tin nhanh chóng</h4></a>
        					<p></p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-clock"></i>
        					<a href="#"><h4>Tiết kiệm thời gian tìm kiếm</h4></a>
        					<p></p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
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
										<h3>Miền Bắc <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/1">Get Started Now</a>
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
										<h3>Miền trung <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/2">Get Started Now</a>
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
										<h3>Miền nam <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/3">Get Started Now</a>
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
										<h3>Quốc tế <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="http://localhost/loai-san-pham/4">Get Started Now</a>
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
        		<img class="img-fluid" style="max-height:9=800px;max-width:800px" src="style/img/giaoluu.jpg" alt="">
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
								<img class="img-fluid" style="height:400px" src="style/img/he.jpg" alt="">
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
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
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
        						<h3><span class="dlr">$</span> 100 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
        					</div>
        				</div>
        			</div>
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
        						<h3><span class="dlr">$</span> 100 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
        					</div>
        				</div>
        			</div>
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
        						<h3><span class="dlr">$</span> 100 <span class="month">Giá tiền  <br />rơi vào</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
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