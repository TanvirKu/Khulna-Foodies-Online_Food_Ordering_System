<!DOCTYPE html>
<html>
<head>
    <title>Khulna Foodies</title>
    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="influx/css/me.css">
    <link rel="stylesheet" href="influx/css/animate.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="influx/js/myuse.js"></script>

    <style type="text/css">
    body{
        font-family:Comic Sans MS;
        background:#DDDDDD;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .jumbotron{
         margin-left: 90px;
         margin-right: 90px;
         text-align: center;
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    #Messi{
        background-color: #FFFFFF;
        margin-top: 0px;
        padding-left: 0%;
        border-radius: 0;
        margin-bottom: 5px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        
    }
    #Aguero{
         background:#A5D6D3;

    }

    #tevez:hover{
        font-family: "Comic Sans MS",cursive;
        background: #B4B5B7;
        padding: 10px;
    }

    #matteo{
        background-color: #A5D6D3;
    }

    #Thiago{
       background: #B4B5B7;
    }
    #accordion{
        margin-top: 20px;
    }
    #Buffo{
        margin-top: 0px;
        background-color: #FCBC40;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        
        
    }
    #Andres{
        margin-top: 10px;
        margin-bottom: 10px;
        height: 120px;
        width: 180px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        
    }
   
    #Don{
        height: 300px;
    }
    #Mochu{
        
        min-height: 50px;
        font-family:Comic Sans MS;
        font-size: 550%;
        color: white;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        padding:1%;
        animation-name: zoomIn;
        animation-duration:1s;
    }
    #Mochu_Mosto{
        margin-top: 20px;
        font-family:Comic Sans MS;
        font-size: 200%;
        color: #F9FC8D;
        padding:1%;
       
    }
    #Pirlo{

        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    </style>
</head>
<body>

<header>
<div class="page-header" id="Buffo">
    <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"> <a href="/about" class="branding">
                    <img id="Andres" src="images/Khulna_fodies_logo.jpg" alt="Khulna Foodies"></a>
                </div>
                <div class="col-lg-6 col-md-2 col-sm-2 hidden-xs">
                    <h1 id="Mochu">Khulna Foodies</h1> 
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 hidden-xs">
                    <h4 id="Mochu_Mosto"><i class="glyphicon glyphicon-cutlery"></i> Visit Khulna Foodies
                    </br>
                        <small>Search Your Favourite Foods
                        </br>
                       <strong>Contact NO: 01821493349</strong> 
                        </small>
                    </h4>
                </div>

            </div>

            <div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-default navbar-embossed" role="navigation" id="Pirlo">
            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">Khulna Foodies</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="/about"><span class="navbar-unread">Home</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="/image">Food List</a></li>
                
               </ul>
               <form class="navbar-form navbar-right">
                <div class="form-group">
                
                @if($loginStatus == 1)
                <div class="navbar-form navbar-right"><a href="/auth/login" class="btn btn-success">Log In</a></div>
                @endif
                @if($logoutStatus == 1)
                <div class="navbar-form navbar-right"><a href="/auth/logout" class="btn btn-success">Log Out</a></div>
                @endif
                @if($See_Admin_panel == 1)
                <div class="navbar-form navbar-right"><a href="/table" class="btn btn-success">Admin Panel</a></div>
                @endif
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
    </div>
  
</div>



    </header>

    <!--Image Slider Start -->
        <div class="demo-area">
            <div class="container" id="Messi">
                <div class="row">
                <div class="col-md-9 col-sm-12">
                <div class="carousel slide" data-ride="carousel" id="carousel-example" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img id="Don" src="{!! asset('images/Chicken_BBQ.jpg') !!}" alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Chicken BBQ</a></h1>
                            </div>

                        </div>
                        <div class="item">
                            <img id="Don" src="{!! asset('images/Chicken_Bell.jpg') !!}"alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Chicken Bell</a></h1>
                            </div>

                        </div>
                        <div class="item">
                            <img id="Don" src="{!! asset('images/Pizza_2.jpg') !!}" alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Pizza</a></h1>
                            </div>

                        </div>
                    </div>

                    <a href="#carousel-example" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel-example" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12" id="Leva">
                 <img id="Don" src="{!! asset('images/Khulna_fodies_logo.jpg') !!}" alt="slide" class="img-responsive">
                
            </div>

            </div>
            </div>
        </div>

    <!--Image Slider End -->

    <div class="jumbotron" style="color:black">
        <h3>Hi! Welcome in Khulna Foodies :)</h3>
                <p><h4>Our's is a website that provides numerous information about foods in khulna.<br>Here advertisement of foods are also available. We have divided the city into different zones. And food items can be searched zone wise </h4></p>
     </div>


    <!--Collapse Start -->
        <div class="demo-area">
            <div class="container">
                <div class="panel-group" id="accordion" >

                    <div class="panel panel-default" >


                        <div class="panel-heading" id="Aguero">

                            <h3 class="panel-title">
                                <a href="#content-1" data-toggle="collapse" data-parent="#accordion"> <button class="btn btn-default  btn-lg btn-block" id="tevez">Food Zone</button></a>
                            </h3>
                        </div>
                        <div class="panel-collapse collapse" id="content-1">
                            <div class="panel-body" id="matteo">
                                <section>
                                    <!-- Start-->
                                    <div id="wrapper">
                                        <div id="navMenu">
                                            <ul>
                                                <li><a href="/kfs">Moylapota</a></li>
                                                <li><a href="#">New Market</a></li>
                                                <li><a href="#">Royal Mor</a></li>
                                                <li><a href="#">Khalispur</a></li>
                                                <li><a href="#">Daulatpur</a></li>
                                                <li><a href="#">DakBangla</a></li>
                                            </ul>

                                            <br class="clearFloat" />
                                        </div>
                                    </div>
                                    <!-- End-->
                                </section>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    <!--Collapse End -->
    <!--Sonogker Start-->
     <section >
       <div class="container" >
            <div class="about-us">
     <div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">   
            <div class="panel-heading" id="Thiago">
                <h3 class="panel-title">
                    <a href="#con-1" data-toggle="collapse"> <button class="btn btn-default btn-lg btn-block" id="tevez">Top Menus</button></a>
                </h3>
            </div>
            <div class="panel-collapse collapse" id="con-1">
            <div class="panel-body">
                <div class="carousel slide" data-ride="carousel" id="carousel-example-1" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{!! asset('images/Chicken_BBQ.jpg') !!}" alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Chicken BBQ</a></h1>
                            </div>

                        </div>
                        <div class="item">
                            <img src="{!! asset('images/Chicken_Bell.jpg') !!}"alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Chicken Bell</a></h1>
                            </div>

                        </div>
                        <div class="item">
                            <img src="{!! asset('images/Pizza_2.jpg') !!}" alt="slide" class="img-responsive">
                            <div class="carousel-caption">
                                <h1><a href="#" style="color: #F2F2E6">This is Pizza</a></h1>
                            </div>

                        </div>
                    </div>

                    <a href="#carousel-example-1" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel-example-1" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">   
            <div class="panel-heading" id="Thiago">
                <h3 class="panel-title" >
                    <a href="#con-2" data-toggle="collapse"> <button class="btn btn-default  btn-lg btn-block" id="tevez">Today's Items</button></a>
                </h3>
            </div>
            <div class="panel-collapse collapse" id="con-2">
            <div class="panel-body">
            </div>
           
            </div>
        </div>
    </div>
    <div class="col-lg-4">
         <div class="panel panel-default">   
            <div class="panel-heading" id="Thiago">
                <h3 class="panel-title" >
                    <a href="#con-3" data-toggle="collapse"> <button class="btn btn-default  btn-lg btn-block" id="tevez" >Specials</button></a>
                </h3>
            </div>
            <div class="panel-collapse collapse" id="con-3">
                <div class="panel-body"> 
                    <section>
                    <!-- Start-->
                        <div id="wrapper">
                            <div id="navMenu">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="/kfs">Moylapota</a></li>
                                    <li class="list-group-item"><a href="#">New Market</a></li>
                                    <li class="list-group-item"><a href="#">Royal Mor</a></li>
                                    <li class="list-group-item"><a href="#">Khalispur</a></li>
                                    <li class="list-group-item"><a href="#">Daulatpur</a></li>
                                    <li class="list-group-item"><a href="#">DakBangla</a></li>
                                </ul>

                            <br class="clearFloat" />
                            </div>
                        </div>
                                        <!-- End-->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
      <!--/.row--> 
    </div>
       </div>
     </section>
     <!--Sonogker End-->
   
    <footer>
        
    </footer>
  
</body>
</html>