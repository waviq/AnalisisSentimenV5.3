@extends('layouts.layout')

@section('content')
    <div class="col-lg-4 col-md-5">
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('assets/img/background.jpg')}}" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                    <img class="avatar border-white" src="{{asset('assets/img/cagub/ahok.jpg')}}" alt="..."/>
                    <h4 class="title">Basuki Cahya Purnama<br/>
                        <a href="#">
                            <small>@ahok_btp</small>
                        </a>
                    </h4>
                </div>
                <p class="description text-center">
                    "Calon gubernur DKI <br>
                    Di usung dari partai <br>
                    DPIP, Nasdem, Golkar"
                </p>
            </div>
            <hr>
            <div class="text-center">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <h5>12<br/>
                            <small>Files</small>
                        </h5>
                    </div>
                    <div class="col-md-4">
                        <h5>2GB<br/>
                            <small>Used</small>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5>24,6$<br/>
                            <small>Spent</small>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h4 class="title">Followers</h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/faces/face-0.jpg')}}" alt="Circle Image"
                                         class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                DJ Khaled
                                <br/>
                                <span class="text-muted"><small>Offline</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/faces/face-1.jpg')}}" alt="Circle Image"
                                         class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                Creative Tim
                                <br/>
                                <span class="text-success"><small>Available</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/faces/face-3.jpg')}}" alt="Circle Image"
                                         class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                Flume
                                <br/>
                                <span class="text-danger"><small>Busy</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('profile')
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Profile Basuki Cahya Purnama</h4>
            </div>
            <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                    </div>
                    <div class="clearfix"></div>

            </div>
        </div>
    </div>
@endsection