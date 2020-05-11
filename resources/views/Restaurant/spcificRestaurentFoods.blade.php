@extends('Header_Footer.indexWithSearch')
@section('title','Food List')
@endsection

@section('search-part')
    <div class="box">
        <div class="col-md-12">
            {!!Form::open(['route'=>'image.index','method'=>'GET', 'class'=>'form-group'])!!}
            <div class="col-md-5">
                {!!Form::text('caption',$value=null,$attributes = array('class'=> 'form-control',
                             'placeholder'=>'Search By Food'))!!}
            </div>

            <div class="col-md-5">
                {!!Form::text('restaurant_name',$value=null,$attributes = array('class'=> 'form-control',
                            'placeholder'=>'Search By Restaurant'))!!}
            </div>


            <div class="col-md-2">
                <button class="btn btn-block btn-default" style="background-color: #555555;color:white"><strong>Search <i class="glyphicon glyphicon-search"></i></strong></button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@endsection

@section('body')

    <div class="container">
        <div>
            <section>

                <br>

                <h1 style="text-align: center ; color:yellow" class="brand"> <i class="glyphicon glyphicon-fire"></i>&nbsp;Food&nbsp;List </h1>

                <hr>
                <div class="row">

                <br>

                @forelse($foods as $food)
                        <div class="col-md-4" id="all-foods">

                            <br>

                            <div class="thumbnail">
                                <img style="border: 1px solid whitesmoke" src="{{asset($food->file)}}"/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption">
                                            <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-cutlery"></i>&nbsp;{{$food->restaurant_name}}</h4>
                                            <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-fire"></i>&nbsp;{{$food->caption}}</h4>
                                            <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-record"></i>&nbsp;{{$food->rate}}&nbsp;<b>Tk.</b></h4>
                                            <p><h5 style="color: whitesmoke"><b><i class="glyphicon glyphicon-comment"></i></b> &nbsp;{!! substr($food->description, 0,200) !!}</h5></p>
                                        </div>
                                    </div>
                                </div>

                                <hr style="color: whitesmoke">
                                <div class="row text-center" style="padding-left:1em;">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <a class="btn btn-lg btn-success pull-right" href="{{ url('/image/'.$food->id)}}"><b>View&nbsp;<i class="glyphicon glyphicon-new-window"></i></b></a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-lg btn-primary pull-left" href="{{ url('/ok/'.$food->id)}}"><b>Order&nbsp;<i class="glyphicon glyphicon-circle-arrow-right"></i></b></a>
                                                </div>
                                            </div>
                                        </div>

                                </div>

                            </div>
                        </div>

                    @empty

                    @endforelse
                </div>

                    <div align="right">{!! $foods->render() !!}</div>

            </section>
        </div>

    </div>
@stop


