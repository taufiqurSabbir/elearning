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
 <div class="container">
    <div class="forms-container">
        <div class="signin-signup">
                <form action="{{route('res_log')}}" method="post" class="sign-in-form" >
                    @include('errors')
                    {{csrf_field()}}
                    <h2 class="title">শেখার নতুন জগতে স্বাগতম</h2>
                    <br>
                    <input type="number" name="phone"  id="phone"  placeholder="মোবাইল নম্বর দিন">
                    <br>
                    <input type="submit" class="btn" value="এগিয়ে যান" />
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
            <img src="img/log.svg" class="image" alt="" />
        </div>


</body>
</html>


<script>
    let input = document.querySelector("#phone");

    let iti = intlTelInput(input);

    $(window).on("load", function() {

        intlTelInputGlobals.loadUtils("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.1/js/utils.js");

        intlTelInput(input, {
            initialCountry: "",
            separateDialCode: true,
            nationalMode: false,
            onlyCountries: ["bd"]
        });

        let countryData = window.intlTelInputGlobals.getCountryData();

        console.log(countryData);

    });


    $("#phone").focusout( function(e, countryData) {

        let phone_number = $("#phone").val();
        phone_number = iti.getNumber(intlTelInputUtils.numberFormat.E164);

        console.log(phone_number);
    });


</script>
