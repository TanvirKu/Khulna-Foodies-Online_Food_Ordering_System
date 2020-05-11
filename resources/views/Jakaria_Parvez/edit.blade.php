<html>
<head>
    <title>User Log In</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<style type="text/css">



.panel-default{
    background-color: #CCFF99;

}
</style>
</head>
<body>
     <div class="container">
         <div class="col-sm-5">
            <h1>Edit Here</h1>
            {!! Form::open(array('route' => ['nondon.update',$userData->id],'class'=> 'form-horizontal','method'=>'PUT')) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <!--<label for="concept" class="col-sm-3 control-label">User Name:</label>-->
                        {!!Form::label('userName', 'User Name', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                            <!--<input type="text" class="form-control" id="concept" name="userName">-->
                            {!!Form::text('userName', $value=$userData->userName , $attributes = array('class'=> 'form-control',
                            'placeholder'=>'User Name' ,'id'=> 'userName','required'));!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <!--<label for="description" class="col-sm-3 control-label">Email:</label>-->
                        {!!Form::label('email', 'User Email', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                           <!-- <input type="email" class="form-control" id="description" name="email" Placeholder="your email">-->
                             {!!Form::email('email', $value=$userData->email , $attributes = array('class'=> 'form-control',
                            'placeholder'=>'Your Email' ,'id'=> 'email','required'));!!}
                        </div>
                    </div> 
                    <div class="form-group">
                        <!--<label for="amount" class="col-sm-3 control-label">Password:</label>-->
                         {!!Form::label('password', 'Password', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                            <!--<input type="password" class="form-control" id="amount" name="password">-->
                            {!!Form::password('password', $attributes = array('class'=> 'form-control','id' => 'password','required'));!!}
                        </div>
                    </div>
                    <div>
                        <div>
                           <!-- <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>-->
                           {!!Form::submit('Submit',$attributes = array('class'=>'btn btn-lg btn-primary btn-block btn-signin'));!!} 
                        </div>
                    </div>
                </div>
            </div> 
            {!! Form::close() !!}
        </div>
     </div>
</body>
</html>