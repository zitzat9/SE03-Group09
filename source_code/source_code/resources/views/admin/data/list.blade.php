@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>Dữ liệu</small>
			
				<a title ="Thêm dữ liệu" href="{{route('admin.data.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới dữ liệu</button>
				</a>
			
		</h1>
		
	</div>
	
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th style ="background-color:#50bbc5;color: #fff;">STT</th> 
				<th style ="background-color:#50bbc5;color: #fff;">Kiểu thông tin</th>
				<th style ="background-color:#50bbc5;color: #fff;">Nội dung</th>
				<th style ="background-color:#50bbc5;color: #fff;">Người cập nhật</th>
				<th style ="background-color:#50bbc5;color: #fff;">Ngày tạo</th>
				<th style ="background-color:#50bbc5;color: #fff;">Ngày cập nhật</th>
				<th style ="background-color:#50bbc5;color: #fff;">Chức năng</th>
																		
			</tr>
		</thead>
		<tbody>
			
			<?php $stt=0;?>
			@foreach($list as $item)
			<?php $stt++;?>
			
			<tr>
				<td>{!! $stt !!}</td>
				<td>{!! $item->data_type !!}</td>
				<td>{!! $item->data_content !!}</td>
				<td>{!! $item->dulieu_nguoiCapNhat !!}</td>
				<td>{!! $item->created_at !!}</td>
				<td>{!! $item->updated_at !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.data.edit', $item->id) !!}" title="Sửa thông tin" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.data.delete', $item->id) !!}" title="Xóa dữ liệu" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
