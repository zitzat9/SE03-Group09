@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>khách hàng</small>
			
				<a title ="Thêm khách hàng" href="{{route('admin.customer.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới khách hàng</button>
				</a>
			
		</h1>
		
	</div>
	
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
				<th style ="background-color:#50bbc5;color: #fff;">STT</th> 
				<th style ="background-color:#50bbc5;color: #fff;">Tên khách hàng</th>
				<th style ="background-color:#50bbc5;color: #fff;">Giới tính</th>
				<th style ="background-color:#50bbc5;color: #fff;">Địa chỉ</th>
				<th style ="background-color:#50bbc5;color: #fff;">Email</th>
				<th style ="background-color:#50bbc5;color: #fff;">Sđt</th>
				<th style ="background-color:#50bbc5;color: #fff;">Chú ý</th>
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
				<td>{!! $item->name !!}</td>
				<td>{!! $item->gender !!}</td>
				<td>{!! $item->address !!}</td>
				<td>{!! $item->email !!}</td>
				<td>{!! $item->phone_number !!}</td>
				<td>{!! $item->note !!}</td>
				<td>{!! $item->created_at !!}</td>
				<td>{!! $item->updated_at !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.customer.edit', $item->id) !!}" title="Sửa thông tin khách hàng" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.customer.delete', $item->id) !!}" title="Xóa khách hàng" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
