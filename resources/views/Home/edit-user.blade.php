@extends('Header_Footer.auth_header_footer')
@section('title','Edit User')
@endsection
@section('body')


    <div>

        {!!Form::open(array('route' => ['table.update',$userData->id],'class'=> 'form-horizontal','method'=>'PUT'))!!}
        {!! csrf_field() !!}
        <div class="panel panel-default" id="details-panel">

            <div class="panel-body form-horizontal payment-form">

                <div class="form-group">
                    <h1 style="text-align: center"><i class="glyphicon glyphicon-edit"></i> Edit User</h1>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label for="concept" class="col-sm-3 control-label">Name:</label>
                        <div class="col-sm-6">
                            {!!Form::text('name', $value=$userData->name , $attributes = array('class'=> 'form-control',
                                'placeholder'=>'User Name' ,'id'=> 'concept','required'))!!}
                                    <!-- <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="concept">-->
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label for="description" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-6">
                            {!!Form::email('email', $value=$userData->email , $attributes = array('class'=> 'form-control',
                                'placeholder'=>'Your Email' ,'id'=> 'description','required'))!!}
                                    <!--<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="description">-->

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label for="dropdown" class="col-sm-3 control-label">User Type:</label>

                        <div class="col-sm-6">
                            {!! Form::select('user_type',['Admin' => 'Admin','User' => 'User','Client'=>'Client'],$value=$userData->user_type, $attributes = array('class'=>'form-control','id'=> 'dropdown')); !!}
                                    <!--{!!Form::select('user_type', array('A' => 'Admin', 'U' => 'User'),['class' => 'form-control'])!!} -->

                        </div>
                    </div>
                </div>

                    <br>
                <div class="form-group">
                    <div class="row" >
                        <div class="col-sm-5"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-lg btn-primary"><b>Update&nbsp;<i class="glyphicon glyphicon-ok-circle"></i></b></button >
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}

    </div>


@stop