<html>
<head>
	<title>User Sign In</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<style type="text/css">

.container{
   /*background-image: url('https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/11011237_1101905543157624_5488162462663269684_n.jpg?oh=e89788be9a225d5c500ef294c81928db&oe=567FB85B&__gda__=1451009035_c77806bedffbab43ccec2449b5e65e67');
   */position: relative;
   padding-left: 40px;
}
.panel-default{
    background-color: #CCFF99;

}
.col-sm-5{
    padding: 300px;
    position: center;
}
#Kf{
    border-radius: 100px;
    height: 300px;
    background-image: url('https://m.ak.fbcdn.net/sphotos-a.ak/hphotos-ak-xap1/t31.0-8/11227590_1101905543157624_5488162462663269684_o.jpg');
}

.nav{
  background-color: #27ae60;
}
</style>
{!!Html::style('influx/css/bootstrap.min.css')!!} 
{!!Html::style('influx/css/font-awesome.min.css')!!} 
{!!Html::style('influx/css/prettyPhoto.css')!!} 
{!!Html::style('influx/css/main.css')!!} 
{!!Html::style('influx/css/responsive.css')!!} 
</head>
<body>
     <!--<p><img src="{{asset('images/ShakilVi4.jpg')}}"></p>-->
    <header id="header" >
      <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html">khulna Foodies</a></a> </div>
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li>{!! HTML::link('/', 'Home')!!}</li>
              <li ><a href="#">About</a></li>
              <li>{!! HTML::link('/nondon/create', 'Become a Foodies')!!}</li>
              <li ><a href="#">Log In</a></li>
            </ul>
          </div>
        </div>
        <!--/.container--> 
      </nav>
      <!--/nav--> 
      
    </header>
    <div id="Kf" class="form-control" class="img-responsive" >
    <!--<div>   {!! Form::image('images/Khulna foodies.jpg');!!} </div>-->
   
     <div class="container"> 
         <div class="col-sm-5">
            <h1>Add As Foodies</h1>
            {!! Form::open(array('route' => 'nondon.store' ,'class'=> 'form-horizontal')) !!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <!--<label for="concept" class="col-sm-3 control-label">User Name:</label>-->
                        {!!Form::label('userName', 'User Name', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                            <!--<input type="text" class="form-control" id="concept" name="userName">-->
                            {!!Form::text('userName', $value=null , $attributes = array('class'=> 'form-control',
                            'placeholder'=>'User Name' ,'id'=> 'userName','required'));!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <!--<label for="description" class="col-sm-3 control-label">Email:</label>-->
                        {!!Form::label('email', 'User Email', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                           <!-- <input type="email" class="form-control" id="description" name="email" Placeholder="your email">-->
                             {!!Form::email('email', $value=null , $attributes = array('class'=> 'form-control',
                            'placeholder'=>'Your Email' ,'id'=> 'email','required'));!!}
                        </div>
                    </div> 
                    <div class="form-group">
                        <!--<label for="amount" class="col-sm-3 control-label">Password:</label>-->
                         {!!Form::label('password', 'Password', array('class' => 'col-sm-3 control-label'));!!}
                        <div class="col-sm-9">
                            <!--<input type="password" class="form-control" id="amount" name="password">-->
                            {!!Form::password('password', $value=null , $attributes = array('class'=> 'form-control','id' => 'password','required'));!!}
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
     </div>
</body>
</html>