<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>





    <!-- Bootstrap Core CSS-->
    {!!Html::style('Home/css/bootstrap.css')!!}
    {!!Html::style('Home/css/bootstrap.min.css')!!}

            <!-- Custom CSS-->
    {!!Html::style('Home/css/business-casual.css')!!}

            <!-- Fonts  -->
    {!!Html::style('Home/css/fontcss.css')!!}
    {!!Html::style('Home/css/fontcss2.css')!!}


            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->


</head>

<body>


<div class="page-header" id="details-panel">
    <div class="brand"><i class="glyphicon glyphicon-cutlery"></i> Khulna Foodies</div>
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-faded" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="/about">Khulna Foodies</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="/about"><strong>Home</strong></a>
                    </li>

                    <li>
                        <a href="/about"><strong>About</strong></a>
                    </li>

                    <li>
                        <a href="/restaurant"><strong>Restautants</strong></a>
                    </li>

                    <li>
                        <a href="/image"><strong>Food List</strong></a>
                    </li>

                    <li>
                        <a href="/contacts"><strong>Contact</strong></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



</div>




<div class="container" id="details-panel" style="border: 2px solid whitesmoke;margin-bottom: 20px;padding:20px 20px 0px 20px;">


    <div id="body">
        @yield('body')
    </div>

</div>

<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4>
                    <p>Copyright &copy;
                        <a href="/about">
                            Khulna Foodies
                        </a>
                    </p>
                </h4>
            </div>
        </div>

    </div>
</footer>





<!-- jQuery -->
{!!Html::script('Home/js/jquery.js')!!}

{!!Html::script('Home/js/khulnaFoodies.js')!!}

        <!-- Bootstrap Core JavaScript -->
{!!Html::script('Home/js/bootstrap.min.js')!!}


        <!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
