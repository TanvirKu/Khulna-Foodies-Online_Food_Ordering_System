<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class webuser extends Model
{
    protected $table="webusers";
    protected $fillable = ['id','userName','email','password','Phone_No'];
}
