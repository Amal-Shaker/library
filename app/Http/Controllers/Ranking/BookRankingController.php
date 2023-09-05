<?php

namespace App\Http\Controllers\Ranking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BookRanking;
use App\Book;
use App\Http\Requests\RankingRequest;

class BookRankingController extends Controller
{
    
    public function create(){
        return view('bookRanking.create');



    }
    public function store(RankingRequest $request){
        $categoryname = $request['categoryname'];
        $ranking = new BookRanking();
        $ranking->categoryname = $categoryname;

        $result = $ranking->save();
        // dd($result);
         return redirect()->back()->with('add_status',$result);

    }
    public function index(){
          $rankings = BookRanking::SELECT('*')->get();
        return view('bookRanking.index') -> with("rankings",$rankings);

    }
    public function edit($id){
        $rankings = BookRanking::SELECT('*')->WHERE('id',$id)->first();
       return view('bookRanking.edit') -> with("rankings",$rankings); 

    }
    public function update(RankingRequest $request,$id){
         $categoryname = $request['categoryname'];
        $ranking = BookRanking::WHERE('id',$id)->first();
        $ranking->categoryname = $categoryname;
        $result = $ranking->save();

        return redirect('bookRanking')->with('add_status',$result);

    }
    public function destroy($id){
    	$result = BookRanking::WHERE('id',$id)->delete();
                return redirect('bookRanking')->with('add_status',$result);
    }
}
