<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\News;


class PrivateNewsController extends Controller
{
	function tintuc(){
		$news = new News;
		$dataNews = $news->paginate(2);
		$listNews = array();
		$listNews = $dataNews;
		

		$news = new News;
		$dataNew = $news->paginate(4);
		$listNew = array();
		$listNew = $dataNew;
		return view('Front-end.news.news',compact('listNews','listNew'));
	}
	
	public function chitietsanpham($id){
		$news = new News;
		$dataNews = $news->paginate(4);
		$listNews = array();
		$listNews = $dataNews;
		$news = News::find($id);
		// $tinlienquan = News::where('news_type',$news->news_type)->take(4)->get();
		// $tinnoibat = News::where('news_important',$news->news_important)->take(4)->get();
		 $listNew = News::where('new_hot','1')->paginate(10);
		return view('Front-end.news.tinchitiet',compact('news','listNew' ));
	}

	public function loaisanpham($type){
		$sp_theoloai = News::where('news_type',$type)->get();
		return view('Front-end.news.loaisanpham',compact('sp_theoloai'));
	}
	public function noibo(){
		
		$noibo = News::where('news_type','Nội bộ')->paginate(4);
		$listNew = News::where('new_hot','1')->paginate(10);
		return view('Front-end.news.noibo',compact('noibo','listNew'));
	}
	public function lienquan(){
		
		$lienquan = News::where('news_type','Liên quan')->paginate(4);
		$listNew = News::where('new_hot','1')->paginate(10);
		return view('Front-end.news.lienquan',compact('lienquan','listNew'));
	}
	public function congnghe(){
		
		$congnghe = News::where('news_type','Công nghệ')->paginate(4);
		$listNew = News::where('new_hot','1')->paginate(10);
		return view('Front-end.news.congnghe',compact('congnghe','listNew'));
	}
	public function khac(){
		
		$khac = News::where('news_type','Khác')->paginate(4);
		$listNew = News::where('new_hot','1')->paginate(10);
		return view('Front-end.news.khac',compact('khac','listNew'));
	}

}