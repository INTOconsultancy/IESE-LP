function getParameterByName(name) {
    name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
    var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

jQuery(document).ready(function () {
    jQuery('#lead_source').val(getParameterByName("utm_source"));
    jQuery('#utm_source').val(getParameterByName("utm_source"));
    jQuery('#utm_medium').val(getParameterByName("utm_medium"));
    jQuery('#utm_content').val(getParameterByName("utm_content"));
    jQuery('#utm_campaign').val(getParameterByName("utm_campaign"));
    jQuery('#utm_term').val(getParameterByName("utm_term"));
})