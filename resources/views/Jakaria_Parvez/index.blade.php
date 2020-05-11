<html>
<head>
	<title>User Sign In</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<style type="text/css">
.row{
	background-color: #FFFFCC;
}
#Mahdi{
	background-color: #2c3e50;
}
#antor{
	background-color: #2c3e50;
	padding-top: 10px;
	padding-bottom:0px;
}

#footer{
	
	background-color: #2c3e50;

	padding-bottom:0px;
	background-position: fixed;
}

#leo{
	min-height: 380px;
}
</style>
{!!Html::style('influx/css/bootstrap.min.css')!!} 
{!!Html::style('influx/css/font-awesome.min.css')!!} 
{!!Html::style('influx/css/prettyPhoto.css')!!} 
{!!Html::style('influx/css/main.css')!!} 
{!!Html::style('influx/css/responsive.css')!!} 
</head>
<body>
	 <header id="header" >
      <nav class="navbar navbar-inverse" role="banner">
        <div class="container" id="Mahdi">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html">khulna Foodies</a></a> </div>
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li>{!! Html::link('/', 'Home')!!}</li>
              <li ><a href="#">About</a></li>
              <li>{!! Html::link('/nondon/create', 'Become a Foodies')!!}</li>
              <li ><a href="#">Log In</a></li>
            </ul>
          </div>
        </div>
        <!--/.container--> 
      </nav>
      <!--/nav--> 
      
    </header>
	<div class="container" id="leo">
	 	<div class="row">
	 		<div class="table-responsive">
	 			<table class="table table-bordered">
					<thead class="cf">
						<tr>
							<th>User Id</th>
							<th>User Name</th>
							<th>User Email</th>
							<th>Password</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					  </thead>
					  <tbody>
						@foreach($alldata as $data)
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->userName}}</td>
							<td>{{$data->email}}</td>
							<td>{{$data->password}}</td>
							<td><a href="{{route('/leo',$data->id)}}"><button class="btn btn-primary">Edit</button></a></td>
							<td>
								{!! Form::open(array('route' => ['nondon.destroy',$data->id],
								'method'=>'delete')) !!}

								{!! Form::hidden('id',$data->id)!!}
								{!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
								{!! Form::Close()!!}
							</td>
						</tr>
						@endforeach
						</tbody>
		  		</table>
		  		{!!$alldata->render();!!}
			</div>

		</div>	
			
	</div>
	<footer id="footer" >
	<div class="container" id="antor">
    	
      <div>Copyright &copy;KF Web Developer Team 2015</div>
      
    	
 	 </div>
	</footer>
</body>
</html>