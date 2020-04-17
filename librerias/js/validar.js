
function validar(){
    var edad= document.getElementById("edad").value;


    if(edad < 1 ) {
        alert("la edad contiene errores");
        return false;
    }

}


function valideKey(evt)
  {
    var code = (evt.which) ? evt.which : evt.keyCode;
    if(code==8) 
    {
      //borrar
      return true;
    }
    else if(code>=48 && code<=57) 
    {
      //numero
      return true;
    }
    else
    {
      alert("Solo números, por favor");
      return false;
    }
  }

  function sololetras(e) {
	key=e.keyCode || e.which;
 
	teclado=String.fromCharCode(key).toLowerCase();
 
	letras="qwertyuiopasdfghjklñzxcvbnm ";
 
	especiales="8-37-38-46-164";
 
	teclado_especial=false;
 
	for(var i in especiales){
		if(key==especiales[i]){
			teclado_especial=true;
			break;
		}
	}
 
	if(letras.indexOf(teclado)==-1 && !teclado_especial){
        alert("Solo letras, por favor");
        return false;
	}
 
}
  