<?php

namespace App\Http\Controllers;
use App\User;
use App\Customer;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class CustomerController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	private $destinationPath =  '/uploads/customers/';
	
	public function getList(){
	//	$this->authorize('admin');
	//su dung policy
	//	$this->authorize($customer,'view');
		$customer = new Customer;
		$dataCustomer = $customer->GetAllCustomers();
		$list = array();
		$list = $dataCustomer;
		return view('admin.customer.list',compact('list'));
	}
	
	//add
	public function getAdd(){
	//	$this->authorize('admin');
		return view('admin.customer.add');
	}
	public function postAdd(Request $request){
		$data = $request->all();
		$this->validate($request,[
			'name' => 'required|min:3|max:255',
			'address' => 'required|min:3|max:255',	
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng có tối đa 255 ký tự',
			'address.required' => 'Bạn chưa nhập địa chỉ của khách hàng',
			'address.min' => 'Địa chỉ phải có ít nhất 3 ký tự',
			'address.max' => 'Địa chỉ có tối đa 255 ký tự',
		]);
		$customer = new Customer;
		$customer->name = $data['name'];
		$customer->gender = $data['gender'];
		$customer->email = $data['email'];
		$customer->phone_number = $data['phone_number']; 
		$customer->address = $data['address']; 
		$customer->note = $data['note'];
		$customer->save();
		return redirect()->route('admin.customer.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		//$this->authorize('admin');
		Customer::destroy($id);
		return redirect()->route('admin.customer.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	
	//edit
	public function getEdit($id){
	//	$this->authorize('admin');
		$customer = DB::table('customer')->where('customer.id',$id)->select('customer.*')->limit(1)->get();
		if(count($customer)==0){
			return getList();
		}
		$customer=$customer[0];
		return view('admin.customer.edit',compact('customer'));
	}
	
	public function postEdit($id,Request $request){
		$data = $request->all();
		$this->validate($request,[
			'name' => 'required|min:3|max:255',
			'address' => 'required|min:3|max:255',	
		],[
			'name.required' => 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
			'name.max' => 'Tên người dùng có tối đa 255 ký tự',
			'address.required' => 'Bạn chưa nhập địa chỉ của khách hàng',
			'address.min' => 'Địa chỉ phải có ít nhất 3 ký tự',
			'address.max' => 'Địa chỉ có tối đa 255 ký tự',
		]);
		$customer = new Customer;
		$customer = Customer::find($id);
		$customer->name = $data['name'];
		$customer->gender = $data['gender'];
		if($request->changeEmail == "on"){
			$this->validate($request,[
				'email' => 'required|email',
			],[
				'email.required' => 'Bạn chưa nhập Email',
				'email.email' => 'Bạn chưa nhập đúng định dạng Email', 
			]);
			$customer->email = $data['email'];
		}
		$customer->phone_number = $data['phone_number']; 
		$customer->address = $data['address']; 
		$customer->note = $data['note'];

		$customer->save();
		return redirect()->route('admin.customer.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
	
	
}
