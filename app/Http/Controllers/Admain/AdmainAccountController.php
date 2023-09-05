<?php

namespace App\Http\Controllers\Admain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdmainAccount;
use App\Http\Requests\admainRequest;

class AdmainAccountController extends Controller
{
   public function create(){
    	return view('admain.loginin');

    } 
   public function store(admainRequest $request){
    	$name = $request['name'];
    	$password = $request['password'];
    	$error = 'username or password wrong ';
    	$result = false;
    	$admains = AdmainAccount::select('*')->get();
    	foreach ($admains as  $admain ) {
    		if ($name == $admain ->name && $password == $admain ->password) {
    			$result = true;
    		}
    	}
    	if ($result == true) {
    		return  view('admain.controlpage'); 

    	}else{
        return redirect()->back()->with('error',$error);
   
	}
    	
    }


}
