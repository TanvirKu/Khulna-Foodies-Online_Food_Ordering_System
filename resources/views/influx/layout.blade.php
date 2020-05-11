<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<meta name="description" content="">

<!-- core CSS -->
{!!Html::style('influx/css/bootstrap.min.css')!!} 
{!!Html::style('influx/css/font-awesome.min.css')!!} 
{!!Html::style('influx/css/prettyPhoto.css')!!} 
{!!Html::style('influx/css/main.css')!!} 
{!!Html::style('influx/css/responsive.css')!!} 

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<!--/head-->

<body>
<header id="header">
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">khulna Foodies</a></a> </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li>{!! HTML::link('/kfs', 'Home')!!}</li>
          <li class="active"><a href="#">About</a></li>
          <li>{!! HTML::link('/nondon/create', 'Become A Foodie')!!}</li>  
            <li ><a href="/auth/login">Log In</a></li>
        </ul>
      </div>
    </div>
    <!--/.container--> 
  </nav>
  <!--/nav--> 
  
</header>
<!--/header-->
<!--<div class="color-border"> </div>-->
@yield('content')

<!--<div class="color-border"> </div>-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright &copy;KF Web Developer Team 2015</div>
      <div class="col-sm-6">
        
      </div>
    </div>
  </div>
</footer>
<!--/#footer--> 

{!!Html::script('influx/js/jquery.js')!!} 
{!!Html::script('influx/js/bootstrap.min.js')!!} 
{!!Html::script('influx/js/jquery.prettyPhoto.js')!!} 
{!!Html::script('influx/js/jquery.isotope.min.js')!!} 
{!!Html::script('influx/js/main.js')!!}
</html>    