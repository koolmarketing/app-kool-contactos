@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}

{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}

{!! HTML::style('bower_components/DataTables/media/css/jquery.dataTables.css') !!}
{!! HTML::style('bower_components/datatables-tabletools/css/dataTables.tableTools.css') !!}
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

    <div class="col-lg-6 col-xs-12">

        <div class="content-box big-box box-shadow">
            <br><button class="btn btn-primary btn-md pull-right">Editar Información</button>
            <div class="col-lg-12">
            <h2><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half"></i></h2>
                <h3>3 de Abril de 1982 - Cali, Colombia</h3>
                <p><i class="icon-calendar"></i> Fecha y lugar de Creación</p>
            </div>
            <br>

            <div class="col-md-12">

                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-contacts"></i> Contacto</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-share"></i> Redes</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content"><br>
                        <div role="tabpanel" class="tab-pane active" id="home">
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
                                        <li role="presentation"><a href="#redes" aria-controls="profile" role="tab" data-toggle="tab"><i class="icon-female"></i> Comercial</a></li>
                                        <li role="presentation"><a href="#soporte" aria-controls="messages" role="tab" data-toggle="tab"><i class="icon-male"></i> Soporte</a></li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="representante">

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                 <!-- -->

                                                 <div class="col-md-6">
                                                    <h3>William Alberto Fernandez Montes</h3>
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


                                    <div role="tabpanel" class="tab-pane" id="redes">

                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <!-- -->

                                                <div class="col-md-6">
                                                    <h3>Maria Alejandra Cardona Villa </h3>
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
                                                    <h3>Santiago Garcia Martinez</h3>
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


                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-md-12">

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

        <buttom class="btn btn-primary"><i class="icon-plus-circle"></i> Anotación</buttom> <buttom class="btn btn-success"><i class="icon-plus-circle"></i> Recordatorio</buttom> <buttom class="btn btn-danger"><i class="icon-plus-circle"></i> Alerta</buttom>
        <div class="panel panel-default" id="anotaciones">
            <div class="panel-body">
                <div class="content-box biggest-box red-bg">
                <div class="pull-left">
                <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-attention-4"></i> Alerta</h3>
                  <p class="text-note"> Lorem ipsum dolor sitreuta, omnis odio doloresLorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- Panel -->
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/marlon-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-pencil-2"></i> Anotación</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- End panel -->

                <!-- Panel -->
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/marlon-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-pencil-2"></i> Anotación</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inveue nisi inventoreuta, omnis odio dolores hic voluptas evenientoreuta, omnis odio dolores hic voluptas eveniet! </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- End panel -->

             <!-- Panel -->
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-pencil-2"></i> Anotación</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- End panel -->

               <!-- Panel -->
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-pencil-2"></i> Anotación</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- End panel -->

               <!-- Panel -->
              <div class="content-box biggest-box blue-bg">
                <div class="pull-left">
                   <img src="{!! URL::to('img/aura-perfil.jpg') !!}" class="img-responsive img-circle pull-right" width="40px" alt="">                  
                  <h3 class="text-uppercase zero-m"><i class="icon-pencil-2"></i> Anotación</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque nisi inventoreuta, omnis odio dolores hic voluptas evenieue nisi inventoreuta, omnis odio dolores hic voluptas eveniet! </p>
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
@stop

@section('add_scripts')
{!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
{!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
{!! HTML::script('js/mask.js') !!}
{!! HTML::script('vendor\select2-master\dist\js\select2.min.js') !!}

{!! HTML::script('bower_components/DataTables/media/js/jquery.dataTables.js') !!}
{!! HTML::script('bower_components/datatables.net-responsive/js/dataTables.responsive.js') !!}
{!! HTML::script('bower_components/datatables-tabletools/js/dataTables.tableTools.js') !!}
<!--Data Tables-->

<script>
    $(document).ready(function() {
            //Mascara
            $('.date').mask('00/00/0000');

            $('#thebox').picEdit();

            $(".form_tags").tagsinput('items');
            $(".multi_tags").select2();

        });

    $(function () {
            //Data Tables
            $('#datatable').DataTable({
                displayLength: 25,
                dom: 'T<"clear">lfrtip',
                tableTools: {
                    "sSwfPath": "js/datatables/copy_csv_xls_pdf.swf"
                },
                responsive: true
            });
        });

    </script>



    @stop