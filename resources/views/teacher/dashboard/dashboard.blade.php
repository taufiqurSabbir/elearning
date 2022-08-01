@extends('admin.usermaster')



@section('user_name',$name)
@section('user_phone','0'.$phone)
@section('user_role',$role)
@section('user_profile_image',asset('image/profile_picture/teacher/'.$image))

@section('page_name','Student Dashboard')
{{--menu--}}

@section('menu1_active','active')
@section('menu_link_1',route('teacher_dashboard'))
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')


@section('menu_link_2',route('add_course'))
@section('menu2','Add Course')
@section('menu2_icon','bi bi-file-earmark-plus')

@section('menu_link_3',route('view_add_topic'))
@section('menu3','Add Topic')
@section('menu3_icon','bi bi-book')

@section('menu_link_4',route('all_course'))
@section('menu4','All Course')
@section('menu4_icon','bi bi-people-fill')

@section('menu5','Analytics')
@section('menu5_icon','bi bi-graph-up-arrow')

@section('menu6','Live')
@section('menu6_icon','bi bi-camera-video-fill')

@section('menu7','Suport Request')
@section('menu7_icon','bi bi-card-text')

@section('menu8','Logout')
@section('menu8_icon','bi bi-box-arrow-left')

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
                                <h6 class="font-extrabold mb-0">{{$course_count}}</h6>
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
                                <h6 class="text-muted font-semibold">Total Sales</h6>
                                <h6 class="font-extrabold mb-0">6457 ৳</h6>
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
                                    <i class=" iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Total Student</h6>
                                <h6 class="font-extrabold mb-0">500</h6>
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

                        <img src="{{asset('image/profile_picture/teacher/'.$image)}}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">{{$name}}</h5>
                        <h6 class="text-muted mb-0">{{'0'.$phone}}</h6>
                        <a class="btn btn-outline-success btn-sm" href="#">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="course_2"></div>
        </div>
    </div>
    <div class="card">





        <script>
            // cureent all date
            var m_names = ['1', '2', '3',
                '4', '5', '6', '7',
                '8', '9', '10', '11', '12'];

            d = new Date();
            var month = m_names[d.getMonth()];
            var year = d.getFullYear();

            const getDaysInMonth = (month, year) => {
                return new Array(31)
                    .fill('')
                    .map((v, i) => new Date(year, month - 1, i + 1))
                    .filter(v => v.getMonth() === month - 1)
            }

            const months =getDaysInMonth(month, year);

                console.log(months.forEach(months))

            // end current date


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
                    categories: [months.forEach(elemnts)],
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
