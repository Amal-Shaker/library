<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BookAuthor;
use App\Book;
use App\Http\Requests\AuthorRequest;

class BookAuthorController extends Controller
{
   
      public function create(){
            return view('bookauthor.create');
    }
    public function store(AuthorRequest $request){
        $name = $request['name'];
        $author = new BookAuthor();
        $author->name = $name;

        $result = $author->save();
        //dd($result);
         return redirect()->back()->with('add_status',$result);
    }
    public function index(){
         $authors = BookAuthor::SELECT('*')->get();
        return view('bookauthor.index') -> with("authors",$authors);
         // return view('example') -> with("authors",$authors);
        

    }
    public function edit($id){
   $authors = BookAuthor::SELECT('*')->WHERE('id',$id)->first();
       return view('bookauthor.edit') -> with("authors",$authors); 
    }
    public function update(AuthorRequest $request,$id){
         $name = $request['name'];
      
        $author = BookAuthor::WHERE('id',$id)->first();
        $author->name = $name;
        $result = $author->save();

        return redirect('author')->with('add_status',$result);


    }
    public function destroy($id){

    	// $author = BookAuthor::WHERE('id',$id)->delete();
            $result = BookAuthor::WHERE('id',$id)->delete();

            return redirect('author')->with('add_status',$result);

    }

}


