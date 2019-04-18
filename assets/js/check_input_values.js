jQuery(document).ready(function () {

  if (jQuery("#first_name").val() != "") {
    jQuery("#first_name").siblings("label").addClass("active");
  }
  if (jQuery("#last_name").val() != "") {
    jQuery("#last_name").siblings("label").addClass("active");
  }
  if (jQuery("#country").val() != "") {
    jQuery("#country").siblings("label").addClass("active");
  }
  if (jQuery("#email").val() != "") {
    jQuery("#email").siblings("label").addClass("active");
  }
  if (jQuery("#work_experience").val() != "") {
    jQuery("#work_experience").siblings("label").addClass("active");
  }

});