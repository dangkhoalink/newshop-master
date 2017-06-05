<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(){
    	$cartItems = Cart::content();
    	return view('cart.index',compact('cartItems'));
    	
    }
    public function addItem($id){
    	$products = Product::find($id);//find by id
    	Cart::add($products->id,$products->pro_name ,1, $products->pro_price);
    	return back();
    }
    public function removeItem($id){    
   	Cart::remove($id);
   	return back();//will keep same page
    }
    public function update(Request $request ,$id){    
        Cart::update($id,$request->qty);
        return back();
    }
    
}
