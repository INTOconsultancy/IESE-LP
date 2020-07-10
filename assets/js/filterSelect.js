jQuery(document).ready(function(){

    jQuery('.latam_country_select').on('change', function () {
        if (jQuery(".latam_country_select").val() == 'ES') {
            alert('españa')
            jQuery('.hero-container').css('height','735px');
            

        } else if (jQuery(".latam_country_select").val() != 'ES') {
            jQuery('.hero-container').css('height','660px');
            

        }
    });
    
});