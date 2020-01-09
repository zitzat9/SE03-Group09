@extends('Front-end.master_welcome')

@section('content')


<style type="text/css">     
@import url("https://fonts.googleapis.com/css?family=Heebo:300,400,500,700|Roboto:300,400,500,700");
/*---------------------------------------------------- */
/*----------------------------------------------------*/
.list {
  list-style: none;
  margin: 0px;
  padding: 0px; }

a {
  text-decoration: none;
  transition: all 0.3s ease-in-out; }
  a:hover, a:focus {
    text-decoration: none;
    outline: none; }

.row.m0 {
  margin: 0px; }

body {
  line-height: 24px;
  font-size: 14px;
  font-family: "Roboto", sans-serif;
  font-weight: normal;
  color: #777777; }

h1, h2, h3, h4, h5, h6 {
  font-family: "Heebo", sans-serif;
  font-weight: bold; }

button:focus {
  outline: none;
  box-shadow: none; }

.p_120 {
  padding-top: 120px;
  padding-bottom: 120px; }


@media (min-width: 1200px) {
  .container {
    max-width: 1170px; } }

@media (min-width: 1620px) {
  .box_1620 {
    max-width: 1650px;
    margin: auto; } }


.blog_item {
  margin-bottom: 40px; }

.blog_info {
  padding-top: 30px; }
  .blog_info .post_tag {
    padding-bottom: 20px; }
    .blog_info .post_tag a {
      font: 300 14px/21px "Roboto", sans-serif;
      color: #222222; }
      .blog_info .post_tag a:hover {
        color: #777777; }
      .blog_info .post_tag a.active {
        color: #3bacf0; }
  .blog_info .blog_meta li a {
    font: 300 14px/20px "Roboto", sans-serif;
    color: #777777;
    vertical-align: middle;
    padding-bottom: 12px;
    display: inline-block; }
    .blog_info .blog_meta li a i {
      color: #222222;
      font-size: 16px;
      font-weight: 600;
      padding-left: 15px;
      line-height: 20px;
      vertical-align: middle; }
    .blog_info .blog_meta li a:hover {
      color: #3bacf0; }

.blog_post img {
  max-width: 100%; }

.blog_details {
  padding-top: 20px; }
  .blog_details h2 {
    font-size: 24px;
    line-height: 36px;
    color: #222222;
    font-weight: 600;
    transition: all 0.3s linear; }
    .blog_details h2:hover {
      color: #3bacf0; }
  .blog_details p {
    margin-bottom: 26px; }

.blog_right_sidebar {
  border: 1px solid #eeeeee;
  background: #fafaff;
  padding: 30px; }
  .blog_right_sidebar .widget_title {
    font-size: 18px;
    line-height: 25px;
    background: #3bacf0;
    text-align: center;
    color: #fff;
    padding: 8px 0px;
    margin-bottom: 30px; }
  .blog_right_sidebar .search_widget .input-group .form-control {
    font-size: 14px;
    line-height: 29px;
    border: 0px;
    width: 100%;
    font-weight: 300;
    color: #fff;
    padding-left: 20px;
    border-radius: 45px;
    z-index: 0;
    background: #3bacf0; }
    .blog_right_sidebar .search_widget .input-group .form-control.placeholder {
      color: #fff; }
    .blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
      color: #fff; }
    .blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
      color: #fff; }
    .blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
      color: #fff; }
    .blog_right_sidebar .search_widget .input-group .form-control:focus {
      box-shadow: none; }
  .blog_right_sidebar .search_widget .input-group .btn-default {
    position: absolute;
    right: 20px;
    background: transparent;
    border: 0px;
    box-shadow: none;
    font-size: 14px;
    color: #fff;
    padding: 0px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1; }
  .blog_right_sidebar .author_widget {
    text-align: center; }
    .blog_right_sidebar .author_widget h4 {
      font-size: 18px;
      line-height: 20px;
      color: #222222;
      margin-bottom: 5px;
      margin-top: 30px; }
    .blog_right_sidebar .author_widget p {
      margin-bottom: 0px; }
    .blog_right_sidebar .author_widget .social_icon {
      padding: 7px 0px 15px; }
      .blog_right_sidebar .author_widget .social_icon a {
        font-size: 14px;
        color: #222222;
        transition: all 0.2s linear; }
        .blog_right_sidebar .author_widget .social_icon a + a {
          margin-left: 20px; }
        .blog_right_sidebar .author_widget .social_icon a:hover {
          color: #3bacf0; }
  .blog_right_sidebar .popular_post_widget .post_item .media-body {
    justify-content: center;
    align-self: center;
    padding-left: 20px; }
    .blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
      font-size: 14px;
      line-height: 20px;
      color: #222222;
      margin-bottom: 4px;
      transition: all 0.3s linear; }
      .blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
        color: #3bacf0; }
    .blog_right_sidebar .popular_post_widget .post_item .media-body p {
      font-size: 12px;
      line-height: 21px;
      margin-bottom: 0px; }
  .blog_right_sidebar .popular_post_widget .post_item + .post_item {
    margin-top: 20px; }
  .blog_right_sidebar .post_category_widget .cat-list li {
    border-bottom: 2px dotted #eee;
    transition: all 0.3s ease 0s;
    padding-bottom: 12px; }
    .blog_right_sidebar .post_category_widget .cat-list li a {
      font-size: 14px;
      line-height: 20px;
      color: #777; }
      .blog_right_sidebar .post_category_widget .cat-list li a p {
        margin-bottom: 0px; }
    .blog_right_sidebar .post_category_widget .cat-list li + li {
      padding-top: 15px; }
    .blog_right_sidebar .post_category_widget .cat-list li:hover {
      border-color: #3bacf0; }
      .blog_right_sidebar .post_category_widget .cat-list li:hover a {
        color: #3bacf0; }
  .blog_right_sidebar .newsletter_widget {
    text-align: center; }
    .blog_right_sidebar .newsletter_widget .form-group {
      margin-bottom: 8px; }
    .blog_right_sidebar .newsletter_widget .input-group-prepend {
      margin-right: -1px; }
    .blog_right_sidebar .newsletter_widget .input-group-text {
      background: #fff;
      border-radius: 0px;
      vertical-align: top;
      font-size: 12px;
      line-height: 36px;
      padding: 0px 0px 0px 15px;
      border: 1px solid #eeeeee;
      border-right: 0px; }
    .blog_right_sidebar .newsletter_widget .form-control {
      font-size: 12px;
      line-height: 24px;
      color: #cccccc;
      border: 1px solid #eeeeee;
      border-left: 0px;
      border-radius: 0px; }
      .blog_right_sidebar .newsletter_widget .form-control.placeholder {
        color: #cccccc; }
      .blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
        color: #cccccc; }
      .blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
        color: #cccccc; }
      .blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
        color: #cccccc; }
      .blog_right_sidebar .newsletter_widget .form-control:focus {
        outline: none;
        box-shadow: none; }
    .blog_right_sidebar .newsletter_widget .bbtns {
      background: #3bacf0;
      color: #fff;
      font-size: 12px;
      line-height: 38px;
      display: inline-block;
      font-weight: 500;
      padding: 0px 24px 0px 24px;
      border-radius: 0; }
    .blog_right_sidebar .newsletter_widget .text-bottom {
      font-size: 12px; }
  .blog_right_sidebar .tag_cloud_widget ul li {
    display: inline-block; }
    .blog_right_sidebar .tag_cloud_widget ul li a {
      display: inline-block;
      border: 1px solid #eee;
      background: #fff;
      padding: 0px 13px;
      margin-bottom: 8px;
      transition: all 0.3s ease 0s;
      color: #222222;
      font-size: 12px; }
      .blog_right_sidebar .tag_cloud_widget ul li a:hover {
        background: #3bacf0;
        color: #fff; }
  .blog_right_sidebar .br {
    width: 100%;
    height: 1px;
    background: #eeeeee;
    margin: 30px 0px; }

.article-clean {
  color: #56585b;
  background-color: #fff;
  font-family: 'Lora', serif;
  font-size: 14px;
}

.article-clean .intro {
  font-size: 16px;
  margin: 0 auto 30px;
}

.article-clean .intro h1 {
  font-size: 32px;
  margin-bottom: 15px;
  padding-top: 20px;
  line-height: 1.5;
  color: inherit;
}

.article-clean .intro p {
  color: #929292;
  font-size: 12px;
}

.article-clean .intro p .by {
  font-style: italic;
}

.article-clean .intro p .date {
  text-transform: uppercase;
  padding: 4px 0 4px 10px;
  margin-left: 10px;
  border-left: 1px solid #ddd;
}

.article-clean .intro p a {
  color: #333;
  text-transform: uppercase;
  padding-left: 3px;
}

.article-clean .intro img {
  margin-top: 40px;
}

.article-clean .text p {
  margin-bottom: 20px;
  line-height: 1.45;
}

@media (min-width:768px) {
  .article-clean .text p {
    font-size: 16px;
  }
}

.article-clean .text h2 {
  margin-top: 28px;
  margin-bottom: 20px;
  line-height: 1.45;
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

@media (min-width:768px) {
  .article-clean .text h2 {
    font-size: 20px;
  }
}

.article-clean .text figure {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 20px;
}

.article-clean .text figure img {
  margin-bottom: 12px;
  max-width: 100%;
}

@media only screen and (max-width: 480px){
  .co{
      display: none;
  }
}



        </style>
        
       <div class="article-clean">
        <div class="co" style="padding:0px">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img class="img-responsive" src="news/img/a.png" alt="Slide Image" style="min-width: 100%;min-height: 90vh;"></div>
                    <div class="item"><img src="news/img/b.png" style = " min-height: 90vh;" alt="Slide Image"></div>
                    <div class="item"><img src="news/img/c.png" style = " min-height: 90vh;" alt="Slide Image"></div>
                </div>
                <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-1" data-slide-to="2" class=""></li>
                </ol>
            </div>
        </div>
    </div>
        
        <section class="blog_area" style="margin-top: 50px">
            <div class="container">
                <div class="row">
                 
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                        
                        @foreach($khac as $lt)
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
                            <div style="text-align: center;">
                              {!!$khac->links()!!}
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="news/img/blog/xtech.png" alt="">
                                <h4>Xtech.com.vn</h4>
                                <p>Nhà phát triển</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                                <p>Không ngừng phát triển, xây dựng chất lượng cả về nội dung và hình thức. Tạo ra mọi giá trị hoàn hảo và đem lại cho khách hàng sự hài lòng về dịch vụ mà chúng tôi cung cấp.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Tin nổi bật</h3>
                                 @foreach($listNew as $lq)
                                <div class="media post_item">
                                    <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                    <img style="height: 60px;width: 70px ;margin-top: 20px" src="{!!$lq->news_img!!}" alt="post"> 
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8" ">
                                    <div class="media-body">
                                        <a href="{!! asset('tintuc/'.$lq->news_id.''.'.html'   ) !!}"><h3>{{$lq->news_name}}</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                               @endforeach
                                <div class="br"></div>
                            </aside>
                           
                           
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Ngày giờ</h4>
                                <div class="top_header-date">
                                    <span class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                    <?php sw_get_current_weekday(); ?> || <span id="clock"></span>
                                </div>
                                <div class="br"></div>
                            </aside>
                        
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="{{route('noibo.html')}}">Nội bộ</a></li>
                                    <li><a href="{{route('congnghe.html')}}">Công nghệ</a></li>
                                    <li><a href="{{route('lienquan.html')}}">Liên quan</a></li>
                                    <li><a href="{{route('khac.html')}}">Khác</a></li>
                                    
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
 
        /* Đặt phần tử của bạn tại đây */
        document.getElementById('clock').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    document.querySelector('body').addEventListener("load", startTime());
    
</script>
<?php
    function sw_get_current_weekday() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $weekday = date("l");
        $weekday = strtolower($weekday);
        switch($weekday) {
            case 'monday':
                $weekday = 'Thứ hai';
                break;
            case 'tuesday':
                $weekday = 'Thứ ba';
                break;
            case 'wednesday':
                $weekday = 'Thứ tư';
                break;
            case 'thursday':
                $weekday = 'Thứ năm';
                break;
            case 'friday':
                $weekday = 'Thứ sáu';
                break;
            case 'saturday':
                $weekday = 'Thứ bảy';
                break;
            default:
                $weekday = 'Chủ nhật';
                break;
        }
        // echo $weekday.', '.date('d/m/Y H:i:s');
        echo $weekday.', Ngày '.date('d/m/Y');
    }
?>
  
@endsection