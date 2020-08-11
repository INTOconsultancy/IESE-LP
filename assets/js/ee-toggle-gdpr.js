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

    console.log("Checkbox set to required="+gdprCheckbox.required+" & checked="+gdprCheckbox.checked);
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


    // Updating the cell phone label as requested by IESE.
    document.querySelector('[for="custom_form_entry_numero_de_celular"]').innerHTML = 'Teléfono Móvil<abbr title="required"></abbr>';

};