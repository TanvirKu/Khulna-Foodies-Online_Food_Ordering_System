<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
        #header{
            background-color: #C7D6D3;
        }

        .navbar-header{
            font-family: sans-serif;

        }

        #leo{
           
            min-height: 400px;
            max-width: 1050px;
            background-color: white;

        }

        #md{
          
            border-radius: 5px;
        }
        .table{
            background-color: #F0F8FF;
        }
        .col-lg-10{
            margin-left: 10px;
        }
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<header id="header" >
    <nav class="nav nav-tabs" role="banner">
        <div class="container" id="Mahdi">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/kfs"><i class="glyphicon glyphicon-cutlery"></i>&nbsp khulna Foodies</a> </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li>{!! Html::link('/', 'Home')!!}</li>
                    <li class="active"><a href="#">About</a></li>
                    <li>{!! Html::link('/nondon/create', 'Become a Foodies')!!}</li>
                    <li class="dropdown" role="presentation" >
                        <a href="#Zone" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zone <span class="caret"></span></a>
                        <ul class="dropdown-menu"  role="menu">
                            <li role="presentation"><a href="http://localhost:54367/Html_Work/MahdiVai.html" role="menuitem">Moylapota</a></li>
                            <li role="presentation"><a href="http://localhost:54367/Html_Work/MahdiVai.html" role="menuitem">SevenRoad</a></li>
                            <li role="presentation"><a href="http://localhost:54367/Html_Work/MahdiVai.html" role="menuitem">KhalisPur</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="/auth/login">Log In</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>



<div class="col-lg-8 col-lg-offset-1">
    <h1><i class="glyphicon glyphicon-user"></i> User Administration </h1>
    <ul class="nav nav-tabs">
        <li  class="active"><a  href="/table" data-toggole="tab">Manage Admin</a></li>
        <li ><a  href="/about" data-toggole="tab"  >Khulna Foodies</a></li>
        <li ><a  href="/orderMake" data-toggole="tab">Orders</a></li>

    </ul>
    <div class="tab-content"> 
        <div class="tab-pane fade in active" id="sec-1"></div>
        <div class="tab-pane fade" id="sec-2"></div>
        <div class="tab-pane fade" id="sec-3"></div>
    </div>

    <div class="container" id="leo">

        <div class="row">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="cf">
                    <tr>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Date/Time Added</th>
                        <th>User Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alldata as $data)
                        <tr>

                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->created_at->format('F d, Y h:ia')}}</td>
                            <td>{{$data->user_type}}</td>
                            <td><a href="{{route('table.edit',$data->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                            <td>
                                {!! Form::open(array('route' => ['table.destroy',$data->id],
                                'method'=>'delete')) !!}

                                {!! Form::hidden('id',$data->id)!!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                {!! Form::Close()!!}
                            </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!!$alldata->render();!!}
            </div>
        </div>
    </div>
</div>
</body>

</html>
