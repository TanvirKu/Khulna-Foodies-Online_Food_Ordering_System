 @extends('Header_Footer.index')

@section('title','Home')
@endsection


@section('dicision-body')
     @if(Session::has('flash_message_LogedInAsAdmin'))
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsAdmin')}}</strong><b class="caret"></b></a>
         <span class="dropdown-arrow"></span>
         <ul class="dropdown-menu">
             <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
             <li><a href="/table"><strong>Admin Panel</strong></a></li>
         </ul>
     @endif

     @if(Session::has('flash_message_LogedInAsClient'))

         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsClient')}}</strong><b class="caret"></b></a>
         <span class="dropdown-arrow"></span>
         <ul class="dropdown-menu">

             @if(Session::has('flash_message_HaveRestaurant'))
                 @foreach($restaurant as $resId)
                     <li><a href="{{ url('/restaurant/'.$resId->id.'/edit') }}"><strong>Restaurant View Or Edit</strong></a></li>
                 @endforeach
             @endif

             @if(Session::has('flash_message_Have_No_Restaurant'))
                 <li><a href="restaurant/create"><strong>Add Restaurant Details</strong></a></li>
             @endif

             <li><a href="/auth/logout"><strong>Log Out</strong></a></li>

         </ul>


     @endif

     @if(Session::has('flash_message_LogedInAsUser'))
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{Session::get('flash_message_LogedInAsUser')}}</strong><b class="caret"></b></a>
         <span class="dropdown-arrow"></span>
         <ul class="dropdown-menu">
             <li><a href="/auth/logout"><strong>Log Out</strong></a></li>
         </ul>
     @endif


     @if(Session::has('flash_message_NotLogedIn'))
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="glyphicon glyphicon-triangle-bottom"></i>{{Session::get('flash_message_NotLogedIn')}}</strong></a>
         <span class="dropdown-arrow"></span>
         <ul class="dropdown-menu">
             <li><a href="loginKoro"><strong>Log In</strong></a></li>
             <li><a href="regKoro"><strong>Register</strong></a></li>
         </ul>
     @endif

@endsection




 @section('body')



    <div class="row">

        <div class="box">

            @if(Session::has('flash_message_LogIn'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h3 style="color:black">{{Session::get('flash_message_LogIn')}}</h3>
                </div>
            @endif

            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="border: 3px solid whitesmoke">
                        <div class="item active">
                            <img class="img-responsive img-full" src="Home/img/GoodFood.jpeg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="Home/img/Items.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="Home/img/Indian-Food.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small style="color: whitesmoke;">Welcome to</small>
                </h2>
                <h1 class="brand-name" style="color: yellow">Khulna Foodies</h1>
                <hr class="tagline-divider">

                <h3 style="color:yellow;">
                    <strong>Eat!! Rate!! Shoot!!</strong>
                </h3>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="box">

            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                </div>
            </div>


            <div class="row">

                <div class="col-lg-12">

                    <div class="col-lg-3">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood--knife-fork4.png" alt="">
                    </div>

                    <div class="col-lg-6">

                        <hr>
                        <h2 class="intro-text text-center" style="color: yellow"><b>Description</b> Of
                            <strong>Khulna Foodies</strong>
                        </h2>
                        <hr>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <hr class="visible-xs">

                                    <p>Our's is a website that provides numerous information about foods in khulna.
                                        Here advertisement of foods are also available. We have divided the city into different zones.
                                        And food items can be searched zone wise.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <img class="img-responsive img-border img-center"  style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>
                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                    <div class="col-lg-1">
                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork.png" alt="">
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                <div class="panel-group">

                    <div class="panel panel-default" >

                        <div class="panel-heading" id="details-panel-zone" style="border: 1px solid white">
                            <h1 style="text-align: center;color: yellow ;">Food Zone</h1>
                        </div>


                            <div class="panel-body" id="details-panel-zone">
                                @foreach($zones as $zone)

                                    <div class="col-lg-4"  id="total-description">
                                        <br>
                                        <a href="{{ url('/zonal-restaurants/'.$zone->zone)}}" class="btn btn-block btn-default" id="details-panel-zone" style="border: 2px outset white"> <h3>{{$zone->zone}}  </h3></a>
                                    </div>

                                @endforeach

                            </div>



                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="col-lg-8">

                    <div class="panel panel-default" >

                        <div class="panel-heading"  id="details-panel-zone" style="border: 1px solid white">
                            <h1 style="text-align: center;color: yellow">Special Items</h1>
                        </div>


                        <div class="panel-body" id="details-panel-zone">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="col-lg-5"  id="special-item">
                                        <a href="/image/39"><h3> Chicken BBQ</h3><img class="img-responsive img-border img-center" title="" src="Foods/Chicken BBQ.jpg"></a>
                                    </div>

                                    <div class="col-lg-2">
                                        <br>
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                    </div>

                                    <div class="col-lg-5"  id="special-item">
                                        <a href="/image/68"><h3> Chicken Patisapta</h3><img class="img-responsive img-border img-center" title="" src="Foods/PatiSapta.jpg"></a>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-5"  id="special-item">
                                        <a href="/image/60"><h3> Jelly Cake </h3><img class="img-responsive img-border img-center"  src="Foods/Jelly_Cake .jpg"></a>
                                    </div>

                                    <div class="col-lg-2">
                                        <br>
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                        <img class="img-responsive img-border img-center" style="border:none" src="Home/img/Necessary/Food-Wood-knife-fork2.png" alt="">
                                    </div>

                                    <div class="col-lg-5"  id="special-item">
                                        <a href="/image/72"><h3> Burger </h3><img class="img-responsive img-border img-center" title="" src="Foods/burgar.gif"></a>
                                    </div>
                                </div>
                            </div>

                            <br>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="panel panel-default" >

                        <div class="panel-heading" id="details-panel-zone" style="border: 1px solid white">
                            <h1 style="text-align: center;color: yellow">Special Offers</h1>
                        </div>

                        <div class="panel-body" id="details-panel-zone">
                            <div class="caption">
                                <marquee behavior="scroll" direction="up" scrollamount="2">
                                    <p style="color: white">

                                        <i class="glyphicon glyphicon-star"></i> Four<a href="/image/72">Burgers </a>
                                        With Cold-Drinks Just 120 Tk At Hotel Royal International.

                                        <br>
                                        <br>

                                        <i class="glyphicon glyphicon-star"></i> Food Network Added Very New Item <a href="/image/44"> Beef Sizzling </a>.

                                        <br>
                                        <br>

                                        <i class="glyphicon glyphicon-star"></i> Keifeng Restaurant Attach New Packege <a href="/image/68"> Chicken Patisapta</a> .

                                        <br>
                                        <br>

                                        <i class="glyphicon glyphicon-star"></i> Four<a href="/image/72">Burgers </a>
                                        With Cold-Drinks Just 120 Tk At Hotel Royal International.

                                        <br>
                                        <br>

                                        <i class="glyphicon glyphicon-star"></i> Food Network Added Very New Item <a href="/image/44"> Beef Sizzling </a>.

                                        <br>
                                        <br>

                                        <i class="glyphicon glyphicon-star"></i> Keifeng Restaurant Attach New Packege <a href="/image/68"> Chicken Patisapta</a> .

                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                    </p>
                                 </marquee>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
