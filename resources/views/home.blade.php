@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="col-md-2">
			<div class="content-box ultra-widget">
				<div class="w-content big-box">
					<div class="w-progress">
						<span class="w-amount blue">0</span>
						<br>
						<span class="text-uppercase w-name">Recaudo del Día</span>
					</div>
					<span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>
					<div class="progress progress-bar-sm zero-m">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						</div>
					</div>
					<div class="w-status clearfix">
						<div class="w-status-title pull-left text-uppercase">Progress</div>
						<div class="w-status-number pull-right text-uppercase">0%</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="content-box ultra-widget">
				<div class="w-content big-box">
					<div class="w-progress">
						<span class="w-amount blue">0</span>
						<br>
						<span class="text-uppercase w-name">Recaudo de la semana</span>
					</div>
					<span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>
					<div class="progress progress-bar-sm zero-m">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						</div>
					</div>
					<div class="w-status clearfix">
						<div class="w-status-title pull-left text-uppercase">Progress</div>
						<div class="w-status-number pull-right text-uppercase">0%</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="content-box ultra-widget">
				<div class="w-content big-box">
					<div class="w-progress">
						<span class="w-amount blue">0</span>
						<br>
						<span class="text-uppercase w-name">Recaudo del mes</span>
					</div>
					<span class="w-refresh w-p-icon"><i class="fa fa-usd"></i></span>
					<div class="progress progress-bar-sm zero-m">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						</div>
					</div>
					<div class="w-status clearfix">
						<div class="w-status-title pull-left text-uppercase">Progress</div>
						<div class="w-status-number pull-right text-uppercase">0%</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="content-box big-box box-shadow">
				
				
			</div>
		</div>

	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-12">

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="content-box small-box">
						<span class="fa-stack fa-2x block pull-left">
							<i class="fa fa-circle fa-stack-2x blue"></i>
							<i class="fa  fa-commenting-o fa-stack-1x fa-inverse"></i>
						</span>
						<div class="pull-left info">
							<h1 class="text-uppercase zero-m" id="get_comentarios"></h1>
							<span class="block">Anotaciones</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_comentarios">
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="panel panel-success">
				<div class="panel-body">
					<div class="content-box small-box">
						<span class="fa-stack fa-2x block pull-left">
							<i class="fa fa-circle fa-stack-2x green"></i>
							<i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i>
						</span>
						<div class="pull-left info">
							<h1 class="text-uppercase zero-m" id="get_recordatorios"></h1>
							<span class="block">Recordatorios</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_recordatorios">
					</div>
				</div>
			</div>
		</div>
		

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="panel panel-danger">
				<div class="panel-body">
					<div class="content-box small-box">
						<span class="fa-stack fa-2x block pull-left">
							<i class="fa fa-circle fa-stack-2x red"></i>
							<i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
						</span>
						<div class="pull-left info">
							<h1 class="text-uppercase zero-m" id="get_alertas"></h1>
							<span class="block">Alertas</span>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_alertas">
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="panel panel-success">
				<div class="panel-body">
					<div class="content-box small-box">
						<span class="fa-stack fa-2x block pull-left">
							<i class="fa fa-circle fa-stack-2x purple"></i>
							<i class="fa  fa-usd fa-stack-1x fa-inverse"></i>
						</span>
						<div class="pull-left info">
							<h1 class="text-uppercase zero-m" id="get_cobros"></h1>
							<span class="block">Cobros</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_cobros">

					</div>
				</div>


			</div>
		</div>
	</div>
</div>

@stop


@section('add_scripts')
{!! HTML::script('js/app/anotaciones/print.js') !!}
<script>
	$(document).ready(function() {
		registerHome();
		// load_comentarios();
		// load_recordatorios();
		// load_alertas();
		// load_cobros();
	});

	
</script>

@stop




