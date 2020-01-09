@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>nhân viên</small>
			
				<a title ="Thêm nhân viên" href="{{route('admin.personnel.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới nhân viên</button>
				</a>
			
		</h1>
		
	</div>
	
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th style ="background-color:#50bbc5;color: #fff;">STT</th> 
				<th style ="background-color:#50bbc5;color: #fff;">Ảnh đại diện</th>
				<th style ="background-color:#50bbc5;color: #fff;">Tên nhân viên</th>
				<th style ="background-color:#50bbc5;color: #fff;">Ngày sinh</th>
				<th style ="background-color:#50bbc5;color: #fff;">Địa chỉ</th>
				<th style ="background-color:#50bbc5;color: #fff;">Email</th>
				<th style ="background-color:#50bbc5;color: #fff;">Số điện thoại</th>
				<th style ="background-color:#50bbc5;color: #fff;">Chức vụ</th>
				<th style ="background-color:#50bbc5;color: #fff;">Giới tính</th>
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
						<img  class="mx-auto d-block" src="{{asset($item->per_avatar)}}" width="30%" height="30%"/>
					</div>	
				</td>
				<td>{!! $item->per_name !!}</td>
				<td>{!! $item->per_birthyear !!}</td>
				<td>{!! $item->per_address !!}</td>
				<td>{!! $item->per_email !!}</td>
				<td>{!! $item->per_phone !!}</td>
				<td>{!! $item->per_chucvu !!}</td>
				<td>{!! $item->per_gioitinh !!}</td>
				<td>{!! $item->created_at !!}</td>
				<td>{!! $item->updated_at !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.personnel.edit', $item->per_id) !!}" title="Sửa thông tin nhân viên" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.personnel.delete', $item->per_id) !!}" title="Xóa nhân viên" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
