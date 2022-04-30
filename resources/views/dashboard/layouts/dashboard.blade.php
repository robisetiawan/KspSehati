@extends('dashboard.layouts.template')

@section('content')
    <div class="page-body p-t-0">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">KSP Sehati
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="user-profile">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card profile-header bg-size"
                            style="background-image: url(&quot;https://laravel.pixelstrap.com/viho/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                            <img class="img-fluid bg-img-cover" src="https://source.unsplash.com/1500x400?color-gradient"
                                alt="" style="display: none;">
                            <div class="profile-img-wrrap bg-size"
                                style="background-image: url(&quot;https://laravel.pixelstrap.com/viho/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                <img class="img-fluid bg-img-cover"
                                    src="https://laravel.pixelstrap.com/viho/assets/images/user-profile/bg-profile.jpg"
                                    alt="" style="display: none;">
                            </div>
                            <div class="userpro-box">
                                <div class="img-wrraper">
                                    <div class="avatar"><img class="img-fluid" alt=""
                                            src="https://laravel.pixelstrap.com/viho/assets/images/user/7.jpg"></div>
                                    <a class="icon-wrapper" href="#"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="user-designation">
                                    <div class="title">
                                        <a target="_blank" href="">
                                            <h4>Welcome Back,</h4>
                                            <h6>{{ auth()->user()->name }}</h6>{{-- method auth ototmatis ada di laravel --}}
                                        </a>
                                    </div>

                                    <div class="follow">
                                        <ul class="follow-list">
                                            <li>
                                                <div class="follow-num counter">325</div>
                                                <span>Follower</span>
                                            </li>
                                            <li>
                                                <div class="follow-num counter">450</div>
                                                <span>Following</span>
                                            </li>
                                            <li>
                                                <div class="follow-num counter">500</div>
                                                <span>Likes</span>
                                            </li>
                                        </ul>
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
