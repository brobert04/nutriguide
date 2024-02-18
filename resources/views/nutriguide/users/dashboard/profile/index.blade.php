@extends('nutriguide.users.dashboard.base')
@section('title')
    Nutriguide User Profile | {{auth()->user()->name}}
@endsection
@section('content')
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="https://ui-avatars.com/api/?name={{auth()->user()->name}}"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                        <p class="text-muted text-center">
                            @if(auth()->user()->job)
                                {{auth()->user()->job}}
                            @endif
                        </p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right"></a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary mt-4">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i>Dietary Preferences</strong>
                        <p class="text-muted"></p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Allergens</strong>

                        <p class="text-muted"></p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                        <p class="text-muted">

                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted"></p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#submissions" data-toggle="tab">Submissions</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="submissions">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/000000?text=1" class="img-fluid mb-2" alt="white sample"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name*</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="name" name="name" placeholder="Name" value="{{auth()->user()->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email*</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="job" class="col-sm-2 col-form-label">Job</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="job" placeholder="Job" id="job" value="{{auth()->user()->job}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="preferences" class="col-sm-2 col-form-label">Dietary Preferences*</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="preferences" name="preferences" placeholder="Dietary Preferences" value="{{auth()->user()->dietary_preferences}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Allergens*</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="allergens" name="allergens" placeholder="Allergens" value="{{auth()->user()->allergens}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Allergens" value="{{auth()->user()->date_of_birth}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Edit Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
