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
    <div class="table-responsive">
        <table id="datatable" class="display">
            <thead>
                <tr>                       
                    <th>Nombre</th>                        
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->usuarios as $usuarios)
                <tr>
                    <td><a href="#"><img src="{!! URL::to('/') !!}/uploads/fotos/{!! $usuarios->fotografia !!}" width="30px" class="img-circle">  {!! $usuarios->name !!}</a>  </td>
                    <td>{!! $usuarios->email !!}</td>
                    <td>@if ($usuarios->rol==1)
                        Administrador
                        @elseif ($usuarios->rol==2)
                        Comercial
                        @elseif ($usuarios->rol==3)
                        Soporte
                        @else
                        Ningúno                        
                        @endif
                    </td>
                    <td>
                        @if ($usuarios->activo==1)
                        <span class="label label-info">Activo</span>                            
                        @else
                        <span class="label label-danger">Inactivo</span>  
                        @endif
                    </td>
                    <td>
                      <a class="btn btn-primary btn-sm" data-toggle="modal" href='#editar_{!! $usuarios->id !!}'><i class="icon-pencil"></i> Editar</a>
                      @if ($usuarios->activo==1)
                      <a href="{!! URL::to('desactivar_usuario/') !!}/{!!$usuarios->id!!}" class="btn btn-danger btn-sm"><i class=" icon-cancel-circle-1"></i> Desactivar</a>
                      @else
                      <a href="{!! URL::to('activar_usuario/') !!}/{!!$usuarios->id!!}" class="btn btn-success btn-sm"><i class=" icon-check"></i> Activar</a>
                      @endif                          
                  </td>                        
              </tr>
              @endforeach                                
          </tbody>
      </table>
  </div>
</div>

@foreach ($data->usuarios as $usr)
<div class="modal fade" id="editar_{!!$usr->id!!}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><img src="{!! URL::to('/') !!}/uploads/fotos/{!! $usr->fotografia !!}" width="30px" class="img-circle"> {!! $usr->name !!}</h4>
            </div>
            <div class="modal-body">
                <form action="">
                <div class="form-group">
                    <input type="file" name="foto" class="material">
                     <p class="help-text">Fotografía</p>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" id="id_{!! $usr->id !!}" class="form-control" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre_{!! $usr->id !!}" class="form-control material" placeholder="Nombre" value="{!! $usr->name !!}">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email_{!! $usr->id !!}" class="form-control material" placeholder="Email" value="{!! $usr->email !!}">
                </div>
                <div class="form-group">
                    <select name="rol" id="inputRol" class="form-control material" required="required">
                        <option value="">Seleccione Rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Comercial</option>
                        <option value="3">Soporte</option>
                    </select>
                </div>

                <div class="form-group">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="1" name="activo" checked="">
                            <label for="inlineRadio1" class="text-p-orders"> Activar </label>
                        </div>
                        <div class="radio radio-danger radio-inline">
                            <input type="radio" id="inlineRadio2" value="0" name="activo">
                            <label for="inlineRadio2" class="text-p-orders"> Desactivar </label>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
@endforeach

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


    @section('add_scripts')
    
    @stop