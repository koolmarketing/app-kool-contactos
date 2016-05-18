<?php 
use Clicknow\Money\Money;
echo Money::BRL(500, true);
 ?>
      @foreach ($servicios as $servicio)
      <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row pull-right">
                    <div class="col-md-12 ">
                        <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button>
                        <button type="button" class="btn btn-xs btn-default"><i class="icon-cancel-2"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>                    
                        
<h4>{!! $servicio->titulo !!}</h4>
                      
                        Estado: @if ($servicio->estado=='1')
                            <span class="label label-success">Activo</span>
                        @else
                            <span class="label label-danger">Inactivo</span>
                        @endif<br>
                        Valor: {!! $servicio->valor !!}<br>
                        Saldo Actual: {!! $servicio->saldo !!}<br>
                        Inicia: {!! $servicio->inicio !!}<br>
                        Finaliza: {!! $servicio->fin !!}

                    </p>
                </div>
                <div class="col-md-12">
                    <!-- <img src="{!! URL::to('uploads/fotos') !!}/{!! $servicio->foto !!}" class="img-circle" width="35px" alt=""> -->
                    <span class="pull-right">
                        Hace 1 día
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
