<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('custom_boat.css')}}" rel="stylesheet" crossorigin="anonymous">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
        src="{{asset('https://kit.fontawesome.com/64d58efce2.js')}}"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/js/intlTelInput.min.js"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/css/intlTelInput.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container-1">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="{{route('submit_info')}}" method="post" class="sign-in-form"  role="form" enctype="multipart/form-data">
                @include('errors')
                @include('notifi')
                {{csrf_field()}}
                <br>
                <h2 class="title"> ব্যক্তিগত তথ্য</h2>
                <p>আপনার প্রোফাইল পিকচার দিন</p>

                <div class="row">
                <div class="  col-xs-12 profile-badge">
                    <div class="profile-pic ">

                        <img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" height="200">
                        <input id="profile-image-upload" class="hidden" name="profile_image" type="file" onchange="previewFile()" >
                        <div style="color:#999;" >  </div>

                    </div>
                </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <p>আপনার নাম *</p>

                <input type="text" name="name"  id="phone"  placeholder="পুরো নাম লিখুন">
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
                            <img loading="lazy" src="https://cdn-icons.flaticon.com/png/512/4140/premium/4140047.png?token=exp=1655271339~hmac=b0b94db76d314f94bd560dc6d9a66131" alt="" />
                            <div class="plan-details">
                                <span>Female</span>
                                <p>For growing business who wants to create a rewarding place to work.</p>
                            </div>
                        </div>
                    </label>
                </div>


                <input type="submit" class="btn" value="এগিয়ে যান" />
                <br>
                <br>
            </form>

        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>ক্যারিয়ার নিয়ে চিন্তিত?</h3>
                <p>
                    আমরা আছি তোমার পাশে ৷
                    দেশ সেরা অভিজ্ঞ শিক্ষক অপেক্ষা করতেছে তোমার জন্য ৷।
                    তাহলে আর দেরি কেন?
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="{{asset('img/log.svg')}}" class="image" alt="" />
        </div>


</body>
</html>



<script>
    function previewFile() {
        var preview = document.querySelector('img');
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
