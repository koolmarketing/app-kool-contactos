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
            <a href="{!! URL::to('nuevo-contacto') !!}" class="btn btn-md btn-danger"> Crear Nuevo Cliente</a>

            <div class="table-responsive">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cumpleaños</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Profesión</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+/OSX.2+</td>
                        <td>1.6</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.8</td>
                        <td>Win 7+</td>
                        <td>2.2</td>
                        <td>A</td>
                    </tr>


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
                    "sSwfPath": "js/datatables/copy_csv_xls_pdf.swf"
                },
                responsive: true
            });
        });

    </script>



@stop