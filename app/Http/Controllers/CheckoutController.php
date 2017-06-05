<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Address;
use App\Order;
use Storage;

class CheckoutController extends Controller
{
	public function index(){
		//check login user
	    if(Auth::check()){
	    	return view('front.checkout');
	    }    
	    else{
	    	return redirect('login');
	    }
	}
	public function formvalidate(){
		return view('form-validate');
	}

	public function formvalidatepost(Request $request){
		$this->validate($request, 
			[	'fullname'=>'required|min:5|max:25', 				
				'email'=>'required|email|unique:address',
				'street'=>'required|min:5|max:25',
				'city'=>'required|min:4|max:25',
				'country'=>'required|min:4|max:25|'],
			[	'fullname.required'=>'enter fullname',
				'street.required'=>'enter street',
				'email.required'=>'enter email',				
				'city.required'=>'enter city',
				'country.required'=>'enter country',

				]);
		$userid = Auth::user()->id;
		$address = new address();
		$address->fullname = $request->fullname;
		$address->email = $request->email;
		$address->street = $request->street;
		$address->city = $request->city;
		$address->country = $request->country;
		$address->user_id = $userid;
		$address->save();
		order::createOrder();
		// return redirect()->action('CheckoutController@index')->with('status','Address added!!!');
	}
    
}
