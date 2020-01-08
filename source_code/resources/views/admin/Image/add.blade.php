@extends('admin.master_admin')
@section('content')
			<div class = "col-lg-12">
			
				<h1 class="page-header">Thêm ảnh
				</h1>
					
			</div>
		
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_add" action="{{route('admin.image.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
									<div class="form-group">
										<label>Tên ảnh</label>
										<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập tên ảnh" value="{{ old('name') }}" autofocus></input>
									</div>		

									<div class="form-group">
										<label style="display: inherit;">Ảnh đại diện</label>
										<img id="avar" name = "avar" width="100px" height="30%" alt="avatar" src="/uploads/image/20190626102021.png" accept="image/*"/>
										<input style = "margin-top:5px" type= "file" name = "avatar" value = "/uploads/image/20190626102021.png" onchange="readURL(this);"></input>
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
									
									
									
									
										<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
										<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
										
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.image.getList')}}";
			}
			
		</script>
		

@endsection()

