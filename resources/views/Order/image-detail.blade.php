<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Food Details</title>
      <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <!--  <link rel="stylesheet" href="influx/css/animate.css">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="influx/js/myuse.js"></script>
   -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="influx/css/me.css">
    <link rel="stylesheet" href="influx/css/animate.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

      <style type="text/css">::selection{background-color:#E13300;color:#fff}::-moz-selection{background-color:#E13300;color:#fff}
      body{
        background-color:#fff;
         margin-top:0px;
         margin-left: 10px;
         margin-right: 10px;
         font:16px/24px normal Oxygen,Comic Sans MS;
         color:#4F5155; 
         box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);

       }
      a{color:#039;background-color:transparent;font-weight:400}
      #body{
        margin:0 15px}p.footer{text-align:right;font-size:11px;
        border-top:1px solid #D0D0D0;
        padding-left: 380px;
        padding:0 10px;
        margin:20px 0 0;
        
      }
      #container{
        margin:10px;
        border:1px solid #D0D0D0;
        box-shadow:0 0 8px #D0D0D0;
        padding-left: 0px;
        border-radius: 0px;
        
      }
      #Bc{
          background-image: url("/images/BackGround.jpg");
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
   

    #Mochu{
        
        min-height: 50px;
        font-family:Comic Sans MS;
        font-size: 450%;
        color: white;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        padding:1%;
        animation-name: zoomIn;
        animation-duration:2s;
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
    
</div>



    </header>


          <div id="container">
             
                   <div id="body">
                      <section id="Bc">  
                         <form class="form-horizontal" method="get">
                         <div class="row">
                          <div  class="col-sm-3">

                          </div>
                          <div class="col-sm-6">
                           <img  src="{{ asset($image->file) }}" height="400" width="600"/>
                           <div  class="col-sm-12">
                             <label class="col-sm-6 control-label"><strong>Caption</strong></label>
                             <div class="col-sm-6">
                               <p class="form-control-static"><strong>{{ $image->caption }}</strong></p>
                             </div>
                           </div>

                            <div  class="col-sm-12">
                             <label class="col-sm-6 control-label"><strong>Rate</strong></label>
                             <div class="col-sm-6">
                               <p class="form-control-static"><strong>{{ $image->rate }}</strong></p>
                             </div>
                           </div>

                           <div  class="col-sm-12">
                             <label class="col-sm-6 control-label"><strong>Description</strong></label>
                             <div class="col-sm-6">
                               <p class="form-control-static"><strong>{{ $image->description }}</strong></p>
                             </div>
                           </div>

                            <!--<a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-primary">Edit</a>-->
                            <div  class="col-sm-12">
                              <div  class="col-sm-3"></div>
                                <div  class="col-sm-6">
                                <a  href="{{ url('/image') }}" class="btn btn-block btn-warning">Back</a>
                                </div>
                              <div  class="col-sm-3"></div>
                            </div>
                          </div>
                            <div  class="col-sm-3">

                           </div>
                         </div>   
                         </form>
                         
                         
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

