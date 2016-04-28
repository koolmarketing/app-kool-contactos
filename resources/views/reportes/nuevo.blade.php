@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}

{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
{!! HTML::style('bower_components/ion.rangeslider/css/ion.rangeSlider.css') !!}
{!! HTML::style('datetimepicker/build/jquery.datetimepicker.min.css') !!}

{!! HTML::style('bower_components/DataTables/media/css/jquery.dataTables.css') !!}
{!! HTML::style('bower_components/datatables-tabletools/css/dataTables.tableTools.css') !!}

@stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">
	<button class="btn btn-lg btn-primary" data-toggle="modal" href='#modal-id'><i class="icon-pencil-5"></i> Nuevo Reporte</button>

	<div class="col-lg-12">
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Id</th>
					<th>Actividad</th>
					<th>Cliente</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Porcentaje</th>
					<th>Nota</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Id</th>
					<th>Actividad</th>
					<th>Cliente</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Porcentaje</th>
					<th>Nota</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>


<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-upload-cloud-2"></i> Guardar Reporte</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						{!!Form::open(array('action' => 'ContactoController@SaveReporte', 'method' => 'post', 'id' => 'guarda_reporte'));!!}

						<div class="col-md-12">
							<div class="col-md-12"><br>			
								<input type="text" id="actividad" name="actividad" id="input" placeholder="Actividad" class="form-control material" value="" required="required" pattern="" title="">
							</div>
							<div class="col-md-12"><br>			
								<input type="text" id="cliente" name="cliente" id="input" placeholder="Cliente" class="form-control material" value="" required="required" pattern="" title="">
							</div>
							<div class="col-md-4">	<br>				
								<input type="text"  name="inicio" id="date_timepicker_start" placeholder="Inicio" class="form-control material" value="" required="required" pattern="" title="">
							</div>
							<div class="col-md-4"> <br>						
								<input type="text" name="fin" id="date_timepicker_end" placeholder="Fin" class="form-control material" value="" required="required" pattern="" title="">
							</div>
							<div class="col-md-4"> <br>						
								<input type="number" name="terminado" id="terminado" placeholder="% Terminado" class="form-control material" value="" min="5" max="" step="" required="required" title="">
							</div>
							<div class="col-md-12"><br>
								<textarea name="anotacion" id="input" placeholder="Anotación" class="form-control material" rows="3" required="required"></textarea>
							</div>
						</div>

					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				{!! Form::button('Guardar Reporte', array('class' => 'btn btn btn-primary pull-right',"id"=>"guardar_reporte")); !!}
				
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

@stop


@section('add_scripts')
{!! HTML::script('datetimepicker/build/jquery.datetimepicker.full.js') !!}
{!! HTML::script('bower_components/DataTables/media/js/jquery.dataTables.js') !!}
{!! HTML::script('bower_components/datatables.net-responsive/js/dataTables.responsive.js') !!}
{!! HTML::script('bower_components/datatables-tabletools/js/dataTables.tableTools.js') !!}

{!! HTML::script('Buttons-master/js/dataTables.buttons.js') !!}

<script type="text/javascript">
	$(document).ready(function() {
		cargar_tabla();	
	});

	function cargar_tabla(){
		var table=$('#example').DataTable( {
			buttons: true,
			 buttons: ['copy', 'excel', 'pdf'],
			"ajax": "{!! URL::to("/") !!}/get-reportes",
			"order": [ 0, 'desc' ],
			"columns": [
			{ "data": "id" },
			{ "data": "actividad" },
			{ "data": "cliente" },
			{ "data": "inicio" },
			{ "data": "fin" },
			{ "data": "porcentaje" },
			{ "data": "nota" }
			]
		} );
		

		setInterval( function () {
			table.ajax.reload();
		}, 4000 );


	}



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
	});
</script>

<script type="text/javascript">
	function validar(){
		actividad=$("#actividad").val();
		cliente=$("#cliente").val();
		inicio=$("#date_timepicker_start").val();
		fin=$("#date_timepicker_end").val();
		terminado=$("#terminado").val();

		if(actividad==""){return false;}else if(cliente==""){return false;}else if(fin==""){return false;}else if(terminado==""){return false;}else{return true;}	
	}
</script>
<script>
	    //      SAVE AJAX   

	    $('body').on('click', '#guardar_reporte', function(event) {
	    	if (validar()) {
	    		$.ajaxSetup({
	    			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	    		})
	    		event.preventDefault();
	    		var formId = '#guarda_reporte';
	    		$.ajax({
	    			url: $(formId).attr('action'),
	    			type: $(formId).attr('method'),
	    			data: $(formId).serialize(),
	    			dataType: 'html',
	    			success: function(result){
	    				if ($(formId).find("input:first-child").attr('value') == 'PUT') {
	    					var $jsonObject = jQuery.parseJSON(result);
	    					$(location).attr('href',$jsonObject.url);
	    				}
	    				else{
	    					$(formId)[0].reset();
	    					console.log(result); 
	    					swal("Actividad Registrada con éxito"); 

	    				}
	    			},
	    			error: function(){
	    				console.log('Error');
	    			}
	    		});
	    	} else {
	    		swal("Faltan Campos en tu reporte");
	    	}	    	
	    });
//      END SAVE AJAX    <---
</script>

@stop