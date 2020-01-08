@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="header-page">Thay đổi thông tin
						
					</h1>
			</div>
			<div class="col-lg-7" style="padding-bottom: 120px">
				@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_add" action="{!! URL::route('admin.news.edit', $news->news_id) !!}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus" required="required" value="{!! $news->news_id !!}" >
						<div class="form-group">		
							<label>Tiêu đề</label>
							<input  class = "form-control" type = "text" name = "name" autofocus="autofocus" required="required" value="{!! $news->news_name !!}">
						</div>				
						<div class="form-group">
										<label>Nổi bật</label>
									
										<select class="form-control" name = "hot">
											<option>1</option>
											<option>0</option>
											
										</select>
									</div>
						<div class="form-group">
							<label>Mô tả ngắn</label>
							<input class = "form-control" type = "text" name = "sort_content" autofocus="autofocus" required="required" value="{!! $news->news_sort_content !!}">
						</div>	
						
						<div class="form-group">
							<label>Nội dung</label>
							<textarea name = "content" class="form-control" rows = "3" >{!! $news->news_content !!}</textarea>
							<script>
								ckeditor("content");
							</script>
						</div>		
								<div class="form-group">
										<label>Thể loại</label>
									
										<select class="form-control" name = "type">
											<option>Nội bộ</option>
											<option>Công nghệ</option>
											<option>Liên quan</option>
											<option>Khác</option>
										</select>
									</div>	
						
						<div class="form-group">
							<label style="display: inherit;">Ảnh đại diện</label>
							<img id = "avar" name = "avar" class="mx-auto d-block" width="30%" height="30%" alt="avatar" src="{{asset($news->news_img)}}" accept="image/*"/>
							<input style="margin-top: 5px;" type = "file"  name = "avatar" value="{{asset($news->news_img)}}"  onchange="readURL(this);"></input>
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
						<button type = "submit" class="btn btn-default btn_action" onclick="save_function()" style="background-color:#b4f1ee">Save</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
		</div>
	
		<script>
			function cancel_function(){
				
					window.location.href = "{{route('admin.news.getList')}}";
				}
			function save_function(){
				
			}
			
		</script>
	</div>
@endsection()
