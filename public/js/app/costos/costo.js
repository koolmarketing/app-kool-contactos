        $('#inicio_costo').datetimepicker({
            format:'Y-m-d H:i:00',
            step:"30",
            onShow:function( ct ){
                this.setOptions({
                    maxDate:$('#fin_costo').val()?$('#fin_servicio').val():false
                })
            },
            lang:'es',
            timepicker:true
        });
        $('#fin_costo').datetimepicker({
            step:"30",
            format:'Y-m-d H:i:00',
            onShow:function( ct ){
                this.setOptions({
                    minDate:$('#inicio_costo').val()?$('#inicio_servicio').val():false
                })
            },
            lang:'es',
            timepicker:true
        });

        //      SAVE AJAX   

        $('body').on('click', '#btn-guardar-costo', function(event) {
            event.preventDefault();
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                })
                
                var formId = '#form-guardar-costo';
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
                            swal("El Costo se ha registrado con éxito!"); 
                            load_costos();
                        }
                    },
                    error: function(){
                        console.log('Error');
                    }
                });                    
        });
//      END SAVE AJAX    <---


$('body').on('click', '.btn-comprobante-costo', function(event) {
    event.preventDefault();
    id_costo = $(this).attr('data-id');
    $('#id_anotacion_costo').val(id_costo);
    $('#id_anotacion_costo').prop('value', id_costo)
    
    val = $('#id_anotacion_costo_input').val(id_costo);
    console.log(val);
    $('#modal-comprobante-costo').modal('show');
});
