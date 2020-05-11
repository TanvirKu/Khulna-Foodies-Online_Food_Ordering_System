@extends('Header_Footer.indexWithSearch')
@section('title','All Restaurants')
@endsection

@section('search-part')
    <div class="box">
        <div class="col-md-12">
            {!!Form::open(['route'=>'restaurant.index','method'=>'GET', 'class'=>'form-group'])!!}
            <div class="col-md-5">
                {!!Form::text('zone',$value=null,$attributes = array('class'=> 'form-control',
                             'placeholder'=>'Search Restaurant By Zone'))!!}
            </div>

            <div class="col-md-5">
                {!!Form::text('restaurant_name',$value=null,$attributes = array('class'=> 'form-control',
                            'placeholder'=>'Search Specific Restaurant'))!!}
            </div>


            <div class="col-md-2">
                <button class="btn btn-block btn-default" style="background-color: #555555;color:white"><strong>Search <i class="glyphicon glyphicon-search"></i></strong></button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@endsection


@section('body')


    <h1 style="text-align: center ;color:yellow" class="brand"> <i class="glyphicon glyphicon-cutlery"></i>&nbsp;Restaurants </h1>

    <hr>


    <section>

        @foreach($restaurants as $restaurant)

            <div class="row" style="padding: 20px;">

                <div class="col-md-12" style="border: 1px outset #FFFFFF ;padding: 20px" id="details-panel">


                    <div class="col-md-6">
                        <div class="thumbnail" style="height: auto">
                            <img style="border: 1px solid whitesmoke" src="{{asset($restaurant->file)}}"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12" id="total-description-food">
                            <div class="caption">
                                <h2 style="color: whitesmoke"><i class="glyphicon glyphicon-cutlery"></i>&nbsp;{{$restaurant->restaurant_name}}</h2>
                                <h3 style="color: whitesmoke"><i class="glyphicon glyphicon-modal-window"></i>&nbsp;{{$restaurant->zone}}</h3>
                                <p><h3 style="color: whitesmoke"><b><i class="glyphicon glyphicon-map-marker"></i></b> &nbsp;{!! substr($restaurant->address, 0,200) !!}</h3></p>
                            </div>
                            <br>

                            <a href="{{ url('/foods/'.$restaurant->restaurant_name)}}" class="btn btn-block btn-default" id="details-panel"> <h2><i class="glyphicon glyphicon-fire"></i> Foods  </h2></a>

                        </div>
                    </div>


                </div>

            </div>



        @endforeach

        <div align="right">{!! $restaurants ->render() !!}</div>

    </section>
@endsection