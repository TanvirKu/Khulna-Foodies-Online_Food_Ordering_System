@extends('Header_Footer.otherIndex')
@section('title','Messages')
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
                    <li ><a  href="/orderMake" data-toggole="tab" ><i class="glyphicon glyphicon-record"></i> Total Orders</a></li>
                </h3>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="sec-1"></div>
                <div class="tab-pane fade" id="sec-2"></div>
                <div class="tab-pane fade" id="sec-3"></div>
            </div>

            <div class="table-responsive" >
                <table class="table table-bordered" >
                    <caption style="text-align:center;color:white;border: 1px solid whitesmoke"><h1><i class="glyphicon glyphicon-envelope"></i>&nbsp;Messages</h1></caption>
                    <thead class="cf" style="text-align:left">
                    <tr>
                        <th style="text-align:left">Name</th>
                        <th style="text-align:left">Email</th>
                        <th style="text-align:left">Phone No</th>
                        <th style="text-align:left">Comment</th>
                        <th style="text-align:left">Delete</th>

                    </tr>
                    </thead>
                    <tbody style="text-align:left">
                    @foreach($usersMessage as  $key => $messages)
                        <tr>
                            <td>{{$messages->name}}</td>
                            <td>{{$messages->email}}</td>
                            <td>{{$messages->phone_no}}</td>
                            <td>{{$messages->comment}}</td>
                            <td>
                                {{--{!! Form::open(['url'=>'/messages/'.$messages->id]) !!}--}}
                                {{--{!! Form::hidden('_method', 'DELETE') !!}--}}
                                {{--<button class="btn  btn-lg btn-danger pull-left" onclick="return confirm('Are You Sure Man')"><i class="glyphicon glyphicon-remove"></i></button>--}}
                                {{--{!! Form::close() !!}--}}

                                {!! Form::open(array('route' => ['contacts.destroy',$messages->id],'method'=>'delete')) !!}
                                {!! Form::hidden('id',$messages->id)!!}
                                <button class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i></button>
                                {!! Form::Close()!!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align="right"> {!!$usersMessage->render();!!}</div>
            </div>

        </div>

    </div>
    <!-- /.row -->



</div>
<!-- /.container -->
@stop


