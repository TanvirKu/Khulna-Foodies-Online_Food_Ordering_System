<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Validator;
use App\Contacts;
use Auth;
use App\Restaurants;
use Illuminate\Session;



class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('admin:Admin', ['only' => ['show']]);
    }

    public function index()
    {


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


        return view('Home.contact')
        ->with('restaurant',$restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        //
        $validation = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone_no'=> 'required|regex:/^[0-9]+$/',
            'comment'=>'required',
        ]);
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $Contacts= new Contacts;

        $Contacts->name = $request->input('name');

        if (User::where('email', '=',$Contacts->email=$request->input('email') )->exists())
        {

            $Contacts->email =$request->input('email');
            $Contacts->phone_no=$request->input('phone_no');
            $Contacts->comment =$request->input('comment');

            $Contacts->save();

            \Session::flash('flash_message_Send','Message Send Successfully');

            //Flush Message Baki Ase
            return view('Home.contact');
        }
        else
        {
            //Flush Message Pathaite Hobe
            return redirct('regKoro');
        }


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
            /* $usersMessage = DB::table('contacts')
                 ->select('contacts.name', 'contacts.email', 'contacts.phone_no','contacts.comment')
                ->paginate(5); */
        $usersMessage = Contacts::paginate(5);

        return view('Home.messages')
        ->with('usersMessage', $usersMessage);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $delete_contacts = Contacts::find($id);
        $delete_contacts->delete();

        return redirect('/messages');
    }
}
