<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\MakeOrder;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use Validator;
use Auth;
use DB;


class MakeOrderController extends Controller
{


    public function __construct()
    {
        $this->middleware('admin:Admin', ['only' => ['index']]);
    }
    /*
     public function getValue($id)
    {
        $item =Order::find($id);

        //return $OrderId;
        return view('MakeOrder.makeOrder')
            ->with('item',$item);
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $users = DB::table('users')
            ->join('makeOrder',function($join){
                $join->on('users.email', '=', 'makeOrder.email')
                ->where('users.user_type', '=', 'User');
            } )
            ->join('orders','orders.id','=','makeOrder.item_id')
            ->select('makeOrder.id','users.name', 'users.email', 'orders.rate','makeOrder.quantity','makeOrder.total')
            ->paginate(5);

            return view ('MakeOrder.ShowOrder')
                ->with('users',$users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        //
        $item =Order::find($id);

        //return $OrderId;
        return view('MakeOrder.makeOrder')
            ->with('item',$item);
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
        $validation = Validator::make($request->all(), [
         'email'       =>'required',
         'contact_no'  =>'required|regex:/^[0-9]+$/',
         'address'     =>'required',
         'item_id'     => 'required',
         'quantity'    => 'required',
         //'total'       => 'required'
         
        ]);

          // Check if it fails //
          if( $validation->fails() ){
             return redirect()->back()->withInput()
                              ->with('errors', $validation->errors() );
          }

        $MakeOrder = new MakeOrder;
       // $MakeOrder->email=$request->input('email');
        //Input::get('email')
        if (User::where('email', '=',$MakeOrder->email=$request->input('email') )->exists())
        {
            // user found
            $MakeOrder->contact_no=$request->input('contact_no');
            $MakeOrder->address=$request->input('address');
            $MakeOrder->item_id=$request->input('item_id');

            $Fooditem = Order::find($MakeOrder->item_id);


            $MakeOrder->quantity=$request->input('quantity');

            $pricePrePiece = (float) $Fooditem->rate;
            $quantity_needed =(int)$MakeOrder->quantity;

            $Total_Buy=(float)($pricePrePiece*$quantity_needed);


            $MakeOrder->total=$Total_Buy;

            $MakeOrder->save();

            return view('MakeOrder.orderDetails')
                ->with('FoodItem', $Fooditem)
                ->with('MakeOrder',$MakeOrder);
        }
        else
        {
            //Kaj Baki Ase Flush Message Pathaite Hobe
            return redirect('MakeOrder.makeOrder');
        }
        
        //return  $MakeOrder->total;
        //return $MakeOrder->address;
        /*
         $image->caption = $request->input('caption');
      $image->rate = $request->input('rate');
      $image->description = $request->input('description');
        */
    }


    public function isAdmin()
    {
        $user = \Auth::user();

        if($user->user_type == 'Admin')
            return true;
        else
            return false;
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
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $delete_Order  = MakeOrder::findOrFail($id);
        $delete_Order->delete();

        return redirect('/orderMake');

    }
}
