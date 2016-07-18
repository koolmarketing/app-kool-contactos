@extends('layouts.master')
@section('add_styles')
{!! HTML::style("bower_components/Croppie/croppie.css") !!}
{!! HTML::style("bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css")  !!}
@stop

@section('content')

<div class="container">

	<div class="col-lg-12"><br>	


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

											{!!Form::open(array('action' => 'MiCuentaController@UpdatePassword','class'=>'content-form form-horizontal', 'method' => 'post', 'id' => 'form-guardar-comprobante-costo','files'=>true));!!}
											<div class="form-group">
												<legend>Actualizar datos de Ingreso</legend>
											</div>
											<div class="form-group">
												<label for="email2" class="col-sm-2 control-label hidden-xs hidden-sm">Email</label>
												<div class="col-sm-10">
													<input type="email"  class="form-control material" name="email" id="email2" placeholder="Email">
													@if ($errors->any())							
													<span class="text-danger"><?php echo $errors->first('email'); ?></span>
													@endif

												</div>
											</div>
											<div class="form-group">
												<label for="password2" class="col-sm-2 control-label hidden-xs hidden-sm">Contraseña</label>
												<div class="col-sm-10">
													<input type="password" class="form-control material" id="password" name="password" placeholder="*****">
													@if ($errors->any())							
													<span class="text-danger"><?php echo $errors->first('password'); ?></span>
													@endif
												</div>
											</div>
											<div class="form-group">
												<label for="password2" class="col-sm-2 control-label hidden-xs hidden-sm">Confirmar </label>
												<div class="col-sm-10">
													<input type="password" class="form-control material" id="password_confirmation" name="password_confirmation" placeholder="*****">
													@if ($errors->any())							
													<span class="text-danger"><?php echo $errors->first('password_confirmation'); ?></span>
													@endif
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

										{!!Form::open(array('action' => 'MiCuentaController@UpdateImage','class'=>'content-form form-horizontal', 'method' => 'post', 'id' => 'form_image','files'=>true));!!}
										<div class="form-group">
											<legend>Actualizar fotografía</legend>
										</div>	

										<div class="form-group">
											<div class="fileinput fileinput-new input-group" data-provides="fileinput">
												<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-file"></i> Cargar Imagen</span><span class="fileinput-exists">Cambiar</span>
												<input type="hidden"><input id="upload" type="file" name="...">
											</span>
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
										</div>
										@if ($errors->any())							
										<span class="text-danger"><?php echo $errors->first('imagebase64'); ?></span>
										@endif
									</div>

									<div id="upload-demo"></div>
									<input type="hidden" id="imagebase64" name="imagebase64">
									<a href="#" class="upload-result btn btn-primary waves text-uppercase waves-effect waves-float">Actualizar</a>
								</form>
							</div>								
						</div>
					</div>
					<div class="tab-pane fade" id="103">
						<div class="alert alert-success">							
							Sección no disponible... aún.
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>


		</div>
	</div>
</div>

</div>
@stop

@section('add_scripts')

{!! HTML::script("bower_components/Croppie/croppie.js") !!}
<!--Jasny Bootstrap-->
{!! HTML::script("bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js") !!}
<script>
	$('.fileinput').fileinput();
</script>
<script>



	$( document ).ready(function() {
		var $uploadCrop;

		function readFile(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();          
				reader.onload = function (e) {
					$uploadCrop.croppie('bind', {
						url: e.target.result
					});
					$('.upload-demo').addClass('ready');
				}           
				reader.readAsDataURL(input.files[0]);
			}
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 200,
				height: 200,
				type: 'circle'
			},
			boundary: {
				width: 300,
				height: 300
			}
		});

		$('#upload').on('change', function () { readFile(this); });
		$('.upload-result').on('click', function (ev) {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'original'
			}).then(function (resp) {
				$('#imagebase64').val(resp);
				$('#form_image').submit();
			});
		});

	});

</script>

@if (session()->has('exito'))

<script>
	$(document).ready(function() {
		swal("{!! session('exito') !!}");
	});
</script>
@endif
@stop