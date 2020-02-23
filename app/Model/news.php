<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'tbl_news';
    protected $primaryKey = 'news_id';

     public function category()
    {
    	return $this->belongsTo('App\Model\category','news_cateid','cate_id');
    }
}
