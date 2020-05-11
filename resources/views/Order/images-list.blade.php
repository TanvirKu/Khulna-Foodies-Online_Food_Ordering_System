<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Food Lists</title>

    <!--  <link rel="stylesheet" href="influx/css/animate.css">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="influx/js/myuse.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
   
    <link rel="stylesheet" href="influx/css/bootstrap.min.css">
    <link rel="stylesheet" href="influx/css/bootstrap-theme.min.css">

    <!-- Optional theme -->

    <link rel="stylesheet" href="influx/css/me.css">
    <link rel="stylesheet" href="influx/css/animate.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="influx/js/jquery-2.1.4.min.js"></script>
    <script src="influx/js/bootstrap.min.js"></script>


      <style type="text/css">::selection{background-color:#E13300;color:#fff}::-moz-selection{background-color:#E13300;color:#fff}
      body{background-color:#fff;
         margin-top:0px;
         margin-left: 10px;
         margin-right: 10px;
         font:16px/24px normal Oxygen,Comic Sans MS;
         color:#4F5155;
         box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);}
      a{color:#039;background-color:transparent;font-weight:400}
      #body{margin:0 15px}p.footer{text-align:right;font-size:11px;border-top:1px solid #D0D0D0;line-height:32px;padding:0 10px;margin:20px 0 0}
      #container{
        margin:10px;
        border:1px solid #D0D0D0;
        box-shadow:0 0 8px #D0D0D0;
      }
      #Xavi{
         height: 520px;
      }
      #Ivan{
          height:200px;
      }
      #Iniesta{
         height: 250px;
         width: 300px;
         border-radius:10px;
      }


    .jumbotron{
         margin-left: 28px;
         margin-right: 28px;
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
        animation-name: fadeIn;
        animation-duration:3s;
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
         background-image: url('images/BackGround.jpg');
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
        font-size: 450%;
        color: white;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        padding:1%;
        animation-name: zoomIn;
        animation-duration:5s;
    }
    #Mochu_Mosto{
        margin-top: 20px;
        font-family:Comic Sans MS;
        font-size: 200%;
        color: white;
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
                    <img id="Andres" src="{{ asset('images/Khulna_fodies_logo.jpg') }}" alt="Khulna Foodies"></a>
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
                <li class="navbar-list navbar-right"><a href="#fakelink">About Us</a></li>
               </ul>

               {!!Form::open(['route'=>'image.index','method'=>'GET', 'class'=>'navbar-form navbar-right'])!!}

               {!!Form::text('caption',$value=null,$attributes = array('class'=> 'form-control',
                            'placeholder'=>'Search'))!!}

               {!! Form::submit('Search', array('class' => 'btn btn-info')) !!}

               {!!Form::close()!!}
               <!--
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info"><span class="fui-search"></span>Search</button>
                    </span>
                  </div>
                </div>
              </form>
              -->
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
    </div>

</div>



    </header>


      <div id="container">
         
         <div id="body">
            <section>
               <div class="row">
                  @if(($user_Portion=='Admin') || ($user_Portion=='Client'))
                    @if(count($images) > 0)
                       <div class="col-md-12 text-center" >
                          <a href="{{ url('/image/create') }}" class="btn btn-success" role="button">
                             Add New Food Item
                          </a>
                          <hr />
                          @include('Order.error-notification')
                       </div>
                    @endif
                  @endif
                  @forelse($images as $image)
                     <div class="col-md-3" >
                        <div class="thumbnail" id="Xavi">
                           <img id="Iniesta" src="{{asset($image->file)}}"/>
                           <div class="caption" id="Ivan">
                              <h3>{{$image->caption}}</h3>
                              <h3>{{$image->rate}}</h3>
                              <p><h5>{!! substr($image->description, 0,200) !!}</h5></p>
                           </div>
                            <div>
                              <p>
                                 <div class="row text-center" style="padding-left:1em;">
                                 @if($user_Portion=='Admin')
                                 <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-primary pull-left">Edit</a>
                                 
                                 <span class="pull-left">&nbsp;</span>
                                 <span class="pull-left">&nbsp;</span>
                                 <span class="pull-left">&nbsp;</span>
                                 <span class="pull-left">&nbsp;</span>
                                 <span class="pull-left">&nbsp;</span>
                                 <span class="pull-left">&nbsp;</span>
                                  <span class="pull-left">&nbsp;</span>
                                 {!! Form::open(['url'=>'/image/'.$image->id, 'class'=>'pull-left']) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure Man?\')']) !!}
                                 {!! Form::close() !!}
                                 @endif
                                 <a class="btn btn-small btn-success" href="{{ url('/image/'.$image->id)}}">Show </a>
                                 @if(($user_Portion!='Admin') and ($user_Portion!='Client'))
                                  <a class="btn btn-small btn-success" href="{{ url('/ok/'.$image->id)}}">Order</a>
                                  
                                  <!--
                                  <a class="btn btn-small btn-success" href="{{ url('/putInfo/'.$image->id)}}">Order</a>
                                  -->
                                 @endif
                                 
                                 
                                 </div>
                              </p>
                           </div>
                        </div>
                     </div>

                  @empty
                  @if($user_Portion=='Admin')
                    <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
                  @endif
                  @endforelse
               </div>
               <div align="right">{!! $images->render() !!}</div>
            </section>
         </div>

         <p class="footer">
            <a href="/about">
              Khulna Foodies
            </a>
         </p>
      </div>

   </body>
</html>

