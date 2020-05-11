<?php

namespace App\Http\Controllers;


use App\Restaurants;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:Admin', ['except' => ['about']]);
    }


    public function about()
    {
        /*
        $loginButtonStatus = 0;

        $logedInAsAdmin =0;
        $logedInAsClient =0;
        $logedInAsUser =0;

        $haveRestaurantDetails=0;
        $restaurant=0;

        $logoutButtonStatus = 0;


        if(Auth::check() && $this->isAdmin())
        {
            $logoutButtonStatus = 1;
            $logedInAsAdmin  = 1;
        }
        elseif(Auth::check() &&  $this->isClient())
        {
            $user=\Auth::user();
            $user_mail=$user->email;

            if(Restaurants::where('email','=', $user_mail)->exists())
            {
                $restaurant= Restaurants::select('*')
                ->where('email','=', $user_mail)
                ->get();
                $haveRestaurantDetails=1;
            }

            $logoutButtonStatus = 1;
            $logedInAsClient =1;
        }
        elseif(Auth::check() &&  $this->isUser())
        {
            $logoutButtonStatus = 1;
            $logedInAsUser =1;
        }
        else
        {
            $loginButtonStatus = 1;
        }


        /*
        $zones = DB::table('restaurants')
            ->select('restaurants.id','restaurants.zone')
            ->groupBy('restaurants.zone')
            ->get();
        */

        $restaurant=0;

        if(Auth::check())
        {
            if(Auth::user()->user_type == 'Admin')
            {
                \Session::flash('flash_message_LogedInAsAdmin','Admin');
            }
            else if(Auth::user()->user_type == 'Client')
            {
                \Session::flash('flash_message_LogedInAsClient','Client');

                $user=\Auth::user();
                $user_mail=$user->email;

                if(Restaurants::where('email','=', $user_mail)->exists())
                {
                    $restaurant= Restaurants::select('*')
                        ->where('email','=', $user_mail)
                        ->get();

                    \Session::flash('flash_message_HaveRestaurant','');
                    // $haveRestaurantDetails=1;
                }
                else
                {
                    \Session::flash('flash_message_Have_No_Restaurant','');
                }
            }
            else if(Auth::user()->user_type == 'User')
            {
                \Session::flash('flash_message_LogedInAsUser','User');
            }
        }
        else
        {

            \Session::flash('flash_message_NotLogedIn','');
        }


        $zones = Restaurants::distinct()->select('id','zone')->groupBy('zone')->get();


        return view('Home.homePage')
      //  ->with('loginButtonStatus', $loginButtonStatus)
     //   ->with('logoutButtonStatus', $logoutButtonStatus)
      //  ->with('logedInAsAdmin',$logedInAsAdmin)
       // ->with('logedInAsClient',$logedInAsClient)
      //  ->with('haveRestaurantDetails',$haveRestaurantDetails)
      //  ->with('logedInAsUser',$logedInAsUser)
        ->with('restaurant',$restaurant)
        ->with('zones',$zones);

    }

    /*
    public function doLogIn()
    {
        return view('auth.anotherLogin');
    }

    public function doRegister()
    {
        return view('auth.anotherRegister');
    }
    */



    
    //protected $redirectPath = '/kfs';
    //protected $loginPath = '/auth/login';

    public function index()
    {
        $alldata = User::orderBy('user_type');
        $alldata=$alldata->paginate(5);
        return view('Home.adminPage',compact('alldata'));

    }

    public function edit($id)
    {
        if(Auth::check() && $this->isAdmin())
        {
            $userData = User::findOrFail($id);
            return view('Home.edit-user',compact('userData'));
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::check() && $this->isAdmin())
        {
            $input = $request->except('password');
            $data = User::findOrFail($id);
            $data->update($input);

            return redirect('table');
            //tabel is the resource name of Admin Page
        }
        return redirect('loginKoro')->with('message','Must LogIn as Admin!');
       
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);

        $allrestaurant = Restaurants::orderBy('id')->get();

        $res_id = 0;

        foreach( $allrestaurant as $restaurant)
        {
           if($data->email == $restaurant->email)
           {
               $res_id = $restaurant->id;
           }
        }

       // return $data->email;
        $restauant = Restaurants::findOrFail($res_id);
        $restauant->delete();
        $data->delete();

        return redirect('table');
    }

    public function isAdmin()
    {
        $user = \Auth::user();

        if($user->user_type == 'Admin')
            return true;
        else
            return false;
    }

    public function isClient()
    {
        $user = \Auth::user();

        if($user->user_type == 'Client')
            return true;
        else
            return false;
    }

    public function isUser()
    {
        $user = \Auth::user();

        if($user->user_type == 'User')
            return true;
        else
            return false;
    }

}
