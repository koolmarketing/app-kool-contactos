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
            <a href="#" class="btn btn-md btn-primary"> Filtro Avanzado</a>
            <a href="{!! URL::to('nueva-empresa') !!}" class="btn btn-md btn-danger"> Nueva Empresa</a>

            <div class="table-responsive">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>Nombre</th>                        
                        <th>NIT</th>
                        <th>Sitio Web</th>
                        <th>Teléfono</th>
                        <th>Rango</th>


                    </tr>
                    </thead>
                    <tbody>
                   

                    @foreach ($data->all as $empresa)
                         <tr>
                        <td><a href="{!! URL::to('empresa/'.$empresa->id.'') !!}">{!! $empresa->nombre_comercial !!}</a>  </td>
                        <td>{!! $empresa->nit !!}</td>
                        <td>{!! $empresa->sitio_web !!}</td>
                        <td>{!! $empresa->telefono_1 !!}</td>
                        <td>
                            @for ($i = 0; $i < $empresa->rango ; $i++)
                                <i class="icon-star"></i>
                            @endfor
                         </td>
                        
                    </tr>
                    @endforeach
                                  

                    </tbody>
                </table>
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
                    "sSwfPath": "{!! URL::to('/') !!}/Buttons-master/swf/flashExport.swf"
                },
                responsive: true
            });
        });

    </script>



@stop