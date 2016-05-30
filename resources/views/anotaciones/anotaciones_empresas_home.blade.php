  
<?php $carbon->setLocale('es'); ?>
<?php 

foreach ($anotaciones as $anotacion) {
  switch ($anotacion->tipo_anotacion) {
    case 'comentario':

    echo '<div class="panel panel-default">
    <div class="panel-heading cam-panel-header">  <a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive" width="150px" alt=""></a>
      <h4 class="panel-title text-center">'.$anotacion->nombre_comercial.'</h4></div>
      <div class="panel-body"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle" width="40px" alt="">                 
        <br>
        <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
        <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span></div>
        <div class="panel-footer cam-panel-footer"><button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
         <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button></div>
       </div><br>';

       break;
       case 'recordatorio':
       if ($anotacion->estado=="1") {
         $btn='<button type="button" class="btn btn-xs btn-default"> Desactivar</button>';
       }else{
         $btn='<button type="button" class="btn btn-xs btn-default"> Activar</button>';
       }
       echo '<div class="panel panel-default">
       <div class="panel-heading cam-panel-header">
         <a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive" width="150px" alt=""></a>
         <h4 class="panel-title text-center">'.$anotacion->nombre_comercial.'</h4>
         <h5 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> <span title="'.$anotacion->fecha_vencimiento.'">'.$dt=$carbon->parse($anotacion->fecha_vencimiento)->diffForHumans().'</span></h5></div>
         <div class="panel-body">
           <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle" width="40px" alt="">                                 
           <br>
           <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
           <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span></div>
           <div class="panel-footer cam-panel-footer">
            <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
            <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'</div></div><br>';
            break;

            case 'alerta':
            if ($anotacion->estado=="1") {
             $btn='<button type="button" class="btn btn-xs btn-default">Resolver</button>';
           }else{
             $btn='<button type="button" class="btn btn-xs btn-default">Ya fue resuelto</button>';
           }
           echo '<div class="panel panel-default">
           <div class="panel-heading cam-panel-header">
             <a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive" width="150px" alt=""></a>
             <h4 class="panel-title text-center">'.$anotacion->nombre_comercial.'</h4><h5 class="text-uppercase zero-m text-title-note"><i class="icon-pencil-2"></i> <span title="'.$anotacion->fecha_vencimiento.'">'.$dt=$carbon->parse($anotacion->fecha_vencimiento)->diffForHumans().'</span></h5></div>                              
             <div class="panel-body">
               <img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle" width="40px" alt=""> <br>    
               <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
               <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>
             </div>

             <div class="panel-footer cam-panel-footer">
              <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
              <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button> '.$btn.'
            </div>
          </div><br>';
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
         echo '<div class="panel panel-default">
         <div class="panel-heading cam-panel-header">
         <a href="/empresa/'.$anotacion->id.'"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->foto.'" class="img-responsive" width="150px" alt=""></a><span class="col-md-6"><h4 class="text-center panel-title">'.$anotacion->nombre_comercial.'</h4></span></div>     
        <div class="panel-body"><img src="'.URL::to('/').'/uploads/fotos/'.$anotacion->fotografia.'" class="img-responsive img-circle" width="40px" alt=""><br><h3 class="text-uppercase zero-m text-title-note"><i class=" icon-chart-line-1"></i> Cobro para <span title="'.$anotacion->fecha_cobro.'">'.$dt=$carbon->parse($anotacion->fecha_cobro)->diffForHumans().'</span>
        <br><i class="icon-hash"></i>'.$anotacion->serial.'<br>
          <i class="icon-dollar"></i>'.$monto.'
        </h3><br> <p class="text-note col-lg-12"> '.$anotacion->mensaje.' </p>
        <span class="pull-right" title="'.$anotacion->created_at.'">'.$dt=$carbon->parse($anotacion->created_at)->diffForHumans().'</span>
        </div>
        <div class="panel-footer cam-panel-footer">
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

