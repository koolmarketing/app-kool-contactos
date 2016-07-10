<?php Use Carbon\carbon; ?>
<div class="row"><br>
	<div class="col-md-12">
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<ul class="list-group col-md-12 list-crm">
				<li class="list-group-item list-crm-li"><i class="icon-male"></i> Ricardo Sannín</li>
				<li class="list-group-item list-crm-li">Status: <label class="label label-success">ON</label></li>
				<li class="list-group-item list-crm-li">Categoría</li>
				<li class="list-group-item list-crm-li">Calificación</li>
				<li class="list-group-item list-crm-li">Teléfono</li>
				<li class="list-group-item list-crm-li">Teléfono</li>
				<li class="list-group-item list-crm-li">Celular</li>
				<li class="list-group-item list-crm-li">Celular</li>
				<li class="list-group-item list-crm-li">Dirección</li>
			</ul><button type="button" class="btn btn-info">button</button>
		</div>

		<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
			<div class="col-lg-12">
				<div class="tabbable white-bg box-shadow vertical-tabs" id="tenth-tabs">
					<div class="row">


						<div class="col-lg-8 col-xs-8">
							<div class="tab-content">
								<div class="tab-pane fade" id="101">
									<button type="button" class="btn waves btn-labeled btn-warning btn-sm text-uppercase waves-effect waves-float">
										<span class="btn-label"><i class="icon-plus-2"></i></span> agregar
									</button><br><br>
									{{--  --}}
									<div class="tab-pane fade active in" id="102">
										<div class="content-box biggest-box blue-bg tab-crm-list">
											<div class="pull-left">
												<span class="block"><?php echo Carbon::now()->subSeconds(5)->diffForHumans();  ?></span>

											</div>
											<span class="pull-right"><button type="button" class="btn btn-xs btn-default"><i class="icon-info-3"></i></button></span>
											<div class="clearfix"></div>
										</div>
										<div class="content-box biggest-box green-bg tab-crm-list">
											<div class="pull-left">
											<span class="block"><?php echo Carbon::now()->subMinutes(78)->diffForHumans();  ?></span>											
											</div><span class="pull-right"><button type="button" class="btn btn-xs btn-default"><i class="icon-info-3"></i></button></span>
											
											<div class="clearfix"></div>
										</div>										
										<div class="content-box biggest-box red-bg tab-crm-list">
												<div class="pull-left">
											<span class="block"><?php echo Carbon::now()->subHours(45)->diffForHumans();  ?></span>											
											</div><span class="pull-right"><button type="button" class="btn btn-xs btn-default"><i class="icon-info-3"></i></button></span>
											<div class="clearfix"></div>
										</div>
									</div>

									{{--  --}}

									

									{{--  --}}
								</div>

								<div class="tab-pane fade" id="103">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis consectetur consequatur vel quo sed, molestiae!</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xs-4">
							<ul class="nav nav-tabs tabs-with-bg tabs-left">
								<li class="">
									<a href="#101" data-toggle="tab" aria-expanded="false">
										<i class="icon-mail"></i> Correos</a>
									</li>
									<li class="">
										<a href="#101" data-toggle="tab" aria-expanded="false">
											<i class="icon-phone-3"></i> Llamadas</a>
										</li>
										<li class="active">
											<a href="#102" data-toggle="tab" aria-expanded="true">
												<i class="icon-person"></i> Visitas</a>
											</li>
											<li class="">
												<a href="#103" data-toggle="tab" aria-expanded="false">              
													<i class="icon-clipboard-2"></i> Cotizaciones</a>
												</li>

												<li class="">
													<a href="#103" data-toggle="tab" aria-expanded="false"><i class="icon-resize-small-3"></i> Negociacion
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
								<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
								<button type="button" class="btn btn-primary">Guardar Cambios</button>
							</div>
						</div>
					</div>

				</div>
