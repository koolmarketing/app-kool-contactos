/*
* Load Anotaciones {empresa/anotacion_imprimir_tipo/[id]}
*
*/




function load_comentarios(){
	$("#content_comentarios").load('/empresa/anotacion_imprimir_tipo/comentario');
}

function load_alertas(){
	$("#content_alertas").load('/empresa/anotacion_imprimir_tipo/alerta');
}

function load_recordatorios(){
	$("#content_recordatorios").load('/empresa/anotacion_imprimir_tipo/recordatorio');
}

function load_cobros(){
	$("#content_cobros").load('/empresa/anotacion_imprimir_tipo/cobro');
}

function load_servicios(){
	$("#content_servicios").load('/empresa/servicios_imprimir/all');
}



function get_comentarios(){
	$("#get_comentarios").load('/anotaciones/empresa/contar-anotaciones');
}

function get_alertas(){
	$("#get_alertas").load('/anotaciones/empresa/contar-alertas');
}

function get_recordatorios(){
	$("#get_recordatorios").load('/anotaciones/empresa/contar-recordatorios');
}

function get_cobros(){
	$("#get_cobros").load('/anotaciones/empresa/contar-cobros');
}


function registerHome(){
	load_comentarios();
	load_alertas();
	load_recordatorios();
	load_cobros();

	get_comentarios();
	get_alertas();
	get_recordatorios();
	get_cobros();
}

