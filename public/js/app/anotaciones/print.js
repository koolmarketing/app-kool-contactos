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