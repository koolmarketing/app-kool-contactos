  
<?php $carbon->setLocale('es'); ?>
<?php 

foreach ($anotaciones as $anotacion) {
  switch ($anotacion->tipo_anotacion) {
    case 'comentario':

    echo '<div class="biggest-box blue-bg">
    <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt="">                 
    <br>
    <div class="content-box small-box degrw">
    <span class="col-md-6"><a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive text-left" width="90px" alt=""></a></span><span class="col-md-6"><h4 class="gray text-center">'.$anotacion->nombre_comercial.'</h4></span>
    </div>

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

 <div class="content-box small-box degrw">
    <span class="col-md-6"><a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive text-left" width="90px" alt=""></a></span><span class="col-md-6"><h4 class="gray text-center">'.$anotacion->nombre_comercial.'</h4></span>
    </div>

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
 <div class="content-box small-box degrw"><span class="col-md-6"><a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive text-left" width="90px" alt=""></a></span><span class="col-md-6"><h4 class="gray text-center">'.$anotacion->nombre_comercial.'</h4></span></div> <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
 <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>

 <div class="clearfix">
  <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
  <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div></div><br>';
  break;
  case 'cobro':

  $monto  =  $anotacion->monto;
  $inicio =  $carbon->toFormattedDateString($anotacion->fecha_inicio);
  $fin=  $carbon->toFormattedDateString($anotacion->fecha_cobro);

  if ($anotacion->estado=="1") {
   $btn='<button type="button" class="btn btn-xs btn-default"> Reportar Cobro</button>';
 }else{
   $btn='<button type="button" class="btn btn-xs btn-default"> Fue Cobrado</button>';
 }
 echo '<div class="content-box biggest-box orange-bg">

 <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle pull-right" width="40px" alt=""><div class="content-box small-box degrw"><span class="col-md-6"><a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive text-left" width="90px" alt=""></a></span><span class="col-md-6"><h4 class="gray text-center">'.$anotacion->nombre_comercial.'</h4></span></div>
 <h3 class="text-uppercase zero-m text-title-note"><i class=" icon-chart-line-1"></i> Cobro para <span title="'.$anotacion->fecha_cobro.'">'.$dt=$carbon->parse($anotacion->fecha_cobro)->diffForHumans().'</span>
  <br>
  <i class="icon-hash"></i>'.$anotacion->serial.'<br>
  <i class="icon-dollar"></i>'.$monto.'
</h3><br>
<p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
<span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>
<div class="clearfix">
  <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
  <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div></div><br>';
  break;

  default:
  echo "<br>";
  echo "<h2>No Existen Anotaciones</h2>";
  break;
}
}

?>      

