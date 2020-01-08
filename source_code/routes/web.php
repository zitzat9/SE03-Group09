<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@postSignin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);

Route::group(['prefix'=>'admin'],function(){
	
		Route::get('/',['as'=>'admin.customer.getList','uses'=>'CustomerController@getList']);
		Route::get('customer/list',['as'=>'admin.customer.getList','uses'=>'CustomerController@getList']);
		Route::get('customer/add',['as'=>'admin.customer.add','uses'=>'CustomerController@getAdd']);
		Route::post('customer/add',['as'=>'admin.customer.postAdd','uses'=>'CustomerController@postAdd']);
		Route::get('customer/delete/{id}',['as'=>'admin.customer.delete','uses'=>'CustomerController@getDelete']);
		Route::get('customer/edit/{id}',['as'=>'admin.customer.edit','uses'=>'CustomerController@getEdit']);
		Route::post('customer/edit/{id}',['as'=>'admin.customer.postEdit','uses'=>'CustomerController@postEdit']);
		

});
Route::group(['prefix'=>'product'],function(){
		
			Route::get('/',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
			Route::get('list',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
			Route::get('add',['as'=>'admin.product.add','uses'=>'ProductController@getAdd']);
			Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.product.delete','uses'=>'ProductController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.product.edit','uses'=>'ProductController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);	
	});


//Tung
Route::group(['prefix'=>'admin/news'],function(){
	
		Route::get('/',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);
		Route::get('list',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);
		Route::get('add',['as'=>'admin.news.add','uses'=>'NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.news.delete','uses'=>'NewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.news.edit','uses'=>'NewsController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);	
});
Route::get('/tintuc','PrivateNewsController@tintuc')->name('tintuc.html');
Route::get('/tintuc/noibo','PrivateNewsController@noibo')->name('noibo.html');
Route::get('/tintuc/lienquan','PrivateNewsController@lienquan')->name('lienquan.html');
Route::get('/tintuc/congnghe','PrivateNewsController@congnghe')->name('congnghe.html');
Route::get('/tintuc/khac','PrivateNewsController@khac')->name('khac.html');
Route::get('tintuc/{id}.html','PrivateNewsController@chitietsanpham');

//-------------------------------------------Service------------------------------------------

