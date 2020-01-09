@extends('admin.master_admin')
@section('content')
			@cannot('user')
			@endcannot
			<div class = "col-lg-12">
			
				<h1 class="page-header">Khách hàng
							<small>Thêm</small>
				</h1>
					
			</div>
		
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_add" action="{{route('admin.customer.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
									<div class="form-group">
										<label>Tên khách hàng</label>
										<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập tên khách hàng" value="{{ old('name') }}" autofocus></input>
									</div>
						
									<div class="form-group">
										<label>Giới tính</label>
										<input class="form-control input" id = "gender" type = "text" name = "gender" placeholder = "Nhập giới tính" value="{{ old('gender') }}"></input>
									</div>	
									
									<div class="form-group">
										<label>Địa chỉ</label>
										<input class="form-control input" id = "address" type = "text" name = "address" placeholder = "Nhập địa chỉ khách hàng" value="{{ old('address') }}"></input>
									</div>	
									<div class="form-group">
										<label>Email</label>
										<input class="form-control input" id = "email" type = "email" name = "email" placeholder = "Nhập email khách hàng" value="{{ old('email') }}"></input>
									</div>
									<div class="form-group">
										<label>Số điện thoại</label>
										<input class="form-control input" id = "phone_number" type = "number" name = "phone_number" placeholder = "Nhập số điện thoại khách hàng" value="{{ old('phone_number') }}"></input>
									</div>
									<div class="form-group">
										<label>Chú ý</label>
										<input class="form-control input" id = "note" type = "text" name = "note" placeholder = "Chú ý" value="{{ old('note') }}"></input>
									</div>
									
										<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
										<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
										
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.customer.getList')}}";
			}
			
		</script>
		

@endsection()

