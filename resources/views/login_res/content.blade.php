@include('login_res.head')
<img class="wave" src="{{asset('login_res/img/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('login_res/img/bg.svg')}}">
    </div>
    <div class="login-content">
        <form action="@yield('from_action')" method="POST" @yield('image_from') role="form" enctype="multipart/form-data">
            {{csrf_field()}}
            <img src="{{asset('login_res/img/avatar.svg')}}">
            <h2 class="title">@yield('role_name')</h2>
            @yield('from')

        </form>
    </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('login_res/js/main.js')}}"></script>
</body>
</html>
@include('login_res.footer')
