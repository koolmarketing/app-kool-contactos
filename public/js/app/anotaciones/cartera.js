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

            /**/
            // swal({   
            //     title: "Are you sure?",
            //     text: "You will not be able to recover this imaginary file!",
            //     type: "warning",
            //     showCancelButton: true,
            //     confirmButtonColor: "#DD6B55",
            //     confirmButtonText: "Yes, delete it!",
            //     cancelButtonText: "No, cancel plx!",
            //     closeOnConfirm: false,   closeOnCancel: false },
            //     function(isConfirm){
            //        if (isConfirm) {
            //           swal("Deleted!", "Your imaginary file has been deleted.", "success");
            //       } else
            //       {     
            //         swal("Cancelled", "Your imaginary file is safe :)", "error");
            //     } });
            /**/
        }
        else {     swal("Cancelado!", "El reporte ha sido cancelado", "error");   } });
    });
