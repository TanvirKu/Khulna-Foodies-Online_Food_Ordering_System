<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;
use App\Restaurants;
use Auth;
use App\Order;
use Validator;
use Illuminate\Session;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
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




        $user_role ='';

        if(Auth::check() && $this->isAdmin())
        {
            $user_role='Admin';
        }

        $restaurants= Restaurants::orderBy('id');

        $zone=$request->input('zone');
        $restaurant_name = $request->input('restaurant_name') ;

        if(!empty($zone))
        {
            $restaurants->where('zone','LIKE','%'.$zone.'%');
        }

        if(!empty($restaurant_name))
        {
            $restaurants->where('restaurant_name','LIKE','%'.$restaurant_name.'%');
        }

        $restaurants=$restaurants->paginate(2);


        return view('Restaurant.allRestaurants',compact('restaurants'))
        ->with('user_role',$user_role)
        ->with('restaurant',$restaurant);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Restaurant.addRestaurantDetails');
    }

    public function getFoods($restaurant_name)
    {
        //
        $single_restaurant_search = '';
        /* $usersMessage = DB::table('contacts')
            ->select('contacts.name', 'contacts.email', 'contacts.phone_no','contacts.comment')
            ->paginate(5); */

        /*
        $foods = DB::table('orders')
            ->select('orders.id','orders.file','orders.restaurant_name','orders.caption','orders.rate','orders.description')
            ->where('orders.restaurant_name','=',$restaurant_name)
            ->paginate(6);
        */
        $foods = Order::select('id','file','restaurant_name','caption','description')
            ->where('restaurant_name','=',$restaurant_name)
            ->paginate(6);





        return view('Restaurant.spcificRestaurentFoods')
        ->with('foods',$foods) ;
    }

    public function getRestaurants($zone)
    {
        //
        $single_restaurant_search = '';
        /* $usersMessage = DB::table('contacts')
            ->select('contacts.name', 'contacts.email', 'contacts.phone_no','contacts.comment')
            ->paginate(5); */

        /*
        $restaurants = DB::table('restaurants')
            ->select('restaurants.file','restaurants.restaurant_name','restaurants.zone','restaurants.address')
            ->where('restaurants.zone','=',$zone)
            ->paginate(4);
        */
        $restaurants =Restaurants::select('file','restaurant_name','zone','address')
            ->where('zone','=',$zone)
            ->paginate(4);


        return view('Restaurant.zonalRestaurants')
            ->with('restaurants',$restaurants ) ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

    //--------------------------------------------------------------------------

    /*
          // Validation //
      $validation = Validator::make($request->all(), [
         'caption'     => 'required|regex:/^[A-Za-z ]+$/',
         'description' => 'required',
         'file'     => 'required|image|mimes:jpeg,png|min:1|max:1000',
         'rate'     => 'required|regex:/^[0-9]+$/'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $image = new Order;

      // upload the image //
      $file = $request->file('file');
      $destination_path = 'uploads/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);

      // save image data into database //
      $image->file = $destination_path . $filename;
      $image->caption = $request->input('caption');
      $image->rate = $request->input('rate');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/image');//->with('message','You just uploaded an image!');
    */

    //-------------------------------------------------------------------------------
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'restaurant_name'     => 'required',
            'email'               => 'required|unique:restaurants',
            'file'                => 'required|image|mimes:jpeg,png|min:1|max:1000',
            'zone'                => 'required|regex:/^[A-Za-z ]+$/',
            'address'             => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $restaurant = new Restaurants;

        $file= $request->file('file');
        $destination_path = 'restaurant_uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move( $destination_path,$filename);

        // save restaurant data into database //
        $restaurant->file = $destination_path . $filename;
        $restaurant->restaurant_name = $request->input('restaurant_name');
        $restaurant->email =$request->input('email');
        $restaurant->zone = $request->input('zone');
        $restaurant->address =$request->input('address');
        $restaurant->save();

        return redirect('restaurant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $restaurant = Restaurants::find($id);
        return view('Restaurant.edit-Restaurant')->with('restaurant', $restaurant);
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
        // Validation //
        $validation = Validator::make($request->all(), [
            'restaurant_name'     => 'required',
            'file'                => 'required|image|mimes:jpeg,png|min:1|max:1000',
            'zone'                => 'required|regex:/^[A-Za-z ]+$/',
            'address'             => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $restaurant = Restaurants::find($id);
        $prev_file = Restaurants::find($id)->file;

        // if user choose a file, replace the old one //
        if($request->hasFile('file'))
        {
            $file= $request->file('file');
            $destination_path = 'restaurant_uploads/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $file->move( $destination_path,$filename);

            $restaurant->file= $destination_path . $filename;
        }

        // replace old data with new data from the submitted form //
        $restaurant->restaurant_name = $request->input('restaurant_name');
        $restaurant->zone = $request->input('zone');
        $restaurant->address =$request->input('address');

        if($restaurant->file!=$prev_file)
        {
            unlink($prev_file);
        }

        $restaurant->save();

        return redirect('/restaurant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurants::find($id);
        $filename = Restaurants::find($id)->file;

        if(\File::exists($filename))
        {
            unlink($filename);
        }

        $restaurant->delete();

        return redirect('/restaurant');
    }

    public function isAdmin()
    {
        $user = \Auth::user();

        if($user->user_type == 'Admin')
            return true;
        else
            return false;
    }
}
