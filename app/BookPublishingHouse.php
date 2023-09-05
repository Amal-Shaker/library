<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookPublishingHouse extends Model
{
        use SoftDeletes;
        public function books(){
    	return $this->hasMany('App\Book','book_publishing_houses_id','id');
    }
}
