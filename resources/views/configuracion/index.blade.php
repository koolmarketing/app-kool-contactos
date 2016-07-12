@extends('layouts.master')

@section('content')
<div class="container">
	
	<div class="col-lg-12">
		<div class="tabbable white-bg box-shadow vertical-tabs" id="tenth-tabs">
			<div class="row">
				<div class="col-lg-2 col-xs-4">
					<ul class="nav nav-tabs tabs-with-bg tabs-left">
						<li class="active">
							<a href="#101" data-toggle="tab">
								<span class="fa-stack">
									<i class="icon-lock"></i>
								</span> Seguridad</a>
							</li>
							<li>
								<a href="#102" data-toggle="tab">
									<span class="fa-stack">
										<i class="icon-camera"></i>
									</span> Fotografía</a>
								</li>
								<li>
									<a href="#103" data-toggle="tab">
										<span class="fa-stack">
											<i class="icon-list-bullet"></i>
											</span> Actividad
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-10 col-xs-8">
							<div class="tab-content">
								<div class="tab-pane fade in active" id="101">
									<div class="container">
										<div class="col-md-offset-2 col-md-6">												
												<form class="content-form form-horizontal">
													<div class="form-group">
														<legend>Actualizar datos de Ingreso</legend>
													</div>
													<div class="form-group">
														<label for="email2" class="col-sm-2 control-label">Email</label>
														<div class="col-sm-10">
															<input type="email" class="form-control material" id="email2" placeholder="Email">
														</div>
													</div>
													<div class="form-group">
														<label for="password2" class="col-sm-2 control-label">Contraseña</label>
														<div class="col-sm-10">
															<input type="password" class="form-control material" id="password2" placeholder="*****">
														</div>
													</div>
													<div class="form-group">
														<label for="password2" class="col-sm-2 control-label">Confirmar </label>
														<div class="col-sm-10">
															<input type="password" class="form-control material" id="password2" placeholder="*****">
														</div>
													</div>
													
													<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-primary waves text-uppercase waves-effect waves-float">Actualizar</button>
														</div>
													</div>
												</form>										
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="102">
									<div class="container">
										<div class="col-md-offset-2 col-md-6">

											<form action="" method="POST" class="form-horizontal" role="form">
												<div class="form-group">
													<legend>Actualizar fotografía</legend>
												</div>

												<div class="form-group">
														<label for="password2" class="col-sm-2 control-label">Imagen</label>
														<div class="col-sm-10">
															<input type="file" class="form-control material" id="foto">
														</div>
													</div>



												<div class="form-group">
													<div class="col-sm-10 col-sm-offset-2">
														<button type="submit" class="btn btn-primary">Actualizar</button>
													</div>
												</div>
											</form>

										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="103">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis consectetur consequatur vel quo sed, molestiae!</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>

			
					</div>
				</div>
			</div>

		</div>
		@stop