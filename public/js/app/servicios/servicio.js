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

        function GuardarServicio(data){
            
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
            })

            var formId = '#form-guardar-servicio';
            var serial_data = $.param(data, true ); console.log(serial_data);
            $.ajax({
                url: '/adjuntar-servicio',
                type: 'post',                
                data: serial_data,
                dataType: 'html',
                success: function(result){                   
                    if(result){
                        resultado = jQuery.parseJSON(result);                                          
                        if (resultado.tipo=="Error") {
                            sweetAlert(resultado.mensaje,'','warning');
                        }else{
                            $(formId)[0].reset();
                            swal("El servicio se ha registrado con éxito!"); 
                            load_servicios();
                            vm.AllServices(vm.id);
                        }                        
                    }
                },
                error: function(){
                    console.log('Error');
                }
            });
            }             
    
//      END UPDATE AJAX    <---


        //      UPDATE AJAX   

        function VMUpdateServicio(data){
            
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
            })

            
            var serial_data = $.param(data, true ); console.log(serial_data);
            $.ajax({
                url: '/actualizar-servicio',
                type: 'post',                
                data: serial_data,
                dataType: 'html',
                success: function(result){                   
                    if(result){
                        resultado = jQuery.parseJSON(result);                                          
                        if (resultado.tipo=="Error") {
                            sweetAlert(resultado.mensaje,'','warning');
                        }else{                            
                            swal("El servicio se ha actualizado con éxito!"); 
                            load_servicios();
                            vm.AllServices(vm.id);
                        }                        
                    }
                },
                error: function(){
                    console.log('Error');
                }
            });
            }             
    
//      END UPDATE AJAX    <---




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
     vs=parseFloat($("#valor_servicio").val()); //valor Servicio
     iva=parseFloat($("#iva").val()); // I.V.A
     costos =$("#costos_operativos").val(); // costos operativos
     val_rt = vs * tarifa / 100; //valor retención
     val_iva= (vs*iva)/100; //valor IVA

     utilidad_neta = vs - val_rt - val_iva - costos ;

     valor_total = val_rt + val_iva + vs;

     //container_RT
     //container_iva
     $("#container_RT").html(val_rt); $("#valor_retencion").val(val_rt);
     $("#container_iva").html(val_iva); $("#valor_iva").val(val_iva);
     $("#container_utilidad").html(utilidad_neta); $("#utilidad_neta").val(utilidad_neta);
    //alert("The text has been changed. :: "+tarifa+" ::"+vs);
  });

});