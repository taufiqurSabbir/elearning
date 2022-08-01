@extends('admin.usermaster')



@section('user_name',$name)
@section('user_phone','0'.$phone)
@section('user_role','Student')
@section('user_profile_image',asset('image/profile_picture/'.$image))

@section('page_name','Student Dashboard')
{{--menu--}}

@section('menu1_active','active')
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')



@section('menu2','My Course')
@section('menu2_icon','bi bi-book')


@section('menu3','Progress')
@section('menu3_icon','bi bi-graph-up-arrow')

@section('menu4','live')
@section('menu4_icon','bi bi-camera-video-fill')

@section('menu5','Buy New Course')
@section('menu5_icon','bi bi-file-earmark-plus')


@section('menu6','Support')
@section('menu6_icon','bi bi-card-text')

@section('menu7','Logout')
@section('menu7_icon','bi bi-card-text')





@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    <div class="col-12 col-lg-9">
        <div class="row">


            <div class="page-content">
                <section class="row">

                    <div id="student_courses" class="mycourse">

                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-xxl-3 col-sm-12 col-xs-12 col-md-6">
                                <div class="card course m-2" style="width: 20rem">
                                    <div class="row">
                                        <div class="col">
                                            <img src="image/course.webp" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">1hr</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <div class="progress" style="width:100%;">
                                                            <div class="progress-bar progress-bar-striped bg-info"
                                                                 role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100">
                                                                20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-xxl-3 col-sm-12 col-xs-12 col-md-6">
                                <div class="card course m-2" style="width: 20rem">
                                    <div class="row">
                                        <div class="col">
                                            <img src="image/course.webp" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">1hr</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <div class="progress" style="width:100%;">
                                                            <div class="progress-bar progress-bar-striped bg-info"
                                                                 role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100">
                                                                20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-xxl-3 col-sm-12 col-xs-12 col-md-6">
                                <div class="card course m-2" style="width: 20rem">
                                    <div class="row">
                                        <div class="col">
                                            <img src="image/course.webp" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">1hr</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <div class="progress" style="width:100%;">
                                                            <div class="progress-bar progress-bar-striped bg-info"
                                                                 role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100">
                                                                20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-xxl-3 col-sm-12 col-xs-12 col-md-6">
                                <div class="card course m-2" style="width: 20rem">
                                    <div class="row">
                                        <div class="col">
                                            <img src="image/course.webp" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">1hr</p>
                                                    </div>
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <div class="progress" style="width:100%;">
                                                            <div class="progress-bar progress-bar-striped bg-info"
                                                                 role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100">
                                                                20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
        <style>
            @media (max-width: 575.98px) {
                .mycourses .courses {
                    width: 15rem !important;
                    margin-left: 5rem !important;
                }

                html {
                    font-size: 10px;
                }
            }

            @media (min-width: 576px) and (max-width:767.98px) {
                html {
                    font-size: 12px;
                }
            }

            /* M landscape */

            @media (min-width: 768px) and (max-width: 991.98px) {
                html {
                    font-size: 13px;
                }
            }

            /* L landscape */

            @media (min-width: 992px) and (max-width: 1199.98px) {
                html {
                    font-size: 16px;
                }
            }


            /* XL */

            @media (min-width: 1200px) and (max-width: 1399.98px) {
                html {
                    font-size: 16px;
                }
            }

            /* XXL */

            @media (min-width: 1400px) and (max-width: 1599.98px) {
                html {
                    font-size: 18px;
                }

                .mycourses .courses {
                    width: 15rem !important;
                    margin-left: 15rem !important;
                }
            }
        </style>
    </div>

        </div>
    </div>





@endsection
