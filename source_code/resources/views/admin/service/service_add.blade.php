@extends('admin.master_admin')
@section('content')
			@cannot('user')
			@endcannot
			<div class = "col-lg-12">
			
				<h1 class="page-header">Dịch vụ
							<small>Thêm</small>
				</h1>
					
			</div>
		
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_add" action="{{route('admin.service.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
									<div class="form-group">
										<label>Tên dịch vụ</label>
										<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập tên dịch vụ" value="{{ old('name') }}" autofocus></input>
									</div>
							
									<div class="form-group">
									
										<label style="display: inherit;">Icon (trang chủ)</label>
										<img id="avar" name = "avar" width="100px" height="30%" alt="avatar" src="/uploads/service/20190621091937.png" accept="image/*"/>
										<input style = "margin-top:5px" type= "file" name = "avatar" value = "/uploads/service/20190621091937.png" onchange="readURL1(this,'avar');"></input>
										<script>
											function readURL1(input,id) {
												console.log(id);							
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
										<label style="display: inherit;">Hình ảnh sản phẩm</label>
										<img id="anhSanPham" name = "anhSanPham" width="100px" height="30%" alt="anhSanPham" src="/uploads/personnels/20190630100939.png" accept="image/*"/>
										<input style = "margin-top:5px" type= "file" name = "anhSanPham1" value = "/uploads/personnels/20190630100939.png" onchange="readURL2(this,'anhSanPham');"></input>
										<script>
											function readURL2(input,id){
												console.log(id);					
												if (input.files && input.files[0]) {
													
													var reader = new FileReader();

													reader.onload = function (e) {
														$('#anhSanPham')
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
										<label>Mô tả ngắn</label>
										<textarea name = "more_content" class="form-control" rows = "3"></textarea>
										<script>
											ckeditor("more_content");
										</script>
									</div>	
									
									<div class="form-group">
										<label>Nội dung</label>
										<textarea name = "content" class="form-control" rows = "3"></textarea>
										<script>
											ckeditor("content");
										</script>
									</div>
									
									
										<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
										<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
										
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.service.getList')}}";
			}
			
			
		</script>
		

@endsection()

