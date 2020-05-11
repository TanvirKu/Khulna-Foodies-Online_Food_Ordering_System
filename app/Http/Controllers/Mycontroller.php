<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Mycontroller extends Controller
{
   public function index()
   {
        return "Hello Messi";
   }

    public function contact()
   {
        $myName="Tanu Messi";
        $Id="120212";
        $Phone="01673543617";
        $Address="Khulna";
        return view('Jakaria_Parvez.contact' , compact('myName','Id','Phone'))->with('HomeTown', $Address);
   }
}
