@extends('layouts.backend')

@section('main')
    <div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="margin-top:51px;">
    <div class="box">
        <div class="box-header">
            <h2 style="Text-align:center;">Data Table</h2><hr>
            <a href="" class="btn btn-success" ">Create Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Desc</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>1</td>
                    <td>Safari 1.3</td>
                    <td>12</td>
                    <td>hello</td>
                    <td>photo</td>
                    <td>
                        <a href="" class="btn  btn-success btn-sm">Update</a>
                        <a href="" class="btn  btn-danger btn-sm">Delete</a>
                    </td>

                </tr>



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
