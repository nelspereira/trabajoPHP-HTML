/*funciones en javascript  
personalizadas además no debe ir orientado a objetos sino estructuradas
se puede utilizar Sobrecarga */

function validar_texto(Texto){
	if (Texto.value.length){
		Texto.focus();
		alert('Campo requerido');
		return false;
		}
		else{
			return true;
			};
			
		
	};

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