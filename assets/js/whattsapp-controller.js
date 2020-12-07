    // Whatsapp access Token
    WA.accessToken = "5d4b9ab27dc56";

    /*get parameter value by name from url*/
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
        var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    /*convert string to title case*/
    function toTitleCase(str) {
        return str.replace(/\w\S*/g, function (txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
    }

    function sendWhatsAppMessage(){
        var fname = $.trim(getParameterByName("first_name"));
        var lname = $.trim(getParameterByName("last_name"));
        var src = $.trim(getParameterByName("src"));
        var mobile = $.trim(getParameterByName("mobile"));
        var allow = $.trim(getParameterByName("agree"));
        var countryNm = $.trim(getParameterByName("country"));
        var emailadd = $.trim(getParameterByName("email"));

        if (mobile != '') {
            //check if GDPR Country
            var checkGDPR = excludeCountry.indexOf(countryNm);

            //if country code by selected country
            var countryCode = country_arr[countryNm];
            var countryCodeLength = country_arr[countryNm].length;

            //get code without + sign
            var countryCode1 = countryCode.substring(1, countryCodeLength);

            //phone first char is 0 then remove 0 from the string
            if (mobile.charAt(0) == '0') {
                mobile = mobile.substring(1, mobile.length);
            }

            if (countryNm == 'Argentina') {
                var phonenew = mobile.substring(0, 2);
                if (phonenew == '15') {
                    mobile = mobile.substring(2, mobile.length);
                }
            }

            var phoneStr = mobile;
            if (phoneStr.charAt(0) == '+') {
                countryCode = '';
            } else {
                var phoneCode = phoneStr.substring(0, countryCode1.length);
                if (phoneCode == countryCode1) {
                    countryCode = '+';
                }
            }

            fname = toTitleCase(fname);
            lname = toTitleCase(lname);

            //GDPR Country Exists
            if (checkGDPR != -1) {
                if ($.trim(allow) == 'Yes I Agree') {
                    console.log("Sending message to (GDPR): " + countryCode + mobile);
                    console.log("Full Name: " + fname + " " + lname);
                    console.log("Email Add: " + emailadd);
                    WA.sendMessage(countryCode + mobile, 'thankyou_co_two', [fname + ' ' + lname, 'Mujer y liderazgo', 'http://bit.ly/2YSy7NL'], 'ES_Mujer-y-liderazgo_Sept2019-Brochure', emailadd, 'es');
                    setTimeout(WA.sendMessage(countryCode + mobile, 'ask_apply_time_spanish', ['curso'], '', '', 'es'), 100)

                }
            } else {
                console.log("Sending message to (Not GDPR): " + countryCode + mobile);
                console.log("Full Name: " + fname + " " + lname);
                console.log("Email Add: " + emailadd);
                WA.sendMessage(countryCode + mobile, 'thankyou_co_two', [fname + ' ' + lname, 'Mujer y liderazgo', 'http://bit.ly/2YSy7NL'], 'ES_Mujer-y-liderazgo_Sept2019-Brochure', emailadd, 'es');
                
                setTimeout(WA.sendMessage(countryCode + mobile, 'ask_apply_time_spanish', ['curso'], '', '', 'es'), 100)

            }
        }
    }

    jQuery(document).ready(function () {

        jQuery('#btn-chat-whatsapp').click(function(){
            sendWhatsAppMessage();
        });

    });