@extends('Header_Footer.otherIndex')
@section('title','Edit')
@endsection
@section('body')
    <div class="row">
        <div clas="col-md-12">
            <section>

                {!! Form::model($image,['url' => '/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}
                        <div  class="row">

                            <div class="col-md-1"></div>

                            <div  class="col-md-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Tea-1.png')}}" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Bread.png')}}" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-food-drink-sandwich1.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Ponir.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Drink-2.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Necessary/Food-Wood-Pot.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div id="item-edit" class="thumbnail">
                                    <div class="form-group">
                                        <h1 style="text-align: center;color: whitesmoke"><b><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Item</b></h1>
                                    </div>
                                    <img style="border: 1px solid whitesmoke" src="{{ asset($image->file) }}" height="250"/>

                                    <div class="form-group">
                                        <label for="file" style="color: white">Image File</label>
                                        {!! Form::file('file',['class'=>'form-control','required']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="restaurant_name" style="color: white">Restaurant Name</label>
                                        {!! Form::text('restaurant_name',null,['class'=>'form-control','required']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="caption" style="color: white">Caption</label>
                                        {!! Form::text('caption',null,['class'=>'form-control','required']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="rate" style="color:white">Rate</label>
                                        {!! Form::text('rate',null,['class'=>'form-control','required']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="description" style="color:white">Description</label>
                                        {!! Form::textarea('description',null,['class'=>'form-control','required']) !!}
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-lg btn-primary pull-right"><b>Update&nbsp;<i class="glyphicon glyphicon-ok-circle"></i></b></button>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ url('/image') }}" class="btn btn-lg btn-warning pull-left"><b>Cancel&nbsp;<i class="glyphicon glyphicon-remove-sign"></i></b></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div  class="col-md-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Tea-2.png')}}" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Necessary/Food-Wood-Cake.png')}}" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood--food-hamburger.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Pie.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Drink-1.png')}}" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <img class="img-responsive img-border img-center" style="border: none"   src="{{asset('Home/img/Necessary/Food-Wood-knife-fork.png')}}" alt="">
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



