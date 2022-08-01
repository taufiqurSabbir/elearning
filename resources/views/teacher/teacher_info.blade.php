@extends('login_res.userMaster');

@section('role_name','ব্যক্তিগত তথ্য')

@section('from_action',route('teacher_submit_info'))
{{--@section('image_from','role="form" enctype="multipart/form-data"')--}}
@section('from')
    @include('errors')
    @include('notifi')
    <p>আপনার প্রোফাইল পিকচার দিন</p>

    <span>
    <div class="profile-pic">

        <img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" height="200">
        <input id="profile-image-upload" class="hidden" name="profile_image" type="file" onchange="previewFile()" >
        <div style="color:#999;" >  </div>

    </div>
</span>



    <br>
    <p>আপনার নাম *</p>

    <input type="text" name="name"  class="input"  placeholder="পুরো নাম লিখুন">
    <br>
    <p>শিক্ষাদানের বিষয়
    </p>

    <input type="text" name="subject"  class="input"  placeholder="শিক্ষাদানের বিষয় লিখুন">
    <br>

    <br>
    <p>শপ্রতিষ্ঠান নাম
    </p>

    <input type="text" name="institute"  class="input"  placeholder="শপ্রতিষ্ঠান নাম লিখুন">
    <br>

    <p>আপনি একজন</p>
    <br>

    <div class="plans">
        <label class="plan basic-plan" for="basic">
            <input checked type="radio" name="gender" id="basic" value="male"/>
            <div class="plan-content">
                <img loading="lazy" src="https://cdn-icons-png.flaticon.com/512/4128/4128176.png" alt="" />
                <div class="plan-details">
                    <span>Male</span>
                    <p>For smaller business, with simple salaries and pay schedules.</p>
                </div>
            </div>
        </label>

        <label class="plan complete-plan" for="complete">
            <input type="radio" id="complete" name="gender" value="female"/>
            <div class="plan-content">
                <img  loading="lazy" src="https://cdn-icons.flaticon.com/png/512/4140/premium/4140047.png?token=exp=1655271339~hmac=b0b94db76d314f94bd560dc6d9a66131" alt="" />
                <div class="plan-details">
                    <span>Female</span>
                    <p>For growing business who wants to create a rewarding place to work.</p>
                </div>
            </div>
        </label>
    </div>
    <input type="submit" class="btn" value="Login">


@endsection


<script>

    function previewFile() {
        var preview = document.querySelector('#profile-image1');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
    $(function() {
        $('#profile-image1').on('click', function() {
            $('#profile-image-upload').click();
        });
    });


</script>
