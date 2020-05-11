@extends('Order.global-layout')
@section('body')

    <div class="container" style="min-width:300px;width:25%; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">
        <div class="innnercont">

            <form  name="submit_form" action="login" method="post" action="/auth/login">
                 {!! csrf_field() !!}

                <h2 style="text-align: center"><i class="glyphicon glyphicon-log-in"></i><font color="Green"><strong>&nbsp Log in</strong></font></h2>
                <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                <div  class="form-group">
                <input type="email" id="username" class="form-control"  name="email" placeholder="Email" >
                </div>
                <br>
                <div class="form-group">
                <input type="password" id="password"  name="password" class="form-control" placeholder="Password" >
                </div>
                  <label >
                    <input class="form-group" type="checkbox" value="remember-me"> Remember me
                  </label>

                <div style="text-align:center">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                    <div>
                        <a href="/password/email">Forgot Your Password? </a>
                    </div>

                </div>
            </form>
        </div>
    </div>


@stop


