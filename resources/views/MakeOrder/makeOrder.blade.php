@extends('Header_Footer.otherIndex')
@section('title','Order Food')
@endsection

@section('body')


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->

        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4" >
                <div class="panel panel-default text-center">
                    <div class="panel-heading" id="details-panel">
                        <h1 class="panel-title" id="panel_heading"><i class="glyphicon glyphicon-leaf"></i>&nbsp;item Details</h1>
                    </div>
                    <br>
                    <div class="panel-body">
                       <img style="border: 5px solid #084925" id="food-image" src="{{asset($item->file)}}"/>
                    </div>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item text-left" id="details-panel"><h4><i class="glyphicon glyphicon-star"></i> Order Item's Id : {{$item->id}}</h4> </li>
                        <li class="list-group-item text-left" id="details-panel"><h4><i class="glyphicon glyphicon-fire"></i> Item's Name : {{$item->caption}}</h4></li>
                        <li class="list-group-item text-left" id="details-panel"><h4><i class="glyphicon glyphicon-record"></i> Item's Price Per Piece: {{$item->rate}} Tk.</h4></li>
                    </ul>
                </div>
            </div>

           {!! Form::open(array('route' => 'orderMake.store' ,'class'=> 'form-horizontal')) !!}
            <div class="col-md-8">
                <div class="panel panel-default text-center" id="details-panel">
                    <div class="panel-heading" id="details-panel">
                        <h1 class="panel-title" id="panel_heading"><span><i class="glyphicon glyphicon-home"></i>&nbsp;Order Food</span></h1>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-10">
                                 <div class="row">
                                    <strong>
                                        <div class="col-sm-12">
                                        <label style="text-align:right" for="amount" class="col-sm-4 control-label"><h4>Email:</h4></label>
                                            <div class="col-sm-8">
                                            <input  type="text" name="email" class="form-control" style="color: black" id="amount" required>
                                            </div>
                                        </div>
                                    </strong>
                                </div>

                                  <div class="row">
                                    <strong>
                                        <div class="col-sm-12">
                                        <label style="text-align:right" for="amount" class="col-sm-4 control-label"><h4>Contact No:</h4></label>
                                            <div class="col-sm-8">
                                            <input type="text" name="contact_no" class="form-control" style="color: black" id="amount" required>
                                            </div>
                                        </div>
                                    </strong>
                                </div>

                                 <div class="row">
                                    <strong>
                                        <div class="col-sm-12">
                                        <label style="text-align:right" for="amount" class="col-sm-4 control-label"><h4>Address:</h4></label>
                                            <div class="col-sm-8">
                                            <textarea class="form-control" name="address" style="color: black" id="amount" required></textarea>
                                            </div>
                                        </div>
                                    </strong>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>



                        <div class="row">


                             <div class="col-sm-12">
                                <label style="text-align:center"   for="amount" class="col-sm-12 control-label"><h4><i class="glyphicon glyphicon-record"></i> Price Per Piece : {{$item->rate}} Tk.</h4></label>
                                <br>
                            </div>



                            <div class="col-sm-6">
                            </strong>
                            <label style="text-align:center" for="amount" class="col-sm-6 control-label"><h4>Item Id:</h4></label>
                            </strong>
                                <div class="col-sm-6">
                                <input type="text" name="item_id" value="{{$item->id}}" class="form-control" style="color: black" id="amount" required>
                                </div>
                            </div>


                            <!--
                            <div class="col-sm-6">
                            <strong>
                            <label style="text-align:right" for="amount" class="col-sm-4 control-label"><h4>Piece:</h4></label>
                            </strong>
                                <div class="col-sm-6">

                                <input type="text" value="{{$item->rate}}" name="rate" class="form-control" id="amount" disabled>
                                </div>
                            </div>
                            -->
                            <div class="col-sm-6">
                            </strong>
                            <label style="text-align:center" for="amount" class="col-sm-6 control-label"><h4>Quantity:</h4></label>
                            </strong>
                                <div class="col-sm-6">
                                <input type="number" name="quantity" class="form-control" style="color: black" id="amount" min="1" required>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-lg"><b>Submit Order&nbsp;<i class="glyphicon glyphicon-send"></i></b></button>

                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                         <ul class="list-group">
                             <h3 id="sign-in"><li class="list-group-item" id="details-panel"> If Not Registerd <a href="/regKoro"><strong>Sign As Foodies</strong></a></li></h3>
                        </ul>
                        </div>
                    </div>

                </div>
            </div>
             {!! Form::close() !!}
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@stop


