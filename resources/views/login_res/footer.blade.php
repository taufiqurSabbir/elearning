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
