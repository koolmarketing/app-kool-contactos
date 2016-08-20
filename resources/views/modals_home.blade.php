		{{--  --}}


		<div class="modal fade" id="edit-modal-anotacion" >
			<div class="modal-dialog modal-md">    
				<div class="modal-content" v-for="anotacion in data_anotacion">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Editar Comentario</h4>
					</div>{!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-anotacion','files'=>true));!!}
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="tipo" id="" class="form-control" v-model="tipo_anotacion">
							<div class="form-group">
								<div class="col-md-12">
									<textarea  name="nota" id="nota" cols="5" rows="4" class="material form-control" v-model="mensaje"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
						<button type="button" id="btn-guardar-anotacion" class="btn btn-primary" @click="UpdateNote()">Guardar Edición</button>
						{!! Form::close() !!}
					</div>          
				</div>        
			</div>
		</div>


		{{--  --}}


		{{--  --}}

		<!--====  Stat Recordatorio  ====-->
		<div class="modal fade" id="edit-modal-recordatorio">
			<div class="modal-dialog modal-md">
				<div class="modal-content" v-for="anotacion in data_recordatorio">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Editar un Recordatorio</h4>
					</div>
					<div class="modal-body">
						{!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-recordatorio','files'=>true));!!}
						<div class="row">
							<input type="hidden" name="tipo" id="" class="form-control" value="recordatorio">
							<input type="hidden" name="id_perfil" id="" class="form-control" v-model="empresa_id">   
							<div class="col-md-8">
								<input type="text" name="fecha" id="datetime_recordatorio" class="form-control material" placeholder="Fecha de Vencimiento" v-model="fecha_vencimiento" required="required" >
							</div>
							<div class="col-md-12">
								<textarea name="nota" id="" cols="5" rows="4" class="material form-control" v-model="mensaje"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
						<button id="btn-guardar-recordatorio" @click="UpdateNote()" type="button" class="btn btn-primary">Guardar Recordatorio</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>

		{{--  --}}

		{{--  --}}

		<!--====  Stat Cartera  ====-->
		<div class="modal fade " id="edit-modal-cobro">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Programar un Cobro

						</h4>
					</div>
					<div class="modal-body">
						<div class="row">           
							{!!Form::open()!!}
							<input type="hidden" name="id_perfil" id="" class="form-control" > 
							<input type="hidden" name="tipo" id="" class="form-control" value="cobro">  
							<div class="col-md-12"> 
								<div class="col-md-6"><br> 
									<input type="text"  name="inicio" id="date_timepicker_start" placeholder="Inicio" class="form-control material" v-model="fecha_inicio" required="required">
								</div>
								<div class="col-md-6"> <br>
									<input type="text" name="fin" id="date_timepicker_end" placeholder="Fin" class="form-control material" required="required" v-model='fecha_cobro'>
								</div>
								<br><br>
							</div>                
							<div class="col-md-12" style="margin-top: 20px;"> 
								<div class="col-md-6">
									<input type="text" name="serial" id="input" class="form-control material" placeholder="Serial"  v-model="serial" required="required">
								</div>
								<div class="col-md-6">
									<input type="text" name="monto" id="input" class="form-control material" placeholder="Monto" v-model="monto" required="required">
								</div>
							</div>
							<div class="col-md-12" style="margin-top: 10px">
								<textarea name ="nota" id="" cols="5" rows="4" v-model="mensaje" class="material form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

						<button type="button" @click="UpdateNote()" class="btn btn-primary">Editar Cobro</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		{{--  --}}

		<div class="modal fade" id="enviar_anotacion">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="row">
							<div class="col-md-12">
								<h4 class="modal-title">Enviar por correo</h4>
							</div>
						</div> 
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<h5><i class="icon-gmail"></i> Adjunte la dirección de correo</h5>
								<div class="col-md-12">
									<input type="text" name="mail" id="input" class="form-control material" placeholder="correo" v-model="mail" required="required">
								</div>
							</div>	<br><br>
							<div class="col-md-12">
								<div class="panel-body">
									<img src="/uploads/fotos/@{{fotografia}}" class="img-responsive img-circle" width="40px" alt=""><br>
									<p class="text-note col-lg-12">@{{mensaje}}</p>
									<span class="pull-right" title="@{{updated_at}}">@{{updated_at}}</span></div>
								</div>	
								<div class="col-md-12">
									<h5><i class="icon-pencil-5"></i> Escribir mensaje</h5>
									<textarea v-model="mensaje_correo" name="" id="input" class="form-control" rows="3" required="required"></textarea>
								</div>					
							</div>					
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" @click="envio_tarjeta('recordatorio')" class="btn btn-primary">Enviar correo</button>
						</div>
					</div>
				</div>
			</div>

			{{--  --}}

			{{--  --}}

			<div class="modal fade" id="enviar_cobro">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<div class="row">
								<div class="col-md-12">
									<h4 class="modal-title">Enviar por correo</h4>
								</div>
							</div> 
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<h5><i class="icon-mail-1"></i> Adjunte la dirección de correo</h5>
									<div class="col-md-12">
										<input type="text" name="mail" id="input" class="form-control material" placeholder="correo" v-model="mail" required="required">
									</div>
								</div>	<br><br>
								<div class="col-md-12">
									<div class="panel-body">
										<img src="/uploads/fotos/@{{fotografia}}" class="img-responsive img-circle" width="40px" alt=""><br>

										<h3 class="text-uppercase zero-m text-title-note"><i class=" icon-danger"></i> <span title="'@{{fecha_cobro}}'">@{{ fecha_cobro | fromNow }}
										</span><br><br>Período:	@{{fecha_inicio | DateSmall}} - @{{fecha_cobro | DateSmall}} <br> Orden N°: @{{serial}}<br> Valor: @{{monto | currency}}
									</h3><br> <p class="text-note col-lg-12"> @{{mensaje}} </p>
									<span class="pull-right" title="@{{updated_at}}">@{{updated_at}}</span>
								</div>
							</div>	
							<div class="col-md-12">
								<h5><i class="icon-pencil-5"></i> Escribir mensaje</h5>
								<textarea v-model="mensaje_correo" name="" id="input" class="form-control" rows="3" required="required"></textarea>
							</div>						
						</div>					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button"  class="btn btn-primary">Enviar correo</button>
					</div>
				</div>
			</div>
		</div>

						{{--  --}}