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

<div class="container-fluid">

    <div class="col-lg-12">
        <div class="col-lg-12">
            <a href="" class="btn btn-md btn-primary"> Ver Todos</a>
        </div>

        <div class="col-lg-2 col-xs-12">
            <div class="content-box profile-sidebar box-shadow">
                <img src="{!! URL::to('img/distriya.jpg') !!}" class="img-responsive center-block" alt="user" width="200px">
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Distriya L.T.D.A.
                    </div>
                    <div class="profile-usertitle-job">
                        86384367224-8
                    </div>
                </div>


            </div>

            <div>

                <div class="content-box box-shadow">
                    <div class="content-box small-box">
                        <span class="fa-stack fa-2x block pull-left">
                          <i class="fa fa-circle fa-stack-2x blue"></i>
                          <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
                      </span>
                      <div class="pull-left info">
                        <h3 class="text-uppercase zero-m">Sector</h3>
                        <span class="block">Sector</span>
                    </div>
                    <div class="clearfix"></div>
                </div>




            </div>

        </div>

    </div>

    <div class="col-md-6 col-xs-12">

        <div class="content-box big-box box-shadow">
            <br><button class="btn btn-primary btn-md pull-right">Editar Información</button>
            <div class="col-lg-12">
                <h2><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half"></i></h2>
                <h3>3 de Abril de 1982 - Cali, Colombia</h3>
                <p><i class="icon-calendar"></i> Fecha y lugar de Creación</p>
            </div>
            <br>

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#contactos" aria-controls="contactos" role="tab" data-toggle="tab"><i class="icon-contacts"></i> Contacto</a></li>

                        <li role="presentation"><a href="#filosofia" aria-controls="filosofia" role="tab" data-toggle="tab"><i class="icon-coffee-1"></i> Filosofia</a></li>

                        <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab"><i class="icon-share"></i> Redes</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content"><br>
                        <div role="tabpanel" class="tab-pane active" id="contactos">
                            <div class="col-md-12">

                                <div class="col-md-4">
                                    <h3>Cali, Colombia</h3>
                                    <p><i class="icon-globe-6"></i> Ciudad, País</p>
                                    <hr>
                                </div>

                                <div class="col-md-8">
                                    <h3>Calle 30b 45-56 - Barrio San Cristobal</h3>
                                    <p><i class="icon-location-5"></i> Dirección</p>
                                    <hr>
                                </div>

                                <div class="col-md-12">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#representante" aria-controls="representante" role="tab" data-toggle="tab"><i class="icon-male"></i> Representante</a></li>
                                        <li role="presentation"><a href="#comercial" aria-controls="comercial" role="tab" data-toggle="tab"><i class="icon-female"></i> Comercial</a></li>
                                        <li role="presentation"><a href="#soporte" aria-controls="soporte" role="tab" data-toggle="tab"><i class="icon-male"></i> Soporte</a></li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="representante">

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                 <!-- -->

                                                 <div class="col-md-6">
                                                    <h3>Dr. William Alberto Fernandez Montes</h3>
                                                    <p><i class="icon-user"></i> Nombre</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>Administrador General</h3>
                                                    <p><i class="icon-cog-alt"></i> Cargo</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>albertf@distriya.com</h3>
                                                    <p><i class="icon-email"></i> email</p>
                                                </div>

                                                <div class="col-md-3">
                                                    <h3>349 5692</h3>
                                                    <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>315 236 5698</h3>
                                                    <p><i class="icon-mobile-2"></i> Celular</p>
                                                </div>

                                                <!-- -->
                                            </div>
                                        </div>
                                    </div>


                                    <div role="tabpanel" class="tab-pane" id="comercial">

                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <!-- -->

                                                <div class="col-md-6">
                                                    <h3>Sra. Maria Alejandra Cardona Villa </h3>
                                                    <p><i class="icon-user"></i> Nombre</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>Asistente Comercial</h3>
                                                    <p><i class="icon-cog-alt"></i> Cargo</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>alejandra.cardona@distriya.com</h3>
                                                    <p><i class="icon-email"></i> email</p>
                                                </div>

                                                <div class="col-md-3">
                                                    <h3>349 5672 ext 34</h3>
                                                    <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>315 236 7848</h3>
                                                    <p><i class="icon-mobile-2"></i> Celular</p>
                                                </div>

                                                <!-- -->
                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="soporte">

                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <!-- -->

                                                <div class="col-md-6">
                                                    <h3>Sr. Santiago Garcia Martinez</h3>
                                                    <p><i class="icon-user"></i> Nombre</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>Asesor de Servicio</h3>
                                                    <p><i class="icon-cog-alt"></i> Cargo</p>
                                                </div>

                                                <div class="col-md-6">
                                                    <h3>santiago.garcia@distriya.com</h3>
                                                    <p><i class="icon-email"></i> email</p>
                                                </div>

                                                <div class="col-md-3">
                                                    <h3>349 5692 ext 1001</h3>
                                                    <p><i class="icon-phone-1"></i> Teléfono Fijo</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>315 236 5698</h3>
                                                    <p><i class="icon-mobile-2"></i> Celular</p>
                                                </div>

                                                <!-- -->
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div role="tabpanel" class="tab-pane" id="filosofia">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>Compromiso, Satisfacción, Excelencia, Dinamismo, Servicio</h3>
                                <p><i class="icon-list-2"></i> Valores Corporativos</p>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="icon-bookmark-empty-1"></i> Misión
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <i class="icon-bookmark-empty-1"></i> Visión
                              </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

            </div>
        </div><br>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Crecer, Expander, Afianzar, Colaborar, Donar</h3>
            <p><i class="icon-hourglass-1"></i> Intereses</p>
        </div>

    </div>
</div>



<div role="tabpanel" class="tab-pane" id="redes">
    <div class="col-md-12 col-sm-12 col-xs-12">

     <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-gmail"></i> Gmail</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-facebook-4"></i> Facebook</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-twitter-3"></i> Twitter</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-youtube-2"></i> YouTube</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-instagram-1"></i> Instagram</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-linkedin-3"></i> Linkedin</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-pinterest-2"></i> Pinterest</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-website"></i> Hootsuite</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-fire-3"></i> A.I</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-camera-alt"></i> Photosnack</h3>
                <p>Red</p>
            </div>
            <div class="col-md-5">
                <h3>distriya2015@gmail.com</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-4">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h3><i class="icon-server"></i> FTP</h3>
                <p>Red</p>
            </div>
            <div class="col-md-3">
                <h3>distriklob.com</h3>
                <p>Server</p>
            </div>
            <div class="col-md-3">
                <h3>distriya2015</h3>
                <p>Usuario</p>
            </div>
            <div class="col-md-3">
                <h3>Distriya6723</h3>
                <p>Contraseña</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="col-lg-4">

    <div class="content-box big-box">

        <a class="btn btn-primary" data-toggle="modal" href='#modal-anotacion'><i class="icon-plus-circle"></i> Anotación</a>
        <a class="btn btn-success" data-toggle="modal" href='#modal-recordatorio'><i class="icon-plus-circle"></i> Recordatorio</a>
        <a class="btn btn-danger" data-toggle="modal" href='#modal-alerta'><i class="icon-plus-circle"></i> Alerta</a>
        <a type="button" class="btn btn-dark" data-toggle="modal" href='#modal-cobro'><i class="icon-plus-circle"></i> Cartera</a>

        <div class="panel panel-default" id="anotaciones">
            <div class="panel-body">
                <div class="content-box biggest-box red-bg">
                    <div class="pull-left">
                        <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                        <h3 class="text-uppercase zero-m text-title-note"><i class="icon-attention-4"></i> Alerta</h3><br>
                        <p class="text-note"> Lorem ipsum dolor sim dolor sit amet, consectetur adipisice nisi inventoreuta, omnis odio dols eveniet! </p>
                        <span class="pull-right">15/04/2016</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Panel -->
                <div class="content-box biggest-box blue-bg">
                    <div class="pull-left">
                       <img src="{!! URL::to('img/marlon-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                       <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
                       <p class="text-note"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
                       <span class="pull-right">13/04/2016</span>
                   </div>
                   <div class="clearfix"></div>
               </div>
               <!-- End panel -->

               <!-- Panel -->
               <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/marlon-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                   <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
                   <p class="text-note"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inveue nisi inventoreuta, omnis odio dolores hic voluptas evenientoreuta, omnis odio dolores hic voluptas eveniet! </p>
                   <span class="pull-right">10/04/2016</span>
               </div>
               <div class="clearfix"></div>
           </div>
           <!-- End panel -->

           <!-- Panel -->
           <div class="content-box biggest-box blue-bg">
            <div class="pull-left">
               <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
               <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
               <p class="text-note"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
               <span class="pull-right">8/04/2016</span>
           </div>
           <div class="clearfix"></div>
       </div>
       <!-- End panel -->

       <!-- Panel -->
       <div class="content-box biggest-box blue-bg">
        <div class="pull-left">
           <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
           <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
           <p class="text-note"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
           <span class="pull-right">8/04/2016</span>
       </div>
       <div class="clearfix"></div>
   </div>
   <!-- End panel -->

   <!-- Panel -->
   <div class="content-box biggest-box blue-bg">
    <div class="pull-left">
       <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
       <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
       <p class="text-note"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas evenieue nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
       <span class="pull-right">8/04/2016</span>
   </div>
   <div class="clearfix"></div>
</div>
<!-- End panel -->

</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-anotacion">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Escribe un Comentario</h4>
            </div>{!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-anotacion','files'=>true));!!}
            <div class="modal-body">
                <div class="row">
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
<div class="modal fade" id="modal-cobro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Programar un Cobro</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-cartera','files'=>true));!!}
                <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}">   
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
        <button type="submit" id="btn-guardar-cartera" class="btn btn-primary">Guardar Anotación</button>
        {!! Form::close() !!}
    </div>
</div>
</div>
</div>

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
<!-- Anotaciones -->
{!! HTML::script('js/app/anotaciones/anotacion.js') !!}
{!! HTML::script('js/app/anotaciones/alerta.js') !!}
{!! HTML::script('js/app/anotaciones/cartera.js') !!}
{!! HTML::script('js/app/anotaciones/recordatorio.js') !!}


<script type="text/javascript">
    $(function(){
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