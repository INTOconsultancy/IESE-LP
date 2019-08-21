<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TPB62D3');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" CONTENT="1;URL= https://bit.ly/2Ehoosi"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¡Gracias por tu interés!</title>
    <link rel="stylesheet" href="../assets/scss/stylesheet.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png" />

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPB62D3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="gracias-container">
        <div class="dialog-container">
            <div class="logos-container">
                <img src="../assets/img/svg/IESE-Business-School.svg" alt="IESE">
                <img src="../assets/img/svg/Executive-Education.svg" alt="Executive Education">
            </div>
            <div class="dialog-cont">
                <div class="grapBo fs30 negro19">
                    ¡Gracias!
                </div>
                <div class="grapRe fs18 negro19">
                    Gracias por tu interés en el programa
                </div>
                <div class="grapBo fs18 gris70">
                    "Mujer y liderazgo"
                </div>
                <div class="grapRe fs18 negro46">
                    Para ver el folleto digital <a class="grapBo rojo39" id="btn-download-brochure" href="http://bit.ly/2YQgHBc">Haz click aquí</a>
                </div>
            </div>
            <div class="gracias-linea"></div>
            <div class="gracias-button">
                <div class="grapMe fs30 negro19">
                    ¿Listo para el próximo paso?
                </div>
                <a class="btn-gracias grapBo fs16 blanco" id="btn-apply-now" href="http://bit.ly/2YSy7NL" target="_blank" rel="noopener noreferrer">
                    INSCRIBIRME
                    <img src="../assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow">
                </a>
            </div>
            <div class="gracias-redes">
                <div class="grapRe fs14 negro3D">
                    Conéctate con nosotros
                </div>
                <div class="icon-redes">
                    <a href="https://www.facebook.com/Iesebusinessschool" target="_blank" rel="noopener noreferrer">
                        <img src="../assets/img/svg/facebook-f-brands.svg" alt="Facebook">
                    </a>
                    <a href="https://twitter.com/iesebschool" target="_blank" rel="noopener noreferrer">
                        <img src="../assets/img/svg/twitter-brands.svg" alt="Twiter">
                    </a>
                    <a href="https://www.linkedin.com/school/iese-business-school/" target="_blank" rel="noopener noreferrer">
                        <img src="../assets/img/svg/linkedin-in-brands.svg" alt="Linkedin">
                    </a>
                </div>
            </div>
        </div>
    </div>

    
<!-- Whatsapp Scripts -->
<script src="https://emeritus.org/programmes/common/js/country-code.js"></script>
<script src="https://whatadmin.emeritus.org/wa.js"></script>
<script>
    WA.accessToken = "5d4b9ab27dc56";
</script>


<script>


    /*get parameter value by name from url*/
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
        var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    /*convert string to title case*/
    function toTitleCase(str) {
        return str.replace(/\w\S*/g, function(txt){
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
    }


    jQuery(document).ready(function(){


        var fname = $.trim(getParameterByName("first_name"));
        var lname = $.trim(getParameterByName("last_name"));
        var src = $.trim(getParameterByName("src"));
        var mobile = $.trim(getParameterByName("mobile"));
        var allow = $.trim(getParameterByName("agree"));
        var countryNm = $.trim(getParameterByName("Country"));
        var emailadd = $.trim(getParameterByName("email"));




        if(mobile != '')
        {
            //check if GDPR Country
            var checkGDPR = excludeCountry.indexOf(countryNm);

            //if country code by selected country
            var countryCode = country_arr[countryNm];
            var countryCodeLength = country_arr[countryNm].length;

            //get code without + sign
            var countryCode1 = countryCode.substring(1, countryCodeLength);

            //phone first char is 0 then remove 0 from the string
            if(mobile.charAt( 0 ) == '0')
            {
                mobile = mobile.substring(1,mobile.length);
            }

            if(countryNm == 'Argentina')
            {
                var phonenew = mobile.substring(0,2);
                if(phonenew == '15')
                {
                    mobile = mobile.substring(2,mobile.length);
                }
            }

            var phoneStr = mobile;
            if(phoneStr.charAt( 0 ) == '+')
            {
                countryCode = '';
            }
            else
            {
                var phoneCode = phoneStr.substring(0,countryCode1.length);
                if(phoneCode == countryCode1)
                {
                    countryCode = '+';
                }
            }

            fname = toTitleCase(fname);
            lname= toTitleCase(lname);

            //GDPR Country Exists
            if(checkGDPR != -1)
            {
                if($.trim(allow) == 'Yes I Agree')
                {
                    console.log("Sending message to (GDPR): " + countryCode+mobile);
                    console.log("Full Name: " + fname + " " + lname);
                    console.log("Email Add: " + emailadd);
                    WA.sendMessage(countryCode+mobile, 'thankyou_co_two', [fname+' '+lname,'Business Analytics, de los datos a la acción','http://bit.ly/2VQvwCg'],'Spanish-Wharton-BA-Brochure',emailadd,'es');
                    setTimeout(WA.sendMessage(countryCode+mobile, 'ask_apply_time_spanish',['curso'],'','','es'), 100)

                }
            }
            else
            {
                console.log("Sending message to (Not GDPR): " + countryCode+mobile);
                console.log("Full Name: " + fname + " " + lname);
                console.log("Email Add: " + emailadd);
                WA.sendMessage(countryCode+mobile, 'thankyou_co_two', [fname+' '+lname,'Business Analytics, de los datos a la acción','http://bit.ly/2VQvwCg'],'Spanish-Wharton-BA-Brochure',emailadd,'es');
                setTimeout(WA.sendMessage(countryCode+mobile, 'ask_apply_time_spanish',['curso'],'','','es'), 100)

            }
        }
    });


</script>

</body>


</html>