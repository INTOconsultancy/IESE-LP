/**
 * Depending on the country code, the checkbox is marqued as required.
 * @param countryCode
 */
function checkGDPRChackboxStatus(countryCode){
    var gdprCheckbox = document.getElementById('custom_form_entry_agree');
    gdprCheckbox.checked = false;

    if(countryCode === "ES"){
        gdprCheckbox.required = true;

    }else{
        gdprCheckbox.required = false;
        gdprCheckbox.checked = true;

    }
}


/**
 * When the document loads or when a country is selected we must check if the GDPR consent should be set as required.
 */
window.onload = function () {

    var countrySelect = document.getElementById('custom_form_entry_latam_countries');
    checkGDPRChackboxStatus(countrySelect.value);

    countrySelect.onchange = function (event) {
        checkGDPRChackboxStatus(event.target.value);

    };

};