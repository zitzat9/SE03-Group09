<?php

namespace App\Http\Controllers;
use App\User;
use App\News;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
class NewsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	private $destinationPath =  '/uploads/news/';
	
	public function getList(){
		$news = new News;
		//$this->authorize('$news','view');
		$datanews = $news->GetAllNews(100);
		$list = array();
		$list = $datanews;
		return view('admin.news.list', compact('list'));
	}
	//add
	public function getAdd(){
		return view('admin.news.add');
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
			'name.required' => 'Bạn chưa nhập tiêu đề bài viết',
			
			'name.max' => 'Tiêu đề bài viết tối đa 255 ký tự',
			'sort_content.required' => 'Bạn chưa nhập mô tả tin tức' ,
			'content.required' => 'Bạn chưa nhập nội dung tin tức',
		]);
		$news = new News;
		$news->news_name = $data['name'];
		$news->new_hot = $data['hot'];
		$news->news_sort_content = $data['sort_content'];
		$news->news_content = $data['content'];
		$news->news_type = $data['type'];
		$news_img = '/uploads/news'.$news->news_img;
		if($request->hasFile('image')){
			$file = Input::file('image');
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$news->news_img=$this->destinationPath.$name;
		}
		$news->save();
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
	}
	//delete
	public function getDelete($id){
		News::destroy($id);
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	} 
	//edit
	public function getEdit($id){
		$news = DB::table('news')->where('news.news_id',$id)->select('news.*')->limit(1)->get();
		if(count($news)==0){
			return getList();
		}
		$news=$news[0];
		return view('admin.news.edit',compact('news'));
	}
	
	
	public function postEdit($id,Request $request){
	//	$this->authorize('admin');
		$data = $request->all();
		$this->validate($request,[
			'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name' => 'required|min:3|max:255',
		
			
		],[
			'avatar.image' => 'Chọn avartar người dùng với định dạng ảnh',
			'avatar.mimes' => 'ảnh đại diện người dùng phải có 1 trong các định dạng jpeg,png,jpg,gif,svg',
			'avatar.max' => 'Dung lượng tối đa của ảnh là 2048 kb',
			'name.required' => 'Bạn chưa nhập tiêu đề bài viết',
			'name.max' => 'Tên bài viết phải có tối đa 255 ký tự',
			'sort_content.required' => 'Bạn chưa nhập mô tả của tin tức',
			'sort_content.required' => 'Bạn chưa nhập nội dung của tin tức',
		]);
		$news = new News;
		$news = News::find($id);
		$news->news_name = $data['name'];
		$news->new_hot = $data['hot'];
		$news->news_sort_content = $data['sort_content'];
		$news->news_content = $data['content'];
		$news->news_type = $data['type'];   
	
		$news_img = '/uploads/news'.$news->news_img;
		if($request->hasFile('avatar')){
			$file = Input::file('avatar');
			
			$filename =$file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension();
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			$name =$timestamp .'.'.$extension;
			$file->move(public_path($this->destinationPath), $name);
			$news->news_img = $this->destinationPath.$name;
		}
		
		$news->save();
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
	}
	
	
	
}
