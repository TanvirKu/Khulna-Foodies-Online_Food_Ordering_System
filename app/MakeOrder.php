<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeOrder extends Model
{
    //
    protected $table="makeOrder";
    protected $fillable = ['email','contact_no','address','item_id','quantity','total'];

    //Orders mane food-items , prothom e Naming e vul hoisilo
    public  function orders()
    {
        return $this->belongsTo('App\Order');
    }

    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
