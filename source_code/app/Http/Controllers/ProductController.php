<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ProductController extends Controller
{
	private $destinationPath =  '/uploads/product/';
	public function getList()
	{
		$product = new Product;
		$dataProducts = $product->GetAllProducts();
		$list = array();
		$list = $dataProducts;
		return view('admin.product.list', compact('list'));
	}
	//add
	public function getAdd()
	{
		return view('admin.product.add');
	}
	public function postAdd(Request $request)
	{
		$data = $request->all();
		$product = new Product;		
		if ($request->hasFile('avatar')) {
			$file = Input::file('avatar');
			$filename = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':', '-'], '', Carbon::now()->toDateTimeString());
			$name = $timestamp . '.' . $extension;
			$file->move(public_path($this->destinationPath), $name);
			$product->image = $this->destinationPath . $name;
		}
		else{
			$product->image = '/uploads/product/newproduct.jpg';
		}
		
		$product->name = $data['name'];
		$product->id_type = $data['type'];
		$product-> new = $data['new'];
		$product->description = $data['noidung'];
				
		$product->save();
		return redirect()->route('admin.product.getList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thành công']);
	}
	//delete
	public function getDelete($id)
	{
		Product::destroy($id);
		return redirect()->route('admin.product.getList')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
	}
	//edit
	public function getEdit($id)
	{
		$product = DB::table('product')->where('product.id', $id)->select('product.*')->limit(1)->get();
		if (count($product) == 0) {
			return getList();
		}
		$product = $product[0];
		return view('admin.product.edit', compact('product'));
	}

	public function postEdit($id, Request $request)
	{
		$product = new Product;
		$data = $request->all();
		$product = new Product;
		$product = Product::find($id);

		$product->name = $data['name'];
		$product->id_type = $data['type'];
		$product->description = $data['noidung'];	
		$image = '/uploads/product'.$products->image;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$product->image = $this->destinationPath.$name;
		}
		
		$product->save();
		return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
}
