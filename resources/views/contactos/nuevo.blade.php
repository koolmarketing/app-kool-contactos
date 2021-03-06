@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}
{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
@stop
@section('content')

<div class="container-fluid">

    <div class="col-lg-10 col-lg-offset-1">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Básicos</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información Profesional</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Datos de Contacto</a></li>
            <li role="presentation"><a href="#familia" aria-controls="familia" role="tab" data-toggle="tab">Familia</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Información Personal</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="content-box big-box box-shadow">
                    {!!Form::open(array('action' => 'ContactoController@GuardarClientes', 'method' => 'post', 'id' => 'guarda_cliente','files'=>true));!!}

                    <div class="col-md-6">
                       <div class="col-md-12">
                        <input type="file" name="foto">
                        <p class="help-text">Una foto</p>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="nombres" class="form-control material" id="" placeholder="">
                        <p class="help-text">Nombres.</p>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="apellidos" class="form-control material" id="" placeholder="">
                        <p class="help-text">Apellidos</p>
                    </div>
                </div>


                <div class="form-group col-md-3">
                    <input type="text" name="cumpleaños" class="form-control material date" id="" placeholder="">
                    <p class="help-text">Cumpleaños (dd-mm-aaaa)</p>
                </div>

                <div class="form-group col-lg-3">

                    <div class="form-group">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="masculino" name="sexo" checked="">
                            <label for="inlineRadio1" class="text-p-orders"> Hombre </label>
                        </div>
                        <div class="radio radio-danger radio-inline">
                            <input type="radio" id="inlineRadio2" value="femenino" name="sexo">
                            <label for="inlineRadio2" class="text-p-orders"> Mujer </label>
                        </div>
                    </div>

                </div>
                <br><br>

                <div class="form-group col-md-6">
                    <input name="ciudad_actual" type="text" class="form-control material geocomplete" id="input3" >
                    <p class="help-text">Ciudad Actual</p>
                </div>
                <div class="form-group col-md-6">
                    <input name="ciudad_natal" type="text" class="form-control material geocomplete" id="input4" >
                    <p class="help-text">Ciudad Natal</p>
                </div>
            </div>


        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="content-box big-box box-shadow">

                <div class="form-group col-md-4">
                    <input name="profesion" type="text" class="form-control material">
                    <p class="help-text">Profesión</p>
                </div>
                <div class="form-group col-md-4">
                    <input name="empresa_actual" type="text" class="form-control material">
                    <p class="help-text">Empresa Actual</p>
                </div>

                <div class="form-group col-md-4">
                    <input name="cargo" type="text" class="form-control material">
                    <p class="help-text">Cargo</p>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="messages">
            <div class="content-box big-box box-shadow">
                <div class="form-group col-md-4">
                    <input type="text" name="telefono_oficina" class="form-control material" data-mask="000-00-00" data-mask-clearifnotmatch="true">
                    <p class="help-text">Teléfono Oficina</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="telefono_movil" class="form-control material" data-mask="(000) 000-0000" data-mask-clearifnotmatch="true">
                    <p class="help-text">Teléfono Móvil</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="telefono_casa" class="form-control material" data-mask="000-00-00" data-mask-clearifnotmatch="true">
                    <p class="help-text">Teléfono Casa</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="email" name="email_corporativo" class="form-control material">
                    <p class="help-text">Email Corporativo</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="email" name="email_personal" class="form-control material">
                    <p class="help-text">Email Personal</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="skype" class="form-control material">
                    <p class="help-text">Skype</p>
                </div>

                <div class="form-group col-md-4">
                    <input type="text" name="facebook" class="form-control material" placeholder="">
                    <p class="help-text">Facebook</p>
                </div>

                <div class="form-group col-md-4">
                    <input type="text" name="twitter" class="form-control material" placeholder="">
                    <p class="help-text">Twitter</p>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="linkedin" class="form-control material" placeholder="">
                    <p class="help-text">Linkedin</p>
                </div>

            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="familia">
            <div class="content-box big-box box-shadow">
                <div class="form-group col-md-12">

                    <button type="button" id="add_family" class="btn btn-primary btn-lg btn-block">Agregar Familiar</button>
                    <br><br>

                    <div id="contenedor-familiares" class="col-md-12">

                        @for ($i = 0; $i < 15 ; $i++)
                        <!-- Item Familiar -->
                        <div id="familia_{!!$i!!}" class="col-md-12 item-familiar">
                            <div class="form-group col-md-2">
                                <select class="form-control material parentesco" id="familia" name="familia_{!!$i!!}[parentesco][]" >
                                    <option></option>
                                    <option value="hijo">Hijo</option>
                                    <option value="hija">Hija</option>
                                    <option value="pareja">Pareja</option>
                                    <option value="hermano">Hermano</option>
                                    <option value="hermana">Hermana</option>
                                    <option value="padre">Padre</option>
                                    <option value="madre">Madre</option>
                                    <option value="primo">Primo</option>
                                    <option value="prima">Prima</option>
                                </select>
                                <p class="help-text">Parentesco</p>
                            </div><div class="form-group col-md-4">
                            <input type="text" name="familia_{!!$i!!}[nombre][]" class="form-control material" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" name="familia_{!!$i!!}[birthday][]" class="form-control material cumpleaños" placeholder="Cumpleaños">
                            <p class="help-text">dd-mm-aaaa</p>
                        </div>
                        <div class="col-md-2 col-md-offset-1 opciones-familia">
                            <button type="button" data="familia_{!!$i!!}" class="btn btn-primary close_item_familia"><i class="icon-cancel"></i></button>
                        </div>
                    </div>
                    <!-- Fin Item Familiar -->
                    @endfor

                </div>

                        <!-- <input type="text" name="nombres" class="form-control material" id="" placeholder="">
                        <p class="help-text">Nombres.</p> -->
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="content-box big-box box-shadow">


                    <div class="form-group col-md-12">                    
                     <select name="hobbies[]" id="hobbies" class="form-control material" multiple="multiple" style="width: 100%">
                         @foreach ($data->hobbits as $hobbits)
                         <option value="{!! $hobbits !!}">{!! $hobbits !!}</option>
                         @endforeach
                     </select>
                     <p class="help-text">Hobbits</p>
                 </div>

                 <div class="form-group col-md-4">
                    <select name="religion" id="" class="form-control material">
                        @foreach ($data->religion as $religion)
                        <option value="{!! $religion !!}">{!! $religion !!}</option>
                        @endforeach
                    </select>
                    <p class="help-text">Religión</p>
                </div>

                <div class="form-group col-md-4">
                    <select name="situacion_sentimental" id="situacion_sentimental" class="form-control material">
                     @foreach ($data->situacion_sentimental as $s_s)
                     <option value="{!! $s_s !!}">{!! $s_s !!}</option>
                     @endforeach
                 </select>
                 <p class="help-text">Situación Sentimental</p>
             </div>

             <div class="form-group col-md-4">
                <select name="orientacion_sexual"  class="form-control material" >
                    @foreach ($data->orientacion as $sexo)
                    <option value="{!! $sexo !!}">{!! $sexo !!}</option>
                    @endforeach

                </select>
                <p class="help-text">Orientación S.</p>
            </div>

            <div class="form-group col-md-4" id="div_aniversario">
<input type="text" id="aniversario" name="aniversario" class="form-control material date" placeholder=""><p class="help-text">Aniversario</p>
            </div>

            <br>

            {!! Form::button('Guardar Contacto', array('class' => 'btn btn-lg btn-info pull-right',"id"=>"guardar_persona")); !!}

        </div>
    </div>{!! Form::close() !!}
</div>
</div>
</div>
@stop
@section('add_scripts')
{!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
{!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
{!! HTML::script('js/mask.js') !!}
{!! HTML::script('vendor/ubilabs-geocomplete-4124db8/jquery.geocomplete.min.js') !!}
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
{!! HTML::script('vendor\select2-master\dist\js\select2.min.js') !!}
<script>
    //      SAVE AJAX     
    $('body').on('click', '#guardar_persona', function(event) {

        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        })
        event.preventDefault();
        var formId = '#guarda_cliente';
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
                }
            },
            error: function(){
                console.log('Error');
            }
        });
    });
//      END SAVE AJAX    <---
</script>

<script>
    $(document).ready(function() {
            //Mascara
            verificar_f ();
            $('.date').mask('00-00-0000');
            $('.cumpleaños').mask('00-00-0000');
            $('#thebox').picEdit();
            $(".form_tags").tagsinput('items');
            $("#hobbies").select2();
            $(".multi_tags").select2();
        });
    </script>

    <script>
     $.log = function(message){
      var $logger = $("#logger");
      $logger.html($logger.html() + "\n * " + message );}
      $(function(){
        $(".geocomplete").geocomplete()
        .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
        })
        .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
        })
        .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
        });
        $(".find").click(function(){
          $(".geocomplete").trigger("geocode");
      });
        $(".examples a").click(function(){
          $(".geocomplete").val($(this).text()).trigger("geocode");
          return false;
      });
    });

      var fam = 0;


      var familiares = new Object;

      familiares = {  _0 :{ nombre : "familia_0", visible : false}, _1 :{ nombre : "familia_1", visible : false}, _2 :{nombre : "familia_2", visible :  false}, _3 : {nombre : "familia_3", visible : false}, _4 : {nombre : "familia_4", visible : false},  _5 : {nombre : "familia_5", visible : false},  _6 : {nombre : "familia_6", visible : false}, _7 : {nombre : "familia_7", visible : false}, _8 : {nombre : "familia_8", visible : false}, _9 : {nombre : "familia_9", visible : false}, _10 : {nombre : "familia_10", visible : false}, _11 : {nombre : "familia_11", visible : false}, _12 : {nombre : "familia_12", visible : false},_13 : {nombre : "familia_13", visible : false}, _14 : {nombre : "familia_14", visible : false}, _15 : {nombre : "familia_15", visible : false},_16 : {nombre : "familia_16", visible : false}};


      function verificar_f (){
        for (var i = 0; i < 16; i++) {
          if (familiares["_"+i+""].visible == false) {
            familiares["_"+i+""].visible = false;
            console.log("item" +i+ " escondido");   
            ite = familiares["_"+i+""].nombre;
            $("#"+ite+"").hide();     
            $("#div_aniversario").hide();        
        }
    }
};


function agregar_item_familia (){

    i=0;
    encontrado = false;
    while(encontrado==false){
        if (familiares["_"+i+""].visible==false){
            ite = familiares["_"+i+""].nombre;
            familiares["_"+i+""].visible = true;
            $("#"+ite+"").show();
            encontrado = true;
            console.log("item "+i+" desbloqueado");
        } else{i+=1; console.log("nada de nada");}
    }
};


$("body").on('click', '.close_item_familia', function(event) {
    event.preventDefault();
    data=$(this).attr('data');
    console.log(data);

    i=0;
    encontrado = false;
    while(encontrado==false){
        if (familiares["_"+i+""].nombre==data){
            ite = familiares["_"+i+""].nombre;
            familiares["_"+i+""].visible = false;
            $("#"+ite+"").hide();
            encontrado = true;
    }else{i+=1; }
    
}});



$('body').on('click', '#add_family', function(event) {
agregar_item_familia ();
});

$('body').on('click', '.parentesco', function(event) {
  event.preventDefault();
  $(this).change(function(event) {
    value=$(this).val();
    if (value=="pareja") {
        console.log(value);
    } else{
    }      
});
});


$('body').on('click', '#situacion_sentimental', function(event) {
  event.preventDefault();
  $(this).change(function(event) {
    value=$(this).val();
    if (value=="Casado(a)" || value=="Unión libre" || value=="Noviazgo") {
        console.log(value);
        $("#div_aniversario").show('');
    } else{
       $("#div_aniversario").hide('');
   }      
});
});













</script>



@stop