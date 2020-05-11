
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Jungle Escapde</title>
<style>
	body{
    vertical-align: center;
		max-width: 980px; text-align: center; 
    padding: 0px 10px 10px 100px;
		}
   li{
    display: inline-block ;
    width: 100px;
    height: 40px;
    position: relative;
    padding: 5px;
    margin: 0px;
    background-color: #CCFF99;
    font-family:serif;
    border:1px solid #bbb;
    border-radius: 5px;
   }
   a{
      text-decoration: none;
   }
   button{
      width: 100px;
      height: 40px;
      font-size: 100%;
   }
   
#UpHead{
	  text-align: center;
	  font-family: serif;
    background-color: #CCCC66;
  
	  }

#bigFont {
	background-position:center;
	font-family: serif;
  font-style: italic;
	}
#UnderHead{
  margin-top: 20px;
}
#UnderHead ul{
  position: relative;
  padding: 0;

}

</style>
</head>

<body>
	<table width="980" border="1">
  <tbody>
    <tr>
    <td width="980" height="100">
      <div id="UpHead"><h1 id="bigFont">jungle ESCapade</h1> </div>
      <p><img src="{{ asset('images/ShakilVi4.jpg') }}" width="980" height="330" alt="Image here"/></p>
      <div id="LowHead">
        <nav id="UnderHead">
        <ul>
          <li><a href="myWeb.html"><button type="button">Home</button></a></li>
          <li><a href="#"><button type="button">About</button></a></li>
          <li><a href="#"><button type="button">Batches</button></a></li>
          <li><a href="#"><button type="button">Teachers</button></a></li>
        </ul>
        </nav>
     </div>
    </td>
    </tr>
    <tr>
      <td height="180">
  <!--
   @extends('layouts.master')

   @section('title','My Profile')


   @section('content')
        <div>
          <h1> 
             {{$myName}} <br/> 
             {{$Id}}<br/>
             {{$Phone}}<br/>

             
             
             @if($HomeTown)
                {{$HomeTown}}
             @endif

             @if($HomeTown=="Bogra")
                {{$HomeTown}}
             @else
                {{"Not Khulna"}}
             @endif

                {{$HomeTown2 or "Bagerhat"}}

            @for($i=0 ; $i< 10 ; $i++)
                {{$i}} 
            @endfor   
        </h1>
      </div>
   @endsection

   @section('footer')
      <h1>Footer</h1>
   @endsection

       -->
        
      </td> 
    </tr>
  </tbody>
</table>

</body>
</html>

