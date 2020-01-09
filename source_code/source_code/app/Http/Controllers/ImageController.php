<?php

namespace App\Http\Controllers;

use App\User;
use App\Image;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ImageController extends Controller
{
	private $destinationPath =  '/uploads/image/';
	public function getList()
	{
		$image = new Image;
		$dataProducts = $image->GetAllProducts();
		$list = array();
		$list = $dataProducts;
		return view('admin.image.list', compact('list'));
	}
	//add
	public function getAdd()
	{
		return view('admin.image.add');
	}
	public function postAdd(Request $request)
	{
		$data = $request->all();
$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9548',
			'name' => 'required|min:3|max:255',
			
		],[
			'avatar.image' => 'Chọn avartar sản phẩm với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện sản phẩm phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 9048 kb',
			'name.required' => 'Bạn chưa nhập tên sản phẩm',
			'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
			'name.max' => 'Tên sản phẩm có tối đa 255 ký tự',
		
			
		]);	
		$image = new Image;		
		if ($request->hasFile('avatar')) {
			$file = Input::file('avatar');
			$filename = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':', '-'], '', Carbon::now()->toDateTimeString());
			$name = $timestamp . '.' . $extension;
			$file->move(public_path($this->destinationPath), $name);
			$image->img_image = $this->destinationPath . $name;
		}
		else{
			$image->pr_img = '/uploads/image/newproduct.jpg';
		}
	
		$image->img_name = $data['name'];		
		$image->save();
		return redirect()->route('admin.image.getList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thành công']);
	}
	//delete
	public function getDelete($id)
	{
		Image::destroy($id);
		return redirect()->route('admin.image.getList')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
	}
	//edit
	public function getEdit($id)
	{
		$image = DB::table('image')->where('image.img_id', $id)->select('image.*')->limit(1)->get();
		if (count($image) == 0) {
			return getList();
		}
		$image = $image[0];
		return view('admin.image.edit', compact('image'));
	}

	public function postEdit($id, Request $request)
	{
		$image = new Image;
		$data = $request->all();
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
			'name' => 'required|min:3|max:255',
			
			
			
			
			
		],[
			'avatar.image' => 'Chọn avartar sản phẩm với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện sản phẩm phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 9048 kb',
			'name.required' => 'Bạn chưa nhập tên sản phẩm',
			'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
			'name.max' => 'Tên sản phẩm có tối đa 255 ký tự',
		
			
		]);	
		$image = new Image;
		$image = Image::find($id);

		$image->img_name = $data['name'];
		$img_image = '/uploads/image'.$image->img_image;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$image->img_image = $this->destinationPath.$name;
		}
		
		$image->save();
		return redirect()->route('admin.image.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
}
