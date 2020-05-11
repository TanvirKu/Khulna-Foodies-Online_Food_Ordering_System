@extends('Header_Footer.otherIndex')
@section('title','Contact-Us')
@endsection

@section('dicision-body')
    @if(Session::has('flash_message_LogedInAsAdmin'))
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsAdmin')}}</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
            <li><a href="/table"><strong>Admin Panel</strong></a></li>
        </ul>
    @endif

    @if(Session::has('flash_message_LogedInAsClient'))

        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsClient')}}</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">

            @if(Session::has('flash_message_HaveRestaurant'))
                @foreach($restaurant as $resId)
                    <li><a href="{{ url('/restaurant/'.$resId->id.'/edit') }}"><strong>Restaurant View Or Edit</strong></a></li>
                @endforeach
            @endif

            @if(Session::has('flash_message_Have_No_Restaurant'))
                <li><a href="restaurant/create"><strong>Add Restaurant Details</strong></a></li>
            @endif

            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>

        </ul>


    @endif

    @if(Session::has('flash_message_LogedInAsUser'))
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsUser')}}</strong><b class="caret"></b></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
        </ul>
    @endif


    @if(Session::has('flash_message_NotLogedIn'))
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="glyphicon glyphicon-triangle-bottom"></i>{{Session::get('flash_message_NotLogedIn')}}</strong></a>
        <span class="dropdown-arrow"></span>
        <ul class="dropdown-menu">
            <li><a href="loginKoro"><strong>Log In</strong></a></li>
            <li><a href="regKoro"><strong>Register</strong></a></li>
        </ul>
    @endif

@endsection


@section('body')
    <div class="row">

        @if(Session::has('flash_message_Send'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h3 style="color:black">{{Session::get('flash_message_Send')}}</h3>
            </div>
        @endif

        <div class="col-md-12">
            <div style="text-align: center;color:yellow"><h1>we'd <i class="glyphicon glyphicon-heart-empty"></i> to help!</h1></div>
            <hr>
            <div class="col-md-6">

                {!! Form::open(array('route' => 'contacts.store' ,'class'=> 'form-horizontal')) !!}
                <div class="panel panel-default" id="details-panel" >
                    <div class="panel-body form-horizontal payment-form" style="border: 5px outset saddlebrown">

                        <div class="row">

                            <div class="col-sm-3" >
                                <div class="brand" style="border:inset transparent">
                                    <i  class="glyphicon glyphicon-info-sign"><h4><strong>Info</strong></h4></i>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Your Name</label>
                                    <div class="col-sm-8">
                                        {!!Form::text('name', $value=null , $attributes = array('class'=> 'form-control','style' => 'color:black',
                                        'placeholder'=>'Your Name' ,'id'=> 'userName','required'));!!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Your Email</label>
                                    <div class="col-sm-8">
                                        {!!Form::email('email', $value=null , $attributes = array('class'=> 'form-control','style' => 'color:black',
                                       'placeholder'=>'Your Email' ,'id'=> 'email','required'));!!}
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="col-sm-4 control-label">Phone No&nbsp;&nbsp;</label>
                                    <div class="col-sm-8">

                                        {!!Form::text('phone_no', $value=null , $attributes = array('class'=> 'form-control','placeholder'=>'Phone No','id' => 'phone_no','style' => 'color:black','required'));!!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group" >
                                    <div class="col-sm-3">
                                        <br>
                                        <div class="brand" style="border:inset transparent">
                                            <i  class="glyphicon glyphicon-comment"><h4><strong>comment</strong></h4></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <br>
                                        <textarea name="comment" style="height:140px;color:black" class="form-control" placeholder="Comment"  id="comment" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button class="btn btn-block btn-primary" type="submit"> <strong>Submit <i class="glyphicon glyphicon-send"></i></strong></button>

                                </div>

                                <div class="col-sm-4"></div>

                            </div>

                        </div>
                    </div>
                </div>
                {!! Form::close() !!}


            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4" style="border: 5px outset saddlebrown">
                            <h3> <i class=" glyphicon glyphicon-cutlery"></i> Eat!!</h3>
                        </div>

                        <div class="col-md-4" style="border: 5px outset saddlebrown">
                            <h3> <i class="glyphicon glyphicon-star-empty"></i> Rate!!</h3>
                        </div>

                        <div class="col-md-4" style="border: 5px outset saddlebrown">
                            <h3> <i class="glyphicon glyphicon-fire"></i> Shoot!!</h3>
                        </div>

                    </div>
                </div>

                <br>
                <hr>


                <div class="row" style="border: 1px solid whitesmoke">
                    <div class="col-md-12" style="border: 5px outset saddlebrown">
                        <div class="col-md-3">
                            <div class="brand">
                                <i class="glyphicon glyphicon-map-marker"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br>
                            <p><h3>food control office <br><h4>Gollamari,khulna<br>Bangladesh</h4></h3></p>
                            <br>
                        </div>
                    </div>

                </div>

                <hr style="height:12px;">

                <div class="row"  style="border: 1px solid whitesmoke">
                    <div class="col-md-12" style="border: 5px outset saddlebrown">
                        <div class="col-md-3">
                            <div class="brand">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br>
                            <p>
                                <h4>
                                    <strong>
                                        <i class="glyphicon glyphicon-arrow-right"></i> 01821493349,
                                        <br><i class="glyphicon glyphicon-arrow-right"></i> 01683543617,
                                        <br><i class="glyphicon glyphicon-arrow-right"></i> 01675735532
                                    </strong>
                                </h4>
                            </p>
                            <br>
                        </div>
                    </div>

                </div>






            </div>
        </div>
    </div>
@stop