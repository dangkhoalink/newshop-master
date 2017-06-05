<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class User extends Authenticatable  
{
	
    protected $fillable = ['name','email','password','admin','status'];

    protected $hidden = ['password','remember_token'];

    public function isAdmin(){
    	return $this->admin==100; // mysql table column

    }
    public function isActiveStatus(){
    	return $this->status==1; // mysql table column

    }
    public function orders(){
    	return $this->hasMany(order::class); // 

    }
}
