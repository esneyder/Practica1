

$(document).on('ready',principal);

function principal(){
   $('.triangulito').on('click',mostrarCuadro);
   function mostrarCuadro () {
   	$('.contenedor').toggle('fast');	
   	}	
}