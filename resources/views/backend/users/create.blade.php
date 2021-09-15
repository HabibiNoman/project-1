@extends('layouts.backend')

@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="margin-top: 51px;">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">User Create</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <form action="{{route('admin.users.create')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name" @error('name') is-invalid @enderror" value="{{old('name')}}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="Name">Phone</label>
                                <input type="text" class="form-control"  id="phone" placeholder="Enter Phone" name="phone" @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="Name">Address</label>
                                <textarea class="form-control"  id="Address" name="address" @error('address') is-invalid @enderror"> {{old('address')}}</textarea>
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"  @error('email') is-invalid @enderror" value="{{old('email')}}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile" name="photo" class="form-control" @error('photo') is-invalid @enderror">
                                @error('photo')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                       id="password">
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                       id="password_confirmation">
                                @error('Confirm_Password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                  </div>
                </div>


                </div>
        </section>
    </div>

@endsection
