@extends('influx.layout')
@section('title','Khulna Foodies')


@section('content')
<!--
  <section>
    <div class="color-border"> </div>
 <div class="demo-area">
            <div class="container">
                <div class="carousel slide" data-ride="carousel" id="carousel-example">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{!! asset('images/ShakilVi4.jpg') !!}" alt="slide">
                            <div class="carousel-caption">
                                <h3>This is Shakil Vai 4</h3>
                            </div>

                        </div>
                        <div class="item">
                            <img src="{!! asset('images/ShakilVi6.jpg') !!}"alt="slide">
                            <div class="carousel-caption">
                                <h3>This is Shakil Vai 6</h3>
                            </div>

                        </div>
                        <div class="item">
                            <img src="{!! asset('images/Main.jpg') !!}" alt="slide">
                            <div class="carousel-caption">
                                <h3>This is Main</h3>
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
        </div>
  </section>
  -->
<section id="inner-page">
  <div class="container">
    <div class="center">
      <p class="lead">
        <img class="img-responsive" src="influx/images/KhulnaFoodies/templatemo_header_photo.jpg" alt="Main Pic" border="1" >
       <!-- {!!Html::image('influx/images/KhulnaFoodies/Khulna foodies.jpg','alt_text', array('class'=>'img-responsive'))!!}-->
      </p>
    </div>
    <div class="about-us">
      <div class="row">
        <div class="col-md-4 col-sm-6"><img src="influx/images/FoodNetwork.png" class="img-responsive" alt=""/> </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <h3>Our Purpose</h3>
          <p>Hrere Khulna foodies , Help you to find Quality Restaurant foods in Khulna City</p>
          <p>It's Our Duty to satisfy you</p>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <h3>WE</h3>
          <p><strong>120212</strong><br>
            <h2>Tanvir Hossain</h2></p>
          <p><strong>120220</strong><br>
            <h2>Mahdi Hussain</h2></p>
          <p><strong>120235</strong><br>
           <h2>Antor Mustafiz</h2></p>
        </div>
        <!--/.col-md-4--> 
      </div>
      <!--/.row--> 
    </div>
  </div>
  <!--/.container--> 
</section>
<!--/inner-page-->


<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Top Items</h3>
        <br>
        <div class="media"> <img class="img-responsive" src="influx/images/PopularKhabarIcon/biriyani-icon.png" alt="Pic">
          <div class="media-body">
            <h3 class="media-heading">120+ Clients Per Hour At Kaifeng</h3>
          </div>
        </div>
        <br>
        <div class="media"><img class="img-responsive" src="influx/images/PopularKhabarIcon/pizza-icon.png" alt="Pic">
          <div class="media-body">
            <h3 class="media-heading"> 600+ Clients Per Day At Royal</h3>
          </div>
        </div>
        <!--
        <br>
        <div class="media"> <i class="fa fa-trophy pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 25 Awards Won </h3>
            Pellentesque hendrerit arcu luctus facilisis erat consectetur.</div>
        </div>
      -->
      </div>
      <div class="col-sm-6">
        <div class="accordion">
          <h3>Questions-Answers-Reviews</h3>
          <br>
          <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
              <div class="panel-heading active">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> Where the Best Foods and Restaurents? <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseOne1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="media-body">Here your queries about all kinds of foods and restaurants</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"> Your Queries about Place <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body"></div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1"> Your Queries about Restaurants <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body"></div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">Your Queiries about Foods <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body"></div>
              </div>
            </div>
          </div>
          <!--/#accordion1--> 
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#middle-->

<section id="NewmilkShake" class="service-item">
  <div class="container">
    <div class="center">
      <h2>Very Special Items</h2>
      <p class="lead"><img src="influx/images/KhulnaFoodies/templatemo_body_bg.jpg" class="img-responsive"></p>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row testimonials">
          <div class="col-sm-4">
            <blockquote>
              <p class="clients-words"><h2>Mexican Pasta</h2></p>
              <span class="clients-name"><h4>-New Ajmeri Restaurant</h4></span>
              <!--{!!Html::image('influx/images/testimonials/man1.jpg','alt_text', array('class'=>'img-circle img-thumbnail'))!!}-->
               <img class="img-responsive" src="influx/images/PopularKhabarIcon/Mexican-icon.png">
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p class="clients-words"><h2>Masroom Soup</h2></p>
              <span class="clients-name"><h4>-Kaifeng Restauresnt</h4></span>
               <img class="img-responsive" src="influx/images/PopularKhabarIcon/korean-icon.png"> </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p  class="clients-words"><h2>Special Icecream</h2></p>
              <span class="clients-name"><h4>-Western Inn</h4></span>
               <img class="img-responsive" src="influx/images/PopularKhabarIcon/ice-cream-icon.png"> </blockquote>
          </div>
        </div>
        <!--/.row--> 
      </div>
      <!--/.col--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#testimonials-->
<!--
<section id="get-started">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Want to discuss a project?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.<br>
          Aliquam euismod nunc id eros sollicitudin interdum.</p>
        <a href="contact-us.html" class="btn btn-primary">Contact us</a> </div>
    </div>
  </div> 
</section>
-->
 <!--/.container--> 
<!--/#get-started-->
@endsection

 