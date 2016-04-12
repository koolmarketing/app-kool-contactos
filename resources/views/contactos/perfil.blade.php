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
                    <img src="{!! URL::to('img/user-avatar-big.png') !!}" class="img-responsive img-circle center-block" alt="user">
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            John Garcia
                        </div>
                        <div class="profile-usertitle-job">
                            Ingeniero Civil
                        </div>
                    </div>
                    <div class="profile-userbuttons">

                        <button type="button" class="btn btn-primary btn-xs waves waves-effect waves-float">Mensaje</button><br>
                    </div>

                </div>

                <div>

                    <div class="content-box box-shadow">
                        <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x blue"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span>
                            <div class="pull-left info">
                                <h3 class="text-uppercase zero-m">384 8563</h3>
                                <span class="block">Teléfono Oficina</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!--   -->

                        <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x blue"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span>
                            <div class="pull-left info">
                                <h3 class="text-uppercase zero-m">667 9546</h3>
                                <span class="block">Teléfono Casa</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--   -->

                        <!--   -->

                        <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x blue"></i>
                  <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                </span>
                            <div class="pull-left info">
                                <h3 class="text-uppercase zero-m">314 968 5769</h3>
                                <span class="block">Celular</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--   -->

                        <!--   -->

                        <div class="content-box small-box">
                <span class="fa-stack fa-2x block pull-left">
                  <i class="fa fa-circle fa-stack-2x blue"></i>
                  <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                </span>
                            <div class="pull-left info">
                                <h3 class="text-uppercase zero-m">314 968 5769</h3>
                                <span class="block">Celular</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--   -->

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-xs-12">

                <div class="content-box big-box box-shadow">
                    <br>
<div class="col-lg-12">
    <h3>3 de Abril de 1982 - Cali, Colombia</h3>
    <p><i class="icon-calendar"></i> Fecha y lugar de Nacimiento</p>
</div>



<div class="col-md-4">
    <h3>Ingeniero Civil</h3>
    <p>Profesión</p>
    <hr>
</div>
                    <div class="col-md-4">
                        <h3>Carcof Colombia L.T.D.A.</h3>
                        <p>Empresa Actual</p>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <h3>Jefe de Personal</h3>
                        <p>Cargo Actual</p>
                        <hr>
                    </div>


                    <div class="col-md-12">

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Contacto</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información Personal</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <h3>jhongarcia@carcof.com</h3>
                                            <p><i class="icon-email"></i> Email Corporativo</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>jhongarcia@gmail.com</h3>
                                            <p><i class="icon-email"></i> Email Personal</p>
                                        </div>
                                    </div>

                                <div class="col-md-12">
                                        <div class="col-md-6">
                                            <h3>jhongarcia04</h3>
                                            <p><i class="icon-skype-5"></i> Skype</p>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>jhongarciamartinez</h3>
                                            <p><i class="icon-facebook-6"></i> Facebook</p>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>@jhon_G_04</h3>
                                            <p><i class="icon-twitter-3"></i> Twitter</p>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>Perfil Público</h3>
                                            <p><i class="icon-linkedin-5"></i> Linkedin</p>
                                        </div>

                                    </div>


                                </div>


                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="col-md-12">
                                            <span class="label label-primary">Negocios</span> <span class="label label-primary">Viajes</span> <span class="label label-primary">Comida</span> <span class="label label-primary">Vinos</span> <span class="label label-primary">Familia</span> <span class="label label-primary">Hijos</span> <span class="label label-primary">Futbol</span> <span class="label label-primary">Personas</span> <span class="label label-primary">Amigos</span> <span class="label label-primary">Gadgets</span> <span class="label label-primary">Vegetariano</span>
                                            <span class="label label-primary">Negocios</span> <span class="label label-primary">Negocios</span> <span class="label label-primary">Negocios</span> <span class="label label-primary">Negocios</span> <span class="label label-primary">Negocios</span>
                                            <p><br><i class="icon-emo-happy"></i> Intereses</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Catolico</h3>
                                            <p><i class="icon-garden"></i> Religión</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Casado</h3>
                                            <p><i class="icon-heart-empty-3"></i> Situación Sentimental</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Heterosexual</h3>
                                            <p><i class="icon-move-2"></i> Orientación S.</p>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <hr>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="col-md-4">
                                        <h3>Miriam Fernandez</h3>
                                        <p><i class="icon-female"></i> Esposa</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Juan Armando Garcia</h3>
                                            <p><i class="icon-child"></i> Hijo</p>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Juliana Garcia</h3>
                                            <p><i class="icon-female"></i> Hija</p>
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

                    <buttom class="btn btn-primary"><i class="icon-plus-circle"></i> Nuevo Recordatorio</buttom> <buttom class="btn btn-success"><i class="icon-plus-circle"></i> Nueva Anotación</buttom>

                    <ul class="cbp_tmtimeline">
                        <li>
                            <time class="cbp_tmtime" datetime="2015-04-10 18:30"><span>4/10/15</span> <span>18:30</span></time>
                            <div class="cbp_tmicon cbp_tmicon-phone"></div>
                            <div class="cbp_tmlabel">
                                <h2>Amet laboriosam saepe</h2>
                                <p>Lorem ipsum dolor sit amet, consec suscipit commodi, sunt quasi animi nam laborum rerum est libero error. A ipsum laudantium neque repellendus, dolore ullam harum obcaecati maiores dolorem beatae optio amet non, quo nisi sapiente fugit. Nihil eius laudantium, mollitia. Libero, veniam, officiis.</p>
                            </div>
                        </li>
                        <li>
                            <time class="cbp_tmtime" datetime="2015-04-11T12:04"><span>4/11/15</span> <span>12:04</span></time>
                            <div class="cbp_tmicon cbp_tmicon-screen"></div>
                            <div class="cbp_tmlabel">
                                <h2>Tempore dignissimos ipsum repellendus</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore dignates voluptate veniam, sed veritatis, illum commodi reiciendis at suscipit reprehenderit possimus rem maiores totam. Facere vel, sed ex autem perspiciatis, laudantium.</p>
                            </div>
                        </li>
                        <li>
                            <time class="cbp_tmtime" datetime="2015-04-13 05:36"><span>4/13/15</span> <span>05:36</span></time>
                            <div class="cbp_tmicon cbp_tmicon-mail"></div>
                            <div class="cbp_tmlabel">
                                <h2>Voluptas quibusdam</h2>
                                <p>Pempore iste, sapiente architectoate recusandae temporibus magnam voluptas enim magni rem illo debitis. Voluptas quibusdam nesciunt ipsam et eum. Repellendus cum neque, hic?</p>
                            </div>
                        </li>
                    </ul>
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