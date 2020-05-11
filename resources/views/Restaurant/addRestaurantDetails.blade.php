@extends('Header_Footer.otherIndex')
@section('title','Add Restaurant Details')
@endsection

@section('body')

    <div class="row">
        <div class="col-md-2">
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
            </div>
        </div>

        <div class="col-md-8" style="padding: 20px;">
            <section>

                {!! Form::open(['url'=>'/restaurant', 'method'=>'POST', 'files'=>'true']) !!}
                <div class="panel panel-default" id="details-panel">

                    <div class="form-group">
                        <h1 style="text-align: center"><b><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add Restaurant Details</b></h1>
                    </div>

                    <div class="form-group">
                        <label for="file" style="color: white">Image File</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>

                    <div class="form-group">
                        <label for="email" style="color: white">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="restaurant_name" style="color: white">Restaurant Name</label>
                        <input type="text" class="form-control" name="restaurant_name" required>
                    </div>

                    <div class="form-group">
                        <label for="zone" style="color: white">Zone</label>
                        <input type="text" class="form-control" name="zone" required>
                    </div>

                    <div class="form-group">
                        <label for="address" style="color: white">Address</label>
                        <textarea class="form-control" name="address" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg pull-right"><b>Upload&nbsp;<i class="glyphicon glyphicon-upload"></i></b></button>
                            </div>
                            <div  class="col-md-6">
                                <a href="{{ url('/restaurant.create') }}" class="btn btn-warning btn-lg pull-left"><b>Cancel&nbsp;<i class="glyphicon glyphicon-remove-sign"></i></b></a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </section>

        </div>
        <div class="col-md-2">

            <div class="row">
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

    </div>

    <br>

@endsection