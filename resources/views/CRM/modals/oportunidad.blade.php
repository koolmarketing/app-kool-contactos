<?php Use Carbon\carbon; ?>
<?php use Clicknow\Money\Money; ?>
<div class="row"><br>
	<div class="col-md-12">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<ul class="list-group list-crm">
				<li class="list-group-item list-group-item-success list-crm-li-nombre"><i class="icon-male"></i> <span class="pull-right"><b>Ricardo Sannín</b></span></li>
				<li class="list-group-item list-crm-li">Status: <span class="pull-right"><label class="label label-success">ON</label></span></li>
				<li class="list-group-item list-crm-li">Categoría: <span class="pull-right">Prospecto</span></li>
				<li class="list-group-item list-crm-li">
					Calificación:<span class="pull-right">4/5</span>
				</li>				
			</ul>

			<ul class="list-group list-crm">
				<li class="list-group-item list-crm-li list-crm-li-empresa">Empresa: <span class="pull-right">Nombre de la empresa del contacto S.A.S</span></li>
				<li class="list-group-item list-crm-li"><i class="icon-briefcase-1"></i>Cargo: <span class="pull-right">Nombre </span></li>				
			</ul>

			<ul class="list-group list-crm">
				<li class="list-group-item list-crm-li"><i class="icon-email"></i> <span class="pull-right">user@correo.com</span></li>
				<li class="list-group-item list-crm-li"><i class=" icon-phone"></i> <span class="pull-right">7893241</span></li>
				<li class="list-group-item list-crm-li"><i class=" icon-phone"></i> <span class="pull-right">3206789</span></li>
				<li class="list-group-item list-crm-li"><i class="icon-mobile-2"></i> <span class="pull-right">3006739390</span></li>
				<li class="list-group-item list-crm-li"><i class="icon-mobile-2"></i> <span class="pull-right">3180987823</span></li>
				<li class="list-group-item list-crm-li"><i class="icon-location-2"></i> <span class="pull-right">Calle 5 # 45 - 78</span></li>
			</ul>
			{{--  --}}
			<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="fa fa-refresh"></i></button>
			{{--  --}}
		</div>

		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<div class="col-lg-12">
				<div class="tabbable white-bg box-shadow vertical-tabs" id="tenth-tabs">
					<div class="row">
						{{-- Panel central --}}
						<div class="col-lg-8 col-xs-10 col-sm-10">
							<div class="tab-content">

								{{--  --}}
								<div class="tab-pane fade active in" id="llamadas">
									<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="icon-plus-3"></i></button><br><br>
									<div class="content-items-modal">

										{{-- Box Info --}}
										<div class="content-box big-box box-shadow panel-box panel-success tab-crm-list">
											<div class="btn-group pull-right" role="group" aria-label="...">
												<button type="button" class="btn btn-default btn-xs">Editar</button>
												<button type="button" class="btn btn-default btn-xs">Archivar</button>
											</div>
											<span data-toggle="tooltip" data-placement="bottom" title="<?php echo Carbon::now()->subMinutes(78);?>"><small><i class="icon-clock-2"></i> <?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></small></span>
											<p>Solicitud de cita</p>
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Duración</th>
														<th>Resultado</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>6 minutos</td>
														<td>No concretado</td>
													</tr>
												</tbody>
											</table>											
										</div>
										{{-- End Fin Box --}}



										{{-- Box Info --}}
										<div class="content-box big-box box-shadow panel-box panel-success tab-crm-list">
											<div class="btn-group pull-right" role="group" aria-label="...">
												<button type="button" class="btn btn-default btn-xs">Editar</button>
												<button type="button" class="btn btn-default btn-xs">Archivar</button>
											</div>
											<span title="<?php echo Carbon::now()->subMinutes(78);?>"><?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></span>
											<p>Solicitud de cita</p>
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Duración</th>
														<th>Resultado</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>6 minutos</td>
														<td>Aceptado</td>
													</tr>
												</tbody>
											</table>										
										</div>
										{{-- End Fin Box --}}


									</div>
								</div>								


								<div class="tab-pane fade" id="correos">
									<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="icon-plus-3"></i></button><br><br>

									<div class="content-items-modal">
										{{-- Box Info --}}
										<div class="content-box big-box box-shadow panel-box panel-success tab-crm-list">
											<div class="btn-group pull-right" role="group" aria-label="...">
												<button type="button" class="btn btn-default btn-xs">Editar</button>
												<button type="button" class="btn btn-default btn-xs">Archivar</button>
											</div>
											<span title="<?php echo Carbon::now()->subMinutes(78);?>"><?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></span>
											<p>Correo de seguimiento de la solicitud</p>
											<label class="label label-success">Enviado</label>	
										</div>
										{{-- End Fin Box --}}
									</div>
								</div>


								
								<div class="tab-pane fade" id="visitas">
									<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="icon-plus-3"></i></button><br><br>
									<div class="content-items-modal">
										{{-- Box Info --}}
										<div class="content-box big-box box-shadow panel-box panel-success tab-crm-list">
											<div class="btn-group pull-right" role="group" aria-label="...">
												<button type="button" class="btn btn-default btn-xs">Editar</button>
												<button type="button" class="btn btn-default btn-xs">Archivar</button>
											</div>
											<span title="<?php echo Carbon::now()->subMinutes(78);?>"><?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></span>
											<p>Solicitud de cita</p>
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Fecha</th>
														<th>Duración</th>
														<th>Resultado</th>
													</tr>
													
												</thead>
												<tbody>
													<tr>
														<td>08-07-2017 11:30</td>
														<td>45 minutos</td>
														<td><label class="label label-success">Concretada</label>	</td>
													</tr>									
												</tbody>
											</table>
											
										</div>
										{{-- End Fin Box --}}
									</div>
								</div>
								

								<div class="tab-pane fade" id="cotizaciones">
									<button type="button" class="btn btn-default btn-icon waves waves-circle waves-effect waves-float"><i class="icon-plus-3"></i></button><br><br>
									<div class="content-items-modal">
										{{-- Box Info --}}
										<div class="content-box big-box box-shadow panel-box panel-success tab-crm-list">
											<div class="btn-group pull-right" role="group" aria-label="...">
												<button type="button" class="btn btn-default btn-xs">Editar</button>
												<button type="button" class="btn btn-default btn-xs">Archivar</button>
											</div>
											<span title="<?php echo Carbon::now()->subMinutes(78);?>"><?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></span>
											<p>Descripción de servicios cotizados</p>
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Fecha</th>
														<th>Monto</th>
														<th>Estado</th>
														<th><i class="icon-doc-text"></i></th>
													</tr>
													
												</thead>
												<tbody>
													<tr>
														<td>08-07-2017 11:30</td>
														<td>{!!Money::COP(46000000, true)!!}</td>
														<td><label class="label label-success">En espera</label>	</td>
														<td> <button class=" btn btn-xs icon-eye-1"></button> </td>
													</tr>									
												</tbody>
											</table>
											
										</div>
										{{-- End Fin Box --}}
									</div>
								</div>

								<div class="tab-pane fade" id="negociacion">
									<h3>NEGOCIACIÓN</h3>
								</div>

							</div>
						</div>
						<div class="col-lg-4 col-xs-2 col-sm-2">
							<ul class="nav nav-tabs tabs-with-bg tabs-left">
								<li class="">
									<a href="#correos" data-toggle="tab" aria-expanded="false">
										<i class="icon-mail"></i> <span class="hidden-sm hidden-xs">Correos</span></a>
									</li>
									<li class="active">
										<a href="#llamadas" data-toggle="tab" aria-expanded="false">
											<i class="icon-phone-3"></i> <span class="hidden-sm hidden-xs">Llamadas</span></a>
										</li>
										<li >
											<a href="#visitas" data-toggle="tab" aria-expanded="true">
												<i class="icon-person"></i> <span class="hidden-sm hidden-xs">Visitas</span></a>
											</li>
											<li class="">
												<a href="#cotizaciones" data-toggle="tab" aria-expanded="false">              
													<i class="icon-clipboard-2"></i> <span class="hidden-sm hidden-xs">Cotizaciones</span></a>
												</li>

												<li class="">
													<a href="#negociacion" data-toggle="tab" aria-expanded="false"><i class="icon-resize-small-3"></i> <span class="hidden-sm hidden-xs">Negociacion</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="clearfix"></div>


									</div>
								</div>
							</div>
						</div>


						<div class="col-md-12 content-box small-box">
							<div class="clearfix"></div>
							<div class="container">
								<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Salir</button>								
							</div>
						</div>
					</div>

				</div>
