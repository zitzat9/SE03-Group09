<?php

namespace App\Http\Controllers;
use App\User;
use App\Data;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class DataController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public function getList(){
	//	$this->authorize('admin');
	//su dung policy
	//	$this->authorize($data,'view');
		$data = new Data;
		$dataList = $data->GetAllData();
		$list = array();
		$list = $dataList;
		return view('admin.data.list',compact('list'));
	}
	
	//add
	public function getAdd(){
	//	$this->authorize('admin');
		return view('admin.data.add');
	}
	public function postAdd(Request $request){
	//	$this->authorize('admin');
		$dataRequest = $request->all();
		$this->validate($request,[
			'name' => 'required',
			'data_type' => 'required',
			'data_content' => 'required',
		],[
			'name.required' => 'Chọn tên người cập nhật là bắt buộc !',
			'data_type.required' => 'Nhập kiểu tin là bắt buộc !',
			'data_content.required' => 'Nhập nội dung là bắt buộc !',
		]);
		$data = new Data;
		$data->dulieu_nguoiCapNhat = $dataRequest['name'];
		$data->data_type = $dataRequest['data_type'];
		$data->data_content = $dataRequest['data_content'];
		$data->save();
		return redirect()->route('admin.data.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		//$this->authorize('admin');
		Data::destroy($id);
		return redirect()->route('admin.data.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
	//	$this->authorize('admin');
		$data = DB::table('dulieu')->where('dulieu.id',$id)->select('dulieu.*')->limit(1)->get();
		if(count($data)==0){
			return getList();
		}
		$data=$data[0];
		return view('admin.data.edit',compact('data'));
	}
	
	public function postEdit($id,Request $request){
	//	$this->authorize('admin');
		$dataRequest = $request->all();
		
		$this->validate($request,[
			'name' => 'required',
			'data_type' => 'required',
			'data_content' => 'required',
		],[
			'name.required' => 'Chọn tên người cập nhật là bắt buộc !',
			'data_type.required' => 'Nhập kiểu tin là bắt buộc !',
			'data_content.required' => 'Nhập nội dung là bắt buộc !',
		]);
		$data = new Data;
		$data = Data::find($id);
		$data->data_type = $dataRequest['data_type'];
		$data->dulieu_nguoiCapNhat = $dataRequest['name'];
		$data->data_content = $dataRequest['data_content'];
		$data->save();
		return redirect()->route('admin.data.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
	
	
}
