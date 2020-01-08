@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="header-page">Dịch Vụ
						<small>Sửa</small>
					</h1>
			</div>
			<div class="col-lg-12">
					<form id = "form_add" action="{!! URL::route('admin.service.edit', $service->ser_id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus" required="required" value="{!! $service->ser_id !!}" >
						<div class="form-group">		
							<label>Tên Dịch Vụ</label>
							<input  class = "form-control" type = "text" name = "name" autofocus="autofocus" required="required" value="{!! $service->ser_name !!}">
						</div>				
					
						
						<div class="form-group">
							<label>Mô tả ngắn</label>
							<textarea name = "more_content" class="form-control" rows = "3">{!! $service->ser_description !!}</textarea>
							<script>
								ckeditor("more_content");
							</script>
						</div>	
						
						<div class="form-group">
							<label>Nội dung</label>
							<textarea name = "content" class="form-control" rows = "3">{!! $service->ser_content !!}</textarea>
							<script>
								ckeditor("content");
							</script>
						</div>
						
						<div class="form-group">
							<label style="display: inherit;">Icon product</label>
							<img id = "avar" class="mx-auto d-block" width="100px" height="100px" alt="avatar" src="{{asset($service->ser_icon)}}"/>
							<input style="margin-top: 5px;" type = "file" name = "avatar" 
							 onchange="readURL1(this);"></input>
							 <input style="margin-top: 5px;" type = "hidden" name = "avatar" 
							 onchange="readURL1(this);" value="{!! $service->ser_icon !!}"></input>
							<script>
									function readURL1(input) {
											if (input.files && input.files[0]) {
												var reader = new FileReader();
												reader.onload = function (e) {
													$('#avar')
														.attr('src', e.target.result)
														.width(150)
														.height(150);
												};

												reader.readAsDataURL(input.files[0]);
											}
									}
							</script>
						</div>	
						
						<div class="form-group">
							<label style="display: inherit;">Hình ảnh thực</label>
							<img id = "anhSanPham" class="mx-auto d-block" width="100px" height="100px" alt="anhSanPham" src="{{asset($service->ser_img)}}"/>
				
							 <input style="margin-top: 5px;" type = "file" name = "anhSanPham1" 
							 onchange="readURL2(this);"></input>
							 <input style="margin-top: 5px;" type = "hidden" name = "anhSanPham1" 
							 onchange="readURL2(this);" value="{!! $service->ser_img !!}"></input>
							 
							<script>
								function readURL2(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();
											reader.onload = function (e) {
												$('#anhSanPham')
													.attr('src', e.target.result)
													.width(150)
													.height(150);
											};

											reader.readAsDataURL(input.files[0]);
										}
								}
							</script>
						</div>	
						
						<button type = "submit" class="btn btn-default btn_action" onclick="save_function()" style="background-color:#b4f1ee">Save</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
		</div>
	
		<script>
		
			function cancel_function(){
			
				window.location.href = "{{route('admin.service.getList')}}";
			}
		
		</script>
	</div>
@endsection()
