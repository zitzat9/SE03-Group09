@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>dịch vụ</small>
			
				<a title ="Thêm dịch vụ" href="{{route('admin.service.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới dịch vụ</button>
				</a>
			
		</h1>
		
	</div>
	
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th style ="background-color:#50bbc5;color: #fff;">STT</th> 
				<th style ="background-color:#50bbc5;color: #fff;">Icon sản phẩm</th>
				<th style ="background-color:#50bbc5;color: #fff;">Hình ảnh thực</th>
				<th style ="background-color:#50bbc5;color: #fff;">Tên dịch vụ</th>
				<th style ="background-color:#50bbc5;color: #fff;">Mô tả ngắn</th>
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
				<td>
					<div style="text-align: center;">
						<img  class="mx-auto d-block" src="{{asset($item->ser_icon)}}" width="100px" height="100px"/>
					</div>	
				</td>
				<td>
					<div style="text-align: center;">
						<img  class="mx-auto d-block" src="{{asset($item->ser_img)}}" width="100px" height="100px"/>
					</div>	
				</td>
				<td>{!! $item->ser_name!!}</td>
				<td>{!! $item->ser_description !!}</td>
				<td>{!! $item->created_at!!}</td>
				<td>{!! $item->updated_at !!}</td>
				
				<td style="text-align: center">
					<a href="{!! URL::route('admin.service.edit', $item->ser_id) !!}" title="Sửa thông tin dịch vụ" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.service.delete', $item->ser_id) !!}" title="Xóa dịch vụ" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
