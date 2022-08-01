@include('frontend.partials.head')
<!--MENUBAR STARTS-->
<div id="menu_section">
    <div id="menu_section">
        <div id="menu_section">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('Dash_active')" @yield('Dash_style')
                                   href="{{route('login_res')}}">Student Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('Dash_active')" @yield('Dash_style')
                                href="{{route('teacher_login')}}">Teacher Login</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="">courses</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/studentprofile.png" style="display:inline-block; height: 30px;"
                                         alt=""> (name )
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Certificates</a></li>
                                    <li><a class="dropdown-item" href="#">My Courses</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out <img src="images/logout.png"
                                                                                       alt="" style="display: inline-block; height:20px;"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--MENUBAR ENDS-->
