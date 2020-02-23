<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'tbl_category';
    protected $primaryKey = 'cate_id';

     public function news()
    {
    	return $this->hasMany('App\Model\news', 'news_cateid', 'cate_id');
    }
}
