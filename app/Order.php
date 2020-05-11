<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable = ['file','restaurant_name','caption','rate','description'];

    public  function  restaurants()
    {
        return $this-> belongsTo('App\Restaurants');
    }

    public  function makeOrder()
    {
        return $this->hasMany('App\MakeOrder');
    }
}
