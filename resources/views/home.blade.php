@extends('layouts.master')
@section('add_styles')
<link rel="stylesheet" href="bower_components/c3/c3.min.css">
{!! HTML::style('datetimepicker/build/jquery.datetimepicker.min.css') !!}
@stop
@section('content')

<div id="app-home">
	<div class="row">
		<div class="col-lg-12">
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
											<i class="icon-chart-line"></i>
										</span> Finanzas
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-10 col-xs-8">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="101">

									<div class="col-lg-12">
										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_dia_total">@{{valores_recaudo.dia.total}}</span>
														<br>
														<span class="text-uppercase w-name">Día</span>
													</div>

													
													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.dia.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.dia.porcentaje + '%'}" >
														</div>
													</div>

													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_dia">@{{valores_recaudo.dia.porcentaje}}</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_semana_total">@{{valores_recaudo.semana.total}}</span>
														<br>
														<span class="text-uppercase w-name">Semana</span>
													</div>

													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.semana.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.semana.porcentaje + '%'}" >
														</div>
													</div>
													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_semana">@{{valores_recaudo.dia.porcentaje}}%</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_mes_total">@{{valores_recaudo.mes.total}}</span>
														<br>
														<span class="text-uppercase w-name">Mes</span>
													</div>

													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.mes.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.mes.porcentaje + '%'}" >
														</div>
													</div>
													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_mes">@{{valores_recaudo.mes.porcentaje}}%</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_trimestre_total">@{{valores_recaudo.trimestre_actual.total}}</span>
														<br>
														<span class="text-uppercase w-name">Trimestre</span>
													</div>

													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.mes.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.trimestre_actual.porcentaje + '%'}" >
														</div>
													</div>
													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_trimestre">@{{valores_recaudo.trimestre_actual.porcentaje}}%</div>
													</div>
												</div>
											</div>
										</div>


										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_semestre_total">@{{valores_recaudo.semestre_actual.total}}</span>
														<br>
														<span class="text-uppercase w-name">Semestre</span>
													</div>

													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.mes.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.semestre_actual.porcentaje + '%'}" >
														</div>
													</div>

													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_semestre">@{{valores_recaudo.semestre_actual.porcentaje}}%</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="content-box ultra-widget">
												<div class="w-content big-box">
													<div class="w-progress">
														<span class="w-amount blue" id="meta_ano_total">@{{valores_recaudo.ano.total}}</span>
														<br>
														<span class="text-uppercase w-name">Año</span>
													</div>


													<div class="progress progress-bar-sm zero-m">
														<div class="progress-bar progress-bar-info" id="recaudo_semana" role="progressbar" aria-valuenow="@{{valores_recaudo.mes.porcentaje}}" aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: valores_recaudo.ano.porcentaje + '%'}" >
														</div>
													</div>

													<div class="w-status clearfix">
														<div class="w-status-title pull-left text-uppercase">Progress</div>
														<div class="w-status-number pull-right text-uppercase" id="tile-porcentaje_ano">@{{valores_recaudo.ano.porcentaje}}%</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<!--====  End of Section Recaudo  ====-->

								</div>
								<div class="tab-pane fade" id="102">
									<div class="col-md-12" style="padding-right:30px;" >
										<div class="col-md-10" style="max-widht:85%;" id="grafica_ventas">
										</div>
										{{-- <div  style="min-heigth:660px; margin: 0 auto"></div> --}}
									</div>
								</div>
							</div>
							<div class="clearfix"></div>


						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-5"><input id="inicio_anotacion" type="text" name="" v-model="anotacion_inicio" value="" placeholder="Inicio" class="form-control"></div>
							<div class="col-md-5"><input id="fin_anotacion" type="text" name="" v-model="anotacion_final" value="" placeholder="Final" class="form-control"></div>
							<div class="col-md-2">
								<button class="btn btn-md btn-primary" @click="load_notes_date()">Cargar Datos</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
									{{-- <button class="btn btn-md btn-default pull-right" data-tarjetas="comentario" id="calendario-anotaciones"><i class="icon-calendar"></i></button> --}}
									
									<div class="pull-left info">
										<h1 class="text-uppercase zero-m" id="get_comentarios"></h1>
										<br>
									</div>
									<div class="clearfix"></div>
								</div>
								<div v-for="tarjeta in tarjetas" v-if="tarjeta.tipo_anotacion=='comentario'">
									<div id="tarjeta_recordatorio" class="panel panel-default">
										<div class="panel-heading cam-panel-header">  

											<a href="/empresa/@{{tarjeta.empresa_id}}">
												<img v-bind:src="'/uploads/fotos/'+tarjeta.foto" class="img-responsive" width="100px" alt="" />
											</a>

										</div>
										<div class="panel-body">
											<img v-bind:src="'/uploads/fotos/'+tarjeta.fotografia" class="img-responsive img-circle" width="40px" alt=""> <br>												<br>
											<p class="text-note col-lg-12">@{{tarjeta.mensaje}}</p>
											<span class="pull-right" title="@{{tarjeta.created_at | DateSmall}}">@{{tarjeta.created_at | DateSmall}}</span></div>
											<div class="panel-footer cam-panel-footer"><button type="button" class="btn btn-xs btn-danger" @click="delete_note(tarjeta.id)"><i class="icon-cancel-2"></i></button><button @click="EnviarAnotacion(tarjeta.id,tarjeta.tipo_anotacion)" type="button" class="btn btn-xs btn-primary"><i class="icon-mail"></i> Enviar</button>  <button type="button" class="btn btn-xs btn-primary" @click="EditAnotacion(tarjeta.id,tarjeta.tipo_anotacion)"><i class="icon-pencil-2"></i> Editar</button></div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_comentarios">
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
										<div class="pull-left info">
											<h1 class="text-uppercase zero-m" id="get_recordatorios"></h1>								
											<br>				
										</div>
										<div class="clearfix"></div>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_recordatorios">
										<div v-for="tarjeta in tarjetas | filterBy tipo_recordatorio">

											<div id="tarjeta_recordatorio" class="panel panel-default">
												<div class="panel-heading cam-panel-header">  <a href="/empresa/@{{tarjeta.empresa_id}}"><img :src="'/uploads/fotos/'+tarjeta.foto" class="img-responsive" width="100px" alt="" /></a>
												</div>
												<div class="panel-body">
													<img :src="'/uploads/fotos/'+tarjeta.fotografia" class="img-responsive img-circle" width="40px" alt=""> <br>
													<h3 class="text-uppercase zero-m text-title-note"><span>Vence: @{{tarjeta.fecha_vencimiento | DateSmall}}</span></h3>                                
													<br>
													<p class="text-note col-lg-12">@{{tarjeta.mensaje}}</p>
													<span class="pull-right" title="@{{tarjeta.created_at | DateSmall}}">@{{tarjeta.created_at | DateSmall}}</span></div>
													<div class="panel-footer cam-panel-footer"><button  @click="delete_note(tarjeta.id)" type="button" class="btn btn-xs btn-danger"><i class="icon-cancel-2"></i></button>       <button  @click="EnviarRecordatorio(tarjeta.id,tarjeta.tipo_anotacion)" type="button" class="btn btn-xs btn-primary"><i class="icon-mail"></i> Enviar</button>   <button type="button" class="btn btn-xs btn-primary" @click="EditRecordatorio(tarjeta.id,tarjeta.tipo_anotacion)"><i class="icon-pencil-2"></i> Editar</button></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

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
											
											
											<div class="pull-left info">
												<h1 class="text-uppercase zero-m" id="get_cobros"></h1>
												<br>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="content_cobros">					
											<div v-for="tarjeta in tarjetas | filterBy tipo_cobro">
												<div id="tarjeta_cobro" class="panel panel-default">
													<div class="panel-heading cam-panel-header"><a href="/empresa/@{{tarjeta.empresa_id}}"><img :src="'/uploads/fotos/'+tarjeta.foto" class="img-responsive" width="100px" alt="" /></a>
													</div>
													<div class="panel-body"><img :src="'/uploads/fotos/'+tarjeta.fotografia" class="img-responsive img-circle" width="40px" alt=""><br>
														<h3 class="text-uppercase zero-m text-title-note"><i class=" icon-danger"></i> <span title="'@{{tarjeta.fecha_cobro}}'">@{{ tarjeta.fecha_cobro | fromNow }}
														</span><br><br>Período:	@{{tarjeta.fecha_inicio | DateSmall}} - @{{tarjeta.fecha_cobro | DateSmall}} <br> Orden N°: @{{tarjeta.serial}}<br> Valor: @{{tarjeta.monto | currency}}
													</h3><br> <p class="text-note col-lg-12"> @{{tarjeta.mensaje}} </p>

												</div>
												<div class="panel-footer cam-panel-footer"><button type="button"  @click="delete_note(tarjeta.id)" class="btn btn-xs btn-danger"><i class="icon-cancel-2"></i></button>
													<button type="button" @click="EnviarCobro(tarjeta.id,tarjeta.tipo_anotacion)" class="btn btn-xs btn-primary"><i class="icon-mail"></i> Enviar</button>   <button type="button" class="btn btn-xs btn-primary"  @click="EditCobro(tarjeta.id,tarjeta.tipo_anotacion)"><i class="icon-pencil-2"></i>Editar</button>
													
													<button v-if="tarjeta.estado == 1" type="button" class="btn btn-xs btn-success pull-right" @click="ReportarCobro(tarjeta.id,tarjeta.serial,tarjeta.id_perfil)"><i class="icon-check-1"></i> Reportar</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						@include('modals_home')


						<div class="modal fade" id="calendario-tarjetas">
							<div class="modal-dialog modal-md">
								<div class="modal-content">

									<div class="btn-group btn-group-justified" role="group" aria-label="...">
										<div class="btn-group" role="group">
											<button type="button" id="btn-get-calendario-dia" data-inicio="{!! \Carbon\carbon::now()->startOfDay() !!}" data-fin="{!! \Carbon\carbon::now()->endOfDay() !!}" class="btn-filtro btn btn-default btn-lg">Día</button>
										</div>
										<div class="btn-group" role="group">
											<button type="button" data-inicio="{!! \Carbon\carbon::now()->startOfWeek() !!}" data-fin="{!! \Carbon\carbon::now()->endOfWeek() !!}" id="btn-get-calendario-semana" class="btn-filtro btn btn-default btn-lg">Semana</button>
										</div>
										<div class="btn-group" role="group">
											<button type="button" data-inicio="{!! \Carbon\carbon::now()->startOfMonth() !!}" data-fin="{!! \Carbon\carbon::now()->endOfMonth() !!}" id="btn-get-calendario-mes" class="btn-filtro btn btn-default btn-lg">Mes</button>
										</div>

									</div>


									<div class="modal-body">

										<br>
										{!!Form::open(array('action' => 'TarjetasController@FiltrarTarjetasHome', 'method' => 'post', 'id' => 'form-filtrar','files'=>true));!!}
										<div class="col-md-12"> 
											<div class="col-md-12">  <br> 
												<input type="hidden" id="tipo_tarjeta" name="tarjeta" value="">
												<input type="text"  name="inicio" id="date_timepicker_start" placeholder="Inicio" class="form-control material" value="" required="required">
											</div>
											<div class="col-md-12"> <br>                     
												<input type="text" name="fin" id="date_timepicker_end" placeholder="Fin" class="form-control material" value="" required="required">
											</div>
											<br><br>
										</div>   
										<div class="modal-footer"><br>
											<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
											<button type="button" id="filtar-tajetas-btn" class="btn btn-primary">Filtrar</button>
										</div>
										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>

						@stop


						@section('add_scripts')
						{!! HTML::script('datetimepicker/build/jquery.datetimepicker.full.js') !!}
						<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>

						{!! HTML::script('js/jquery-number-master/jquery.number.min.js') !!}

						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>




						<script src="js/vendor.js"></script>
						<script src="js/vue-datetime-picker.min.js"></script>
						<script src="js/appvue.js" type="text/javascript" ></script>

						<script>
							$(document).ready(function() {
			// registerHome();

			$('#inicio_anotacion').datetimepicker({
				format:'Y-m-d H:i:00',
				step:"30",
				onShow:function( ct ){
					this.setOptions({
						maxDate:$('#fin_anotacion').val()?$('#fin_anotacion').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

			$('#fin_anotacion').datetimepicker({
				step:"30",
				format:'Y-m-d H:i:00',
				onShow:function( ct ){
					this.setOptions({
						minDate:$('#inicio_anotacion').val()?$('#inicio_anotacion').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

			$('#inicio_recordatorio').datetimepicker({
				format:'Y-m-d H:i:00',
				step:"30",
				onShow:function( ct ){
					this.setOptions({
						maxDate:$('#fin_recordatorio').val()?$('#fin_recordatorio').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

			$('#fin_recordatorio').datetimepicker({
				step:"30",
				format:'Y-m-d H:i:00',
				onShow:function( ct ){
					this.setOptions({
						minDate:$('#inicio_recordatorio').val()?$('#inicio_recordatorio').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

			$('#inicio_cobro').datetimepicker({
				format:'Y-m-d H:i:00',
				step:"30",
				onShow:function( ct ){
					this.setOptions({
						maxDate:$('#fin_cobro').val()?$('#fin_cobro').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

			$('#fin_cobro').datetimepicker({
				step:"30",
				format:'Y-m-d H:i:00',
				onShow:function( ct ){
					this.setOptions({
						minDate:$('#inicio_cobro').val()?$('#inicio_cobro').val():false
					})
				},
				lang:'es',
				timepicker:true
			});

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



<script>	

function GenerarGraficaFinanzas(arr_1, arr_2, arr_3){

 // var contrataciones    = [5,4,5,3,2,1,9,9,6,12,10,5];
 // var pagos_programados = [3,4,5,6,7,8,9,9,5,4,3,2];
 // var pagos_efectuados  = [4,3,5,2,5,7,2,3,4,5,3,2];

 var contrataciones = [];
 var pagos_programados = [];
 var pagos_efectuados = [];


 console.log(vm.arr_contrataciones[7]);


 $('#grafica_ventas').highcharts({
  chart: { type: 'column' },
  title: { text: 'Nuevas Contrataciones' },

  xAxis: {
    categories: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dec'],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Millones de Pesos'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} m</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
    
  series: [{
    name: 'Contrataciones',
    data: vm.arr_contrataciones

  },  {
    name: 'Pagos Programados',
    data: vm.arr_meta_mes

  }, {
    name: 'Pagos Efectuados',
    data: vm.arr_meta_actual

  }]
});
}

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




