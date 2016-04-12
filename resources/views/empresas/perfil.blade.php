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
                    <br>
                    <div class="col-lg-12">
                        <h3>3 de Abril de 1982 - Cali, Colombia</h3>
                        <p><i class="icon-calendar"></i> Fecha y lugar de Creación</p>
                    </div>

                    <div class="col-md-12">

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Contacto</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Redes</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="col-md-12">

                                        <div class="col-md-4">
                                            <h3>Cali, Colombia</h3>
                                            <p>Ciudad, País</p>
                                            <hr>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>Calle 30b 45-56</h3>
                                            <p>Dirección</p>
                                            <hr>
                                        </div>

                                        <div class="col-md-12">

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#representante" aria-controls="representante" role="tab" data-toggle="tab">Representante</a></li>
                                                <li role="presentation"><a href="#redes" aria-controls="profile" role="tab" data-toggle="tab">Comercial</a></li>
                                                <li role="presentation"><a href="#soporte" aria-controls="messages" role="tab" data-toggle="tab">Soporte</a></li>

                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="representante">1...</div>
                                                <div role="tabpanel" class="tab-pane" id="redes">2...</div>
                                                <div role="tabpanel" class="tab-pane" id="soporte">3...</div>

                                            </div>

                                        </div>

                                    </div>


                                </div>


                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <h3>William Fernandez</h3>
                                            <p>Nombre</p>
                                            <hr>
                                        </div>

                                        <div class="col-md-4">
                                            <h3>William Fernandez</h3>
                                            <p>Cargo</p>
                                            <hr>
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
                                <p>Lorem ipsum dolor sit amet, consec suscipit commodi, sunt quasi animi nam laborum rerum laudantium neque repellendus, dolore ullam harum obcaecati maiores dolorem beatae optio amet non, quo nisi sapiente fugit. Nihil eius laudantium, mollitia. Libero, veniam, officiis.</p>
                            </div>
                        </li>
                        <li>
                            <time class="cbp_tmtime" datetime="2015-04-11T12:04"><span>4/11/15</span> <span>12:04</span></time>
                            <div class="cbp_tmicon cbp_tmicon-screen"></div>
                            <div class="cbp_tmlabel">
                                <h2>Tempore dignissimos ipsum repellendus</h2>
                                <p>Lorem ipsum dolor sit amet,ndis at suscipit reprehenderit possimus rem maiores totam. Facere vel, sed ex autem perspiciatis, laudantium.</p>
                            </div>
                        </li>
                        <li>
                            <time class="cbp_tmtime" datetime="2015-04-13 05:36"><span>4/13/15</span> <span>05:36</span></time>
                            <div class="cbp_tmicon cbp_tmicon-mail"></div>
                            <div class="cbp_tmlabel">
                                <h2>Voluptas quibusdam</h2>
                                <p>Pempore iste, sapiente architectoate recusandae temporibus magnam vo debitis. Voluptas quibusdam nesciunt ipsam et eum. Repellendus cum neque, hic?</p>
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