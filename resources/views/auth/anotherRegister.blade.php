@extends('Header_Footer.auth_header_footer')
@section('title','Register')
@endsection
@section('body')
    <div>
    <!--<form method="POST" class ="form-horizontal" action="/auth/register" id="details-panel">-->
        {!! Form::open(['url' => '/auth/register', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        {!! csrf_field() !!}
        <div class="panel panel-default" id="details-panel">

            <div class="panel-body form-horizontal payment-form">

                <div class="form-group">
                    <h1 style="text-align: center"><b><i class="glyphicon glyphicon-registration-mark"></i>&nbsp;Register Here</b></h1>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label','style'=>'color:white']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'User Name','style' => 'color:black','required']) !!}
                    </div>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label','style'=>'color:white']) !!}
                    <div class="col-sm-6">
                        {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'User Email','style' => 'color:black','required']) !!}

                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label','style'=>'color:white']) !!}
                    <div class="col-sm-6">
                        {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Password','style' => 'color:black','required']) !!}
                    </div>
                </div>

                <!-- Password Confirmation Field -->
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Conform Password', ['class' => 'col-sm-3 control-label','style'=>'color:white']) !!}
                    <div class="col-sm-6">
                        {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Confirm Password','style' => 'color:black','required']) !!}
                    </div>
                </div>


                <div class="form-group">
                        {!! Form::label('dropdown', 'Register As', ['class' => 'col-sm-3 control-label','style'=>'color:white']) !!}
                        <div class="col-sm-3">
                            <select name="user_type" class="form-control">
                                <option value=""></option>
                                <option value="User">User</option>
                                <option value="Client">Client</option>
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button class="btn btn-lg btn-primary"><b>Submit&nbsp;<i class="glyphicon glyphicon-send"></i></b></button>
                    </div>
                </div>

            </div>

        </div>
        {!! Form::close() !!}

    </div>
@stop