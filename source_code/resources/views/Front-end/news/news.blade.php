@extends('master')
@section('content')
	<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="style/img/favicon.png" type="image/png">
        <title>Tin tức</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style/css/bootstrap.css">
        <link rel="stylesheet" href="style/vendors/linericon/style.css">
        <link rel="stylesheet" href="style/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="style/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="style/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="style/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="style/css/style.css">
        <link rel="stylesheet" href="style/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        
        <!--================Header Menu Area =================-->
        
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
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="style/img/blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Vui chơi</h5></a>
                                    <div class="border_line"></div>
                                    <p>Không gian thoải mái,hoạt động bổ ích</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="style/img/blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Kiến  thức </h5></a>
                                    <div class="border_line"></div>
                                    <p>Nhiều kiến thức thú vị,mới mẻ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="style/img/blog/cat-post/cat-post-1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Ẩm thực</h5></a>
                                    <div class="border_line"></div>
                                    <p>Các món ăn đa dạng,hấp dẫn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                        
                        @foreach($listNews as $lt)
                             <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <ul class="blog_meta list">
                                            <li><a href="#">Người viết:admin<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">{{$lt->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post" style="margin-left: 15px">
                                        <img src="{{$lt->news_img}}" style="width: 100%;height: 100%;">
                                        <div class="blog_details">
                                            <a ><h2>{{$lt->news_name}}</h2></a>
                                            
                                            <p>{{$lt->news_sort_content}}</p>

                                            <button onclick="click_function(this)" title="Đọc thêm" type="button" class="btn btn-default" style="    background-color: #76e2cb; border-color: #fff;color: #fff;font-size: 14px;letter-spacing: 1px; padding: 14px 26px;">
                                              <a href="{!! asset('tintuc/'.$lt->news_id.''.'.html'   ) !!}" class="blog_btn">Đọc thêm</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="style/img/blog/author.png" alt="">
                                <h4>Nguyễn Văn Phong</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Luôn cố gắng mang lại cho người đọc những thông tin chân thật nhất.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Địa điểm nổi bật</h3>
                                <div class="media post_item">
                                    <img src="style/img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Bà Nà Hills</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="style/img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Vịnh Hạ Long</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="style/img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Thừa Thiên Huế</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="style/img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Hội An</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="style/img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            
                           
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Danh mục</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
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
        <script src="style/js/mail-script.js"></script>
        <script src="style/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="style/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="style/js/theme.js"></script>
    </body>
</html>
@endsection