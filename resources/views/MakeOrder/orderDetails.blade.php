@extends('Header_Footer.otherIndex')
        @section('title','Order Details')
        @endsection
 @section('body')
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-2">
                <div class="col-md-12">
                    <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-place-of-interest.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <!--text-center-->
                    <div class="panel-heading" id="details-panel">
                        <h3 class="panel-title text-center" id="panel_heading"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;Customer Info</h3>
                    </div>
                     <div class="panel-body">
                       <div class="col-md-3" style="border:solid 2px;" id="details-panel"><strong>Email</strong></div>
                       <div class="col-md-9" style="border:solid 2px;" id="details-panel">{{$MakeOrder->email}}</div>
                       <div class="col-md-3" style="border:solid 2px;" id="details-panel"><strong>Contact No</strong></div>
                       <div class="col-md-9" style="border:solid 2px;" id="details-panel">{{$MakeOrder->contact_no}}</div>
                       <div class="col-md-3" style="border:solid 2px;" id="details-panel"><strong>Delivery Place</strong></div>
                       <div class="col-md-9" style="border:solid 2px;" id="details-panel">{{$MakeOrder->address}}</div>
                       <div class="col-md-3" style="border:solid 2px;" id="details-panel"><strong>Order Time</strong> </div>
                       <div class="col-md-9" style="border:solid 2px;" id="details-panel">{{$MakeOrder->created_at->format('h:ia |F d | Y')}}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="col-md-12">
                    <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-place-of-interest.png')}}" alt="">
                </div>
            </div>
        </div>



        <div class="row">
             <div class="col-md-12">

                <div class="table-responsive" >
                    <table class="table table-bordered" id="PriceTable">
                      <caption style="text-align:center;color:white;border: 2px solid whitesmoke" id="details-panel"><h3 id="panel_heading"><i class="glyphicon glyphicon-leaf"></i>&nbsp;Order Details</h3></caption>
                      <thead class="cf" style="text-align:center">
                        <tr>
                          <th style="text-align:center">Item No</th>
                          <th style="text-align:center">Item</th>
                          <th style="text-align:center">Item Name</th>
                          <th style="text-align:center">Single Price</th>
                          <th style="text-align:center">Quantity</th>
                          <th style="text-align:center">Total</th>
                        </tr>
                      </thead>
                      <tbody style="text-align:center">
                        <tr>
                          <td>{{$FoodItem->id}}</td>
                          <td><img style="height:100px; width:100px; border:solid 2px;" src="{{asset($FoodItem->file)}}"/></td>
                          <td>{{$FoodItem->caption}}</td>
                          <td>{{$FoodItem->rate}} Tk.</td>
                          <td>{{$MakeOrder->quantity}}</td>
                          <td>{{$MakeOrder->total}} Tk.</td>
                        </tr>
                      </tbody>
                    </table>
                </div>

              </div>
        
        </div>



        <!-- /.row -->


    </div>
    <!-- /.container -->

@stop
