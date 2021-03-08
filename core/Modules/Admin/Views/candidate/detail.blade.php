@extends('Admin::layout.app')

@section('title','Candidate Profile')

@section('bodyID','candidate')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <div class="post">
                            <div class="user-block">
                                <img src="" alt="" class="img-circle">
                                <span class="username">
                                    {{$data['name']}}
                                </span>
                                <span class="description">{{$data['time_apply']}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-header with-border">
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-google-plus-square margin-r-5"></i>
                                                    Email
                                                </strong>
                                            </div>
                                            <div class="box-body">
                                                <p class="text-muted">{{$data['email']}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-phone margin-r-5"></i>
                                                    Phone
                                                </strong>
                                            </div>
                                            <div class="box-body">
                                                <p class="text-muted">{{$data['phone']}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-address-book margin-r-5"></i>
                                                    Address
                                                </strong>
                                            </div>
                                            <div class="box-body">
                                                <p class="text-muted">{{$data['address']}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-sticky-note margin-r-5"></i>
                                                    Experience
                                                </strong>
                                            </div>
                                            <div class="box-body">
                                                <p class="text-muted">{!! $data['experience'] !!}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-id-card margin-r-5"></i>
                                                    Apply Job
                                                </strong>
                                            </div>
                                            <div class="box-body">
                                                <p class="text-muted">{{$data->job->title}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="box-title">
                                                <strong>
                                                    <i class="fa fa-id-card margin-r-5"></i>
                                                    CV
                                                </strong>
                                                <div class="box-body">
                                                    <iframe src="{{cxl_storage_client('pdf').'/'.$data['cv']}}" frameborder="100" width="1200px" height="500px"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
