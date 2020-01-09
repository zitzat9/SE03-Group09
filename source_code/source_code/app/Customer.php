<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Customer extends Model
{
    protected $table = "customer";

    public function bill(){
    	return $this->hasMany('App\Bill','id_customer','id');
    }
	public function GetAllCustomers(){
		$data = DB::table($this->table)->get();
		return $data;
	}
}
