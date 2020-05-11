<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    public function doLogIn()
    {
        return view('auth.anotherLogin');
    }

    public function doRegister()
    {
        return view('auth.anotherRegister');
    }
    /*
     protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }
     * */
    public function postRegister(UserRequest $request)
    {
        User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password')),
            'user_type' => $request->get('user_type')
        ]);

        \Session::flash('flash_message_Register','Registered Successfully');

            return redirect('loginKoro');
               // ->with('flash_notification.message', 'User registered successfully')
               // ->with('flash_notification.level', 'success');
    }


    public function postLogin(LoginRequest $request){
        if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], $request->get('remember'))){



            \Session::forget('flash_message_Register') ;
            \Session::flash('flash_message_LogIn','LogIn Successfully');

            return redirect()
                ->intended('/about');
              //  ->with('flash_notification.message', 'Logged in successfully')

        }

        return redirect()
            ->back()
            ->withInput();
           // ->with('flash_notification.message', 'Wrong email or password')
           // ->with('flash_notification.level', 'danger');
    }

    public function getLogout(){
        Auth::logout();

        return redirect('loginKoro');
           // ->with('flash_notification.message', 'Logged out successfully')
           // ->with('flash_notification.level', 'success');
    }

   // protected $loginPath = 'loginKoro';
   
   /*public function index()
   {
        $alldata = User::paginate(5);
        return view('admin',compact('alldata'));
   }

   public function edit($id)
   {
        $userData = User::findOrFail($id);
        return view('dataedit',compact('userData'));
   }

   public function update(Request $request, $id)
   {
        $input = $request->except('password');
        $data = User::findOrFail($id);
        $data->update($input);

        return redirect('table');
   }

   public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('table');
    }*/
}
