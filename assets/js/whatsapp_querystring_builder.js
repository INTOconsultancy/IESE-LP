jQuery(document).ready(function(){
    var originalRetURL = jQuery("#retURL").val();

    function appendWhatsappQueryString(){
        var newURL = originalRetURL;
        if(jQuery("#first_name").val() != "" && jQuery("#first_name").val() != undefined ){
            newURL += "&first_name="+jQuery("#first_name").val();

        } 
        if(jQuery("#last_name").val() != "" && jQuery("#last_name").val() != undefined ){
            newURL += "&last_name="+jQuery("#last_name").val();

        } 
        if(jQuery("#email").val() != "" && jQuery("#email").val() != undefined ){
            newURL += "&email="+jQuery("#email").val();

        } 
        if(jQuery("#country").val() != "" && jQuery("#country").val() != undefined ){
            newURL += "&country="+jQuery("#country").val();

        }
        if(jQuery("#work_experience").val() != "" && jQuery("#work_experience").val() != undefined ){
            newURL += "&work_experience="+jQuery("#work_experience").val();

        }  
        if(jQuery("#mobile").val() != "" && jQuery("#mobile").val() != undefined ){
            newURL += "&mobile="+jQuery("#mobile").val();

        } 
        if(jQuery("#agree").val() != "" && jQuery("#agree").val() != undefined ){
            newURL += "&agree="+jQuery("#agree").val();

        } 


        jQuery("#retURL").val(newURL);
    }

    jQuery("#formDesk").change(function(){
        appendWhatsappQueryString();

    });

});