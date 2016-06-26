<?php 
use Clicknow\Money\Money;
echo '<h4> Costos Operativos: '.Money::COP($saldo, true).'</h4>'; 
?>
@foreach ($costos as $costo)
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
                    <h4><b>{!! $costo->titulo !!}</b></h4>
                    
                    <b>Valor:</b> {!! Money::COP($costo->valor, true); !!}<br><hr>  
                    @if($costo->comprobante=="")
                    <button class="btn btn-danger btn-xs pull-right btn-comprobante-costo" data-id="{!! $costo->id_costo  !!}"><i class="icon-upload"></i> Cargar Comprobante</button>
                    @endif
                    @if($costo->comprobante!="") 
                    <a href="{!! URL::to('/') !!}/uploads/comprobantes/{!! $costo->comprobante !!}" target="_blank"  class="btn btn-xs btn-success pull-right"><i class="icon-eye-4"></i> Ver Comprobante</a>               
                    @endif
                    @if($costo->serial!="")
                    <i class="icon-hash"></i><b>Serial:</b> {!! $costo->serial !!}<br>
                    @endif
                    <i class="icon-check"></i><b class="text-success">Inicio:</b> {!! $costo->inicio !!}<br>
                    <i class="icon-cancel-circled2-1"></i><b class="text-danger">Finalización:</b> {!! $costo->fin !!}<br></p>
                    <p>{!! $costo->comentarios_costo !!}</p>
            </div>
            <div class="col-md-12">
                <img src="{!! URL::to('uploads/fotos') !!}/{!! $costo->fotografia !!}" class="img-circle" width="35px" alt=""> 
                <span class="pull-right">
                    {!! $carbon->parse($costo->created_at)->diffForHumans() !!}
                </span>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
