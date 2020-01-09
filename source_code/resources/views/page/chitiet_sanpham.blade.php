@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin tuor</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
		
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

						
							<div class="space20">&nbsp;</div>

							
			
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Các địa điểm tương tự</h4>

						<div class="row">
						@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
									
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sptt->id)}}"><img src="{{$sptt->image}}" alt="" height="150px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sptt->name}}</p>
										
									</div>
									<div class="single-item-caption">
							
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						<div class="row">{{$sp_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Địa điểm nổi tiếng trong nước</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/71"><img src="style/img/halong.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Hạ Long
										<span class="beta-sales-price">Quảng Ninh</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/72"><img src="style/img/ddd815a96aa7cde4841bcc7d616ea622.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Tràng An
										<span class="beta-sales-price">Ninh Bình</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/73"><img src="style/img/tải xuống.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Hội An
										<span class="beta-sales-price">Thừa Thiên Huế</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/74"><img src="style/img/bien-nha-trang-2.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Nha Trang
										<span class="beta-sales-price">Nha Trang</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Địa điểm nổi tiếng thế giới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/79"><img src="style/img/37705670102119243615753944571631492727308288n-1532693670460116126148.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Kim tự tháp
										<span class="beta-sales-price">Ai Cập</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="http://localhost/chi-tiet-san-pham/78"><img src="style/img/qte.jpg" alt=""></a>
									<div class="media-body">
										Tour du lịch:Maldives
										<span class="beta-sales-price">Ấn Độ</span>
									</div>
								</div>
								
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection