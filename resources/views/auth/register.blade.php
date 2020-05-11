@extends('Order.global-layout')
@section('body')


    <div class="container" style="min-width:300px;width:70%; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal payment-form">

                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Name:</label>
                                <div class="col-sm-9">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="concept">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Email:</label>
                                <div class="col-sm-9">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="amount" class="col-sm-3 control-label">Password:</label>
                                <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" class="form-control" id="amount" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="amount" class="col-sm-3 control-label">Confirm Password:</label>
                                <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control" id="amount">
                                </div>
                            </div>

                            <div class="form-group" >
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6" id="regbtn">
                                <button type="submit" class="btn btn-lg btn-info btn-block btn-signin">Register</button >
                                </div>
                            </div>

                    </div>
                </div>
            </form>
    </div>

@stop


