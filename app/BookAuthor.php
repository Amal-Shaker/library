<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookAuthor extends Model
{
        use SoftDeletes;
         public function books(){
    	return $this->hasMany('App\Book','book_author_id','id');
    }
}
