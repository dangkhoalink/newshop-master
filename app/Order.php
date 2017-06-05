<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class Order extends Model
{
    protected $fillable =['status','total','user_id'];
    protected $table = 'order';

    public function orderFields(){
    	return $this->belongsToMany(product::class)->withPivot('qty','total');
    }

    public static function createOrder(){
    	//for order inserting database
    	$user = Auth::user();
    	$order = $user->orders()->create(['total'=>Cart::total(),'status'=>'pending']);
    	$cartItems = Cart::content();
    	foreach($cartItems as $cartItem){
    		$order->orderFields()->attach($cartItem->id,['qty'=>$cartItem->qty,'tax'=>Cart::tax(),'total'=>Cart::total()]);
    	
    	}

    }
}
