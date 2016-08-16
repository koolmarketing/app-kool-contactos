  
<?php $carbon->setLocale('es'); ?>
 <?php use Clicknow\Money\Money; ?>
<?php 

foreach ($anotaciones as $anotacion) {
    switch ($anotacion->tipo_anotacion) {
        case 'comentario':

        echo '<div class="biggest-box blue-bg">

        <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt="">                   
        <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Anotación</h3><br>
        <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
        <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>

        <div class="clearfix"><br><br>
           <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
           <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button>
       </div>
   </div><br>';

   break;
   case 'recordatorio':
   if ($anotacion->estado=="1") {
       $btn='<button type="button" class="btn btn-xs btn-default"> Desactivar</button>';
   }else{
       $btn='<button type="button" class="btn btn-xs btn-default"> Activar</button>';
   }
   echo '<div class="content-box biggest-box green-bg">   
       <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt="">                                 
       <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Recordatorio - <span title="'.$anotacion->fecha_vencimiento.'">'.$dt=$carbon->parse($anotacion->fecha_vencimiento)->diffForHumans().'</span></h3><br>

       <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
       <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>
   
   <div class="clearfix">
    <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
    <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div></div><br>';
break;

case 'cobro':

$monto  =  $anotacion->monto;
$inicio =  $anotacion->fecha_inicio;
$fin=  $anotacion->fecha_cobro;

$input_id_empresa   = Form::hidden('id_empresa', $anotacion->id);
$input_id_anotacion = Form::hidden('id_anotacion', $anotacion->anotacion_id);

$inicio_form = Form::open(array('action' => 'AnotacionesController@updateCobro','class'=>'update_cobro', 'method' => 'post', 'id' => 'form-actualizar-cobro_'.$anotacion->anotacion_id.'','files'=>true));

$fin_form = Form::close();
if($anotacion->estado=="1"){$alerta="";}
else if (empty($anotacion->comprobante) && $anotacion->estado=="0") {
$alerta = '<div class="alert alert-warning cabecera-comprobante-cobro"><strong>:(</strong> No hay comprobante<button type="button" data-id="'.$anotacion->anotacion_id.'" class="btn btn-xs pull-right btn-default btn-comprobante-cobro" data-id="'.$anotacion->anotacion_id.'" ><i class="icon-upload-2"></i>Cargar</button></div>';
}else{
  $alerta = '<div class="alert alert-warning cabecera-comprobante-cobro">Ver Comprobante <a type="button" href="'.URL::to('/').'/uploads/comprobantes/'.$anotacion->comprobante.'" target="_blank"  class="btn btn-xs pull-right btn-default" ><i class="icon-eye-3"></i>Ver Comprobante</a></div>';
}
if ($anotacion->estado=="1") {
       $btn='<button type="button" class="btn btn-xs btn-default btn-reportar" data-id="'.$anotacion->anotacion_id.'" data-serial="'.$anotacion->serial.'"> Reportar Cobro</button>';
   }else{
       $btn='<button type="button" class="btn btn-xs btn-default"> Fue Cobrado</button>';
   }
   echo    $inicio_form.$input_id_empresa.$input_id_anotacion.'<div class="content-box biggest-box orange-bg">'.$alerta.'  
   <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt=""> 
       <h3 class="text-uppercase zero-m text-title-note"><i class=" icon-chart-line-1"></i> Cobro para <span title="'.$anotacion->fecha_cobro.'">'.$dt=$carbon->parse($anotacion->fecha_cobro)->diffForHumans().'</span><br><br><i class=" icon-calendar-empty"></i>
'.$inicio.' - '.$fin.'  <br>  <i class="icon-hash"></i>'.$anotacion->serial.'<br>    <i class="icon-dollar"></i>'.Money::COP($monto, true).'
       </h3><br> <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
       <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>   
   <div class="clearfix"> <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
    <button type="button" class="btn btn-xs btn-default"><i class="icon-calendar"></i></button> <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div>'.$fin_form.'</div><br>';
break;


default:
echo "<br>";
echo "<h2>No Existen Anotaciones</h2>";
break;
}
}

?>      

