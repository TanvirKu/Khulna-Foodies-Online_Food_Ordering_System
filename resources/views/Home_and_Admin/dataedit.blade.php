@extends('Order.global-layout')
@section('body')


    <div class="container" style="min-width:300px;width:70%; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">

    {!!Form::open(array('route' => ['table.update',$userData->id],'class'=> 'form-horizontal','method'=>'PUT'))!!}
    {!! csrf_field() !!}
    <div class="panel panel-default">
        <h1><i class="glyphicon glyphicon-edit"></i> Edit User</h1>
        <div class="panel-body form-horizontal payment-form">

            <div class="form-group">
                <label for="concept" class="col-sm-3 control-label">Name:</label>
                <div class="col-sm-9">
                    {!!Form::text('name', $value=$userData->name , $attributes = array('class'=> 'form-control',
                        'placeholder'=>'User Name' ,'id'=> 'concept','required'));!!}
                            <!-- <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="concept">-->
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                    {!!Form::email('email', $value=$userData->email , $attributes = array('class'=> 'form-control',
                        'placeholder'=>'Your Email' ,'id'=> 'description','required'));!!}
                            <!--<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="description">-->

                </div>
            </div>
             <div class="form-group">
                <label for="dropdown" class="col-sm-3 control-label">User Type:</label>
                
                <div class="col-sm-9">
                     {!! Form::select('user_type',['Admin' => 'Admin','User' => 'User','Client'=>'Client'],$value=$userData->user_type, $attributes = array('class'=>'form-control','id'=> 'dropdown')); !!}   
                <!--{!!Form::select('user_type', array('A' => 'Admin', 'U' => 'User'),['class' => 'form-control']);!!} -->
                
                </div>
                
            </div>
            <!-- <input type="password" name="password" class="form-control" class="form-control" id="amount" >
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Password:</label>
                        <div class="col-sm-9">
                        {!!Form::password('password', $attributes = array('class'=> 'form-control','id' => 'amount','required'));!!}
                    </div>
              </div>-->

            <div >
                <div class="col-sm-9" id="regbtn">
                    <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">Update</button >
                </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}

    </div>
@stop