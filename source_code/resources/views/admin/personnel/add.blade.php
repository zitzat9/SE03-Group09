@extends('admin.master_admin')
@section('content')
			@cannot('user')
			@endcannot
			<div class = "col-lg-12">
			
				<h1 class="page-header">Nhân Viên
							<small>Thêm</small>
				</h1>
					
			</div>
		
				<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "validate_form" action="{{route('admin.personnel.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
									<div class="form-group">
										<label>Tên nhân viên</label>
										<input class="form-control input" id = "name" type = "text" name = "name" placeholder = "Nhập tên nhân viên"   value = "{{old('name')}}"></input>
									</div>
						
									<div class="form-group">
										<label>Năm sinh</label>
										<input class="form-control input" id ="birthyear" type = "number" placeholder = "Nhập năm sinh nhân viên" name = "birthyear"   value = "{{old('birthyear')}}"></input>
									</div>	
									<div class="form-group">
										<label>Số điện thoại</label>
										<input class = "form-control input" id = "phone" type = "number" name = "phone" autofocus="autofocus"  placeholder = "Nhập số điện thoại nhân viên"  value = "{{old('phone')}}"></input>
									</div>
									<div class="form-group">
										<label>Địa chỉ</label>
										<input class="form-control input" id = "address" type = "text" name = "address" placeholder = "Nhập địa chỉ nhân viên"  value = "{{old('address')}}" ></input>
									</div>	
									
									<div class="form-group">
										<label>Email</label>
										<input class="form-control input" id = "email" type = "email" name = "email" placeholder = "Nhập email nhân viên"   value = "{{old('email')}}"></input>
									</div>	
									
									<div class="form-group">
										<label>Chức vụ</label>
										
										<!--<input class="form-control input" id = "chucvu" type = "text" name = "chucvu" placeholder = "Nhập chức vụ nhân viên"   value = "{{old('chucvu')}}"></input>
										-->
										<select class="form-control" name = "chucvu">
											<option>Lập trình viên</option>
											<option>Quản lý</option>
											<option>Giám đốc</option>
											<option>Kế toán</option>
										</select>
									</div>	
									
									<div class="form-group">
										<label>Giới tính</label>
										<label class="radio-inline">
											<input type = "radio" name = "type" checked="checked" value="Nam">Nam</input>
										</label>
										<label class="radio-inline">
											<input type = "radio" name = "type" value="Nữ">Nữ</input>
										</label>
										<label class="radio-inline">
											<input type = "radio" name = "type" value="Khác">Khác</input>
										</label>
									</div>	
									
									
									<div class="form-group">
										<label style="display: inherit;">Ảnh đại diện</label>
										<img id="avar" name = "avar" width="100px" height="30%" alt="avatar" src="/uploads/customers/20190703074332.png" accept="image/*"/>
										<input style = "margin-top:5px" type= "file" name = "avatar" value = "/uploads/customers/20190703074332.png" onchange="readURL(this);"></input>
										<script>
											function readURL(input) {
													
													if (input.files && input.files[0]) {
														
														var reader = new FileReader();

														reader.onload = function (e) {
															$('#avar')
																.attr('src', e.target.result)
																.width(150)
																.height(150)
														};
														reader.readAsDataURL(input.files[0]);
													}
											}
											
										</script>
									</div>	
									
									
									<div class="form-group">
										<label>Thông tin thêm</label>
										<textarea name = "data_cus" class="form-control" rows = "3"></textarea>
										<script>
											ckeditor("data_cus");
										</script>
									</div>	
									
										<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
										<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.personnel.getList')}}";

			}
			
		</script>
		

@endsection()

