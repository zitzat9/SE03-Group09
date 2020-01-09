@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Dữ liệu
						<small>Sửa</small>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.data.edit', $data->id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus"  value="{!! $data->id !!}" ></input>
						
						<div class="form-group">		
							<label>Kiểu dữ liệu</label>
							<input  class = "form-control input" id = "name" type = "text" name = "data_type" autofocus="autofocus"  value="{!! $data->data_type !!}" placeholder = "Nhập kiểu dữ liệu"></input>
						</div>	

						<div class="form-group">
							<label>Người cập nhật</label>
							
							<select class="form-control" name = "name" value="{!! $data->dulieu_nguoiCapNhat !!}">
								<option @if("$data->dulieu_nguoiCapNhat" == 'Chung') selected @endif>Chung</option>
								<option @if("$data->dulieu_nguoiCapNhat" == 'Cường') selected @endif>Cường</option>
								<option @if("$data->dulieu_nguoiCapNhat" == 'Thông') selected @endif>Thông</option>
							</select>
						</div>	
					
						<div class="form-group">
							<label>Nội dung</label>
							<textarea name = "data_content" class="form-control" rows = "3" >{!! $data->data_content !!}</textarea>
							<script>
								ckeditor("data_content");
							</script>
						</div>	
						
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
					</form>
		</div>
	
		<script>
				function cancel_function(){
				
					window.location.href = "{{route('admin.data.getList')}}";
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
