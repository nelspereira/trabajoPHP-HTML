//funciones en javascript

function validar_texto(Texto,Texto2){
	if (Texto.value.length == 0  || Texto2.value.length == 0){
		Texto.focus();
		alert('Campo requerido');
		return false;
		}
		else{
			return true;
			};
			
		
	};
	function mensaje(Texto){
	alert(Texto);
			
	};
	
	function ir(Direccion){
setTimeout("location.href = '"+Direccion+"' ;",0);
		}