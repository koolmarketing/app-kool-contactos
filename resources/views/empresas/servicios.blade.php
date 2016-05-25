<?php 
use Clicknow\Money\Money;
echo '<h4> Saldo Actual: '.Money::COP($saldo, true).'</h4>'; 
?>
@foreach ($servicios as $servicio)
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row pull-right">
                <div class="col-md-12 ">
                <button type="button" class="btn btn-xs btn-default"><i class="icon-wrench-2"></i>editar</button>    
                    <button type="button" class="btn btn-xs btn-default"><i class="icon-mail"></i></button>
                    <button type="button" class="btn btn-xs btn-danger"><i class="icon-cancel-2"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><p>                    

                    <h4><b>{!! $servicio->titulo !!}</b></h4>
                    <b>Estado:</b> @if ($servicio->estado=='1')
                    <span class="label label-success">Activo</span>
                    @else
                    <span class="label label-danger">Inactivo</span>
                    @endif<br>
                    <b>Valor:</b> {!! Money::COP($servicio->valor, true); !!}<br>
                    <b>Saldo:</b> {!! Money::COP($servicio->saldo, true); !!}<br>
<hr>
                    @if($servicio->serial!="")
                    <i class="icon-hash"></i><b>Serial:</b> {!! $servicio->serial !!}<br>
                    @endif
                    
                    <i class="icon-check"></i><b class="text-success">Inicia:</b> {!! $servicio->inicio !!}<br>
                    <i class="icon-cancel-circled2-1"></i><b class="text-danger">Finaliza:</b> {!! $servicio->fin !!}<br><br>
                    @if($servicio->comprobante!="") 
                    <a href="{!! URL::to('/') !!}/uploads/comprobantes/{!! $servicio->comprobante !!}" class="btn btn-xs btn-default">Comprobante</a>
                    @else
                    Sin comprobante
                    @endif
                   

                </p>
            </div>
            <div class="col-md-12">
                <img src="{!! URL::to('uploads/fotos') !!}/{!! $servicio->fotografia !!}" class="img-circle" width="35px" alt=""> 
                <span class="pull-right">
                    {!! $carbon->parse($servicio->created_at)->diffForHumans() !!}
                </span>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
