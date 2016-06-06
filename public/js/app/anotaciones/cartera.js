        //      SAVE AJAX   

        $('body').on('click', '#btn-guardar-cartera', function(event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            })

            var formId = '#form-guardar-cartera';
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
                        resultado = jQuery.parseJSON(result);
                        //alert(result);                    
                        if (resultado.tipo=="Error") {
                            swal(resultado.mensaje);
                        }
                        else{                                                        
                            swal("Tú cobro ha sido guardado!");
                            load_notes();  
                            load_modal_cartera();
                        }                            
                    }
                },
                error: function(){
                    console.log('Error');
                }
            });                    
    });
//      END SAVE AJAX    <---


//   REPORTAR COBRO   //

$('body').on('click', '.btn-reportar', function(event) {
    serial = $(this).attr('data-serial');
    id     = $(this).attr('data-id');

    console.log("serial: "+serial+" id:"+id);

    function deducirCobro(id){
            event.preventDefault();
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('input[name=_token]').attr('content') }
            })
            var formId = '#form-actualizar-cobro_'+id;
            $.ajax({
                url: '/update/cobro',
                type: 'POST',
                data: $(formId).serialize(),
                dataType: 'html',
                success: function(result){                    
                        resultado = jQuery.parseJSON(result);
                        //alert(result);                    
                        if (resultado.tipo=="Error") {
                            swal(resultado.mensaje);
                        }
                        else{                                                        
                            console.log('OK deducir');
                        }                            
                    
                },
                error: function(){
                    console.log('Error');
                }
            });                    
    }
swal(
{   
    title: "¿Estas seguro?",
    text: "Estas por reportar el ingreso de dinero",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Si!, Confirmo Pago",
    cancelButtonText: "No",
    closeOnConfirm: false,
    closeOnCancel: false },

    function(isConfirm){ 
      if (isConfirm) {
            //$('#reporte-de-cobro').modal('show');
            swal("Reportado!", "El pago se ha ingresado en el sistema", "success");
            deducirCobro(id);

        }
        else {     swal("Cancelado!", "El reporte ha sido cancelado", "error");   } });
});
