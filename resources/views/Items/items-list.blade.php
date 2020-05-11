@extends('Header_Footer.indexWithSearch')
@section('title','Food List')
@endsection

@section('dicision-body')
    @if($loginButtonStatus == 0 and $logedInAs=='Admin')
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Admin</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
            <li><a href="/table"><strong>Admin Panel</strong></a></li>
        </ul>
    @endif

    @if($loginButtonStatus == 0 and $logedInAs=='Client')

        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Client</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">

            @if($haveRestaurantDetails == 1)
                @foreach($restaurant as $resId)
                    <li><a href="{{ url('/restaurant/'.$resId->id.'/edit') }}"><strong>Restaurant View Or Edit</strong></a></li>
                @endforeach
            @endif

            @if($haveRestaurantDetails == 0)
                <li><a href="restaurant/create"><strong>Add Restaurant Details</strong></a></li>
            @endif

            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>

        </ul>


    @endif

    @if($loginButtonStatus == 0 and $logedInAs=='User')
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>User</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
        </ul>
    @endif


    @if($loginButtonStatus == 1)
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="glyphicon glyphicon-triangle-bottom"></i></strong></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="loginKoro"><strong>Log In</strong></a></li>
            <li><a href="regKoro"><strong>Register</strong></a></li>
        </ul>
    @endif

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

<div class="container" >


        <section>

            <br>
            <h1 style="text-align: center ; color:yellow" class="brand"> <i class="glyphicon glyphicon-fire"></i>&nbsp;Food&nbsp;List </h1>

            <hr>

            <div class="row">
                @if(($logedInAs=='Admin') || ($logedInAs=='Client'))
                    @if(count($images) > 0)
                        <div class="col-md-12 text-center" >
                            <br>
                            <a href="{{ url('/image/create') }}" class="btn btn-success" role="button">
                                <i class="glyphicon glyphicon-plus"></i>  &nbsp; Add New Food Item
                            </a>
                            <hr/>

                        </div>
                    @endif
                @endif

                <br>

                <br>
                @forelse($images as $image)
                    <div class="col-md-4" id="all-foods">
                        <br>
                        <div class="thumbnail">
                            <img style="border: 1px solid whitesmoke" src="{{asset($image->file)}}"/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption">
                                        <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-cutlery"></i>&nbsp;{{$image->restaurant_name}}</h4>
                                        <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-fire"></i>&nbsp;{{$image->caption}}</h4>
                                        <h4 style="color: whitesmoke"><i class="glyphicon glyphicon-record"></i>&nbsp;{{$image->rate}}&nbsp;<b>Tk.</b></h4>
                                        <p><h5 style="color: whitesmoke"><b><i class="glyphicon glyphicon-comment"></i></b> &nbsp;{!! substr($image->description, 0,200) !!}</h5></p>
                                    </div>
                                </div>
                            </div>

                            <hr style="color: whitesmoke">
                            <div class="row text-center" style="padding-left:1em;">
                                    @if($logedInAs=='Admin')
                                        <div clss="row">
                                            <div class="col-md-12">
                                                 <div class="col-md-6">
                                                     <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-primary btn-lg pull-right"><i class="glyphicon glyphicon-edit"></i></a>
                                                 </div >

                                                <div class="col-md-6">
                                                    {!! Form::open(['url'=>'/image/'.$image->id]) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    <button class="btn  btn-lg btn-danger pull-left" onclick="return confirm('Are You Sure Man')"><i class="glyphicon glyphicon-remove"></i></button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if(($logedInAs!='Admin'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <a class="btn btn-lg btn-success pull-right" href="{{ url('/image/'.$image->id)}}"><b>View&nbsp;<i class="glyphicon glyphicon-new-window"></i></b></a>
                                                </div>
                                                <div class="col-md-6">
                                                     <a class="btn btn-lg btn-primary pull-left" href="{{ url('/ok/'.$image->id)}}"><b>Order&nbsp;<i class="glyphicon glyphicon-circle-arrow-right"></i></b></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                            </div>

                        </div>
                    </div>

                @empty
                    @if($logedInAs=='Admin')
                        <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
                    @endif
                @endforelse
            </div>
            @if($render == 1)
                 <div align="right">{!! $images->render() !!}</div>
            @endif
        </section>
    </div>

</div>
@stop


