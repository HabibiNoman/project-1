@extends('layouts.backend')

@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12" style="margin-top:51px;">
                    <div class="box">
                        <div class="box-header">
                            <h2 style="Text-align:center;">User Data</h2><hr>
                            <a href="{{route('admin.users.create')}}" class="btn btn-success">Create New User</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td style="text-align: center">
                                        <img src="{{asset('uploads/users/'.$user->photo)}}" style="width: 50px;">
                                    </td>
                                    <td>
                                        <a href="" class="btn  btn-success btn-sm">Update</a>
                                        <a href="{{route('admin.users.delete',$user->id)}}" class="btn  btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                                @endforeach


                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
    </div>

@endsection
