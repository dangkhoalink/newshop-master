<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pro_name','pro_code','pro_price','pro_info','pro_img','spl_price'];     
    protected $table = 'products';
    public function categories(){
    	return $this->belongsTo('categories','pro_cat');
    }
}
