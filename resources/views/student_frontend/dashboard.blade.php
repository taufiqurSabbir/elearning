@extends('student_frontend.content')

@section('content')
    <body>


    <!--MENUBAR STARTS-->
    <div id="menu_section">
        <div id="menu_section">
            <nav class="navbar navbar-expand-lg" style="background-color: #5397B3;">
                <div class="container">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Explore</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" style="color: #0066FF;" aria-current="page" href="#">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">My courses</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Live Session</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/studentprofile.png" style="display:inline-block; height: 30px;" alt=""> (name )
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Certificates</a></li>
                                    <li><a class="dropdown-item" href="#">My Courses</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out <img src="images/logout.png" alt=""
                                                                                       style="display: inline-block; height:20px;"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--MENUBAR ENDS-->
    <!--Stats parts-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="profile_info dropshadow">
                    <img class="profilepic" src="{{asset('image/profile_picture/'.$image)}}" alt="">
                    <p style="color: white;">
                        Name : <span class="profilename"><strong>{{$name}}</strong></span> <br> Student Id : <span class="profileId">{{$student_id}}</span><br> Mobile : <span class="profilePhone">0{{$phone}}</span> <br>

                    </p>

                    <div class="logout"> <a href="{{route('logout')}}"> LOG OUT <img src="images/logout.png" alt="" style="display: inline-block; height:20px;">  </a> </div>

                </div>
            </div>
            <div class="col-sm-8 ">
                <div class="row">
                    <div class="col-sm-12 statheading dropshadow">
                        <img src="images/stats.svg" style="margin: 5px 10px; height:45px;" alt="">
                        <h1 style="display: inline-block; font-size:30px; color: white; padding-top: 15px;">
                            স্ট্যাটিসটিক্স</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="overallprogress dropshadow">
                            <div class="heading">
                                <h2>ওভারঅল প্রগ্রেস</h2>
                            </div>
                            <div class="bar">
                                <div style=" width: {{$bar}}%; " class="progress bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="day dropshadow">
                            <div class="heading">
                                <h2>দিন</h2>
                            </div>
                            <h6>12</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="histogram dropshadow">
                            <div class="heading">
                                <h2>এভরি প্রগ্রেস</h2>
                            </div>
                            <div class="coursebar">
                                <div class="progressbar" style="width: 20%;">
                                    <div class="coursename"> Course 1</div>
                                </div>
                            </div>
                            <div class="coursebar">
                                <div class="progressbar" style="width: 40%;">
                                    <div class="coursename"> Course 1</div>
                                </div>
                            </div>
                            <div class="coursebar">
                                <div class="progressbar" style="width: 60%;">
                                    <div class="coursename"> Course 1</div>
                                </div>
                            </div>
                            <div class="coursebar">
                                <div class="progressbar" style="width: 80%;">
                                    <div class="coursename"> Course 1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Stats parts-->
    <!--Record and edit parts-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="editbox" style="margin-top:20px ;margin-left:150px ;">
                    <img src="images/edit.png" style="height:20px; display: inline-block;" alt="">
                    <h5 style=" display: inline-block;">Acount Edit</h5> <br>
                    <img src="images/dsutbin.png" style="height:20px; display: inline-block;" alt="">
                    <h5 style=" display: inline-block;">Delete Acount</h5>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3 ">
                        <div class="promobox dropshadow" style="margin: 25px 0px 25px 0px ;background-color: #F35F5F;width: 150px;height: 150px;border-radius: 25px;">
                            <h6 style="margin: 0 auto;text-align: center;font-size: 60px;color: #fff;padding-top: 12.5%;">
                                1</h6>
                            <p style="text-align: center;">course Bought</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="promobox dropshadow" style="margin: 25px 0px 25px 0px ;background-color: #F35F5F;width: 150px;height: 150px;border-radius: 25px;">
                            <h6 style="margin: 0 auto;text-align: center;font-size: 60px;color: #fff;padding-top: 12.5%;">
                                1</h6>
                            <p style="text-align: center;">course Bought</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="promobox dropshadow" style="margin: 25px 0px 25px 0px ;background-color: #F35F5F;width: 150px;height: 150px;border-radius: 25px;">
                            <h6 style="margin: 0 auto;text-align: center;font-size: 60px;color: #fff;padding-top: 12.5%;">
                                1</h6>
                            <p style="text-align: center;">course Bought</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="promobox dropshadow" style="margin: 25px 0px 25px 0px ;background-color: #F35F5F;width: 150px;height: 150px;border-radius: 25px;">
                            <h6 style="margin: 0 auto;text-align: center;font-size: 60px;color: #fff;padding-top: 12.5%;">
                                1</h6>
                            <p style="text-align: center;">course Bought</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Record and edit parts-->
    <!--badges and certificates-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="box"></div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="badges dropshadow">
                            <div class="heading">
                                <h2>বাজস</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="certificates dropshadow">
                            <div class="heading">
                                <h2>সার্টিফিকেটস</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="skills dropshadow">
                    <div class="heading">
                        <h2>এক্সপার্টিসে স্কিল</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
