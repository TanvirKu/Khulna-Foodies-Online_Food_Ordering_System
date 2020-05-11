@extends('Header_Footer.otherIndex')
@section('title','AdminPage')
@endsection

@section('body')
    <div class="container">
    <div class="row">
        <h1 style="text-align: center"><i class="glyphicon glyphicon-king"></i> Admin Panel</h1>
        <hr style="border: 3px solid whitesmoke">
        <div class="col-md-12">

            <ul class="nav nav-tabs" id="admin-page-tab">
                <h3>
                    <li ><a  href="/messages" data-toggole="tab" ><i class="glyphicon glyphicon-record"></i> Messages</a></li>
                    <li ><a  href="/orderMake" data-toggole="tab"><i class="glyphicon glyphicon-record"></i> Total Orders</a></li>
                </h3>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="sec-1"></div>
                <div class="tab-pane fade" id="sec-2"></div>
                <div class="tab-pane fade" id="sec-3"></div>
            </div>



            <div class="table-responsive" style="color: whitesmoke">
                <table class="table table-bordered">
                    <caption style="color: whitesmoke;text-align: center; border: 1px solid whitesmoke"><h1><i class="glyphicon glyphicon-user"></i> User List</h1> </caption>
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
                            <td>{{$data->created_at->format('h:ia |F d |Y ')}}</td>
                            <td>{{$data->user_type}}</td>
                            <td><a href="{{route('table.edit',$data->id)}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></button></a></td>
                            <td>
                                {!! Form::open(array('route' => ['table.destroy',$data->id],'method'=>'delete')) !!}
                                {!! Form::hidden('id',$data->id)!!}
                                <button class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i></button>
                                {!! Form::Close()!!}
                            </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div align="right"> {!!$alldata->render();!!}</div>
            </div>

        </div>
    </div>
    </div>
@stop
