@extends('layouts.backend')

@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div  style="margin-top: 51px;">



                    <!-- Main content -->

                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" src="{{'uploads/users/'.auth()->user()->photo}}" alt="User profile picture">

                                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                                        <p class="text-muted text-center">{{auth()->user()->role}}</p>

                                        <ul class="list-group list-group-unbordered">
                                            <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
                                            <p class="text-muted">
                                              +88 {{auth()->user()->phone}}
                                            </p>
                                            <hr>

                                            <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                                            <p class="text-muted">
                                                {{auth()->user()->email}}
                                            </p>
                                            <hr>

                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

                                            <p class="text-muted">{{auth()->user()->address}}</p>

                                            <hr>
                                        </ul>

                                        <a href="https://www.facebook.com/noman.rosebely/" class="btn btn-primary btn-block"><b>Follow</b></a>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->


                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#activity" data-toggle="tab">Update Your Profile </a></li>

                                    </ul>


                                        <div class="tab-pane" id="settings" style="padding: 10px;">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputName" value="{{auth()->user()->name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">phone</label>

                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="phone" value="{{auth()->user()->phone}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail" value="{{auth()->user()->email}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputExperience" > {{auth()->user()->address}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="photo" class="col-sm-2 control-label">Photo</label>

                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="photo" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="oldpassword" class="col-sm-2 control-label">Old Password</label>

                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="oldpassword">
                                                    </div>

                                                </div>


                                                <div class="form-group">
                                                    <label for="password" class="col-sm-2 control-label">New Password</label>

                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="password">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>

                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="password_confirmation">
                                                    </div>
                                                </div>






                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->






                </div>
            </div>
                <!-- /.row -->
        </section>
    </div>

@endsection



