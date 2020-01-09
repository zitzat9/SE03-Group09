@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Khách hàng 
						<small>Sửa</small>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.customer.edit', $customer->id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus"  value="{!! $customer->id !!}" ></input>
						
						<div class="form-group">		
							<label>Tên khách hàng</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $customer->name !!}" placeholder = "Nhập tên khách hàng"></input>
						</div>				
						<div class="form-group">		
							<label>Giới tính</label>
							<input  class = "form-control input" id = "gender" type = "text" name = "gender" autofocus="autofocus"  value="{!! $customer->gender !!}" placeholder = "Nhập tên khách hàng"></input>
						</div>
						<div class="form-group">
							<label>Địa chỉ</label>
							<input class = "form-control input" id = "address" type = "text" name = "address" autofocus="autofocus"  value="{!! $customer->address !!}" placeholder = "Nhập địa chỉ khách hàng"></input>
						</div>	
						<div class="form-group">		
							<label>Email</label>
							<input  class = "form-control input" id = "email" type = "text" name = "email" autofocus="autofocus"  value="{!! $customer->email !!}" placeholder = "Nhập tên khách hàng"></input>
						</div>
						<div class="form-group">
							<label>Số điện thoại</label>
							<input class = "form-control input" id = "phone_number" type = "number" name = "phone_number" autofocus="autofocus"  value="{!! $customer->phone_number !!}" placeholder = "Nhập sdt khách hàng"></input>
						</div>
						<div class="form-group">		
							<label>Ghi chú</label>
							<input  class = "form-control input" id = "note" type = "text" name = "note" autofocus="autofocus"  value="{!! $customer->note !!}" placeholder = "Nhập tên khách hàng"></input>
						</div>
					
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
					</form>
		</div>
	
		<script>
				function cancel_function(){
					window.location.href = "{{route('admin.customer.getList')}}";
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
