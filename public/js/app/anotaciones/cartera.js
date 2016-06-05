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
                        alert(result);
                        

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