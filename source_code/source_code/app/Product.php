<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    protected $table = "products";

    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
	public function GetAllProducts(){
		$data = DB::table($this->table)->get();
		return $data;
	}
}
