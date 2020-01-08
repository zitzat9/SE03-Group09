<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use DB;
class News extends Model
{
     use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'news';
    protected $fillable = [
        'news_id', 'news_name','news_sort_content','news_content','created_at','updated_at
        ','news_img'
    ];
	protected $primaryKey = 'news_id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
	public function GetAllNews(){
		$data = DB::table($this->table)->get();
		return $data;
	}
      public function getAllRecords(){
        $total_record = DB::table($this->table)
        ->select('count(news.news_id)')
        ->get();
        return $total_record;
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
