
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
.container {
    
    margin-top: 14%;
    margin-left: 40%;
    /*border: 2px solid #808080;*/
    border-radius: 10px;
    margin-bottom: 15px;
    padding-top: 5px;
    padding-bottom: 35px;
    background-color:#F7F7F7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   
   
  
    }
    .innnercont {
    
    
    padding-right: 7%;
    padding-left: 7%;
   
  
    }
    .form-control{
        margin-left: 12%;

    }
    .btn-success{
        margin-top: 2px;

    }
    </style>
</head>
<body>
      
    <div class="container" style="min-width:300px;width:25%">
        <div class="innnercont">
        
            <form  name="submit_form" action="login" method="post" action="/auth/login">
                 {!! csrf_field() !!}

                <h2  style="text-align: center">Log in</h2>
                <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                <input type="text" id="username" class="form-control"  name="email" placeholder="Email" >
                <br>
                
                <input type="password" id="password"  name="password" class="form-control" placeholder="Password" >
                <div class="checkbox">
                  <label>
                    <input class="form-control" type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <div style="text-align:center"> 
                    <button class="btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div> 


</body>
</html>



