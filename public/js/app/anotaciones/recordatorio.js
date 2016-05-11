        //      SAVE AJAX   

        $('body').on('click', '#btn-guardar-recordatorio', function(event) {
            event.preventDefault();
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                })
                
                var formId = '#form-guardar-recordatorio';
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
                            swal("Tú recordatorio ha sido guardado!");
                            load_notes(); 
                        }
                    },
                    error: function(){
                        console.log('Error');
                    }
                });                    
        });
//      END SAVE AJAX    <---