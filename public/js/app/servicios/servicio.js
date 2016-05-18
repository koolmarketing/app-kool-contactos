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
                
                var formId = '#form-guardar-alerta';
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
                            swal("El servicio se ha registrado con éxito!");
                            load_notes(); 
                        }
                    },
                    error: function(){
                        console.log('Error');
                    }
                });                    
        });
//      END SAVE AJAX    <---