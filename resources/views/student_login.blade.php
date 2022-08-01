@extends('login_res.userMaster');

@section('role_name','Student Login')

@section('from_action',route('res_log'))
@section('from')
    @include('errors')
    @include('notifi')
{{--    <div class="input-div one">--}}
{{--        <div class="i">--}}
{{--            <i class="fas fa-user"></i>--}}
{{--        </div>--}}
{{--        <div class="div">--}}
{{--            <h5></h5>--}}
{{--            <input type="number" name="phone"  id="phone" class="input" placeholder="মোবাইল নম্বর দিন">--}}
            <input type="number" name="phone" class="input"  id="phone" placeholder="মোবাইল নম্বর দিন"  >
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="input-div pass">--}}
{{--        <div class="i">--}}
{{--            <i class="fas fa-lock"></i>--}}
{{--        </div>--}}
{{--        <div class="div">--}}
{{--            <h5>Password</h5>--}}
{{--            <input type="password" class="input">--}}
{{--        </div>--}}
{{--    </div>--}}

    <input type="submit" class="btn" value="Login">


@endsection

