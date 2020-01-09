<?php

namespace App\Http\Controllers;
use App\User;
use App\Service;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class ServiceController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	private $destinationPath =  '/uploads/service/';
	public function getList(){
		$service = new Service;
		$dataService = $service->GetAllServices();
		$list = array();
		$list = $dataService;
		return view('admin.service.service_list', compact('list'));
	}
	//add
	public function getAdd(){
		return view('admin.service.service_add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$this->validate($request,[
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|min:3|max:255',
        ],[
        	'avatar.image' => 'Chọn avartar người dùng với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện người dùng phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 2048 kb',
			'name.required' => 'Bạn chưa nhập tên dịch vụ',
			
			'name.max' => 'Tiêu đề bài viết tối đa 255 ký tự',
			'content.required' => 'Bạn chưa nhập nội dung mô tả' ,
			'more_content.required' => 'Bạn chưa nhập nội dung chính',
        ]);
		$service = new Service;
		$service->ser_name = $data['name'];
		$service->ser_content = $data['content'];
		$service->ser_description = $data['more_content'];
		$service_icon = '/uploads/service'.$service->ser_icon;
		$service_img = '/uploads/service'.$service->ser_img;
		/// icon san pham
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$service->ser_icon=$this->destinationPath.$name;
		}
		else{
			$service->ser_icon = '/uploads/service/20190621091937.png';
		}
		
		/// anh thuc te san pham // giai phap
		
		if($request->hasFile('anhSanPham1')){
			$file = Input::file('anhSanPham1');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$service->ser_img=$this->destinationPath.$name;
		}
		else{
			$service->ser_img = '/uploads/personnels/20190630100939.png';
		}
		$service->save();
		return redirect()->route('admin.service.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		Service::destroy($id);
		return redirect()->route('admin.service.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	} 
	//edit
	public function getEdit($id){
		$service = DB::table('service')->where('service.ser_id',$id)->select('service.*')->limit(1)->get();
		if(count($service)==0){
			return getList();
		}
		$service=$service[0];
		return view('admin.service.service_edit',compact('service'));
	}
	
	public function postEdit($id,Request $request){
		$data = $request->all();
		$request->validate([
            'avatar' => 'required',
            'avatar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
		$service = new Service;
		$service = Service::find($id);
		$service->ser_name = $data['name'];
		$service->ser_content = $data['content'];
		$service->ser_description = $data['more_content'];
		$service_icon = '/uploads/service'.$service->ser_icon;
		
		$service_img = '/uploads/service'.$service->ser_img;
		
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$service->ser_icon=$this->destinationPath.$name;
		}
		/// anh thuc te san pham // giai phap
		
		if($request->hasFile('anhSanPham1')){
			$file = Input::file('anhSanPham1');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$service->ser_img=$this->destinationPath.$name;
		}
		
		$service->save();
		return redirect()->route('admin.service.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
	
	public function giaiphapsmsbrandname(){
		$service = new Service;
		$dataService = $service->getAllServices();
		$listServices = array();
		$listServices = $dataService; 
	

		return view('Front-end.service.service_smsbrandname',compact('listServices'));
	}

	public function giaiphapmanhinhtruyenthongkythuatsoLCD(){
		$service = new Service;
		$dataService = $service->getAllServices();
		$listServices = array();
		$listServices = $dataService; 
	

		return view('Front-end.service.service_manhinhtruyenthongkythuatsoLCD',compact('listServices'));
	}

	public function giaiphapcongthongtindientu(){
		$service = new Service;
		$dataService = $service->getAllServices();
		$listServices = array();
		$listServices = $dataService; 
	

		return view('Front-end.service.service_congthongtindientu',compact('listServices'));
	}
	
	public function giaiphaphethongwifimarketing(){
		$service = new Service;
		$dataService = $service->getAllServices();
		$listServices = array();
		$listServices = $dataService; 
	

		return view('Front-end.service.service_hethongtruyenthongwifi',compact('listServices'));
	}
	
}
