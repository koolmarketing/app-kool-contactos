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

<div class="row">

  <div class="col-lg-12">

    <div class="col-lg-12"><br>

      <a href="{!! URL::to('/empresas') !!}" class="btn btn-md btn-primary"> Ver Todos</a>
      <a href="{!! URL::to('/') !!}/empresa/editar/{!! $data->empresa->id !!}" class="btn btn-md btn-primary pull-right">Editar Datos</a>
    </div>
    <!-- Sección panel 1 -->
    <section>
      <div class="panel panel-default">
        <div class="panel-body">
          <article class="col-md-4">
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

          <article class="col-md-4">
            <div class="content-box box-shadow">
              <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x blue"></i>
                  <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
                </span>
                <div class="pull-left info">
                  <h3 class="text-uppercase zero-m">Sector</h3>
                  <span class="block"><h4>{!! $data->empresa->sector !!}</h4></span>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </article>

          <?php 
          if(!empty($data->empresa->servicios))
          {
            $servicios = json_decode($data->empresa->servicios);
          }
          ?>

          <article class="col-md-4">
           <div class="content-box box-shadow">
            <div class="content-box small-box">
              <span class="fa-stack fa-2x block pull-left">
                <i class="fa fa-circle fa-stack-2x blue"></i>
                <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
              </span>
              <div class="pull-left info">
                <h3 class="text-uppercase zero-m">Servicios</h3>
                <span class="block"><h4>  
                  @if (!empty($servicios))
                  @foreach ($servicios as $servicio)
                  <h4>{!! $servicio !!}</h4>
                  @endforeach                
                  @endif                 


                </h4></span>
              </div>
              <div class="clearfix"></div>
            </div>
          </div> 
        </article>
      </div>
    </div>
  </section>
  <!-- Fin Sección panel 1 -->

</div>
</div>

<section class="row">
  <div class="col-md-8">
    <div class="tabbable tabs-with-bg big-tabs">
      <!-- Tab Principal -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#contactos" aria-controls="contactos" role="tab" data-toggle="tab"><i class="icon-contacts"></i> Contacto</a></li>
        <li role="presentation"><a href="#filosofia" aria-controls="filosofia" role="tab" data-toggle="tab"><i class="icon-coffee-1"></i> Filosofia</a></li>
        <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab"><i class="icon-share"></i> Redes</a></li>
        <li role="presentation"><a href="#contrataciones" aria-controls="contrataciones" role="tab" data-toggle="tab"><i class="icon-briefcase-2"></i> Contrataciones</a></li>
         @if ($data->empresa->administracion =="1")
         <li role="presentation"><a href="#costos" aria-controls="costos" role="tab" data-toggle="tab"><i class="icon-briefcase-2"></i> Costos</a></li>
         @endif
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
              <div class="col-md-12">
                <div class="col-md-6">
                  <h3>{!! $data->empresa->ciudad_pais !!}</h3>
                  <p><i class="icon-globe-6"></i> Ciudad, País</p>
                  <hr>
                </div>

                <div class="col-md-6">
                  <h3>{!! $data->empresa->direccion !!}</h3>
                  <p><i class="icon-location-5"></i> Dirección</p>
                  <hr>
                </div>
              </div>
              <!-- Fin Contactos Empresas -->
              <br>
              <!-- Inicio tab Contactos -->
              <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#representante" aria-controls="representante" role="tab" data-toggle="tab">Representante</a></li>
                  <li role="presentation"><a href="#comercial" aria-controls="comercial" role="tab" data-toggle="tab">Comercial</a></li>
                  <li role="presentation"><a href="#soporte" aria-controls="soporte" role="tab" data-toggle="tab">Soporte</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="representante">
                   <div class="panel panel-default">
                    <div class="panel-body">
                      @if ($representante->nombre[0]  != "")
                      <!-- -->
                      <div class="col-md-6">
                        <h4>{!! $representante->trato[0] !!} {!! $representante->nombre[0] !!}</h4>
                        <p><i class="icon-user"></i> Nombre</p>
                      </div>

                      <div class="col-md-6">
                        <h4>{!! $representante->cargo[0] !!}</h4>
                        <p><i class="icon-cog-alt"></i> Cargo</p>
                      </div>

                      <div class="col-md-6">
                        <h4>{!! $representante->email[0] !!}</h4>
                        <p><i class="icon-email"></i> email</p>
                      </div>

                      <div class="col-md-3">
                        <h4>{!! $representante->telefono[0] !!}</h4>
                        <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                      </div>
                      <div class="col-md-3">
                        <h4>{!! $representante->celular[0] !!}</h4>
                        <p><i class="icon-mobile-2"></i> Celular</p>
                      </div>
                      <!-- -->
                      @else
                      <div class="col-md-12">
                        <h2>No hay contacto Comercial</h2>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="comercial">
                  <div class="panel panel-default">
                    <div class="panel-body">

                      @if ($comercial->nombre[0]  != "")
                      {{-- expr --}} 
                      <!-- -->
                      <div class="col-md-6">
                        <h4>{!! $comercial->trato[0] !!} {!! $comercial->nombre[0] !!}</h4>
                        <p><i class="icon-user"></i> Nombre</p>
                      </div>

                      <div class="col-md-6">
                        <h4>{!! $comercial->cargo[0] !!}</h4>
                        <p><i class="icon-cog-alt"></i> Cargo</p>
                      </div>

                      <div class="col-md-6">
                        <h4>{!! $comercial->email[0] !!}</h4>
                        <p><i class="icon-email"></i> email</p>
                      </div>

                      <div class="col-md-3">
                        <h4>{!! $comercial->telefono[0] !!}</h4>
                        <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                      </div>
                      <div class="col-md-3">
                        <h4>{!! $comercial->celular[0] !!}</h4>
                        <p><i class="icon-mobile-2"></i> Celular</p>
                      </div>
                      <!-- -->
                      @else
                      <div class="col-md-12">
                        <h2>No hay datos</h2>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="soporte">
                 <div class="panel panel-default">
                  <div class="panel-body">
                    @if ($soporte->nombre[0]  != "")
                    <!-- -->

                    <div class="col-md-6">
                      <h4>{!! $soporte->trato[0] !!} {!! $soporte->nombre[0] !!}</h4>
                      <p><i class="icon-user"></i> Nombre</p>
                    </div>

                    <div class="col-md-6">
                      <h4>{!! $soporte->cargo[0] !!}</h4>
                      <p><i class="icon-cog-alt"></i> Cargo</p>
                    </div>

                    <div class="col-md-6">
                      <h4>{!! $soporte->email[0] !!}</h4>
                      <p><i class="icon-email"></i> email</p>
                    </div>

                    <div class="col-md-3">
                      <h4>{!! $soporte->telefono[0] !!}</h4>
                      <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                    </div>
                    <div class="col-md-3">
                      <h4>{!! $soporte->celular[0] !!}</h4>
                      <p><i class="icon-mobile-2"></i> Celular</p>
                    </div>

                    <!-- -->
                    @else
                    <div class="col-md-12">
                      <h2>No hay datos para Soporte</h2>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>

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
        <div class="panel panel-default">
          <div class="panel-body">
            <?php
            $gmail = json_decode($data->empresa->gmail);
            ?>  
            @if($gmail->cuenta_1->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-gmail"></i> Gmail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $gmail->cuenta_1->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$gmail->cuenta_1->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif
            @if($gmail->cuenta_2->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-gmail"></i> Gmail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $gmail->cuenta_2->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$gmail->cuenta_2->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif
            @if($gmail->cuenta_3->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-gmail"></i> Gmail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $gmail->cuenta_3->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$gmail->cuenta_3->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif
            @if($gmail->cuenta_4->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-gmail"></i> Gmail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $gmail->cuenta_4->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$gmail->cuenta_4->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if($gmail->cuenta_5->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-gmail"></i> Gmail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $gmail->cuenta_5->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$gmail->cuenta_5->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif
            <?php
            $zohomail = json_decode($data->empresa->zohomail);
            ?>  


            @if ($zohomail->cuenta_1->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_1->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_1->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if ($zohomail->cuenta_2->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Facebook</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_2->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_2->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if ($zohomail->cuenta_3->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_3->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_3->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if ($zohomail->cuenta_4->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_4->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_4->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if ($zohomail->cuenta_5->usuario[0] != "")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_5->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_5->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if (!empty($zohomail->cuenta_6->usuario[0] ))
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_6->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_6->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if (!empty($zohomail->cuenta_7->usuario[0]))
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_7->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_7->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if (!empty($zohomail->cuenta_8->usuario[0]))
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_8->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_8->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if (!empty($zohomail->cuenta_9->usuario[0]))
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_9->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_9->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            @if (!empty($zohomail->cuenta_10->usuario[0]))
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-mail-5"></i> Zohomail</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$zohomail->cuenta_10->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$zohomail->cuenta_10->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif


            <?php 
            $facebook = json_decode($data->empresa->facebook);
            ?>
            @if ($facebook->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-facebook-4"></i> Facebook</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $facebook->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!! $facebook->contraseña[0] !!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* TWITTER */
            $twitter = json_decode($data->empresa->twitter); ?>
            @if ($twitter->usuario[0]!="")           
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-twitter-3"></i> Twitter</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $twitter->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!! $twitter->contraseña[0] !!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* YOUTUBE */
            $youtube = json_decode($data->empresa->youtube); 
            ?>
            @if ($youtube->usuario[0]!="")    
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-youtube-2"></i> Youtube</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $youtube->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!! $youtube->contraseña[0] !!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* Instagram */
            $instagram = json_decode($data->empresa->instagram); 
            ?>
            @if ($instagram->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-instagram-1"></i> Instagram</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!! $instagram->usuario[0] !!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$instagram->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* Linkedin */
            $linkedin = json_decode($data->empresa->linkedin); 
            ?>
            @if ($linkedin->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-linkedin-3"></i> Linkedin</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$linkedin->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$linkedin->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* Pinterest */
            $pinterest = json_decode($data->empresa->pinterest); 
            ?>
            @if ($pinterest->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-pinterest-2"></i> Pinterest</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$linkedin->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$linkedin->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* Pinterest */
            $hootsuite = json_decode($data->empresa->hootsuite); 
            ?>
            @if ($hootsuite->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-website"></i> Hootsuite</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$hootsuite->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$hootsuite->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* AMARILLAS INTERNET */
            $amarillas_internet = json_decode($data->empresa->amarillas_internet); 
            ?>          
            @if ($amarillas_internet->usuario[0]!="")
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-fire-3"></i> A.I</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$amarillas_internet->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$amarillas_internet->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* PHOTOSNACK */
            $photosnack = json_decode($data->empresa->photosnack); 
            ?> 
            @if ($photosnack->usuario[0]!="")  
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-camera-alt"></i> Photosnack</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-5">
                  <h4>{!!$photosnack->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-4">
                  <h4>{!!$photosnack->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif

            <?php /* FTP */
            $ftp = json_decode($data->empresa->ftp); 
            ?> 

            @if ($photosnack->usuario[0]!="") 
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-3">
                  <h4><i class="icon-server"></i> FTP</h4>
                  <p>Red</p>
                </div>
                <div class="col-md-3">
                  <h4>{!!$photosnack->server[0]!!}</h4>
                  <p>Server</p>
                </div>
                <div class="col-md-3">
                  <h4>{!!$photosnack->usuario[0]!!}</h4>
                  <p>Usuario</p>
                </div>
                <div class="col-md-3">
                  <h4>{!!$photosnack->contraseña[0]!!}</h4>
                  <p>Contraseña</p>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
      <!-- Fin Redes -->
      <!-- Inicio Contrataciones -->
      <div role="tabpanel" class="tab-pane" id="contrataciones">
        <div class="panel panel-default">
          <div class="panel-body">
            <div role="tabpanel" class="tab-pane" id="contrataciones">
             <div class="pull-right">
               <button class="btn btn-md btn-danger" data-toggle="modal" href='#modal-service'>Agregar un servicio</button>
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
           
             <div class="pull-right">
               <button class="btn btn-md btn-danger" data-toggle="modal" href='#modal-costos'>Agregar un Costo</button>
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
        <button data-toggle="modal" href='#modal-alerta' type="button" class="btn waves btn-danger waves-effect waves-float">Alerta</button>
      </div>
      <div class="btn-group" role="group">
        <button data-toggle="modal" href='#modal-cobro' type="button" class="btn waves btn-orange waves-effect waves-float">Cartera</button>
      </div>
    </div>

    <div class="panel panel-default" id="anotaciones">
      <div class="panel-body" id="contenedor_anotaciones_empresa">
      </div>
    </div>
  </div>
</div>

</section>


<div class="modal fade" id="modal-anotacion">
  <div class="modal-dialog">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe un Comentario</h4>
      </div>{!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-anotacion','files'=>true));!!}
      <div class="modal-body">
        <div class="row">
          <input type="hidden" name="tipo" id="" class="form-control" value="comentario">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}">                
          <div class="form-group">
            <div class="col-md-12">
              <textarea name="nota" id="nota" cols="5" rows="4" value="" class="material form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="button" id="btn-guardar-anotacion" class="btn btn-primary">Guardar Anotación</button>
        {!! Form::close() !!}
      </div>          
    </div>        
  </div>
</div>
<!--====  Stat Recordatorio  ====-->
<div class="modal fade" id="modal-recordatorio">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe un Recordatorio</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-recordatorio','files'=>true));!!}
        <div class="row">
          <input type="hidden" name="tipo" id="" class="form-control" value="recordatorio">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}">   
          <div class="col-md-8">
            <input type="text" name="fecha" id="input" class="form-control material datetimepicker3" placeholder="Fecha de Vencimiento" value="" required="required" >

          </div>
          <div class="col-md-12">
            <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button id="btn-guardar-recordatorio" type="button" class="btn btn-primary">Guardar Recordatorio</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!--====  Stat Alerta  ====-->
<div class="modal fade" id="modal-alerta">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe un alerta</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-alerta','files'=>true));!!}
        <div class="row">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 
          <input type="hidden" name="tipo" id="" class="form-control" value="alerta">  
          <div class="col-md-8">
            <input type="text" name="fecha"  class="form-control material datetimepicker3" placeholder="Fecha de Vencimiento" value="" required="required">

          </div>

          <div class="col-md-12">
            <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="submit" id="btn-guardar-alerta" class="btn btn-primary guardar-form">Guardar Alerta</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!--====  Stat Cartera  ====-->
<div class="modal fade " id="modal-cobro">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Programar un Cobro

        </h4>
      </div>
      <div class="modal-body">
        <div class="row">                

          <div class="col-md-12">
            <div class="alert alert-success">
              Saldo Actual : 
              <span class="pull-right" id="saldo"></span>
            </div>
            <div id="modal_cartera" class="col-md-12">
            </div>                      
          </div>

          {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-cartera','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 
          <input type="hidden" name="tipo" id="" class="form-control" value="cobro">  
          <div class="col-md-12"> 
           <div class="col-md-6">  <br>  

             <input type="text"  name="inicio" id="date_timepicker_start" placeholder="Inicio" class="form-control material" value="" required="required">

           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="date_timepicker_end" placeholder="Fin" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-6">

          <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial" value="" required="required">

        </div>
        <div class="col-md-6">
          <input type="text" name="monto" id="input" class="form-control material" placeholder="Monto" value="" required="required">
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 10px">
        <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    <button type="submit" id="btn-guardar-cartera" class="btn btn-primary">Guardar Anotación</button>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>


<!--====  Stat Service  ====-->
<div class="modal fade" id="modal-service">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Adjuntar un servicio</h4>

      </div>
      <div class="modal-body">
        <div class="row">

          {!!Form::open(array('action' => 'ServiciosController@SaveService', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

          <div class="col-md-12">
            <div class="col-md-12"> <br>                     
              <input type="text" name="titulo" id="" placeholder="Título del servicio" class="form-control material" value="" required="required">
            </div>
          </div>                   
          <div class="col-md-12">
           <div class="col-md-6">  <br>  
             <input type="text"  name="inicio" id="inicio_servicio" placeholder="Periodo de Inicio" class="form-control material" value="" required="required">
           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="fin_servicio" placeholder="Finalización" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-6">

          <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial o número de comprobante" value="" required="required">
        </div>
        <div class="col-md-6">
          <input type="number" name="valor" id="input" class="form-control material" placeholder="Valor del servicio" value="" required="required" step="any">
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 10px">
        <div class="col-md-12">
          <br>
        </div>

      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    <button type="button" id="btn-guardar-servicio" class="btn btn-primary">Registrar Servicio</button>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>

<!-- END Service -->

<!------------  Load Comprobante Cobro  ------------>
<div class="modal fade" id="comprobante-cobro">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cargar comprobante de Cobro</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'AnotacionesController@updateCobroComprobante', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}

        <input type="hidden" name="id_anotacion" id="id_anotacion_cobro" class="form-control" value="">
        <input type="file" name="comprobante" class="form-control">              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="input" id="save_id_anotacion_cobro" class="btn btn-primary">Guardar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!------------  Load Comprobante Servicio  ------------>
<div class="modal fade" id="modal-comprobante-servicio">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cargar Comprobante de Servicio</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'ServiciosController@UpdateComprobanteServicio', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}
        <input type="hidden" name="id_anotacion" id="id_anotacion_servicio" class="form-control" value="">
        <input type="file" name="comprobante" class="form-control">              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="input" id="save_id_anotacion_cobro" class="btn btn-primary">Guardar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


{{-- Reportar Cobro --}}

{{-- End Reportar Cobro --}}

<!------------  Load Comprobante Costo  ------------>
<div class="modal fade" id="modal-comprobante-costo">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cargar Comprobante de Costo</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'CostosController@UpdateComprobanteCosto', 'method' => 'post', 'id' => 'form-guardar-comprobante-costo','files'=>true));!!}

        <input type="hidden" name="id_anotacion_costo" id="id_anotacion_costo" class="form-control" value="">

        <input type="file" name="comprobante" class="form-control">              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="submit" id="save_id_anotacion_costo" class="btn btn-primary">Guardar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


{{-- Reportar Cobro --}}

<!--====  Stat Costo  ====-->
<div class="modal fade" id="modal-costos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Adjuntar un Costo</h4>
      </div>
      <div class="modal-body">
        <div class="row">

          {!!Form::open(array('action' => 'CostosController@SaveCosto', 'method' => 'post', 'id' => 'form-guardar-costo','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

          <div class="col-md-12">
            <div class="col-md-12"> <br>                     
              <input type="text" name="titulo" id="" placeholder="Título" class="form-control material" value="" required="required">
            </div>
          </div>                   
          <div class="col-md-12">
           <div class="col-md-6">  <br>  
             <input type="text"  name="inicio" id="inicio_costo" placeholder="Periodo de Inicio" class="form-control material" value="" required="required">
           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="fin_costo" placeholder="Finalización" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-6">
          <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial o número de comprobante" value="" required="required">
        </div>
        <div class="col-md-6">
          <input type="number" name="valor" id="input" class="form-control material" placeholder="Valor" value="" required="required" step="any">
        </div>

        <div class="col-md-12"><br>
        <textarea name="comentarios_costo" id="input" class="form-control material" rows="3" required="required"></textarea>
      </div>
      <div class="col-md-12" style="margin-top: 10px">
        <div class="col-md-12">
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    <button type="button" id="btn-guardar-costo" class="btn btn-primary">Registrar este Costo</button>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>

<!-- END Costo -->



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

<script>
</script>

<script type="text/javascript">
/**
 * Cargar/recargar (.html) anotaciones correspondientes al perfil {id}
 * 
 * Activar modal correspondiente
 * Captar evento de clase btn y leer su atributo id [switch]
 * serializar data, enviar y recibir respuesta. Recargar Anotaciones
 *
 *
 */
//  $(document).ready(function() {
//     function recargar_anotaciones() {
//     /**     
//      * Get data  + .html   
//      */  
//  }
// });
</script>

@stop
