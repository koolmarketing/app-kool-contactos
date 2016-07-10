
@section('add_styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
	#pandel-middle{max-height:400px;}
	#panel-low{max-height:400px;}
	#panel-high{max-height:400px;}
	.tilt.right {
		transform: rotate(3deg);
		-moz-transform: rotate(3deg);
		-webkit-transform: rotate(3deg);
	}
	.tilt.left {
		transform: rotate(-3deg);
		-moz-transform: rotate(-3deg);
		-webkit-transform: rotate(-3deg);
	}

	.column {

		/*padding-bottom: 100px;*/
		padding:20px 20px 100px 20px;
		border:0.4px solid #f3f3f3;
	}
	.portlet {
		margin: 0 1em 1em 0;
		padding: 0.3em;
		width:100%;
	}
	.portlet-header {
		padding: 0.2em 0.3em;
		margin-bottom: 0.5em;
		position: relative;
		background:white;
		border:hidden;
		cursor:move;
	}
	.portlet-toggle {
		position: absolute;
		top: 50%;
		right: 0;
		margin-top: -8px;
	}
	.portlet-content {
		padding: 0.4em;
	}
	.portlet-placeholder {
		border: 1px dotted black;
		margin: 0 1em 1em 0;
		height: 50px;
	}
</style>

@stop
@extends('layouts.master')

@section('content')
<div class="col-md-12 col-lg-12 ">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="btn-group pull-right" role="group" aria-label="...">
				<button type="button" class="btn btn-default btn-md"><i class="icon-chart-line-1"></i> Mi Progreso</button>
				<button type="button" class="btn btn-default btn-md"><i class=" icon-check-1"></i> Mis Metas</button>
				<button type="button" class="btn btn-default btn-md"><i class="icon-cog"></i> Configuración</button>
			</div>
		</div>
	</div>
	
</div>

{{--  --}}

<div class="row">
	<div class="col-md-12">
		<div class="col-lg-2">
			<div class="inbox-compose">
				<a href="#" id="compose-email" class="btn btn-block btn-warning text-uppercase waves waves-button waves-effect waves-float">Nueva Oportunidad</a>
			</div>
			<ul class="inbox-nav inbox-divider">
				<li class="active">
					<a href="#"><i class="fa fa-inbox green"></i>Inbox<span class="label label-danger pull-right">2</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-envelope-o green"></i>Sent Mail</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-bookmark-o green"></i>Important</a>
				</li>
				<li>
					<a href="#"><i class=" fa fa-external-link green"></i>Drafts<span class="label label-info pull-right">30</span></a>
				</li>
				<li>
					<a href="#"><i class=" fa fa-trash-o green"></i>Trash</a>
				</li>
			</ul>
			<ul class="nav nav-pills nav-stacked labels-info inbox-divider">
				<li>
					<h4>Labels</h4></li>
					<li><a href="#"><i class=" fa fa-circle green"></i>Work</a></li>
					<li><a href="#"><i class=" fa fa-circle red"></i>Client</a></li>
					<li><a href="#"><i class=" fa fa-circle yellow"></i>Family</a></li>
					<li><a href="#"><i class=" fa fa-circle blue"></i>Friends</a></li>
					<li><a href="#"><i class=" fa fa-circle gray"></i>Office</a></li>
				</ul>
				<ul class="nav nav-pills nav-stacked labels-info ">
					<li>
						<h4>Online</h4></li>
						<li><a href="#"><i class="fa fa-circle green"></i>Johny Leor</a></li>
						<li><a href="#"><i class="fa fa-circle yellow"></i>Pitt Roberts</a></li>
						<li><a href="#"><i class="fa fa-circle red"></i>Rebecca Smith</a></li>
						<li><a href="#"><i class="fa fa-circle text-muted"></i>Paul Myles</a></li>
						<li><a href="#"><i class="fa fa-circle text-muted"></i>Julia Kross</a></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">


					{{--  --}}
					<div class="col-md-12"><br>

						<div class="col-md-4">
							<div class="content-box ultra-widget blue-bg">
								<div class="w-content text-center">
									<div class="w-descr simple">
										<span class="text-uppercase w-name">Low</span>
										<br><br>
									</div>
								</div>
							</div>
							<div class="content-box small-box">

								<button class="btn btn-sm btn-default pull-right" data-tarjetas="comentario" id="calendario-anotaciones"><i class="icon-calendar"></i></button>

							</div>
							<div class="column panel-low">
								{{--  --}}
								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-male"></i> Ricardo Sannín</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>

										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>	
									</div>	

								</div>
								{{--  --}}
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="content-box ultra-widget green-bg">
								<div class="w-content text-center">
									<div class="w-descr simple">
										<span class="text-uppercase w-name">Middle</span>
										<br><br>
									</div>
								</div>
							</div>
							{{--  --}}
							<div class="content-box small-box">

								<button class="btn btn-sm btn-default pull-right" data-tarjetas="comentario" id="calendario-anotaciones"><i class="icon-calendar"></i></button>

								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
							<div class="column" id="pandel-middle">
								{{--  --}}
								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-male"></i> Ricardo Sannín</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>
										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>
									</div>	
								</div>
								{{--  --}}
														{{--  --}}
								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-male"></i> Ricardo Sannín</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>
										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>
									</div>	
								</div>
								{{--  --}}
														{{--  --}}
								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-male"></i> Ricardo Sannín</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>
										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>
									</div>	
								</div>
								{{--  --}}
							</div>
						</div>

						<div class="col-md-4">
							<div class="content-box ultra-widget red-bg">
								<div class="w-content text-center">
									<div class="w-descr simple">
										<span class="text-uppercase w-name">High</span>
										<br><br>
									</div>
								</div>
							</div>
							<div class="content-box small-box">

								<button class="btn btn-sm btn-default pull-right" data-tarjetas="comentario" id="calendario-anotaciones"><i class="icon-calendar"></i></button>

							</div>

							<div class="column">

								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-female"></i> Luci Cardenas</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										{{--  --}}
										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>

										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>
									</div>							
								</div>


								<div class="portlet">
									<div class="portlet-header">
										<h4><i class="icon-building"></i> Camoranns S.A.S</h4>
									</div>
									<div class="portlet-content">
										<div class="progress progress-bar-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
											</div>
										</div>
										{{--  --}}

										<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>

										<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>


										{{-- <button type="button" class="btn waves btn-labeled btn-default btn-xs text-uppercase waves-effect waves-float">
										<span class="btn-label btn-xs"><i class="icon-link-ext"></i></span> editar
									</button> --}}
								</div>
							</div>


							<div class="portlet">
								<div class="portlet-header">
									<h4><i class="icon-male"></i> Ricardo Sannín</h4>
								</div>
								<div class="portlet-content">
									<div class="progress progress-bar-sm">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
										</div>
									</div>
									<a type="button" data-toggle="modal" data-target='#modal-user' class="btn btn-default btn-icon waves waves-circle waves-effect waves-float" data-backdrop="static" data-keyboard="false" href="../crm/oportunidad/"><i class="fa fa-refresh"></i></a>

									<button type="button" class="pull-right btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class=" icon-cancel-5"></i></button>	
								</div>	

							</div>
						</div>
					</div>
				</div>
				{{--  --}}




			</div>
			<div class="panel panel-default">
				<div class="panel-body">





				</div>
			</div>
		</div>
	</div>
</div>

{{--  --}}
<div class="modal fade" id="modal-user">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
{{--  --}}
@stop


@section('add_scripts')


<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$( "html" ).scrollTop(0);

//move_crm


$("#pandel-middle").niceScroll({cursorcolor:"#42b382"});

$("#panel-low").niceScroll({cursorcolor:"#42b382"});
$( ".move_crm" ).draggable();

</script>


<script>

	$( ".column" ).sortable({
		connectWith: ".column",
		handle: ".portlet-header",
		cancel: ".portlet-toggle",
		start: function (event, ui) {
			ui.item.addClass('tilt');
			tilt_direction(ui.item);

		},
		stop: function (event, ui) {
			ui.item.removeClass("tilt");
			$("html").unbind('mousemove', ui.item.data("move_handler"));
			ui.item.removeData("move_handler");
			//swal("ok");
		}
	});

	function tilt_direction(item) {
		var left_pos = item.position().left,
		move_handler = function (e) {
			if (e.pageX >= left_pos) {
				item.addClass("right");
				item.removeClass("left");
			} else {
				item.addClass("left");
				item.removeClass("right");
			}
			left_pos = e.pageX;
		};
		$("html").bind("mousemove", move_handler);
		item.data("move_handler", move_handler);
	}  

	$( ".portlet" )
	.addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
	.find( ".portlet-header" )
	.addClass( "ui-widget-header ui-corner-all" )
	.prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

	$( ".portlet-toggle" ).click(function() {
		var icon = $( this );
		icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
		icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
	});

</script>
@stop



