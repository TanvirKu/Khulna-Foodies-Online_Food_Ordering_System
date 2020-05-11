<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    //
    protected $table="restaurants";
    protected $fillable = ['email','file','restaurant_name','zone','address'];

    public  function users()
    {
        return $this-> belongsTo('App\User');
    }

    //order mane food-item , prothem e Naming e Vul hoisilo
    public  function orders()
    {
        return $this->hasMany('App\Order');
    }

}
