        $('#inicio_servicio').datetimepicker({
            format:'Y-m-d H:i:00',
            step:"30",
            onShow:function( ct ){
                this.setOptions({
                    maxDate:$('#fin_servicio').val()?$('#fin_servicio').val():false
                })
            },
            lang:'es',
            timepicker:true
        });
        $('#fin_servicio').datetimepicker({
            step:"30",
            format:'Y-m-d H:i:00',
            onShow:function( ct ){
                this.setOptions({
                    minDate:$('#inicio_servicio').val()?$('#inicio_servicio').val():false
                })
            },
            lang:'es',
            timepicker:true
        });

        //      SAVE AJAX   

        $('body').on('click', '#btn-guardar-servicio', function(event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            })

            var formId = '#form-guardar-servicio';
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
                        resultado = jQuery.parseJSON(result);                                          
                        if (resultado.tipo=="Error") {
                            sweetAlert(resultado.mensaje,'','warning');
                        }else{
                            $(formId)[0].reset();
                            swal("El servicio se ha registrado con éxito!"); 
                            load_servicios();
                        }                        
                    }
                },
                error: function(){
                    console.log('Error');
                }
            });                    
    });
//      END SAVE AJAX    <---


$('body').on('click', '.btn-comprobante-servicio', function(event) {
    event.preventDefault();
    id_anotacion = $(this).attr('data-id');
    $('#id_anotacion_servicio').val(id_anotacion);
    $('#modal-comprobante-servicio').modal('show');
});


/* RETENCIÓN */
$('body').on('click', '#btn-retencion', function(event) {
    event.preventDefault();
    $('#tabla-retencion').modal('show');
});


/**/

$("#costos_operativos, #valor_servicio, #iva, #retencion_select").change(function(){
 $( "#retencion_select option:selected" ).each(function() {
   tarifa=$(this).attr('data-tarifas');
     vs=$("#valor_servicio").val(); //valor Servicio
     iva=$("#iva").val(); // I.V.A
     costos =$("#costos_operativos").val(); // costos operativos
     val_rt = vs * tarifa / 100; //valor retención
     val_iva= vs * iva / 100; //valor IVA

     utilidad_neta = vs - val_rt - val_iva - costos ;

     //container_RT
     //container_iva
     $("#container_RT").html(val_rt); $("#valor_retencion").val(val_rt);
     $("#container_iva").html(val_iva); $("#valor_iva").val(val_iva);
     $("#container_utilidad").html(utilidad_neta); $("#utilidad_neta").val(utilidad_neta);
    //alert("The text has been changed. :: "+tarifa+" ::"+vs);
  });

});