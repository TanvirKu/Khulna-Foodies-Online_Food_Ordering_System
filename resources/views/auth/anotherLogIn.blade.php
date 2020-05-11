@extends('Header_Footer.auth_header_footer')
@section('title','Log In')
@endsection







@section('body')

            @if(Session::has('flash_message_Register'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h3 style="color:black">{{Session::get('flash_message_Register')}}</h3>
                </div>
            @endif

            <form  name="submit_form"  class ="form-horizontal" method="post" action="/auth/login">
             {{-- {!! csrf_field() !!} commneted on 14/12/2015--}}
                <div class="panel panel-default" id="details-panel">
                    <div class="form-group">
                        <h1 style="text-align: center"><b><i class="glyphicon glyphicon-log-in"></i>&nbsp;Log In</b></h1>
                    </div>
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

                    <!-- remember_me Field -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::label('remember', 'Remember me', ['style'=>'color:white'] ) !!}
                            {!! Form::checkbox('remember', 1, null, ['class' => 'pull-left remember']) !!}
                        </div>
                    </div>

                    <!-- Log In! Field -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button class="btn btn-primary btn-lg"><b>Log In&nbsp;<i class="glyphicon glyphicon-log-in"></i></b></button>
                        </div>
                    </div>
                </div>
            </form>
@stop