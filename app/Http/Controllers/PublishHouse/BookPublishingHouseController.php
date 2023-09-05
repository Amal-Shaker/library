<?php

namespace App\Http\Controllers\PublishHouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BookPublishingHouse;
use App\Book;
use App\Http\Requests\AuthorRequest;


class BookPublishingHouseController extends Controller
{
    
    public function create(){
           return view('bookPublishHouse.create');
    }
    public function store(AuthorRequest $request){
        $name = $request['name'];
        $publishHouse = new BookPublishingHouse();
        $publishHouse->name = $name;

        $result = $publishHouse->save();
        
         return redirect()->back()->with('add_status',$result);

    }
    public function index(){
        $publishHouses = BookPublishingHouse::SELECT('*')->get();
        return view('bookPublishHouse.index') -> with("publishHouses",$publishHouses);
    }
    public function edit($id){
         $publishHouses = BookPublishingHouse::SELECT('*')->WHERE('id',$id)->first();
       return view('bookPublishHouse.edit') -> with("publishHouses",$publishHouses); 
    }
    public function update(AuthorRequest $request,$id){
        $name = $request['name'];   
        $publishHouse = BookPublishingHouse::WHERE('id',$id)->first();
        $publishHouse->name = $name;
        $result = $publishHouse->save();
        return redirect('publishHouse')->with('add_status',$result);

    }
    public function destroy($id){
        $result = BookPublishingHouse::WHERE('id',$id)->delete();
        return redirect('publishHouse')->with('add_status',$result);
    	
    }
}
