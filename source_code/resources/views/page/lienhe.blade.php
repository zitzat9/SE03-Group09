@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ với chúng tôi</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.93011100904!2d105.8082682892669!3d20.99543846453718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9663324eab%3A0xc982ae258f0f1524!2zMzM0IE5ndXnhu4VuIFRyw6NpLCBUaGFuaCBYdcOibiBUcnVuZywgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1578601110907!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe><div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Gửi phản hồi</h2>
					<div class="space20">&nbsp;</div>
					<p>Sự góp ý của các bạn giúp chúng tôi hoàn thiện hơn</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên (required)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder=" Email (required)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						334 Nguyễn Trãi,<br>
						Thanh Xuân <br>
						Hà Nội
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Liên hệ</h6>
					<p>
						Mọi thắc mắc xin liên hệ
						<a href="mailto:biz@betadesign.com">dulich@gmail.com</a>
					</p>
					
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection