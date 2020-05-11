@extends('Header_Footer.otherIndex')
@section('title','Show')
@endsection
@section('body')
<div class="row">

    <div class="col-md-12">
        <section >
            <form class="form-horizontal" method="get">

                <div class="row">
                    <div class="col-md-3">

                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none" src="{{asset('Home/img/Necessary/Food-Wood-Tea-2.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"   style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Cake.png')}}" alt="">
                            </div>

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood--food-hamburger.png')}}" alt="">
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail" style="height: auto;background-color: transparent">
                            <div class="form-group">
                                <h1 style="text-align: center; color: whitesmoke"><b><i class="glyphicon glyphicon-picture"></i>&nbsp;View Item</b></h1>
                            </div>
                            <img style="border: 1px solid whitesmoke" src="{{ asset($image->file) }}"/>
                            <div  class="row">
                                <div class="col-md-12">

                                    <h1>
                                        <div class="col-md-12">
                                            <label style="color: whitesmoke"><i class="glyphicon glyphicon-cutlery"></i>&nbsp;<strong>{{ $image->restaurant_name }}</strong></label>
                                        </div>

                                    </h1>

                                    <h1>
                                        <div class="col-md-12">
                                            <label style="color: whitesmoke"><i class="glyphicon glyphicon-fire"></i>&nbsp;<strong>{{ $image->caption }}</strong></label>
                                        </div>
                                    </h1>



                                    <h1>
                                        <div class="col-md-12">
                                            <label style="color: whitesmoke"><i class="glyphicon glyphicon-record"></i>&nbsp;<strong>{{ $image->rate }} Tk.</strong></label>
                                        </div>
                                    </h1>


                                    <h4>
                                        <div class="col-md-12">
                                            <label style="color: whitesmoke"><strong><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp;&nbsp;{{ $image->description }}</strong></label>
                                        </div>
                                    </h4>



                                    <div  class="col-md-12">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <hr style="border: 1px solid whitesmoke">
                                            <a class="btn btn-lg btn-primary pull-left" href="{{ url('/ok/'.$image->id)}}"><b>Order&nbsp;<i class="glyphicon glyphicon-circle-arrow-right"></i></b></a>
                                            <a class="btn btn-lg btn-warning  pull-right" href="{{ url('/image') }}"><b><i class="glyphicon glyphicon-circle-arrow-left"></i>&nbsp;Back</b></a>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>

                                </div>

                            </div>

                            <br>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">

                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center" style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-food-drink-sandwich1.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Ponir.png')}}" alt="">
                            </div>
                            <div class="col-md-12">
                                <img class="img-responsive img-border img-center"  style="border: none"  src="{{asset('Home/img/Necessary/Food-Wood-Drink-2.png')}}" alt="">
                            </div>

                        </div>

                    </div>
                </div>

                    <!--
                    <div class="col-md-3"></div>
                        <div class="form-group">

                        </div>
                        <div  class="form-group">
                            <label class="col-sm-6 control-label"><strong>Caption</strong></label>
                            <div class="col-sm-6">
                                <p class="form-control-static"><strong>{{ $image->caption }}</strong></p>
                            </div>
                        </div>

                        <div  class="form-group">
                            <label class="col-sm-6 control-label"><strong>Rate</strong></label>
                            <div class="col-sm-6">
                                <p class="form-control-static"><strong>{{ $image->rate }}</strong></p>
                            </div>
                        </div>

                        <div  class="form-group">
                            <label class="col-sm-6 control-label"><strong>Description</strong></label>
                            <div class="col-sm-6">
                                <p class="form-control-static"><strong>{{ $image->description }}</strong></p>
                            </div>
                        </div>
                        -->
                        <!--<a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-primary">Edit</a>-->





            </form>


        </section>
    </div>

</div>
@stop


