  
<?php $carbon->setLocale('es'); ?>
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
case 'alerta':
   if ($anotacion->estado=="1") {
       $btn='<button type="button" class="btn btn-xs btn-default">Resolver</button>';
   }else{
       $btn='<button type="button" class="btn btn-xs btn-default">Ya fue resuelto</button>';
   }
   echo '<div class="content-box biggest-box red-bg">
   
       <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt="">                                 
       <h3 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> Alerta - vence <span title="'.$anotacion->fecha_vencimiento.'">'.$dt=$carbon->parse($anotacion->fecha_vencimiento)->diffForHumans().'</span></h3><br>

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

$input_id = Form::hidden('id', $anotacion->id);

$inicio_form = Form::open(array('action' => 'AnotacionesController@updateCobro','class'=>'update_cobro', 'method' => 'post', 'id' => 'form-actualizar-cobro_'.$anotacion->id.'','files'=>true));

$fin_form = Form::close();

if ($anotacion->estado=="0" && empty($anotacion->comprobante)) {
$alerta = '<div class="alert alert-warning cabecera-comprobante-cobro"><strong>:(</strong> No hay comprobante<button type="button" data-id="'.$anotacion->id.'" class="btn btn-xs pull-right btn-default"><i class="icon-upload-2"></i>Cargar</button></div>';
}else{$alerta = '';}
if ($anotacion->estado=="1") {
       $btn='<button type="button" class="btn btn-xs btn-default btn-reportar" data-id="'.$anotacion->id.'" data-serial="'.$anotacion->serial.'"> Reportar Cobro</button>';
   }else{
       $btn='<button type="button" class="btn btn-xs btn-default"> Fue Cobrado</button>';
   }
   echo
    $inicio_form.$input_id.'<div class="content-box biggest-box orange-bg">'.$alerta.'  
   <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt="">                            
       <h3 class="text-uppercase zero-m text-title-note"><i class=" icon-chart-line-1"></i> Cobro para <span title="'.$anotacion->fecha_cobro.'">'.$dt=$carbon->parse($anotacion->fecha_cobro)->diffForHumans().'</span><br><br><i class=" icon-calendar-empty"></i>
'.$inicio.' - '.$fin.'
       <br>
       <i class="icon-hash"></i>'.$anotacion->serial.'<br>
       <i class="icon-dollar"></i>'.$monto.'
       </h3><br>
       <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
       <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>   
   <div class="clearfix">
    <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
    <button type="button" class="btn btn-xs btn-default"><i class="icon-calendar"></i></button>
    <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div>'.$fin_form.'</div><br>';
break;


default:
echo "<br>";
echo "<h2>No Existen Anotaciones</h2>";
break;
}
}

?>      

