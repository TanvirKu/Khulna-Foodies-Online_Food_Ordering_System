@extends('Header_Footer.otherIndex')
@section('title','Edit')
@endsection
@section('body')
    <div class="row">
        <div clas="col-md-12">
            <section>

                {!! Form::model($restaurant,['url' => '/restaurant/'.$restaurant->id, 'method' => 'PUT', 'files'=>true]) !!}
                <div  class="row">

                    <div class="col-md-1"></div>

                    <div  class="col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Business-Icon/Business_Home.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork4.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork-5.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"  src="{{asset('Home/img/Business-Icon/Business-Box.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork-3.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Business-Icon/Business_Home-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="item-edit" class="thumbnail">
                            <div class="form-group">
                                <h1 style="text-align: center;color: whitesmoke"><b><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Details</b></h1>
                            </div>
                            <img style="border: 1px solid whitesmoke" src="{{ asset($restaurant->file) }}" height="250"/>

                            <div class="form-group">
                                <label for="file" style="color: white">Image File</label>
                                {!! Form::file('file',['class'=>'form-control','required']) !!}
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="restaurant_name" style="color: white">Restaurant Name</label>
                                {!! Form::text('restaurant_name',null,['class'=>'form-control','required']) !!}
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="zone" style="color:white">Zone</label>
                                {!! Form::text('zone',null,['class'=>'form-control','required']) !!}
                            </div>

                            <br>

                            <div class="form-group">
                                <label for="address" style="color:white">Address</label>
                                {!! Form::textarea('address',null,['class'=>'form-control','required']) !!}
                            </div>

                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-lg btn-primary pull-right"><b>Update&nbsp;<i class="glyphicon glyphicon-ok-circle"></i></b></button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ url('/restaurant') }}" class="btn btn-lg btn-warning pull-left"><b>Cancel&nbsp;<i class="glyphicon glyphicon-remove-sign"></i></b></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div  class="col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Business-Icon/Business_Home-2.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork-3.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"  src="{{asset('Home/img/Business-Icon/Business-Box.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork-5.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Business-Icon/Food-Wood-knife-fork4.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Business-Icon/Business_Home.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div  class="col-md-1"></div>

                </div>



                {!! Form::close() !!}
            </section>
        </div>
    </div>

@stop



