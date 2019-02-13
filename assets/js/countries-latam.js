// country,code (w/ no '+' prefix)
// Countries

var country_arr = new Array("Argentina~", "Austria~", "Bélgica~", "Bulgaria~", "Chile~", "Colombia~", "Costa Rica~", "Croacia~", "Chipre~", " República Checa ~ "," Dinamarca ~ "," Ecuador ~ "," El Salvador ~ "," Estados Unidos ~ "," España ~ "," Estonia ~ "," Finlandia ~ "," Francia ~ ", "Alemania~", "Grecia~", "Guatemala~", "Honduras~", "Hungría~", "Irlanda~", "Italia~", "Letonia~", "Lituania~", "Luxemburgo~", "Malta~", "México~", "Nicaragua~", "Países Bajos~", "Panamá~", "Paraguay~", "Perú~", "Polonia~", "Portugal~", "Rumania~", "Romainia~", "Eslovaquia~", "Eslovenia~", "España~", "Suecia~", "Reino Unido~");

function populateCountryCode( countryElementId, codeElementId ,OTPElementId){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;
	var selectedCountryCode = document.getElementById(countryElementId).options[selectedCountryIndex].getAttribute('data-code');
	document.getElementById( codeElementId ).value = selectedCountryCode;
	
	if( OTPElementId ){
		populateOTP(OTPElementId );
	}
	
	
}

function populateCountries(countryElementId, codeElementId, OTPElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('','');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		arrCD = country_arr[i].split('~');
		
		var option = document.createElement("option");
		option.setAttribute("value", arrCD[0].trim());
		option.setAttribute("data-code", arrCD[1].trim());
		option.text = (arrCD[0].trim());
		countryElement.appendChild(option);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( codeElementId ){
		countryElement.onchange = function(){
			populateCountryCode( countryElementId, codeElementId ,OTPElementId );
		};
	}
}