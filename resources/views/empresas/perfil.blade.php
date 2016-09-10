@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}
{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
{!! HTML::style('bower_components/DataTables/media/css/jquery.dataTables.css') !!}
{!! HTML::style('bower_components/datatables-tabletools/css/dataTables.tableTools.css') !!}
{!! HTML::style('datetimepicker/build/jquery.datetimepicker.min.css') !!}
@stop
@section('content')

<div id="app-profile" attr-id="{!! $data->empresa->id !!}">
  <div class="row" >


    <div class="container">
      {{-- <pre>@{{data_empresa | json}}</pre>   --}}
    </div>
    <input type="hidden" v-model="id" value="{!! $data->empresa->id !!}">

    <div class="col-lg-12">
      <a href="{!! URL::to('/empresas') !!}" class="btn btn-md btn-primary"> Todas las empresas</a>
      <a href="{!! URL::to('/') !!}/empresa/editar/{!! $data->empresa->id !!}" class="btn btn-md btn-primary pull-right">Editar Estos Datos</a>
      <div class="col-lg-12"><br>


      </div>
      <!-- Sección panel 1 -->
      <section>
        <div class="panel panel-default">
          <div class="panel-body">

            <article class="col-md-5">
              <div class="col-lg-12 col-xs-12">
                <div class="content-box profile-sidebar box-shadow company-block-1">
                  <img src="{!! URL::to('/') !!}/uploads/fotos/{!! $data->empresa->foto !!}" class="img-responsive center-block" alt="user" width="200px">
                  <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                      <h4>{!! $data->empresa->razon_social !!}</h4>
                    </div>
                    <div class="profile-usertitle-job">
                      {!! $data->empresa->nit !!}
                    </div>
                  </div>
                </div>            
              </div>


            </article>



            <?php 
            if(!empty($data->empresa->servicios))
            {
              $servicios = json_decode($data->empresa->servicios);
            }
            ?>

            <article class="col-md-3">
              <div class="col-md-12">
                <div class="content-box box-shadow">
                  <div class="content-box small-box">
                   <div class="pull-left info">

                    <h5> @{{data_empresa.sector | SectorEmpresa}}</h5>  

                    <span class="block">
                      <h5 class="text-uppercase zero-m"><i class="fa fa-building-o"></i> Sector</h5>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="content-box box-shadow">
                <div class="content-box small-box">                 
                  <div class="pull-left info">                                  
                    <h5> @{{data_empresa.tipo_empresa | TipoEmpresa}}</h5>                    
                    <h5 class="text-uppercase zero-m"><i class="icon-briefcase-3"></i> Tipo de Empresa</h5>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12">
              <div class="content-box box-shadow">
                <div class="content-box small-box">                
                  <div class="pull-left info">
                    <h5>                                   
                      <h5> @{{data_empresa.numero_empleados | SizeCompany}}</h5>                     
                    </h5>
                    <span class="block">

                    </span>
                    <h5 class="text-uppercase zero-m"><i class="icon-users-1"></i> Tamaño</h5>
                  </div>
                </div>
              </div>
            </div>
          </article>


          <article class="col-md-4">
            <div class="col-md-12">
              <div class="content-box box-shadow">
                <div class="content-box small-box">                 
                  <div class="pull-left info">                                  
                    <h5> @{{data_empresa.fecha_fundacion }} </h5>
                    <span class="block">
                      <h5 class="text-uppercase zero-m"><i class="icon-calendar"></i> Fecha Fundación</h5>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="content-box box-shadow">
                <div class="content-box small-box">
                  <div class="pull-left info">
                    <span class="block">                                          
                     <h5>@{{ data_empresa.direccion }} @{{data_empresa.ciudad_pais }}</h5>
                   </span>
                   <h5 class="text-uppercase zero-m"><i class="icon-location-8"></i> Dirección</h5>
                 </div>
               </div>
             </div>
           </div>


           <div class="col-md-12">
            <div class="content-box box-shadow">
              <div class="content-box small-box">
               <div class="pull-left info">
                <span class="block">
                  <h5>@{{ data_empresa.telefono_1 }} - @{{ data_empresa.telefono_2 }}</h5>

                </span>
                <h5 class="text-uppercase zero-m"><i class=" icon-phone"></i> Telefonos</h5>

              </div>
            </div>
          </div>
        </div>
      </article>

        <!--  <article class="col-md-6">
            <div class="col-md-12" id="vida_cliente">
            </div>
          </article> -->
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Sección panel 1 -->

  </div>
</div>

<section class="row">
  <div class="col-md-8">
    <div class="tabbable tabs-with-bg">

      <!--  -->



      <!-- html comment -->



      <!-- Tab Principal -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#contactos" aria-controls="contactos" role="tab" data-toggle="tab"><i class="icon-contacts"></i> Contacto</a></li>
        <li role="presentation"><a href="#filosofia" aria-controls="filosofia" role="tab" data-toggle="tab"><i class="icon-coffee-1"></i> Filosofia</a></li>
        <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab"><i class="icon-share"></i> Redes</a></li>
        
        <li role="presentation" v-if="data_empresa.administracion != 1"><a href="#contrataciones" aria-controls="contrataciones" role="tab" data-toggle="tab"><i class="icon-briefcase-2"></i> Contrataciones @{{data_empresa.administracion}}</a></li>
        

        @if ($data->empresa->administracion =="1")
        <li role="presentation"><a href="#costos" aria-controls="costos" role="tab" data-toggle="tab"><i class="icon-briefcase-2"></i> Costos</a></li>
        @endif
        <li role="presentation"><a href="#documentos" aria-controls="documentos" role="tab" data-toggle="tab"><i class="icon-doc"></i> Documentos</a></li>
      </ul>    

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Inicio Contactos -->
        <div role="tabpanel" class="tab-pane active" id="contactos">
          <div class="panel panel-default">
            <div class="panel-body">
              <?php 
              $representante = json_decode($data->empresa->representante);
              $comercial     = json_decode($data->empresa->comercial);
              $soporte       = json_decode($data->empresa->soporte); 
              ?>
              {{-- expr --}}
              <!-- Info Contactos Empresas -->

              <!-- Fin Contactos Empresas -->
              <br>
              <!-- Inicio tab Contactos -->


              <div class="row">
                <div class="col-lg-6" v-if="data_empresa.representante.nombre != ''">
                  <div class="content-box biggest-box">
                    <div class="pull-left">
                      <span class="block">Representante</span>
                      <h2 class="text-uppercase zero-m">@{{data_empresa.representante.trato}} @{{data_empresa.representante.nombre}}</h2>
                      <span class="text-uppercase w-name"><b>@{{data_empresa.representante.cargo}}</b></span>
                      <hr> 
                      <span>
                        <i class="icon-mail-2"></i>@{{data_empresa.representante.email}}           
                      </span> <br>
                      <span>  
                        <i class="icon-phone"></i>@{{data_empresa.representante.telefono}}
                      </span><br>
                      <span>
                        <i class="icon-mobile-2"></i>@{{data_empresa.representante.celular}}
                      </span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="col-lg-6" v-if="data_empresa.comercial.nombre != '' ">
                  <div class="content-box biggest-box">
                    <div class="pull-left">
                      <span class="block">Comercial</span>
                      <h2 class="text-uppercase zero-m">@{{data_empresa.comercial.trato}} @{{data_empresa.comercial.nombre}}</h2>
                      <span class="text-uppercase w-name"><b>@{{data_empresa.comercial.cargo}}</b></span>
                      <hr> 
                      <span>
                        <i class="icon-mail-2"></i>@{{data_empresa.comercial.email}}           
                      </span> <br>
                      <span>  
                        <i class="icon-phone"></i>@{{data_empresa.comercial.telefono}}
                      </span><br>
                      <span>
                        <i class="icon-mobile-2"></i>@{{data_empresa.comercial.celular}}
                      </span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

@if (!empty($data->empresa->soporte->nombre[0]))
      <div v-if="data_empresa.soporte" class="col-lg-6" v-if="data_empresa.soporte.nombre != ''">
                  <div class="content-box biggest-box">
                    <div class="pull-left">
                      <span class="block">Soporte</span>
                      <h2 class="text-uppercase zero-m">@{{data_empresa.soporte.trato}} @{{data_empresa.soporte.nombre}}</h2>
                      <span class="text-uppercase w-name"><b>@{{data_empresa.soporte.cargo}}</b></span>
                      <hr> 
                      <span>
                        <i class="icon-mail-2"></i>@{{data_empresa.soporte.email}}           
                      </span> <br>
                      <span>  
                        <i class="icon-phone"></i>@{{data_empresa.soporte.telefono}}
                      </span><br>
                      <span>
                        <i class="icon-mobile-2"></i>@{{data_empresa.soporte.celular}}
                      </span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
@endif
              </div>      


            </div><!-- Panel Body  -->
          </div><!-- Panel defaul -->
        </div>
        <!-- Fin Contactos -->

        <!-- Inicio Filosofia -->
        <div role="tabpanel" class="tab-pane" id="filosofia">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <?php 
                if(!empty($data->empresa->valores))
                {
                  $valores = json_decode($data->empresa->valores);
                }

                ?>
                <h3>@if (!empty($valores))


                  @foreach ( $valores as $valor)
                  <span class="label label-primary">{!!$valor!!}</span>
                  @endforeach</h3>
                  @endif
                  <p><i class="icon-list-2"></i> Valores Corporativos</p>

                  <br>
                  <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <i class="icon-bookmark-empty-1"></i> Misión
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            @if(!empty($data->empresa->mision))
                            {!! $data->empresa->mision !!}
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="icon-bookmark-empty-1"></i> Visión
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            @if (!empty($data->empresa->vision))
                            {!! $data->empresa->vision !!}
                            @endif

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php 
                    if(!empty($data->empresa->intereses)){
                      $intereses = json_decode($data->empresa->intereses);
                    } ?>
                    <h3>
                      @if (!empty($intereses))
                      @foreach ($intereses as $interes)
                      <span class="label label-primary">{!!$interes!!}</span>
                      @endforeach
                      @endif
                    </h3>
                    <p><i class="icon-hourglass-1"></i> Intereses</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- Fin Filosofia -->
          <!-- Inicio Redes -->
          <div role="tabpanel" class="tab-pane" id="redes">

            {{-- GRID --}}
            <br>

            <div id="columns">

              @include('empresas.extras_empresas.redes_perfil') 

            </div>


            {{-- GRID --}}






            <div class="panel panel-default">
              <div class="panel-body">



               {{--   @include('empresas.extras_empresas.redes_perfil') --}}

             </div>
           </div>
         </div>
         <!-- Fin Redes -->
         <!-- Inicio Contrataciones -->
         <div role="tabpanel" class="tab-pane" id="contrataciones">
          <div class="panel panel-default">
            <div class="panel-body">
              <div role="tabpanel" class="tab-pane" id="contrataciones">
                <div class="pull-left">
                  <form class="form-inline">
                    <div class="form-group">
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="" placeholder="Inicio">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for=""></label>
                      <input type="text" class="form-control" id="" placeholder="Final">
                    </div>
                    <button type="submit" class="btn btn-default">Filtrar</button>
                  </form>
                </div>
                <div class="pull-right">
                 <button class="btn btn-md btn-primary" data-toggle="modal" href='#modal-service'>Agregar un servicio</button> 
               </div>
               <br><br><br>
             </div><br>
             <div id="contenedor_servicios_empresa" class="col-md-12">

             </div>
           </div>


         </div>
       </div>

       <!-- Fin Contrataciones -->

       @if ($data->empresa->administracion =="1")

       <!-- Inicio Costos -->

       <div role="tabpanel" class="tab-pane" id="costos">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="pull-left">
              <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for=""></label>
                  <input type="text" class="form-control" id="" placeholder="Inicio">
                </div>
                <div class="form-group">
                  <label class="sr-only" for=""></label>
                  <input type="text" class="form-control" id="" placeholder="Final">
                </div>
                <button type="submit" class="btn btn-default">Filtrar</button>
              </form>
            </div>

            <div class="pull-right">
             <button class="btn btn-md btn-default" data-toggle="modal" href='#modal-costos'><i class="icon-plus"></i> Agregar un Costo</button>
           </div>
           <br><br><br>
           <br>
           <div id="contenedor_costos_empresa" class="col-md-12">

           </div>
         </div>
       </div>
     </div>

     <!-- Fin Costos -->


     @endif

     <div role="tabpanel" class="tab-pane" id="documentos">
      <div class="panel panel-default">
        <div class="panel-body">
         <div class="pull-right">
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#archivos_clientes_modal">
             <i class="icon-plus"></i> Agregar un documento
           </button>
         </div>
         <br><br><br><br>

         <!-- Modal -->
         <div class="modal fade" id="archivos_clientes_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="icon-upload"></i> Subir Documento</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                 {!!Form::open(array('action' => 'DocumentosController@GuardarDocumentoEmpresa', 'method' => 'post', 'id' => 'form-guardar-documento-cliente','files'=>true));!!}
                 <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

                 <div class="col-md-12"> 
                   <div class="col-md-12"> <br> 
                     <input type="text"  name="titulo" id="" placeholder="Título" class="form-control material" value="" required="required">
                   </div>
                   <div class="col-md-12"> <br>                     
                    <input type="file" name="archivo" id=""  class="form-control material" value="" required="required">
                  </div>
                  <br><br>
                </div>                

                <div class="col-md-12" style="margin-top: 10px">
                  <textarea name="descripcion" id="" cols="5" rows="4" class="material form-control"></textarea>
                </div>
              </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
              <button type="submit" id="" class="btn btn-primary">Guardar Documento</button>
              {!! Form::close() !!}              
            </div>
          </div>
        </div>
      </div>

      <div id="contenedor_documentos_empresa" class="col-md-12">

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- Fin Tab Principal -->


<div class="col-md-4">
  <div class="content-box big-box">
    <div class="btn-group btn-group-justified">
      <div class="btn-group" role="group">
        <a data-toggle="modal" href='#modal-anotacion' type="button" class="btn waves btn-primary waves-effect waves-float">Anotación</a>
      </div>
      <div class="btn-group" role="group">
        <button data-toggle="modal" href='#modal-recordatorio' type="button" class="btn waves btn-success waves-effect waves-float">Recordatorio</button>
      </div>
      
      <div class="btn-group" role="group">
        <button data-toggle="modal" href='#modal-cobro' type="button" class="btn waves btn-orange waves-effect waves-float">Cartera</button>
      </div>
    </div>
    <div class="separador_20"></div>

    <div class="panel panel-default" id="anotaciones">
      <div class="panel-body" id="targets" >

      <div v-for="target in data_targets">
      {{-- <h3>@{{target.id}}</h3> --}}
       <cobro v-if="target.tipo_anotacion = 'cobro'" 
        :monto="target.monto"
        :id="target.id"
        :vence="target.fecha_cobro"
        :serial="target.serial"
        :mensaje="target.mensaje"
        :foto="target.fotografia"
        >
        </cobro>
      </div>
{{--   <anotacion></anotacion> 
  <recordatorio></recordatorio>  
  <cobro></cobro> --}}

      </div>
    </div>
  </div>
</div>
</section>

{{--  --}}

{{--  --}}

<template id="anotacion-template">
  <div class="panel panel-default">
    <div class="panel-body">
    <img src="{!! URL::to('img') !!}/amanda.jpg" width="40px" class="img-circle pull-right" alt="">
    <br>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore.</p>
      <span class="pull-right"><i class="icon-clock"></i>10-08-2016 11:00</span>
    </div>
    <div class="panel-footer panel-footer-anotacion">
      <button class="btn btn-default btn-sm"><i class="icon-cancel-3"></i></button>
      <button class="btn btn-default btn-sm"><i class="icon-pencil-5"></i></button>
    </div>
  </div>
</template>

<template id="recordatorio-template">
  <div class="panel panel-default">
    <div class="panel-body">
    <img src="{!! URL::to('img') !!}/amanda.jpg" width="40px" class="img-circle pull-right" alt="">
    <span><i class="icon-calendar"></i>Vence: 10-08-2016 11:00</span><br>
    <span class="label label-danger">vencido</span>
    <br><br>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore.</p>
       <span class="pull-right"><i class="icon-clock"></i>10-08-2016 11:00</span>
    </div>
    <div class="panel-footer panel-footer-recordatorio">
      <button class="btn btn-default btn-sm"><i class="icon-cancel-3"></i></button>
      <button class="btn btn-default btn-sm"><i class="icon-pencil-5"></i></button>
    </div>
  </div>
</template>

<template id="cobro-template">
  <div class="panel panel-default">
    <div class="panel-body">
    <img :src="'/uploads/fotos/' + foto" width="40px" class="img-circle pull-right" alt="">
    <span><i class="icon-clock"></i>Vence: @{{vence}}</span><br>
     <span><i class="icon-dollar"></i>Monto: @{{monto}}</span><br>
     <span><i class="icon-pinboard"></i>Orden: @{{serial}}</span><br>
     <span v-if="estado == 1" class="label label-danger">Sin Cobrar</span>
     <span v-else class="label label-success">Cobrado</span>
     <span></span>
     <br>
     <button class="btn btn-default btn-sm pull-right" @click="RevisarServicio(serial)"><i class="icon-search-2"></i> Revisar Servicio</button><br>
    <br><p>
      @{{mensaje}}</p>
    </div>
    <div class="panel-footer panel-footer-cobro">
      <button class="btn btn-default btn-sm"><i class="icon-cancel-3"></i></button>
      <button class="btn btn-default btn-sm"><i class="icon-pencil-5"></i></button>
      <button v-if="estado == '0'" class="btn btn-default btn-sm pull-right"><i class="icon-check-3"></i> Registrar Cobro</button>
    </div>
  </div>
</template>

@include('empresas.extras_empresas.modals_profile')

@stop

@section('add_scripts')
{!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
{!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
{!! HTML::script('js/mask.js') !!}
{!! HTML::script('vendor\select2-master\dist\js\select2.min.js') !!}

{!! HTML::script('bower_components/DataTables/media/js/jquery.dataTables.js') !!}
{!! HTML::script('bower_components/datatables.net-responsive/js/dataTables.responsive.js') !!}
{!! HTML::script('bower_components/datatables-tabletools/js/dataTables.tableTools.js') !!}
{!! HTML::script('datetimepicker/build/jquery.datetimepicker.full.js') !!}

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>
<script>
  $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});
</script>

<script>
  $(function () {
    $('#vida_cliente').highcharts({
      chart: {
        type: 'spline'
      },
      title: {
        text: 'Linea de Vida'
      },

      xAxis: {
        type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
            month: '%e. %b',
            year: '%b'
          },
          title: {
            text: 'Date'
          }
        },
        yAxis: {
          title: {
            text: 'Snow depth (m)'
          },
          min: 0
        },
        tooltip: {
          headerFormat: '<b>{series.name}</b><br>',
          pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
        },

        plotOptions: {
          spline: {
            marker: {
              enabled: true
            }
          }
        },

        series: [{
          name: 'Cartera',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
            [Date.UTC(1970, 9, 21), 1],
            [Date.UTC(1970, 10, 4), 1],
            [Date.UTC(1970, 10, 9), 1],
            [Date.UTC(1970, 10, 27), 0.2],
            [Date.UTC(1970, 11, 2), 0.28],
            [Date.UTC(1970, 11, 26), 0.28],
            [Date.UTC(1970, 11, 29), 0.47],
            [Date.UTC(1971, 0, 11), 0.79],
            [Date.UTC(1971, 0, 26), 0.72],
            [Date.UTC(1971, 1, 3), 1.02],
            [Date.UTC(1971, 1, 11), 1.12],
            [Date.UTC(1971, 1, 25), 1.2],
            [Date.UTC(1971, 2, 11), 1.18],
            [Date.UTC(1971, 3, 11), 1.19],
            [Date.UTC(1971, 4, 1), 1.85],
            [Date.UTC(1971, 4, 5), 2.22],
            [Date.UTC(1971, 4, 19), 1.15],
            [Date.UTC(1971, 5, 3), 0]
            ]
          }, {
            name: 'Winter 2013-2014',
            data: [
            [Date.UTC(1970, 9, 29), 0],
            [Date.UTC(1970, 10, 9), 0.4],
            [Date.UTC(1970, 11, 1), 0.25],
            [Date.UTC(1971, 0, 1), 1.66],
            [Date.UTC(1971, 0, 10), 1.8],
            [Date.UTC(1971, 1, 19), 1.76],
            [Date.UTC(1971, 2, 25), 2.62],
            [Date.UTC(1971, 3, 19), 2.41],
            [Date.UTC(1971, 3, 30), 2.05],
            [Date.UTC(1971, 4, 14), 1.7],
            [Date.UTC(1971, 4, 24), 1.1],
            [Date.UTC(1971, 5, 10), 0]
            ]
          }, {
            name: 'Servicios',
            data: [
            [Date.UTC(1970, 10, 25), 0],
            [Date.UTC(1970, 11, 6), 0.25],
            [Date.UTC(1970, 11, 20), 1.41],
            [Date.UTC(1970, 11, 25), 1.64],
            [Date.UTC(1971, 0, 4), 1.6],
            [Date.UTC(1971, 0, 17), 2.55],
            [Date.UTC(1971, 0, 24), 2.62],
            [Date.UTC(1971, 1, 4), 2.5],
            [Date.UTC(1971, 1, 14), 2.42],
            [Date.UTC(1971, 2, 6), 2.74],
            [Date.UTC(1971, 2, 14), 2.62],
            [Date.UTC(1971, 2, 24), 2.6],
            [Date.UTC(1971, 3, 2), 2.81],
            [Date.UTC(1971, 3, 12), 2.63],
            [Date.UTC(1971, 3, 28), 2.77],
            [Date.UTC(1971, 4, 5), 2.68],
            [Date.UTC(1971, 4, 10), 2.56],
            [Date.UTC(1971, 4, 15), 2.39],
            [Date.UTC(1971, 4, 20), 2.3],
            [Date.UTC(1971, 5, 5), 2],
            [Date.UTC(1971, 5, 10), 1.85],
            [Date.UTC(1971, 5, 15), 1.49],
            [Date.UTC(1971, 5, 23), 1.08]
            ]
          }]
        });
});
</script>

<script>
  $(function () {

    $('#calificacion').highcharts({

      chart: {
        polar: true,
        type: 'line'
      },

      title: {
        text: 'Budget vs spending',
        x: -80
      },

      pane: {
        size: '80%'
      },

      xAxis: {
        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'],
        tickmarkPlacement: 'on',
        lineWidth: 0
      },

      yAxis: {
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0
      },

      tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
      },

      legend: {
        align: 'right',
        verticalAlign: 'top',
        y: 70,
        layout: 'vertical'
      },

      series: [ {
        name: 'Actual Spending',
        data: [40, 60, 35, 78, 24, 92, 30, 67, 80],
        pointPlacement: 'on'
      }]

    });
  });
</script>
<script>


  function load_notes() {
   $("#contenedor_anotaciones_empresa").load("anotaciones_empresa/{!! $data->empresa->id !!}");
 }
 function load_servicios(){
  $("#contenedor_servicios_empresa").load("/empresa/servicios_imprimir/all/{!! $data->empresa->id !!}");
  $("#saldo").load("/empresa/imprimir/saldo/{!! $data->empresa->id !!}");
}
function load_costos(){
  $("#contenedor_costos_empresa").load("/empresa/costo_imprimir/all/{!! $data->empresa->id !!}");
  //$("#saldo").load("/empresa/imprimir/saldo/{!! $data->empresa->id !!}");
}
function load_modal_cartera(){
  $("#modal_cartera").load("/load-cartera/{!! $data->empresa->id !!}");
}

</script>
<!-- Anotaciones -->
{!! HTML::script('js/app/anotaciones/anotacion.js') !!}
{!! HTML::script('js/app/anotaciones/alerta.js') !!}
{!! HTML::script('js/app/anotaciones/cartera.js') !!}
{!! HTML::script('js/app/anotaciones/recordatorio.js') !!}

<!-- Servicios : servicios prestados -->

{!! HTML::script('js/app/servicios/servicio.js') !!}

<!-- Costos -->

{!! HTML::script('js/app/costos/costo.js') !!}

<script type="text/javascript">
  $(function(){

    load_notes();
    load_servicios();
    load_modal_cartera();
    load_costos();
    
    $("#contenedor_documentos_empresa").load("{!! URL::to('/') !!}/documentos_empresa_perfil/{!! $data->empresa->id !!}");

    

    $('.money').mask('000.000.000.000.000,00', {reverse: true});

    $('#date_timepicker_start').datetimepicker({
      format:'Y-m-d H:i:00',
      step:"30",
      onShow:function( ct ){
        this.setOptions({
          maxDate:$('#date_timepicker_end').val()?$('#date_timepicker_end').val():false
        })
      },
      lang:'es',
      timepicker:true
    });
    $('#date_timepicker_end').datetimepicker({
      step:"30",
      format:'Y-m-d H:i:00',
      onShow:function( ct ){
        this.setOptions({
          minDate:$('#date_timepicker_start').val()?$('#date_timepicker_start').val():false
        })
      },
      lang:'es',
      timepicker:true
    });
    $('.datetimepicker3').datetimepicker({
     i18n:{
      de:{
       months:[
       'Enero','Febrero','Marzo','Abril',
       'Mayo','Junio','Julio','Agosto',
       'Septiembre','Octubre','Noviembre','Diciembre',
       ],
       dayOfWeek:[
       "Do", "Lu", "Ma", "Mi", 
       "Ju", "Vi", "Sa",
       ]
     }
   },
   timepicker:true,
   format:'Y-m-d H:i:00'
 });
  });
</script>

<script src="{!! URL::to('/') !!}/js/vendor.js"></script>
<script src="{!! URL::to('/') !!}/js/profile-vue.js"></script>



@stop
