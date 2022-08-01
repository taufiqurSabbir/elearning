@extends('login_res.userMaster');

@section('role_name','Student Login')

@section('from_action',route('otp.confirm',$phone))
@section('from')
    @include('errors')
    @include('notifi')
    <h2 class="title">OTP ভেরিফিকেশন</h2>
    <p>মোবাইলে পাঠানো ৪ ডিজিটের কোডটি লিখুন</p>
    <br>
    {{--    <div class="input-div one">--}}
    {{--        <div class="i">--}}
    {{--            <i class="fas fa-user"></i>--}}
    {{--        </div>--}}
    {{--        <div class="div">--}}
    {{--            <h5></h5>--}}
    {{--            <input type="number" name="phone"  id="phone" class="input" placeholder="মোবাইল নম্বর দিন">--}}

    <input type="number" name="otp"  class="input"  placeholder="OTP টাইপ করুন">
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

    <input type="submit" class="btn" value="এগিয়ে যান">

    <div>
        <p>মোবাইল নম্বর ভুল হয়নি তো?</p>
        <p><b>0{{$phone}}</b></p>
        <a href="" style="color:#15172b; background-color:rgba(255,255,255,0)">নম্বর পরিবর্তন</a>
    </div>

@endsection

