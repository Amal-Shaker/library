<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookRanking extends Model
{
        use SoftDeletes;
        public function books(){
    	return $this->hasMany('App\Book','book_rankings_id','id');

    }
}
