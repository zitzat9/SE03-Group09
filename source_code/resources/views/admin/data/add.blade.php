@extends('admin.master_admin')
@section('content')
			@cannot('user')
			@endcannot
			<div class = "col-lg-12">
			
				<h1 class="page-header">Dữ liệu
							<small>Thêm</small>
				</h1>
					
			</div>
		
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_add" action="{{route('admin.data.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
							<div class="form-group">		
								<label>Kiểu dữ liệu</label>
								<input  class = "form-control input" id = "name" type = "text" name = "data_type"  value="{{ old('data_type') }}" autofocus placeholder = "Nhập kiểu dữ liệu"></input>
							</div>		

							<div class="form-group">
								<label>Người cập nhật</label>
								
								<select class="form-control" name = "name">
									<option>Chung</option>
									<option>Cường</option>
									<option>Thông</option>
								</select>
								
							</div>	
					
							<div class="form-group">
								<label>Nội dung</label>
								<textarea name = "data_content" class="form-control" rows = "3"  value="{{ old('data_content') }}"></textarea>
								<script>
									ckeditor("data_content");
								</script>
							</div>		
			
							<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
							<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
							
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.data.getList')}}";
			}
			
		</script>
		

@endsection()

