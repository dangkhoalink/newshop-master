<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro_Cat extends Model
{
    protected $fillable =['name'];
    protected $table = 'pro_cat';
    
    public function products(){
    	return $this->belongsToMany('products','pro_cat');
    }

}
