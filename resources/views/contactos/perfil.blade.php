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

        <div class="col-lg-10 col-lg-offset-1">
          <div class="col-lg-12">
              <a href="" class="btn btn-md btn-primary"> Ver Todos</a>
          </div>

            <div class="col-lg-3 col-xs-12">
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

                        <button type="button" class="btn btn-warning waves waves-effect waves-float">Mensaje</button>
                    </div>

                </div>

                <div class="">
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

            <div class="col-lg-9 col-xs-12">

                <div class="content-box box-shadow">
                    
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