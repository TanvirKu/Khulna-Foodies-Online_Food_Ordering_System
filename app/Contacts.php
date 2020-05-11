<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $table="contacts";
    protected $fillable = ['name','email','phone_no','comment'];

    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
