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


/*=====  Start Recaudo Home   ======*/


$(document).ready(function() {

  $.get( "calcular_recaudo/home", function( data ) {

    console.log(data);

  meta_total_dia  = data.dia.meta_total[0].total;
  meta_actual_dia = data.dia.meta_actual[0].total;
  porcentaje_dia  = meta_actual_dia*100/meta_total_dia;


if (meta_total_dia==null) { meta_total_dia = 0;}
  $('#meta_dia_total').html($.number( meta_total_dia,0 ));
  $('#recaudo_dia').attr('aria-valuenow', porcentaje_dia).css('width', parseInt(porcentaje_dia)+"%");
  $('#tile-porcentaje_dia').html(parseInt(porcentaje_dia)+"%");

  


  meta_total_semana  = data.semana.meta_total[0].total;
  meta_actual_semana = data.semana.meta_actual[0].total;
  porcentaje_semana  = meta_actual_semana*100/meta_total_semana;
if (meta_total_semana==null) { meta_total_semana = 0;}
  $('#meta_semana_total').html($.number( meta_total_semana,0 ));
  $('#recaudo_semana').attr('aria-valuenow', porcentaje_semana).css('width', parseInt(porcentaje_semana)+"%");
  $('#tile-porcentaje_semana').html(parseInt(porcentaje_semana)+"%");

    meta_total_mes  = data.mes.meta_total[0].total;
  meta_actual_mes = data.mes.meta_actual[0].total;
  porcentaje_mes  = meta_actual_mes*100/meta_total_mes;
if (meta_total_semana==null) { meta_total_mes = 0;}
  $('#meta_mes_total').html($.number( meta_total_mes,0 ));
  $('#recaudo_mes').attr('aria-valuenow', porcentaje_mes).css('width', parseInt(porcentaje_mes)+"%");
  $('#tile-porcentaje_mes').html(parseInt(porcentaje_mes)+"%");


  meta_total_segundotrimestre  = data.segundo_trimestre.meta_total[0].total;
  meta_actual_segundotrimestre = data.segundo_trimestre.meta_actual[0].total;
  porcentaje_segundotrimestre  = meta_actual_mes*100/meta_total_segundotrimestre;
if (meta_total_segundotrimestre==null) { meta_total_segundotrimestre = 0;}
  $('#meta_trimestre_total').html($.number( meta_total_segundotrimestre,0 ));
  $('#recaudo_trimestre').attr('aria-valuenow', porcentaje_segundotrimestre).css('width', parseInt(porcentaje_segundotrimestre)+"%");
  $('#tile-porcentaje_trimestre').html(parseInt(porcentaje_segundotrimestre)+"%");

  meta_total_segundosemestre  = data.segundo_semestre.meta_total[0].total;
  meta_actual_segundosemestre = data.segundo_semestre.meta_actual[0].total;
  porcentaje_segundosemestre  = meta_actual_segundosemestre*100/meta_total_segundosemestre;
if (meta_total_semana==null) { meta_total_segundosemestre = 0;}
  $('#meta_semestre_total').html($.number( meta_total_segundosemestre,0 ));
  $('#recaudo_semestre').attr('aria-valuenow', porcentaje_segundosemestre).css('width', parseInt(porcentaje_segundosemestre)+"%");
  $('#tile-porcentaje_semestre').html(parseInt(porcentaje_segundosemestre)+"%");

   meta_total_ano  = data.ano.meta_total[0].total;
  meta_actual_ano = data.ano.meta_actual[0].total;
  porcentaje_ano  = meta_actual_mes*100/meta_total_mes;
if (meta_total_ano==null) { meta_total_ano = 0;}
  $('#meta_ano_total').html($.number( meta_total_ano,0 ));
  $('#recaudo_ano').attr('aria-valuenow', porcentaje_ano).css('width', parseInt(porcentaje_ano)+"%");
  $('#tile-porcentaje_ano').html(parseInt(porcentaje_ano)+"%");


});

}); 

// 	$.get( "calcular_recaudo/dia", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;

// if (meta_total==null) {
//   meta_total = 0;
// }

// porcentaje = $.number( porcentaje, 2 );
//   $('#meta_dia_total').html($.number( meta_total,0 ));
//   $('#recaudo_dia').attr('aria-valuenow', porcentaje);
//   $('#recaudo_dia').css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_dia').html(porcentaje+"%");

//   console.log("Dia "+meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });

// //SEMANA
// $.get( "calcular_recaudo/semana", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;
// if (meta_total==null) { meta_total = 0;}
//   $('#meta_semana_total').html($.number( meta_total,0 ));
//   $('#recaudo_semana').attr('aria-valuenow', porcentaje).css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_semana').html(parseInt(porcentaje)+"%");

//   console.log(meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });
// 	//FIN SEMANA

// 	//MES
// 	$.get( "calcular_recaudo/mes", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;

//   $('#meta_mes_total').html($.number( meta_total,0 ));
//   $('#recaudo_mes').attr('aria-valuenow', porcentaje).css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_mes').html(parseInt(porcentaje)+"%");

//   console.log(meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });
// 	//FIN MES


// 	/*
// 	*
// 	*
// 	*/

// 	//TRIMESTRE
// 	$.get( "calcular_recaudo/segundo_trimestre", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;

//   $('#meta_trimestre_total').html($.number( meta_total,0 ));
//   $('#recaudo_trimestre').attr('aria-valuenow', porcentaje).css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_trimestre').html(parseInt(porcentaje)+"%");

//   console.log(meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });
// 	//FIN TRIMESTRE

// 	/*
// 	*
// 	*
// 	*/

// 	//TRIMESTRE
// 	$.get( "calcular_recaudo/primer_semestre", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;

//   $('#meta_semestre_total').html($.number( meta_total,0 ));
//   $('#recaudo_semestre').attr('aria-valuenow', porcentaje).css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_semestre').html(parseInt(porcentaje)+"%");

//   console.log(meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });
// 	//FIN TRIMESTRE

// 		//TRIMESTRE
// 	$.get( "calcular_recaudo/ano", function( data ) {
//   //$( ".result" ).html( data );
//   meta_total  = data.meta_total[0].total;
//   meta_actual = data.meta_actual[0].total;
//   porcentaje  = meta_actual*100/meta_total;

//   $('#meta_ano_total').html($.number( meta_total,0 ));
//   $('#recaudo_ano').attr('aria-valuenow', porcentaje).css('width', parseInt(porcentaje)+"%");
//   $('#tile-porcentaje_ano').html(parseInt(porcentaje)+"%");

//   console.log(meta_total+" "+meta_actual+" & %%:"+porcentaje);
// });
// 	//FIN TRIMESTRE





/*=====  End Recaudo Home   ======*/
