@extends('layouts.master')
@section('add_styles')
<link rel="stylesheet" href="bower_components/c3/c3.min.css">
@stop
@section('content')

<div class="row">

	<disv class="col-lg-12">
		<div class="tabbable white-bg box-shadow vertical-tabs" id="tenth-tabs">
			<div class="row">
				<div class="col-lg-2 col-xs-4">
					<ul class="nav nav-tabs tabs-with-bg tabs-left">
						<li class="active">
							<a href="#101" data-toggle="tab" aria-expanded="true">
								<span class="fa-stack span_title_tab">									
									<i class="icon-briefcase-3"></i>
								</span> Recaudo</a>
							</li>
							<li class="">
								<a href="#102" data-toggle="tab" aria-expanded="false">
									<span class="fa-stack span_title_tab">
										<i class="icon-signal"></i>
									</span> Desempeño</a>
								</li>
								<li class="">
									<a href="#103" data-toggle="tab" aria-expanded="false">
										<span class="fa-stack span_title_tab">
											<i class="icon-chart-line"></i>
										</span> Finanzas
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-10 col-xs-8">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="101">
								<!--=====================================
								=            Section Recaudo          =
								======================================-->
								
								<div class="col-lg-12">
									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_dia_total">0</span>
													<br>
													<span class="text-uppercase w-name">Día</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_dia" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_dia"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_semana_total">0</span>
													<br>
													<span class="text-uppercase w-name">Semana</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_semana">0%</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_mes_total">0</span>
													<br>
													<span class="text-uppercase w-name">Mes</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_mes" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_mes">0%</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_trimestre_total">0</span>
													<br>
													<span class="text-uppercase w-name">Trimestre</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_trimestre" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_trimestre">0%</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_semestre_total">0</span>
													<br>
													<span class="text-uppercase w-name">Semestre</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_semestre" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_semestre">0%</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3">
										<div class="content-box ultra-widget">
											<div class="w-content big-box">
												<div class="w-progress">
													<span class="w-amount blue" id="meta_ano_total">0</span>
													<br>
													<span class="text-uppercase w-name">Año</span>
												</div>

												<div class="progress progress-bar-sm zero-m">
													<div class="progress-bar progress-bar-info" id="recaudo_ano" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
													</div>
												</div>
												<div class="w-status clearfix">
													<div class="w-status-title pull-left text-uppercase">Progress</div>
													<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_ano">0%</div>
												</div>
											</div>
										</div>
									</div>






								</div>
								
								
								<!--====  End of Section Recaudo  ====-->
								
							</div>
							<div class="tab-pane fade" id="102">
								<div class="col-md-12"><div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn waves btn-default waves-effect waves-float">Día</button>
              <button type="button" class="btn waves btn-default waves-effect waves-float">Semana</button>
              <button type="button" class="btn waves btn-default waves-effect waves-float">Mes</button>
              

              <div class="btn-group" role="group">
                <button type="button" class="btn waves btn-default dropdown-toggle waves-effect waves-float" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Trimestre
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Enero - Marzo</a></li>
                  <li><a href="#">Abril - Junio</a></li>
                  <li><a href="#">Julio - Septiembre</a></li>
                  <li><a href="#">Octubre - Diciembre</a></li>
                </ul>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn waves btn-default dropdown-toggle waves-effect waves-float" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Semestre
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Enero - Junio</a></li>
                  <li><a href="#">Julio - Diciembre</a></li>
                </ul>
              </div>
              <button type="button" class="btn waves btn-default waves-effect waves-float">Año</button>
              <button type="button" class="btn waves btn-default waves-effect waves-float"><i class="icon-calendar-empty"></i></button>
            </div>


            <br><br>
								<div id="container" style="min-width:900px;"></div>
								</div>
								

							</div>
							<div class="tab-pane fade" id="103">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis consectetur consequatur vel quo sed, molestiae!</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="col-sm-12">
						<div class="navigation">

							<button class="btn btn-success waves prevtab waves-effect waves-float" type="button">Prev</button>
							<button class="btn btn-success waves nexttab waves-effect waves-float" type="button">Next</button>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-12">


			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="content-box ultra-widget blue-bg">
					<div class="w-content text-center">
						<div class="w-descr simple">
							<span class="text-uppercase w-name">Anotaciones</span>
							<br><br>

						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="content-box small-box">
							<span class="fa-stack fa-2x block pull-left">
								<i class="fa fa-circle fa-stack-2x blue"></i>
								<i class="fa  fa-commenting-o fa-stack-1x fa-inverse"></i>
							</span>


						<button class="btn btn-md btn-default pull-right"><i class="icon-calendar"></i></button>
								<div class="pull-left info">

									<h1 class="text-uppercase zero-m" id="get_comentarios"></h1>
									<span class="block">Anotaciones</span>
									<br>
								</div>

								<div class="clearfix"></div>
							</div>


							<div class="clearfix"></div>

							<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_comentarios">
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="content-box ultra-widget green-bg">
						<div class="w-content text-center">
							<div class="w-descr simple">

								<span class="text-uppercase w-name">Recordatorios</span>
								<br><br>

							</div>
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="content-box small-box">
								<span class="fa-stack fa-2x block pull-left">
									<i class="fa fa-circle fa-stack-2x green"></i>
									<i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i>
								</span>
								<button class="btn btn-md btn-default pull-right"><i class="icon-calendar"></i></button>
								<div class="pull-left info">
									<h1 class="text-uppercase zero-m" id="get_recordatorios"></h1>
									<span class="block">Recordatorios</span>
									<br>				
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_recordatorios">
							</div>
						</div>
					</div>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="content-box ultra-widget red-bg">
						<div class="w-content text-center">
							<div class="w-descr simple">

								<span class="text-uppercase w-name">Alertas</span>
								<br><br>

							</div>
						</div>
					</div>
					<div class="panel panel-danger">
						<div class="panel-body">
							<div class="content-box small-box">
								<span class="fa-stack fa-2x block pull-left">
									<i class="fa fa-circle fa-stack-2x red"></i>
									<i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
								</span>
								<button class="btn btn-md btn-default pull-right"><i class="icon-calendar"></i></button>
								<div class="pull-left info">
									<h1 class="text-uppercase zero-m" id="get_alertas"></h1>
									<span class="block">Alertas</span>
									<br>

								</div>
								<div class="clearfix"></div>
							</div>

							<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_alertas">
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

					<div class="content-box ultra-widget orange-bg">
						<div class="w-content text-center">
							<div class="w-descr simple">

								<span class="text-uppercase w-name">Cobros</span>
								<br><br>

							</div>
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="content-box small-box">
								<span class="fa-stack fa-2x block pull-left">
									<i class="fa fa-circle fa-stack-2x purple"></i>
									<i class="fa  fa-usd fa-stack-1x fa-inverse"></i>
								</span>
								<button class="btn btn-md btn-default pull-right"><i class="icon-calendar"></i></button>
								<div class="pull-left info">
									<h1 class="text-uppercase zero-m" id="get_cobros"></h1>
									<span class="block">Cobros</span>
									<br>

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
		<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
		{!! HTML::script('js/app/anotaciones/print.js') !!}
		{!! HTML::script('js/jquery-number-master/jquery.number.min.js') !!}

		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>






		<script>
			$(document).ready(function() {
				registerHome();


				$('#container').highcharts({
					title: {
						text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
        	text: 'Source: WorldClimate.com',
        	x: -20
        },
        xAxis: {
        	categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
        	'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
        	title: {
        		text: 'Rendimiento'
        	},
        	plotLines: [{
        		value: 0,
        		width: 1,
        		color: '#808080'
        	}]
        },
        tooltip: {
        	valueSuffix: '°C'
        },
        legend: {
        	layout: 'vertical',
        	align: 'right',
        	verticalAlign: 'middle',
        	borderWidth: 0
        },
        series: [{
        	name: 'Tokyo',
        	data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
        	name: 'New York',
        	data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
        	name: 'Berlin',
        	data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
        	name: 'London',
        	data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });

});

</script>

<script>
	$(function () {

      //Bootstrap prev and next buttons in tabs

      $('#ninth-tabs .nexttab').click(function () {
      	$('#ninth-tabs .nav-tabs > .active').next('li').find('a').trigger('click');
      });

      $('#ninth-tabs .prevtab').click(function () {
      	$('#ninth-tabs .nav-tabs > .active').prev('li').find('a').trigger('click');
      });

      $('#tenth-tabs .nexttab').click(function () {
      	$('#tenth-tabs .nav-tabs > .active').next('li').find('a').trigger('click');
      });

      $('#tenth-tabs .prevtab').click(function () {
      	$('#tenth-tabs .nav-tabs > .active').prev('li').find('a').trigger('click');
      });
  });
</script>


@stop




