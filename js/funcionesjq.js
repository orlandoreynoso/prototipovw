
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



function guardar_persona(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs
  cod_persona=document.nuevo_empleado.cod_persona.value;
  nombres=document.nuevo_empleado.nombres.value;
  apellidos=document.nuevo_empleado.apellidos.value; 
  dia_in=document.nuevo_empleado.dia_in.value;
  mes_in=document.nuevo_empleado.mes_in.value;
  anio_in=document.nuevo_empleado.anio_in.value;
  estado=document.nuevo_empleado.estado.value;
  direccion=document.nuevo_empleado.direccion.value;
  ingreso=document.nuevo_empleado.ingreso.value; 


//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
	"cod_persona" : cod_persona, 
	"nombres" : nombres, 
	"apellidos" : apellidos,
	"dia_in" : dia_in, 
	"mes_in" : mes_in, 
	"anio_in" : anio_in,
	"estado" : estado, 
	"direccion" : direccion, 
	"ingreso" : ingreso
};

$.ajax({
	data: parametros,
	url: 'libs/guardar-persona.php',
	type: 'post',
	async: true,
	beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
	//success: function(response){ $("#formulariogenerico").html(response); },
	//.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
    //	LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  cod_persona=document.nuevo_empleado.cod_persona.value="";
  nombres=document.nuevo_empleado.nombres.value="";
  apellidos=document.nuevo_empleado.apellidos.value=""; 
  dia_in=document.nuevo_empleado.dia_in.value="";
  mes_in=document.nuevo_empleado.mes_in.value="";
  anio_in=document.nuevo_empleado.anio_in.value="";
  estado=document.nuevo_empleado.estado.value="";
  direccion=document.nuevo_empleado.direccion.value="";
  ingreso=document.nuevo_empleado.ingreso.value=""; 

}

}

/*===============================================*/


function guardar_puesto(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs
  cod_puesto=document.nuevo_dato.cod_puesto.value;
  descripcion=document.nuevo_dato.descripcion.value;
  estado=document.nuevo_dato.estado.value;
  ingreso=document.nuevo_dato.ingreso.value;   

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "cod_puesto" : cod_puesto, 
  "descripcion" : descripcion, 
  "estado" : estado,
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-puesto.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  cod_puesto=document.nuevo_dato.cod_puesto.value="";
  descripcion=document.nuevo_dato.descripcion.value="";
  estado=document.nuevo_dato.estado.value="";
}

}


/*===============================================*/


function guardar_tipo(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs
  cod_tipo=document.nuevo_dato.cod_tipo.value;
  des_id=document.nuevo_dato.des_id.value;  
  dia_in=document.nuevo_dato.dia_in.value;
  mes_in=document.nuevo_dato.mes_in.value;
  anio_in=document.nuevo_dato.anio_in.value;
  estado=document.nuevo_dato.estado.value;
  ingreso=document.nuevo_dato.ingreso.value;   

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "cod_tipo" : cod_tipo,
  "des_id" : des_id,  
  "dia_in" : dia_in, 
  "mes_in" : mes_in, 
  "anio_in" : anio_in,
  "estado" : estado,
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-tipo.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  cod_tipo=document.nuevo_dato.cod_tipo.value="";
  usuario=document.nuevo_dato.usuario.value;    
  clave=document.nuevo_dato.clave.value="";
  estado=document.nuevo_dato.estado.value="";
  anio_in=document.nuevo_dato.anio_in.value="";
  estado=document.nuevo_dato.estado.value="";
}

}


/*============= GUARDAR NUEVO EMPLEADO ==========================*/

function guardar_empleado(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs
  id_persona=document.nuevo_dato.id_persona.value;
  usuario=document.nuevo_dato.usuario.value;  
  clave=document.nuevo_dato.clave.value;
  estado=document.nuevo_dato.estado.value;
  id_puesto=document.nuevo_dato.id_puesto.value;
  salario_base=document.nuevo_dato.salario_base.value;
  bonificacion=document.nuevo_dato.bonificacion.value;
  cod_id=document.nuevo_dato.cod_id.value;  
  ingreso=document.nuevo_dato.ingreso.value;   

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "id_persona" : id_persona,
  "usuario" : usuario,  
  "clave" : clave, 
  "estado" : estado, 
  "id_puesto" : id_puesto,
  "salario_base" : salario_base,
   "bonificacion" : bonificacion, 
  "cod_id" : cod_id,  
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-empleado.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_persona=document.nuevo_dato.id_persona.value= "";
  usuario=document.nuevo_dato.usuario.value= "";  
  clave=document.nuevo_dato.clave.value= "";
  estado=document.nuevo_dato.estado.value= "";
  id_puesto=document.nuevo_dato.id_puesto.value= "";
  salario_base=document.nuevo_dato.salario_base.value= "";
  bonificacion=document.nuevo_dato.bonificacion.value= "";
  cod_id=document.nuevo_dato.cod_id.value= "";  
  ingreso=document.nuevo_dato.ingreso.value= "";  
}

}


/*=============== GUARDAR NUEVA BODEGA ======================*/
function guardar_bodega(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs

  id_bodega=document.nuevo_dato.id_bodega.value;
  id_empresa=document.nuevo_dato.id_empresa.value;  
  id_proyecto=document.nuevo_dato.id_proyecto.value;    
  nom_bodega=document.nuevo_dato.nom_bodega.value;
  direccion=document.nuevo_dato.direccion.value;
  dia_in=document.nuevo_dato.dia_in.value;
  mes_in=document.nuevo_dato.mes_in.value;
  anio_in=document.nuevo_dato.anio_in.value;
  estado=document.nuevo_dato.estado.value;
  ingreso=document.nuevo_dato.ingreso.value;   

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "id_bodega" : id_bodega,
  "id_empresa" : id_empresa,  
  "id_proyecto" : id_proyecto,    
  "nom_bodega" : nom_bodega, 
  "direccion" : direccion, 
  "dia_in" : dia_in, 
  "mes_in" : mes_in, 
  "anio_in" : anio_in,
  "estado" : estado,
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-bodega.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos clavo."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_bodega=document.nuevo_dato.id_bodega.value= "";
  id_empresa=document.nuevo_dato.id_empresa.value= "";  
  id_proyecto=document.nuevo_dato.id_proyecto.value= "";    
  nom_bodega=document.nuevo_dato.nom_bodega.value= "";
  direccion=document.nuevo_dato.direccion.value= "";
  dia_in=document.nuevo_dato.dia_in.value="";
  mes_in=document.nuevo_dato.mes_in.value="";
  anio_in=document.nuevo_dato.anio_in.value="";
  estado=document.nuevo_dato.estado.value= "";
  ingreso=document.nuevo_dato.ingreso.value= "";  
}

}

/*======= MOVIMIENTO BODEGA ========================*/

function guarda_movimiento_bodega(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs

  id_bodega=document.nuevo_dato.id_bodega.value;  
  tipo_movimiento=document.nuevo_dato.tipo_movimiento.value;  
  tipo_operacion=document.nuevo_dato.tipo_operacion.value;  
  ingreso=document.nuevo_dato.ingreso.value;   

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
   "id_bodega" : id_bodega,  
  "tipo_movimiento" : tipo_movimiento,   
  "tipo_operacion" : tipo_operacion,  
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-movimiento-bodega.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos un error, revisa."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_bodega=document.nuevo_dato.id_bodega.value= "";  
  tipo_movimiento=document.nuevo_dato.tipo_movimiento.value= "";  
  tipo_operacion=document.nuevo_dato.tipo_operacion.value= "";  
  ingreso=document.nuevo_dato.ingreso.value= "";  
}

}

/*============= NUEVA ORDEN ========================*/

function guardar_orden(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs

  id_bodega=document.nuevo_dato.id_bodega.value;    
  tipo_movimiento=document.nuevo_dato.tipo_movimiento.value;
  tipo_operacion=document.nuevo_dato.tipo_operacion.value;
  ingreso=document.nuevo_dato.ingreso.value;    

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "id_bodega" : id_bodega, 
  "tipo_movimiento" : tipo_movimiento,
  "tipo_operacion" : tipo_operacion,   
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-nueva-orden.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos un error, revisa."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_bodega=document.nuevo_dato.id_bodega.value = "";    
  tipo_movimiento=document.nuevo_dato.tipo_movimiento.value = "";
  tipo_operacion=document.nuevo_dato.tipo_operacion.value = "";
  ingreso=document.nuevo_dato.ingreso.value = "";     
}

}


/*============= NUEVO TIPO DE PRODUCTO   ========================*/

function guardar_tipo_producto(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs

  id_tp=document.nuevo_dato.id_tp.value;
  descripcion=document.nuevo_dato.descripcion.value;
  ingreso=document.nuevo_dato.ingreso.value;

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = { 
  "id_tp" : id_tp,
  "descripcion" : descripcion, 
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-tipo-producto.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos un error, revisa."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_tp=document.nuevo_dato.id_tp.value = "";
  descripcion=document.nuevo_dato.descripcion.value = "";
  ingreso=document.nuevo_dato.ingreso.value = "";
}

}

/*============= NUEVO PRODUCTO   ========================*/

function guarda_producto(){

 divResultado = document.getElementById('informacion_nuevo_cliente');

  //recogemos los valores de los inputs

  id_producto=document.nuevo_dato.id_producto.value;
  descripcion=document.nuevo_dato.descripcion.value;
  id_marca=document.nuevo_dato.id_marca.value;
  tipo_producto=document.nuevo_dato.tipo_producto.value;
  es_servicio=document.nuevo_dato.es_servicio.value;
  precio=document.nuevo_dato.precio.value;
  ingreso=document.nuevo_dato.ingreso.value;  

//var parametros  = { "valor_neto1" : valor1, "valor_neto2" : valor2 };
var parametros  = {
  "id_producto" : id_producto,
  "descripcion" : descripcion,
  "id_marca" : id_marca, 
  "tipo_producto" : tipo_producto,   
  "es_servicio" : es_servicio,   
  "precio" : precio,
  "ingreso" : ingreso
};

$.ajax({
  data: parametros,
  url: 'libs/guardar-producto.php',
  type: 'post',
  async: true,
  beforeSend: function(){ $("#formulariogenerico").html("Guardando el formulario..."); },
  //success: function(response){ $("#formulariogenerico").html(response); },
  //.val()
    success: function(response){ $("#formulariogenerico").html(response); },
    error: function() { $("#formulariogenerico").html("Parece que tenemos un error, revisa."); }
    //  LimpiarCampos();
});


//función para limpiar los campos
function LimpiarCampos(){
  id_producto=document.nuevo_dato.id_producto.value = "";
  descripcion=document.nuevo_dato.descripcion.value = "";
  id_marca=document.nuevo_dato.id_marca.value = "";
  tipo_producto=document.nuevo_dato.tipo_producto.value = "";  
  es_servicio=document.nuevo_dato.es_servicio.value = "";
  precio=document.nuevo_dato.precio.value = "";
  ingreso=document.nuevo_dato.ingreso.value = ""; 
}

}
