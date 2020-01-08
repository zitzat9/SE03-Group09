@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Nhân Viên
						<small>Sửa</small>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.personnel.edit', $personnel->per_id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus" ="" value="{!! $personnel->per_id !!}" ></input>
						
						<div class="form-group">		
							<label>Tên nhân viên</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $personnel->per_name !!}" placeholder = "Nhập tên nhân viên"></input>
						</div>				
					
						<div class="form-group">
							<label>Năm sinh</label>
							<input class = "form-control input"  id = "birthyear" type = "number" name = "birthyear" autofocus="autofocus" placeholder = "Nhập năm sinh nhân viên"  value="{!! $personnel->per_birthyear !!}"></input>
						</div>	
							
						<div class="form-group">
							<label>Địa chỉ</label>
							<input placeholder = "Nhập địa chỉ nhân viên" class = "form-control input" id = "address" type = "text" name = "address" autofocus="autofocus"  value="{!! $personnel->per_address !!}"></input>
						</div>	
						
						<div class="form-group">
							<label>Số điện thoại</label>
							<input class = "form-control input" id = "phone" type = "number" name = "phone" autofocus="autofocus" value="{!! $personnel->per_phone !!}" placeholder = "Nhập số điện thoại nhân viên"></input>
						</div>
						
						<div class="form-group">
							<label>Chức vụ</label>
							<!--<input placeholder = "Nhập chức vụ nhân viên" class="form-control input" id = "chucvu" type = "text" name = "chucvu" placeholder = "Nhập chức vụ nhân viên"  value="{!! $personnel->per_chucvu !!}"></input>
							-->
							
							<select class="form-control" name = "chucvu" value="{!! $personnel->per_chucvu !!}">
								<option @if("$personnel->per_chucvu" == 'Lập trình viên') selected @endif>Lập trình viên</option>
								<option @if("$personnel->per_chucvu" == 'Quản lý') selected @endif>Quản lý</option>
								<option @if("$personnel->per_chucvu" == 'Giám đốc') selected @endif>Giám đốc</option>
								<option @if("$personnel->per_chucvu" == 'Kế toán') selected @endif>Kế toán</option>
							</select>
						</div>	
						
						<div class="form-group">
						
							<input id = "changeEmailPer" type = "checkbox" onclick="doimail(this)" name = "changeEmail"></input><label>Đổi email</label>
							<input class = "form-control input" id = "email" type = "email" name = "email" autofocus="autofocus"  value="{!! $personnel->per_email !!}" placeholder = "Email" disabled=""></input>

						</div>	
						
						<div class="form-group">
							<label>Giới tính</label>
							<label class="radio-inline">
								<input type = "radio" name = "type"  @if("$personnel->per_gioitinh" == "Nam") checked="checked"  @endif value = "Nam" >Nam</input>
							</label>
							<label class="radio-inline">
								<input type = "radio" name = "type" @if("$personnel->per_gioitinh" == "Nữ") checked="checked"  @endif  value="Nữ">Nữ</input>
							</label>
							<label class="radio-inline">
								<input type = "radio" name = "type" @if("$personnel->per_gioitinh" == "Khác") checked="checked"  @endif value="Khác">Khác</input>
							</label>
						</div>	
						
						<div class="form-group">
							<label style="display: inherit;">Ảnh đại diện</label>
							<img id = "avar" name = "avar" width="100px" height="30%" alt="avatar" src="{{asset($personnel->per_avatar)}}" accept="image/*"/>
							<input style="margin-top: 5px;" type = "file"  name = "avatar" value="{{asset($personnel->per_avatar)}}"  onchange="readURL(this);"></input>
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
						
						<div class="form-group">
							<label>Thông tin nhân viên</label>
							<textarea name = "data_cus" class="form-control" rows = "3" >{!! $personnel->per_thongtinthem !!}</textarea>
							<script>
								ckeditor("data_cus");
							</script>
						</div>	
						
					
						
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
		</div>
	
		<script>
			function cancel_function(){
					window.location.href = "{{route('admin.personnel.getList')}}";
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
