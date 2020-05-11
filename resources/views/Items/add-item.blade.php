@extends('Header_Footer.otherIndex')
@section('title','Add New Item')
@endsection

@section('body')


    <div class="row">
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Pie.png')}}" alt="">
                </div>

                <div class="col-md-12">
                    <img class="img-responsive img-border img-center"   style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Cake.png')}}" alt="">
                </div>

                <div class="col-md-12">
                    <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Tea-2.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="col-md-8" style="padding: 20px;">
            <section>

                {!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true']) !!}
                <div class="panel panel-default" id="details-panel">

                    <div class="form-group">
                        <h1 style="text-align: center"><b><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add Item</b></h1>
                    </div>

                    <div class="form-group">
                        <label for="file" style="color: white">Image File</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>

                    <div class="form-group">
                        <label for="restaurant_name" style="color: white">Restaurant Name</label>
                        <input type="text" class="form-control" name="restaurant_name" required>
                    </div>

                    <div class="form-group">
                        <label for="caption" style="color: white">Caption</label>
                        <input type="text" class="form-control" name="caption" required>
                    </div>

                    <div class="form-group">
                        <label for="rate" style="color: white">Rate</label>
                        <input type="text" class="form-control" name="rate" required>
                    </div>

                    <div class="form-group">
                        <label for="description" style="color: white">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg pull-right"><b>Upload&nbsp;<i class="glyphicon glyphicon-upload"></i></b></button>
                            </div>
                            <div  class="col-md-6">
                                <a href="{{ url('/image') }}" class="btn btn-warning btn-lg pull-left"><b>Cancel&nbsp;<i class="glyphicon glyphicon-remove-sign"></i></b></a>
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
                    <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Tea-1.png')}}" alt="">
                </div>

                <div class="col-md-12">
                    <img class="img-responsive img-border img-center"   style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Bread.png')}}" alt="">
                </div>

                <div class="col-md-12">
                    <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-food-drink-sandwich1.png')}}" alt="">
                </div>
            </div>

        </div>

    </div>

    <br>

@stop