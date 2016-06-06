 <?php use Clicknow\Money\Money; ?>
 @if(count($cobros)!=0)
 <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Serial</th>
            <th>Vencimiento</th>                 
            <th>Valor</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cobros as $cobro)
        <tr>
            <td>{!! $cobro->serial !!}</td>
            <td>{!! $cobro->fecha_cobro !!}</td>
            <td>{!! Money::COP($cobro->monto, true) !!}</td>
            <td>@if ($cobro->estado=="0")
                <span class="label label-success">Cobrado</span>
                @else
                <span class="label label-danger">Sin Cobrar</span>
                @endif</td>
            </tr>
            @endforeach

        </tbody>
    </table>   
    @endif       