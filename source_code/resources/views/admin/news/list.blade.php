@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách bài viết
			
				<a title ="Thêm tin tức" href="{{route('admin.news.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới bài viết</button>
				</a>
			
			
		</h1>
	</div>
	
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th style ="background-color:#50bbc5" >Stt</th>
				<th style ="background-color:#50bbc5">Tiêu đề</th>
				<th style ="background-color:#50bbc5">Nổi bật</th>
				<th style ="background-color:#50bbc5">Mô tả ngắn</th>
				<th style ="background-color:#50bbc5" >Nội dung</th>
				<th style ="background-color:#50bbc5">Ngày đăng</th>
				<th style ="background-color:#50bbc5">Ngày cập nhật</th>
				<th style ="background-color:#50bbc5">Thể loại</th>
				<th style ="background-color:#50bbc5">Hình ảnh</th>
				
				<th style ="background-color:#50bbc5">Chức năng</th>

																		
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($list as $item)
			<?php $stt++;?>
			<tr>
			
				<td>{!! $stt !!}</td>
				<td>{!! $item->news_name !!}</td>
				<td>{!! $item->new_hot !!}</td>
				<td>{!! $item->news_sort_content!!}</td>
				<td>{!! $item->news_content !!}</td>
				<td>{!! $item->created_at !!}</td>
				<td>{!! $item->updated_at !!}</td>
				<td>{!! $item->news_type !!}</td>
				<td>
					<div style="text-align: center;">
						<img  class="mx-auto d-block" src="{{asset($item->news_img)}}" width="30%" height="30%"/>
					</div>	
				</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.news.edit', $item->news_id) !!}" title="Sửa thông tin khách hàng" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.news.delete', $item->news_id) !!}" title="Xóa khách hàng" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
						<i class="fas fa-trash-alt"></i>
						<script>
							function alert_function(msg){
								if(confirm(msg)){
									return true;
								}
								return false;
							};	
						</script>
					</a>	
				</td>

				
			</tr>
			@endforeach
		</tbody>
	</table>
			
@endsection()
