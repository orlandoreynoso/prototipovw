
function mostrar_contenido(valor1){

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { "valor_neto1" : valor1};

$.ajax({
	data: parametros,
	url: 'libs/cargarformularios.php',
	type: 'post',
	async: true,
	beforeSend: function(){ $("#formulariogenerico").html("Cargando el formulario..."); },
	//success: function(response){ $("#formulariogenerico").html(response); },
	//.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
});


}

