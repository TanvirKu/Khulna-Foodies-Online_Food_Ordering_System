<?php

namespace App\Http\Controllers;

use App\MakeOrder;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Restaurants;
use App\Order;
use Validator;
use Auth;




class OrderController extends Controller
{
    /* 1. This method relates to the "images list" view */
      public function index(Request $request)
      {

          $logedInAs = '';

          $loginButtonStatus = 1;

          $haveRestaurantDetails=0;
          $restaurant=0;

          $noRender = 1;

          $images = Order::orderBy('id');
          $caption=$request->input('caption');
          $restaurant_name = $request->input('restaurant_name') ;

          if(!empty($caption))
          {
              $noRender = 0;
              $images = $images->where('caption','LIKE','%'.$caption.'%')->get();
          }
          else  if(!empty($restaurant_name))
          {
              $noRender = 0;
              $images = $images->where('restaurant_name','LIKE','%'.$restaurant_name.'%')->get();
          }
          else
          {
              $images=$images->paginate(6);
          }



         if(Auth::check() && ($this->isAdmin()))
         {
            $logedInAs = 'Admin';
            $loginButtonStatus = 0;
            
           /* return view('Items.items-list')
            ->with('render',$noRender)
            ->with('images', $images)
            ->with('user_Portion', $user_Portion);
           */
         }
         else if(Auth::check()&& ($this->isClient()))
         {
             $logedInAs = 'Client';
             $loginButtonStatus = 0;

             $user=\Auth::user();
             $user_mail=$user->email;

             if(Restaurants::where('email','=', $user_mail)->exists())
             {
                 $restaurant= Restaurants::select('*')
                     ->where('email','=', $user_mail)
                     ->get();
                 $haveRestaurantDetails=1;
             }
             /*
              return view('Items.items-list')
              ->with('render',$noRender)
              ->with('images', $images)
              ->with('user_Portion', $user_Portion);
             */
         }
         elseif(Auth::check() &&  $this->isUser())
         {
             $loginButtonStatus = 0;
             $logedInAs = 'User';
         }


          return view('Items.items-list')
          ->with('render',$noRender)
          ->with('images', $images)
          ->with('logedInAs', $logedInAs)
          ->with('loginButtonStatus',$loginButtonStatus)
          ->with('haveRestaurantDetails',$haveRestaurantDetails)
          ->with('restaurant',$restaurant);
      }

/* 2. This method relates to the "add new image" view */
      public function create()
      {
         return view('Items.add-item');
      }

/* 3. This method relates to the "image detail" view */
      public function show($id)
      {
         $image = Order::find($id);
         return view('Items.show-details')->with('image', $image);
      }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
      // Validation //
      $validation = Validator::make($request->all(), [
          'caption'          => 'required|regex:/^[A-Za-z ]+$/',
          'restaurant_name'  => 'required',
          'description'      => 'required',
          'file'             => 'required|image|mimes:jpeg,png|min:1|max:1000',
          'rate'             => 'required|regex:/^[0-9]+$/',
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
      $image->restaurant_name =$request->input('restaurant_name');
      $image->caption = $request->input('caption');
      $image->rate = $request->input('rate');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/image');//->with('message','You just uploaded an image!');
    }

    /* 4. This method relates to the "edit image" view */
    public function edit($id)
    {
      $image = Order::find($id);
      return view('Items.edit-item')->with('image', $image);
    }

    public function update(Request $request, $id)
    {
      // Validation //
      $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'file'    => 'sometimes|image|mimes:jpeg,png|min:1|max:1000',
            'rate'     => 'required|regex:/^[0-9]+$/'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $image = Order::find($id);
      $prev_file =Order::find($id)->file;   
      // if user choose a file, replace the old one //
      if( $request->hasFile('file') ){
           $file = $request->file('file');
           //$request->delete($file);
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
      }
        
      // replace old data with new data from the submitted form //
      $image->restaurant_name =$request->input('restaurant_name');
      $image->caption = $request->input('caption');
      $image->rate = $request->input('rate');
      $image->description = $request->input('description');
      //return "$image->file";
      if($image->file!=$prev_file)
      {
        unlink($prev_file);
      }
      $image->save();

      return redirect('/image');//->with('message','You just updated an image!');
    }

    
     public function destroy($id)
    {
        $image = Order::find($id);
        $filename =Order::find($id)->file;
        //return "$filename";
        //$fullPath = 'uploads/'.$filename;

        if (\File::exists($filename)) 
        {
           //return "$filename";
           //\File::delete($fullPath);
         
          unlink($filename);
           //unlink('path/to/image.jpg');
         
        }
        $image->delete();
        
        return redirect('/image');
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
    
    /*
   public function destroy($id)
    {
     if($image = Order::find($id))
      {
          $filename = $image->filename;
          $fullPath = 'uploads/'. $filename;
          if (File::exists($fullPath))
          { File::delete($fullPath);}
          $image->delete();
          return redirect('/');
      }
      return redirect('/');
    }
    */
}
