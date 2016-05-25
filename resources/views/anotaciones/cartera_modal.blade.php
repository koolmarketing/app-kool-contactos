 <?php use Clicknow\Money\Money; ?>
 @if(count($cobros)!=0)
 <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Vencimiento</th>                 
            <th>Valor</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cobros as $cobro)
        <tr>
            <td>{!! $cobro->fecha_cobro !!}</td>
            <td>{!! Money::COP($cobro->monto, true) !!}</td>
            <td></td>
        </tr>
    @endforeach
        
        </tbody>
</table>   
@endif       