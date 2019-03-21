function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;
  
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
      return true;
    }  
    //Tecla de + , siempre la permite  
    /*if (tecla == 43) {
      return true;
    }*/
  
    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }
  