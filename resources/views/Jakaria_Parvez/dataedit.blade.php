<!-- resources/views/auth/register.blade.php -->
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <style type="text/css">
        .container {

            margin-top: 15%;
            margin-left: 30%;
            /*border: 2px solid #808080;*/
            border-radius: 10px;
            margin-bottom: 15px;
            padding-top: 5px;
            padding-bottom: 35px;
            background-color:#F7F7F7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);

        }

        .col-sm-3{
            border: 1px solid #DEEDCE;
            border-radius: 10px;
            padding-right: 10px;
            text-align: center;
        }
        .panel{
            width: 45em;
            background-color: #EDF7F7;
        }
        #regbtn{

            padding-left: 160px;
        }
    </style>
<body class="container">
<div ="s0inlineContent">
<div class="col-sm-5">

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
<div>
</body>