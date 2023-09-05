<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
        use SoftDeletes;
     public function author(){
    	return $this->belongsTo('App\BookAuthor','book_author_id','id');
    }
     public function publishHouse(){
    	return $this->belongsTo('App\BookPublishingHouse','book_publishing_houses_id','id');
    }
     public function ranking(){
    	return $this->belongsTo('App\BookRanking','book_rankings_id','id');
    }
}
