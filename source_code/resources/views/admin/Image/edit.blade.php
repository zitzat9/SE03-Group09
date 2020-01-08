@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Sửa ảnh
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.image.edit', $image->img_id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus"  value="{!! $image->img_id !!}" ></input>
						
						<div class="form-group">		
							<label>Tên khách hàng</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $image->img_name !!}" placeholder = "Nhập tên khách hàng"></input>
						</div>				
						<div class="form-group">
							<label style="display: inherit;">Ảnh đại diện</label>
							<img id = "avar" name = "avar" width="100px" height="30%" alt="avatar" src="{{asset($image->img_image)}}" accept="image/*"/>
							<input style="margin-top: 5px;" type = "file"  name = "avatar" value="{{asset($image->img_image)}}"  onchange="readURL(this);"></input>
							<script>
									function readURL(input) {
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
						
						
						
				
					
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
					</form>
		</div>
	
		<script>
				function cancel_function(){
					window.location.href = "{{route('admin.image.getList')}}";
				}
				function doimail(object){
				var emailObject = document.getElementById('email');
				console.log(emailObject);
				if(object.checked == true){
					emailObject.disabled = false;
					emailObject.disabled = false;
				}
				else{
					emailObject.disabled = true;
					emailObject.disabled = true;
				}
			}
		</script>
	</div>
@endsection()
