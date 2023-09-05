<?php

namespace App\Http\Controllers\Browser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BookAuthor;
use App\BookPublishingHouse;
use App\BookRanking;

class BrowserBookControllor extends Controller
{
    public function create(){
    	return view('browse.create');
    }
    public function showAllBook(){
    	$books = Book::with('publishHouse')->with('ranking')->with('author')->SELECT('*')->get();
    	return view('browse.showAllBook')->with('books',$books);

    }
    public function showAllAuthor(){
    	$authors = BookAuthor::SELECT('*')->get();
    	return view('browse.showAllAuthor')->with('authors',$authors);
    }

    public function showAllPublishHouse(){
        $publishHouses = BookPublishingHouse::SELECT('*')->get();
        return view('browse.showAllPublishHouse')->with('publishHouses',$publishHouses);
    }
    
    
    public function showAllRanking(){
        $rankings = BookRanking::SELECT('*')->get();
        return view('browse.showAllRanking')->with('rankings',$rankings);
    }

    public function showAuthorWithBooks(){
        $authors = BookAuthor::with('books')->get();
        $rankings = BookRanking::with('books')->get();
        $publishHouses = BookPublishingHouse::with('books')->get();


        return view("browse.showAuthorWithBooks")->with("authors",$authors)
        ->with("rankings",$rankings)->with("publishHouses",$publishHouses);
    }
    
    public function showRankingWithBooks(){
        $rankings = BookRanking::with('books')->get();
        return view("browse.showRankingWithBooks")->with("rankings",$rankings);
    }
    public function showPublishHouseWithBooks(){
        $publishHouses = BookPublishingHouse::with('books')->get();
        return view("browse.showPublishHouseWithBooks")->with("publishHouses",$publishHouses);
    }

    public function base(){
        return view("browse.createSearch");
    }

    public function search(Request $request){
        $name = $request['name'];
        $selec = $request['selec'];
        $books = Book::SELECT('*')->where('name',$name)->get();
        $authors = BookAuthor::with('books')->where('name',$name)->get();
        $rankings = BookRanking::with('books')->where('categoryname',$name)->get();
        $publishHouses = BookPublishingHouse::with('books')->where('name',$name)->get();
        if($selec == 'bookname'){
        return redirect()->back()->with('books',$books);
        }else if($selec == 'authorname'){
        return redirect()->back()->with('authors',$authors);
        }else if($selec == 'categoryname'){
          return redirect()->back()->with('rankings',$rankings);
        }else if($selec == 'publishhouse'){
         return redirect()->back()->with('publishHouses',$publishHouses);
        }
    }

public function indexbook($id){
        $book = Book::with('publishHouse')->with('ranking')->with('author')->Where('id',$id)->first();
        return view('browse.showBook')->with('book',$book);

}

    

 }
