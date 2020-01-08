<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	   <style>
			<!-- tu -->
            html, .container,body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }
            .full-height {
                height: 100vh;
            }
			.link-list{
                display: inline-block;
                padding: 0px 20px;	
                text-align: center;
                width: auto;
                color:#ffffff;
				text-decoration: none !important;
				font-size: 15px;
				font-weight: bold;
				border-radius: 6px 6px 0px 0px;
				background-color: #277da5;
            }
            .link-list:hover{
                background-color: #74a9d8;
				
            }
			.link-list{
				transition:background-color .5s;
			}
			.visible-list .vs-list-link{
				text-decoration:none;
				display:block;
				width:100%;
				padding: 3px;
				color: white;
				font-weight: normal;
			}
			.visible-list .vs-list-link:hover{
				background-color:#74a9d8;
			}
			.visible-list .vs-list-link{
				transition:background-color .2s;
			}
			.visible-list{
				width: 120px;
				font-size: 10px;
				margin: 0px !important;
				position: absolute;
				right: 0px;
				background-color: #1e2833;
				color:white;
			}
			.show-Customers b{
				display: block;
				flex: 1;
				height: 2px;
				opacity: .1;
				background-color: currentColor;
			}
			.cus-data{
				text-align: center;
			}
			.cus-data span {
				display:block;float: left;
				padding-left: 15px;
				width: 100%;
				padding-right: 15px;
			}
			.container{
				box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.2);
				
			}
			#myCarousel{
				padding-bottom:15px;
			}
			.news .news_img{
				transition: all 0.5s cubic-bezier(0.44, 0.185, 0.575, 0.86);
			} 
			.drop_list li:hover{
				background-color:#cacaca;
			}
			.drop_list a{
				color:#000;
			}

	-----------------------------------------------------
	
			<!-- end -->
		
        </style>
    </head>
    <body>
		<div class="container-fluid	" style="padding: 0;">
			<!--Navigation xong-->
			<div class="logo_nav hidden-sm hidden-xs" style="float: left;height:116px;width: 100%;background-color: #fff;">
					<a style ="display:inline-block;height: 100%;width: 100%;" href="http://xtech.com.vn/">
						<img class="mx-auto d-block" src="/uploads/customers/20190423145758.PNG" width="50%" height="50%" style="display: block;height: 70%;border-radius: 7px;background-color: #ccc;width: 100%;max-width: 100px;margin: 0 auto;">
						<h3 style="width: 100%;text-align: center;margin: 0;text-shadow: #0000004d 0.1em 0.1em 0.2em;" class="col-md-10">CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH</h3>
					</a>
			</div>
			<div class="nav hidden-xs hidden-sm" style="background-color: #fff; padding: 0 !important;display: block; float: left; width: 100%; margin-top: 15px;">
				
				<div style="height: 30%;float: left;width: 100%;line-height: 48px;position: relative; margin-bottom: 28px;">
					<div style = "max-width: 737px; margin: 0 auto;" class=" hidden-xs hidden-sm ">
					
						<a class = "link-list" href="http://xtech.com.vn/" title="Trang chủ">TRANG CHỦ</a>
						<a class = "link-list" href="#" title="Sản phẩm">GIỚI THIỆU</a>
						<a class = "link-list" href="http://xtech.com.vn/san_pham.html" title="Sản phẩm">SẢN PHẨM</a>
						<a class = "link-list" href="#" title="Khách hàng">KHÁCH HÀNG</a>
						<a class = "link-list" href="#" title="Tin tức">TIN TỨC</a>
						<a class = "link-list" href="#" title="Dịch vụ">DỊCH VỤ</a>
						
					</div>
					<div class = "dropDown icon_right" style="top: 0px;display: block;position: absolute;right: 0;">
						<button style = "background-color: #c1c1c1; border-color: #c1c1c1;"type="button" class="btn btn-success" onclick = "click_right()"><i class="fas fa-angle-left" style="font-weight: bold;font-size: 23px;" ></i></button>
					</div>
					<div class = "dropDown icon_down" style="top: 0px;display: none;position: absolute;right: 0;">
						<button style = "background-color: #c1c1c1; border-color: #c1c1c1;"type="button" class="btn btn-success" onclick = "click_down()"><i class="fas fa-angle-down" style="font-weight: bold;font-size: 23px;" ></i></button>
					</div>
					<div class = "drop_list" style = "display: none; width: 113px; float: right;background-color: #fff;">
						<ul style="list-style:none;margin-left: 0px; width: 113px; padding: 0;box-shadow: 5px 10px 18px #888888;margin: 0;border-radius: 4px;border-radius: 4px;">
							@if (Route::has('login'))
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<li style="height: 30px;"><a style = "display:block;height:100%;line-height:30px;text-decoration: none;"href="{{ route('register') }}"><i style="margin: 0 6px;" class="fas fa-registered"></i>Đăng ký</a></li>
									
									@if (Route::has('register'))
									<li style="height: 30px;"><a style = "display:block;height:100%;line-height:30px;text-decoration: none;"href="{{ route('login') }}"><i style="margin: 0 6px;" class="fas fa-sign-in-alt"></i>Đăng nhập</a></li>
									@endif
								@endauth
							@endif

						</ul>
					</div>
					<script>
						function click_right(){
							
							let icon_down = document.querySelector(".icon_down");
							let icon_right = document.querySelector(".icon_right");
							console.log(icon_down);
							let drop_list = document.querySelector(".drop_list");
							drop_list.style.display = "block";
							icon_down.style.display = "block";
							icon_right.style.display = "none";
							
						}
						function click_down(){
							
							let icon_down = document.querySelector(".icon_down");
							let icon_right = document.querySelector(".icon_right");
							let drop_list = document.querySelector(".drop_list");	
							icon_down.style.display = "none";
							drop_list.style.display = "none";
							icon_right.style.display = "block";
						}
					</script>
				</div>
				
            </div>
			
			<div class="nav-vs visible-xs visible-sm" style="background-color: #1e2833;
    height: 48px;
   
    width: 100%;
    z-index: 2;">
			
				<div style="height:100%;float:left" class="col-xs-4 col-sm-4  visible-xs visible-sm">

                    <a style ="display:inline-block;position: relative;height: 100%;width: 55px; float: left;margin-right:10px;" href="http://xtech.com.vn/"><img class="mx-auto d-block" src="/uploads/customers/20190419040451.PNG" width="50%" height="50%" style="width: 55px;display:block;top: 13px;position: absolute;"></a>

                </div>
				
				<div style="height:100%;float:right;line-height: 48px;padding:0;margin-right: 4px;" class="col-xs-1 col-sm-1 visible-xs visible-sm">

					<a onclick="list_function()" style = "float:right;color:#69eedb !important" href="#"><i class="fas fa-bars" style="border: 1px solid;padding: 3px;border-radius: 3px;"></i></a>   
					
                </div>
				<div class="visible-list hidden-md hidden-lg" style="z-index: 2;top: 48px;display:none">
						<ul style="list-style: none;
							padding: 0;
							margin: 0;">
							<li><a class = "vs-list-link" href="#" title="Giới thiệu"><i style="margin: 0 6px;" class="fas fa-home"></i>GIỚI THIỆU</a></li>
							<li><a class = "vs-list-link" href="#" title="Sản phẩm"><i style="margin: 0 6px;" class="fab fa-product-hunt"></i>SẢN PHẨM</a></li>
							<li><a class = "vs-list-link" href="#" title="Khách hàng"><i style="margin: 0 6px;" class="fas fa-user"></i>KHÁCH HÀNG</a></li>
							<li><a class = "vs-list-link" href="#" title="Tin tức"><i style="margin: 0 6px;" class="far fa-newspaper"></i>TIN TỨC</a></li>
							<li><a class = "vs-list-link" href="#" title="Dịch vụ"><i style="margin: 0 6px;" class="fas fa-users-cog"></i>DỊCH VỤ</a></li>							
							<li><a class = "vs-list-link" href="{{ route('login') }}"><i style="margin: 0 6px;" class="fas fa-sign-in-alt"></i>ĐĂNG NHẬP</a></li>
							<li><a class = "vs-list-link" href="{{ route('register') }}"><i style="margin: 0 6px;" class="fas fa-registered"></i>ĐĂNG KÝ</a></li>
							
						</ul>
				</div>
				
				
			</div>
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" style="width:auto; height: auto;">
						<div class="item active">
							<img src="https://wallpapercave.com/wp/wp1997509.jpg" alt="Chania">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>LA is always so much fun!</p>
							</div>
						</div>

						<div class="item">
							<img src="https://wallpapercave.com/wp/wp1997569.jpg" alt="Chicago">
							<div class="carousel-caption">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>
						</div>

						<div class="item">
							<img src="https://wallpaperplay.com/walls/full/8/a/c/100302.jpg" alt="New York">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<!--

---------------------------------------------- Show footer -----------------------------------------------------

-->			
			<div class = "footer col-12" style="display: block;float: left;width:100%">
					<div class="xtech_khachhang col-12 col-md-12" style="padding: 0;width:100%;height: 278px;padding-bottom: 15px;background-color: #ccc;" >
						<a title = "Tổng quan về Xtech" href="#" class="img_left col-md-8 hidden-sm hidden-xs" style="padding: 0;background-color: #428bca;height:100%">
							
							<img src = "/uploads/customers/20190424080331.PNG" alt="About us"  style="width: 60%;
								height: 100%;"/>
							
							<div class="text " style="display: inline-block;
									position: absolute;
									color: #fff;
									width: 40%;
									text-align: center;">
								<h4>Tổng quan về Xtech</h4>
							</div>
						</a>
						<a title = "Tổng quan về Xtech" href="#" class="img_left col-sm-12 col-xs-12 visible-sm visible-xs" style="padding: 0;background-color: #428bca;height:100%">
							
							<img src = "/uploads/customers/20190424080331.PNG" alt="About us"  style="width: 60%;
								height: 100%;"/>
							
							<div class="text " style="display: inline-block;
									position: absolute;
									color: #fff;
									width: 40%;
									text-align: center;">
								<h4>Tổng quan về Xtech</h4>
							</div>
						</a>
						<div class="img_right col-xs-12 col-sm-12 visible-sm visible-xs" style="display: inline-block;background-color:#ccc;height:100%">
							<div class="xtech-suport" style="z-index:2;position: absolute;">
								<h4 style="font-weight: bold; margin: 10px;">Xtech & Khách hàng</h4>
								<ul style="list-style:none;padding:0;margin:10px;font-weight: bold;">
								
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Hỏi đáp">Hỏi đáp</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Tư vấn & hỗ trợ">Tư vấn & hỗ trợ</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Chính sách & bảo mật">Chính sách & bảo mật</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Các văn bản pháp lý">Các văn bản pháp lý</a></li>
				
								</ul>
							</div>
							<img style= "width: 100%;height: 100%;"src = "uploads/customers/20190424084112.PNG"/>
						</div>
						<div class="img_right col-md-4 hidden-sm hidden-xs" style="display: inline-block;background-color:#ccc;height:100%">
							<div class="xtech-suport" style="z-index:2;position: absolute;">
								<h4 style="font-weight: bold; margin: 10px;">Xtech & Khách hàng</h4>
								<ul style="list-style:none;padding:0;margin:10px;font-weight: bold;">
								
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Hỏi đáp">Hỏi đáp</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Tư vấn & hỗ trợ">Tư vấn & hỗ trợ</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Chính sách & bảo mật">Chính sách & bảo mật</a></li>
									<li style="padding-bottom:10px"><i class="fa fa-check" style="font-size: 10px;color: #4698d6;"></i><a href="#" style="padding-left: 10px;color: #22adf2;" title="Các văn bản pháp lý">Các văn bản pháp lý</a></li>
								</ul>
							</div>
							<img style= "width: 100%;height: 100%;"src = "uploads/customers/20190424084112.PNG"/>
						</div>
					</div>
					<div class="xtech_footer col-md-12" style = "float: left;height:auto;width: 100%;margin-bottom: 15px;">
						<div  style="display:block;height: 100%; text-align: center;">
						
							<a href="#" style = "margin: auto;display: block;width: 100px;height: 100px;"><img src="/uploads/customers/20190423145758.PNG" style="width: 100%;height: 100%;"/></a>
							<p style = "font-weight: bold;font-size: 20px;">CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH</p>
							<p>Địa chỉ : Số 6, ngách 73/1/2, đường Yên Xá, xã Tân Triều, Thanh Trì, Hà Nội</p>
							<p>Điện thoại: 024.66946xxx * Fax: 024.37725xxx</p>
							<p>	Email: dinhthu.xtech@gmail.com</p>
							<p><i style = "margin-right: 10px;" class="far fa-copyright"></i>2019 Bản quyền thuộc về công ty TNHH Xtech Việt Nam</p>
							
							<div class = "icon">
							
								<p style = "color: #ccc; font-weight: bold;" >FOLLOW US</p>
								<a href="#"><i class="fab fa-facebook-square" style = "font-size: 30px;" ></i></a>
								<a href="#"><i class="fab fa-twitter-square" style = "font-size: 30px;" ></i></a>
								<a href="#"><i class="fab fa-google-plus-square"  style = "font-size: 30px;" ></i></a>
								
							</div>
							
						</div>
					
					
					</div>
				</div>
    
   




</body>

</html>