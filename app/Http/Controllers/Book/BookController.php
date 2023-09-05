<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BookAuthor;
use App\BookPublishingHouse;
use App\BookRanking;
use App\Http\Requests\BookRequest;
class BookController extends Controller
{
    
    public function create(){
     $authors = BookAuthor::SELECT('*')->get();
     $publishHouses = BookPublishingHouse::SELECT('*')->get();
     $rankings = BookRanking::SELECT('*')->get();

    return view('book.create')-> with("authors",$authors)
    ->with("publishHouses",$publishHouses)
    ->with("rankings",$rankings);

    }


    public function store(BookRequest $request){
        $name = $request['name'];
        $releaseyear = $request['releaseyear'];
        $releasenumber = $request['releasenumber'];
        $book_author_id = $request['book_author_id'];
        $book_publishing_houses_id = $request['book_publishing_houses_id'];
        $book_rankings_id = $request['book_rankings_id'];
        $book = new Book();
        $book->name = $name;
        $book->releaseyear = $releaseyear;
        $book->releasenumber = $releasenumber;
        $book->book_author_id = $book_author_id;
        $book->book_publishing_houses_id = $book_publishing_houses_id;
        $book->book_rankings_id = $book_rankings_id;
        $res = false;
        $result = false;
        $allbooks = Book::SELECT('*')->get();
        foreach($allbooks as $onebook){
            if($onebook->name == $name && $onebook->releasenumber == $releasenumber){
                $res = true;
            }}
        if($res == false){
             $result = $book->save();
         }
         return redirect()->back()->with('add_status',$result);
    }


    public function index(){
        $books = Book::with('publishHouse')->with('ranking')->with('author')->SELECT('*')->get();
        //dd($books);
        return view('book.index') -> with("books",$books);
    }


    public function edit($id){
        $authors = BookAuthor::SELECT('*')->get();
     $publishHouses = BookPublishingHouse::SELECT('*')->get();
     $rankings = BookRanking::SELECT('*')->get();
        $books = Book::with('author')->with('publishHouse')->with('ranking')->SELECT('*')->WHERE('id',$id)->first();
       return view('book.edit') -> with("books",$books)->with("authors",$authors)
    ->with("publishHouses",$publishHouses)
    ->with("rankings",$rankings); 
    }


    public function update(BookRequest $request, $id){
         $name = $request['name'];
        $releaseyear = $request['releaseyear'];
        $releasenumber = $request['releasenumber'];
        $book_author_id = $request['book_author_id'];
        $book_publishing_houses_id = $request['book_publishing_houses_id'];
        $book_rankings_id = $request['book_rankings_id'];
        $book = Book::WHERE('id',$id)->first();
        $book->name = $name;
        $book->releaseyear = $releaseyear;
        $book->releasenumber = $releasenumber;
        $book->book_author_id = $book_author_id;
        $book->book_publishing_houses_id = $book_publishing_houses_id;
        $book->book_rankings_id = $book_rankings_id;


        $result = $book->save();

        return redirect('Book')->with('add_status',$result);


    }
    public function destroy($id){
        $result = Book::WHERE('id',$id)->delete();
                return redirect('Book')->with('add_status',$result);

    	
    }
}
