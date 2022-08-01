@extends('admin.usermaster')



@section('user_name','sabbir')
@section('user_phone','0179294545')
@section('user_role','manager')
@section('user_profile_image',asset('image/profile_picture/teacher/'))

@section('page_name','Student Dashboard')
{{--menu--}}

@section('menu1_active','active')
@section('menu_link_1',route('manager_dash'))
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')


@section('menu_link_2',route('add_teacher'))
@section('menu2','Add Course')
@section('menu2_icon','bi bi-file-earmark-plus')

@section('menu3','My Course')
@section('menu3_icon','bi bi-book')

@section('menu4','All Students')
@section('menu4_icon','bi bi-people-fill')

@section('menu5','Analytics')
@section('menu5_icon','bi bi-graph-up-arrow')

@section('menu6','Live')
@section('menu6_icon','bi bi-camera-video-fill')

@section('menu7','Suport Request')
@section('menu7_icon','bi bi-card-text')

@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class=" bi-book"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Total Course</h6>
                                <h6 class="font-extrabold mb-0"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class=" bi-check-circle"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Completed Course</h6>
                                <h6 class="font-extrabold mb-0">6</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class=" bi-arrow-clockwise"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Ongoing</h6>
                                <h6 class="font-extrabold mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class=" bi-ui-checks"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Suport Post</h6>
                                <h6 class="font-extrabold mb-0">7</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Course Completion rate</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div id="chart-profile-visit"></div> -->
                        <div id="course"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                         style="width:10px">
                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Europe</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">862</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                         style="width:10px">
                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">America</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">375</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-america"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                         style="width:10px">
                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/5.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/2.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Wow amazing design! Can you make another
                                            tutorial for
                                            this design?</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">

                        <img src="{{asset('image/profile_picture/teacher/')}}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Taufiqur</h5>
                        <h6 class="text-muted mb-0">01792945445</h6>
                        <a class="btn btn-outline-success btn-sm" href="#">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div>
                <form action="" class="form-group">
                    <div class="cata_title" style="text-align:center;">
                        <h3>Add Course Category</h3>
                    </div>
                    <label for="cata_name"> Course Category Name </label>
                    <input type="text" class="form-control" id="cata_name">

                </form>
            </div>
        </div>
    </div>
    <div class="card">





        <script>
            var options = {
                series: [{
                    name: 'Completed',
                    data: [100, 45, 20, 90, 70, 100, 45, 20, 80, 100, 60]
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val + "%";
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },

                xaxis: {
                    categories: ["Bangla", "English", "Math", "Web", "Biology", "physics", "Philosophy",
                        "Political Science", "Sociology", "Economics", "Anthropology"
                    ],
                    position: 'top',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                            type: 'gradient',
                            gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,
                        formatter: function(val) {
                            return val + "%";
                        }
                    }

                },
                title: {
                    text: 'Course Completation Rate',
                    floating: true,
                    offsetY: 330,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#course"), options);
            chart.render();
        </script>
@endsection
