
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



function guardar(valor1,valor2){

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { "valor_guardar" : valor1, "ingreso": valor2};

$.ajax({
	data: parametros,
	url: 'libs/cargar-guardar.php',
	type: 'post',
	async: true,
	beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
	//success: function(response){ $("#formulariogenerico").html(response); },
	//.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
});


}

