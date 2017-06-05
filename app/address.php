<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = ['fullname','email','street','city','country'];
    protected $table = 'address';
}
