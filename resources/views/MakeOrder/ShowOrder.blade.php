@extends('Header_Footer.otherIndex')
@section('title','Order List')
@endsection
@section('body')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <h1 style="text-align: center"><i class="glyphicon glyphicon-king"></i> Admin Panel</h1>
        <hr style="border: 3px solid whitesmoke">
        <div class="col-md-12">

            <ul class="nav nav-tabs" id="admin-page-tab">
                <h3>
                    <li ><a  href="/table" data-toggole="tab"><i class="glyphicon glyphicon-record"></i> Manage User</a></li>
                    <li ><a  href="/messages" data-toggole="tab" ><i class="glyphicon glyphicon-record"></i> Messages</a></li>
                </h3>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="sec-1"></div>
                <div class="tab-pane fade" id="sec-2"></div>
                <div class="tab-pane fade" id="sec-3"></div>
            </div>

            <div class="table-responsive" >
                <table class="table table-bordered" >
                    <caption style="text-align:center;color:white;border: 1px solid whitesmoke"><h1><i class="glyphicon glyphicon-th-list"></i>&nbsp;Order List</h1></caption>
                    <thead class="cf" style="text-align:left">
                    <tr>
                        <th style="text-align:left">Order No</th>
                        <th style="text-align:left">Name</th>
                        <th style="text-align:left">Email</th>
                        <th style="text-align:left">Rate</th>
                        <th style="text-align:left">Quantity</th>
                        <th style="text-align:left">Total</th>
                        <th style="text-align:left">Delete</th>

                    </tr>
                    </thead>
                    <tbody style="text-align:left">
                    @foreach($users as  $key => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->rate}} Tk.</td>
                        <td>{{$user->quantity}}</td>
                        <td>{{$user->total}} Tk.</td>
                        <td>
                            {!! Form::open(array('route' => ['orderMake.destroy',$user->id],'method'=>'delete')) !!}
                            {!! Form::hidden('id',$user->id)!!}
                            <button class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i></button>
                            {!! Form::Close()!!}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align="right"> {!!$users->render()!!}</div>
            </div>

        </div>

    </div>
    <!-- /.row -->



</div>
<!-- /.container -->
@stop


