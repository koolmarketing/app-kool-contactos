{{-- Comentario --}}
<div class="modal fade" id="modal-anotacion">
  <div class="modal-dialog">    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe un Comentario</h4>
      </div>{!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-anotacion','files'=>true));!!}
      <div class="modal-body">
        <div class="row">
          <input type="hidden" name="tipo" id="" class="form-control" value="comentario">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}">                
          <div class="form-group">
            <div class="col-md-12">
              <textarea name="nota" id="nota" cols="5" rows="4" value="" class="material form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-default" data-dismiss="modal">Salir</button>
        <button @click="ModalGuardarComentario()" type="button" id="btn-guardar-anotacion" class="btn btn-primary">Guardar Anotación</button>
        {!! Form::close() !!}
      </div>          
    </div>        
  </div>
</div>
{{-- END COMENTARIO --}}

<!--====  Stat Recordatorio  ====-->
<div class="modal fade" id="modal-recordatorio">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe un Recordatorio</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-recordatorio','files'=>true));!!}
        <div class="row">
          <input type="hidden" name="tipo" id="" class="form-control" value="recordatorio">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}">   
          <div class="col-md-8">
            <input type="text" name="fecha" id="input" class="form-control material datetimepicker3" placeholder="Fecha de Vencimiento" value="" required="required" >

          </div>
          <div class="col-md-12">
            <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button @click="ModalGuardarRecordatorio()" type="button" class="btn btn-primary">Guardar Recordatorio</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!--====  Stat Alerta  ====-->
<div class="modal fade" id="modal-alerta">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Escribe una alerta</h4>
      </div>
      <div class="modal-body">
        {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-alerta','files'=>true));!!}
        <div class="row">
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 
          <input type="hidden" name="tipo" id="" class="form-control" value="alerta">  
          <div class="col-md-8">
            <input type="text" name="fecha"  class="form-control material datetimepicker3" placeholder="Fecha de Vencimiento" value="" required="required">

          </div>

          <div class="col-md-12">
            <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="button"  id="btn-guardar-alerta" class="btn btn-primary guardar-form">Guardar Alerta</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!--====  Stat Cartera  ====-->
<div class="modal fade " id="modal-cobro">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Programar un Cobro

        </h4>
      </div>
      <div class="modal-body">
        <div class="row">                

          <div class="col-md-12">
            <div class="alert alert-success">
              Saldo Actual : 
              <span class="pull-right" id="saldo"></span>
            </div>
            <div id="modal_cartera" class="col-md-12">
            </div>                      
          </div>

          {!!Form::open(array('action' => 'AnotacionesController@GuardarAnotacion', 'method' => 'post', 'id' => 'form-guardar-cartera','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 
          <input type="hidden" name="tipo" id="" class="form-control" value="cobro">  
          <div class="col-md-12"> 
           <div class="col-md-6">  <br>  

             <input type="text"  name="inicio" id="date_timepicker_start" placeholder="Inicio" class="form-control material" value="" required="required">

           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="date_timepicker_end" placeholder="Fin" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-6">

          <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial" value="" required="required">

        </div>
        <div class="col-md-6">
          <input type="text" name="monto" id="input" class="form-control material" placeholder="Monto" value="" required="required">
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 10px">
        <textarea name="nota" id="" cols="5" rows="4" class="material form-control"></textarea>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    <button type="button" @click="ModalGuardarCobro()" class="btn btn-primary">Guardar Anotación</button>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>


<!--====  Stat Service  ====-->
<div class="modal fade" id="modal-service">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Adjuntar un servicio</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          {!!Form::open(array('action' => 'ServiciosController@SaveService', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

          <div class="col-md-12">
            <div class="col-md-12"> <br>                     
              <input type="text" name="titulo" id="" placeholder="Título del servicio" class="form-control material" value="" required="required">
            </div>
          </div>                   
          <div class="col-md-12">
           <div class="col-md-6">  <br>  
             <input type="text"  name="inicio" id="inicio_servicio" placeholder="Periodo de Inicio" class="form-control material" value="" required="required">
           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="fin_servicio" placeholder="Finalización" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-3">

          <input type="text" name="serial" id="input" class="form-control material" placeholder="# Comprobante" value="" required="required">
        </div>
        <div class="col-md-4">
          <input type="number" name="valor" id="valor_servicio" class="form-control material" placeholder="Valor del servicio" value="" required="required">
        </div>
        <div class="col-md-3">
          <input type="number" name="costos" id="costos_operativos" class="form-control material" placeholder="Costos" value="" required="required" step="any">
        </div>
        <div class="col-md-2">
         <input type="number" name="iva" id="iva" min="0" step="0.05" class="form-control material" placeholder="IVA" value="" required="required" step="any">
       </div>
       <div class="col-md-12"><br>
        <div class="col-md-1">

          <button type="button" id="btn-retencion" class="btn btn-info btn-xs"><i class="icon-info"></i></button>
        </div>
        <div class="col-md-11">
          <select name="retencion" id="retencion_select" class="form-control material" required="required">
            <option value="0" data-tarifas="0" data-baseuvt="0" data-basepesos="0">Tipo de Retención</option>
            <option value="Sin Retención" data-tarifas="0" data-baseuvt="0" data-basepesos="0">Sin Retención</option>
            @foreach ($retencion as $retencion)            
            <option value="{!! $retencion->concepto !!}" data-tarifas="{!! $retencion->tarifas !!}" data-baseuvt="{!! $retencion->base_uvt !!}" data-basepesos="{!! $retencion->base_pesos !!}" value="">{!! $retencion->concepto !!} - <b class="text-danger">[ {!! $retencion->tarifas !!}% ]</b></option>            
            @endforeach
          </select>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <br>
        <ul class="list-group">
          <li class="list-group-item"><b>IVA</b>
            <input type="hidden" id="valor_iva" name="valor_iva" value="" placeholder="">
            <span class="pull-right" id="container_iva">          
            </span></li>
            <li class="list-group-item"><b>Retención</b>
             <input type="hidden" name="valor_retencion" id="valor_retencion" value="" placeholder="">
             <span class="pull-right" id="container_RT"></span></li>

             <li class="list-group-item list-group-item-success"><b>Utilidad Neta</b>
               <input type="hidden" name="utilidad_neta" id="utilidad_neta" value="" placeholder="">
               <span class="pull-right" id="container_utilidad"></span></li>
             </ul>
           </div><br>
           <div class="col-md-12">
            <br>
            <ul class="list-group">
              <li class="list-group-item"><b>IVA</b>
                <input type="hidden" id="valor_iva" name="valor_iva" value="" placeholder="">
                <span class="pull-right">          
                </span></li>
                <li class="list-group-item"><b>Retención</b>
                 <input type="hidden" name="valor_retencion" id="valor_retencion" value="" placeholder="">
                 <span class="pull-right"></span></li>

                 <li class="list-group-item list-group-item-success"><b>Utilidad Neta</b>
                   <input type="hidden" name="utilidad_neta" value="" placeholder="">
                   <span class="pull-right" id="container_utilidad"></span></li>
                 </ul>
               </div><br>

               <div class="form-group">
                <div class="col-md-12">
                  <textarea name="comentarios_servicio" id="comentarios_servicio" cols="5" rows="4" value="" class="material form-control">Observaciones</textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="margin-top: 10px">
              <div class="col-md-12">
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="button" id="btn-guardar-servicio" class="btn btn-primary">Registrar Servicio</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

  <!-- END Service -->

  {{-- ACTUALIZAR SERVICIO --}}

  <div class="modal fade" id="modal-service-update">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12"> <br>                     
                <input type="text" name="titulo" id="" placeholder="Título del servicio" class="form-control material" v-model="servicio_edit.titulo"  required="required">
              </div>
            </div>


            <div class="col-md-12">
             <div class="col-md-6">  <br>  
               <input type="text"  name="inicio" id="edit_inicio_servicio" placeholder="Periodo de Inicio" class="form-control material" v-model="servicio_edit.inicio" required="required">
             </div>
             <div class="col-md-6"> <br>                     
              <input type="text" name="fin" id="edit_fin_servicio" placeholder="Finalización" class="form-control material" v-model="servicio_edit.fin" required="required">
            </div>
            <br><br>
          </div>

          <div class="col-md-12">
            <div class="col-md-3"><br>
              <input type="text" name="serial" id="input" class="form-control material" placeholder="# Comprobante" v-model="servicio_edit.serial" required="required">
            </div>
            <div class="col-md-4"><br>
              <input type="number" v-model="servicio_edit.valor" name="valor" id="valor_servicio" class="form-control material" placeholder="Valor del servicio"  required="required">
            </div>
            <div class="col-md-3"><br>
              <input type="number"  name="costos" id="costos_operativos" class="form-control material" placeholder="Costos" v-model="servicio_edit.costos" required="required" step="any">
            </div>
            <div class="col-md-2"><br>
              <input type="number" name="iva" id="iva" min="0" step="0.05" class="form-control material" placeholder="IVA" v-model="servicio_edit.iva" required="required" step="any">
            </div>
          </div> 

          <div class="col-md-12"><br>
           <div class="col-md-3">
             <select name="vendedor" v-model="servicio_edit.vendedor" class="form-control material" required="required">
               <option v-for="v in vendedores"
               selected="@{{v.id == servicio_edit.vendedor}}"
               value="@{{v.id}}">@{{v.name}}</option>
             </select>
           </div>
           <div class="col-md-9">
            <select  name="retencion" v-model="servicio_edit.titulo_retencion" id="retencion_select_edit" class="form-control material" required="required">
              <option value="0" tarifa="0" data-baseuvt="0" data-basepesos="0">Tipo de Retención</option>
              <option data-valor="0" value="Sin Retención" selected="@{{calculos_service.valor_retencion == 'Sin Retención'}}" tarifa="0" data-baseuvt="0" data-basepesos="0">Sin Retención</option>
              <option  v-for="r in retenciones"
               v-bind:tarifa="r.tarifa"
              name="retencion"
              selected="@{{r.concepto == calculos_service.valor_retencion}}"
              value="@{{r.concepto}}" >@{{r.concepto}}</option>
            </select>
          </div><br>
          <div class="col-md-12">
            <br>
            <ul class="list-group">
              <li class="list-group-item"><b>IVA</b>
                <input type="hidden" id="valor_iva" name="valor_iva" value="@{{servicio_edit.valor_iva}}" placeholder="">
                <span class="pull-right" id="container_iva">
                </span></li>
                <li class="list-group-item"><b>Retención</b>
                  <span v-for="r in retenciones" v-if="r.concepto == servicio_edit.titulo_retencion">
                  <input type="hidden" name="valor_retencion" v-model="servicio_edit.valor_retencion" id="valor_retencion" value="" placeholder="">
                   <span class="pull-right"></span></span>
                 </li>

                 <li class="list-group-item list-group-item-success"><b>Utilidad Neta</b>
                   <input type="hidden" name="utilidad_neta" id="utilidad_neta" value="" placeholder="">
                   <span class="pull-right"></span></li>
                 </ul>
               </div>
               <div class="col-md-12"><br>
                 <textarea name="comentarios_servicio" id="comentarios_servicio" cols="5" rows="3" v-model="servicio_edit.comentarios_servicio" class="material form-control"></textarea>
               </div>

             </div>

           </div>
         </div>

         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="input" id="save_id_anotacion_cobro" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- END Service -->
  {{-- FIN ACTUALIZAR SERVICIO --}}


  <!------------  Load Comprobante Cobro  ------------>
  <div class="modal fade" id="comprobante-cobro">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Cargar comprobante de Cobro</h4>
        </div>
        <div class="modal-body">
          {!!Form::open(array('action' => 'AnotacionesController@updateCobroComprobante', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}

          <input type="hidden" name="id_anotacion" id="id_anotacion_cobro" v-model="comprobante_target" class="form-control" value="">
          <input type="file" name="comprobante" class="form-control">              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="input" id="save_id_anotacion_cobro" class="btn btn-primary">Guardar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


  <!------------  Load Comprobante Servicio  ------------>
  <div class="modal fade" id="modal-comprobante-servicio">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Cargar Comprobante de Servicio</h4>
        </div>
        <div class="modal-body">
          {!!Form::open(array('action' => 'ServiciosController@UpdateComprobanteServicio', 'method' => 'post', 'id' => 'form-guardar-servicio','files'=>true));!!}
          <input type="hidden" name="id_anotacion" id="id_anotacion_servicio" class="form-control" value="">
          <input type="file" name="comprobante" class="form-control">              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="input" id="save_id_anotacion_cobro" class="btn btn-primary">Guardar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


  {{-- Reportar Cobro --}}

  {{-- End Reportar Cobro --}}

  <!------------  Load Comprobante Costo  ------------>
  <div class="modal fade" id="modal-comprobante-costo">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Cargar Comprobante de Costo</h4>
        </div>
        <div class="modal-body">
          {!!Form::open(array('action' => 'CostosController@UpdateComprobanteCosto', 'method' => 'post', 'id' => 'form-guardar-comprobante-costo','files'=>true));!!}

          <input type="hidden" name="id_anotacion_costo" id="id_anotacion_costo" class="form-control" value="">

          <input type="file" name="comprobante" class="form-control">              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
          <button type="submit" id="save_id_anotacion_costo" class="btn btn-primary">Guardar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


  {{-- Reportar Cobro --}}

  <!--====  Stat Costo  ====-->
  <div class="modal fade" id="modal-costos">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Adjuntar un Costo</h4>
        </div>
        <div class="modal-body">
          <div class="row">

            {!!Form::open(array('action' => 'CostosController@SaveCosto', 'method' => 'post', 'id' => 'form-guardar-costo','files'=>true));!!}
            <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

            <div class="col-md-12">
              <div class="col-md-12"> <br>                     
                <input type="text" name="titulo" id="" placeholder="Título" class="form-control material" value="" required="required">
              </div>
            </div>                   
            <div class="col-md-12">
             <div class="col-md-6">  <br>  
               <input type="text"  name="inicio" id="inicio_costo" placeholder="Periodo de Inicio" class="form-control material" value="" required="required">
             </div>
             <div class="col-md-6"> <br>                     
              <input type="text" name="fin" id="fin_costo" placeholder="Finalización" class="form-control material" value="" required="required">
            </div>
            <br><br>
          </div>                
          <div class="col-md-12" style="margin-top: 20px;"> 
           <div class="col-md-6">
            <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial o número de comprobante" value="" required="required">
          </div>
          <div class="col-md-6">
            <input type="number" name="valor" id="input" class="form-control material" placeholder="Valor" value="" required="required" step="any">
          </div>

          <div class="col-md-12"><br>
            <textarea name="comentarios_costo" id="input" class="form-control material" rows="3" required="required"></textarea>
          </div>
          <div class="col-md-12" style="margin-top: 10px">
            <div class="col-md-12">
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="button" id="btn-guardar-costo" class="btn btn-primary">Registrar este Costo</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>

<!-- END Costo -->


{{--  --}}

<div class="modal fade" id="tabla-retencion">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{--  --}}

{{-- Reportar Cobro --}}

<!--====  Stat Archivo Cliente  ====-->
<div class="modal fade" id="archivos_cliente">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Adjuntar un Costo</h4>
      </div>
      <div class="modal-body">
        <div class="row">

          {!!Form::open(array('action' => 'CostosController@SaveCosto', 'method' => 'post', 'id' => 'form-guardar-costo','files'=>true));!!}
          <input type="hidden" name="id_perfil" id="" class="form-control" value="{!! $data->empresa->id !!}"> 

          <div class="col-md-12">
            <div class="col-md-12"> <br>                     
              <input type="text" name="titulo" id="" placeholder="Título" class="form-control material" value="" required="required">
            </div>
          </div>                   
          <div class="col-md-12">
           <div class="col-md-6">  <br>  
             <input type="text"  name="inicio" id="inicio_costo" placeholder="Periodo de Inicio" class="form-control material" value="" required="required">
           </div>
           <div class="col-md-6"> <br>                     
            <input type="text" name="fin" id="fin_costo" placeholder="Finalización" class="form-control material" value="" required="required">
          </div>
          <br><br>
        </div>                
        <div class="col-md-12" style="margin-top: 20px;"> 
         <div class="col-md-6">
          <input type="text" name="serial" id="input" class="form-control material" placeholder="Serial o número de comprobante" value="" required="required">
        </div>
        <div class="col-md-6">
          <input type="number" name="valor" id="input" class="form-control material" placeholder="Valor" value="" required="required" step="any">
        </div>

        <div class="col-md-12"><br>
          <textarea name="comentarios_costo" id="input" class="form-control material" rows="3" required="required"></textarea>
        </div>
        <div class="col-md-12" style="margin-top: 10px">
          <div class="col-md-12">
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
      <button type="button" id="btn-guardar-costo" class="btn btn-primary">Registrar este Costo</button>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
</div>
<!-- END Archivo Cliente -->


<!--====  Start Ver Servicio del Cobro  ====-->
{{--  --}}

<div class="modal fade" id="servicio_cobro">
  <div v-for="target in target_id"  class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
           <table class="table table-condensed table-hover">
             <tbody>
               <tr>
                 <td>Título</td>
                 <td>@{{target.titulo}}</td>
               </tr>
               <tr>
                 <td>Empresa</td>
                 <td><img :src="'/uploads/fotos/' + target.logo" width="40px" class="img-circle" alt="">@{{target.nombre_empresa}}</td>
               </tr>
               <tr>
                 <td>Periodo</td>
                 <td>@{{target.inicio|DateSmall}} <i class="icon-right-small"></i> @{{target.fin|DateSmall}}</td>
               </tr>
               <tr>
                 <td >Vendedor</td>
                 <td><img :src="'/uploads/fotos/' + target.foto_vendedor" width="40px" class="img-circle" alt=""> @{{target.nombre_vendedor}}</td>
               </tr>
               <tr>
                 <td >Serial</td>
                 <td>@{{target.serial}}</td>
               </tr>  
               <tr>
                 <td >Estado</td>
                 <td>
                   <span v-if="target.estado = 1" class="label label-success">Activo</span>
                   <span v-else class="label label-success">Inactivo</span>
                 </td>
               </tr> 
               <tr>
                 <td >Comentarios</td>
                 <td>
                   <p><i class="icon-chat-alt"></i> @{{target.comentarios_servicio}}</p>
                 </td>
               </tr>             

             </tbody>
           </table>          
         </div>

         <div class="col-md-6">
          <table class="table table-condensed">

           <tbody>
             <tr class="success">
               <td >Valor</td>
               <td>@{{target.valor | currency}}</td>
             </tr>
             <tr class="danger">
               <td>Saldo</td>
               <td>@{{target.saldo | currency}}</td>
             </tr>
             <tr>
               <td>Retención</td>
               <td>@{{target.titulo_retencion}}</td>
             </tr>
             <tr>
               <td >Valor retención</td>
               <td>@{{target.valor_retencion |currency}}</td>
             </tr>
             <tr>
               <td>I.V.A</td>
               <td>@{{target.iva}}%</td>
             </tr>
             <tr>
               <td >Valor I.V.A</td>
               <td>@{{target.valor_iva | currency}}</td>
             </tr> 
             <tr>
               <td >Costos</td>
               <td>@{{target.costos | currency}}</td>
             </tr>   
             <tr class="info">
               <td>Utilidad Neta</td>
               <td>@{{target.utilidad_neta | currency}}</td>
             </tr>  


           </tbody>
         </table><br><br>
       </div>
       
       <div class="col-md-12"><h4><i class="icon-chart-alt-outline"></i> Historial de Cobros</h4>
         <table class="table table-striped table-hover">
           <thead>
             <tr>
               <th width="10%">ID</th><th>Serial</th><th>Vence</th><th>Monto</th><th>Estado</th>
             </tr>
           </thead>
           <tbody>
             <tr v-for="cobro in payments_id">
               <td>@{{cobro.id}}</td> <td>@{{cobro.serial}}</td><td>@{{cobro.fecha_cobro | DateSmall}}</td><td>@{{cobro.monto | currency}}</td><td><span class="label label-success" v-if="cobro.estado == '0'">Pagado</span><span v-else class="label label-danger">No pagado</span></td>
             </tr>

           </tbody>
         </table>
       </div>

     </div>

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>

{{--  --}}

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
    <div class="modal-content" v-for="anotacion in data_anotacion">
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


<!-- END Archivo Cliente -->

