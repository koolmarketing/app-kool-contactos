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
	// load_comentarios();
	// load_alertas();
	// load_recordatorios();
	// load_cobros();

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
    porcentaje_segundotrimestre  = meta_actual_segundotrimestre*100/meta_total_segundotrimestre;
    if (meta_total_segundotrimestre==null) { meta_total_segundotrimestre = 0;}
    $('#meta_trimestre_total').html($.number( meta_total_segundotrimestre,0 ));
    $('#recaudo_trimestre').attr('aria-valuenow', porcentaje_segundotrimestre).css('width', parseInt(porcentaje_segundotrimestre)+"%");
    $('#tile-porcentaje_trimestre').html(parseInt(porcentaje_segundotrimestre)+"%");

    meta_total_primersemestre  = data.primer_semestre.meta_total[0].total;
    meta_actual_primersemestre = data.primer_semestre.meta_actual[0].total;
    porcentaje_primersemestre  = meta_actual_primersemestre*100/meta_total_primersemestre;
    if (meta_total_primersemestre==null) { meta_total_primersemestre = 0;}
    $('#meta_semestre_total').html($.number( meta_total_primersemestre,0 ));
    $('#recaudo_semestre').attr('aria-valuenow', porcentaje_primersemestre).css('width', parseInt(porcentaje_primersemestre)+"%");
    $('#tile-porcentaje_semestre').html(parseInt(porcentaje_primersemestre)+"%");

    meta_total_ano  = data.ano.meta_total[0].total;
    meta_actual_ano = data.ano.meta_actual[0].total;
    porcentaje_ano  = meta_actual_mes*100/meta_total_mes;
    if (meta_total_ano==null) { meta_total_ano = 0;}
    $('#meta_ano_total').html($.number( meta_total_ano,0 ));
    $('#recaudo_ano').attr('aria-valuenow', porcentaje_ano).css('width', parseInt(porcentaje_ano)+"%");
    $('#tile-porcentaje_ano').html(parseInt(porcentaje_ano)+"%");


  });

}); 

/*=====  End Recaudo Home   ======*/



$("body").on('click', '#calendario-alertas, #calendario-anotaciones, #calendario-cobros, #calendario-recordatorios', function(event) {
  event.preventDefault();

  id_btn = $(this).attr('id');
  var name_tarjeta = $(this).attr('data-tarjetas');
  console.log(name_tarjeta);
  $("#tipo_tarjeta").attr('value',name_tarjeta);
  $('#calendario-tarjetas').modal('show');
});


$("body").on('click', '#btn-get-calendario-dia, #btn-get-calendario-semana, #btn-get-calendario-mes, #btn-get-calendario-eitar', function(event) {
  event.preventDefault();
  val = $(this).attr('id');
  inicio = $(this).attr('data-inicio');
  fin    = $(this).attr('data-fin');
  $("#date_timepicker_start").attr('value', inicio);
  $("#date_timepicker_end").attr('value', fin);

  switch(val) {
    case "btn-get-calendario-dia":
    
    break;
    case "btn-get-calendario-semana":
    break;
    case "btn-get-calendario-mes":
    break;
    case "btn-get-calendario-eitar":
    break;
    default:
  }

});


$('body').on('click', '#filtar-tajetas-btn', function(event) {
  event.preventDefault();
  $.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  })

  var formId = '#form-filtrar';
  $.ajax({
    url: $(formId).attr('action'),
    type: $(formId).attr('method'),
    data: $(formId).serialize(),
    dataType: 'html',
    success: function(result){
      if ($(formId).find("input:first-child").attr('value') == 'PUT') {
        var $jsonObject = jQuery.parseJSON(result);
        $(location).attr('href',$jsonObject.url);
      }
      else{

        $(formId)[0].reset();
        console.log(result);
        res=jQuery.parseJSON(result); 
        r_tipo_tarjeta=res.tipo_tarjeta;
        r_inicio = res.inicio;
        r_fin    = res.fin;
        contenedor = selContenedor(res.tipo_tarjeta);

        /*Load*/

        switch (r_tipo_tarjeta) {
          case "alerta":            
            $.post("/get-calendar/tarjetas/home", 
            { "_token": $('meta[name=csrf-token]').attr('content'),
              inicio: ""+r_inicio+"",
              fin:    ""+r_fin+"",
              tipo:   ""+r_tipo_tarjeta+""
            },            
            function(result){
             $("#content_alertas").html(result);
           });

            break;
            case "recordatorio":
            $.post("/get-calendar/tarjetas/home", 
            { "_token": $('meta[name=csrf-token]').attr('content'),
              inicio: ""+r_inicio+"",
              fin:    ""+r_fin+"",
              tipo:   ""+r_tipo_tarjeta+""
            },            
            function(result){
             $("#content_recordatorios").html(result);
           });
            break;
            case "comentario":
            $.post("/get-calendar/tarjetas/home", 
            { "_token": $('meta[name=csrf-token]').attr('content'),
              inicio: ""+r_inicio+"",
              fin:    ""+r_fin+"",
              tipo:   ""+r_tipo_tarjeta+""
            },            
            function(result){
             $("#content_comentarios").html(result);
           });
            break;
            case "cobro":
            $.post("/get-calendar/tarjetas/home", 
            { "_token": $('meta[name=csrf-token]').attr('content'),
              inicio: ""+r_inicio+"",
              fin:    ""+r_fin+"",
              tipo:   ""+r_tipo_tarjeta+""
            },            
            function(result){
             $("#content_cobros").html(result);
           });
            break;
            default:
            return false;
            break;
          }

        // token = $('meta[name=_token]').attr('content');

        // data = {X-CSRF-Token:""+token+"",inicio:""+r_inicio+"",fin:""+r_fin+"",tipo:""+r_tipo_tarjeta+""};

        // $.post("/get-calendar/tarjetas/home", function(data, status){
        //   alert("Data: " + data + "\nStatus: " + status);
        // });



        // r_url = "get-calendar/tarjetas/"+r_inicio+"/"+r_fin+"/"+r_tipo_tarjeta+"/";
        // $(contenedor).load(r_url);
        // swal("Filtro Ok: "+r_url);                             
      }
    },
    error: function(){
      console.log('Error');
    }
  });  
});

function selContenedor(sel){
  switch (sel) {
    case "cobro": return "#content_cobros";   break;
    case "comentario":    return "#content_comentarios";    break;
    case "alerta":    return "#content_alertas";    break;
    case "recordatorio":    return "#content_recordatorios";    break;
    default:    return false;    break;
  }
}


