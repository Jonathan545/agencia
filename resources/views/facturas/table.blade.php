<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
        <th>Entidad</th>
        <th>Servicio</th>
        <th>Factura Nº</th>
        <th>Fecha</th>
        <th>Total</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $gtotal=0; ?>
        @foreach($facturas as $facturas)
        
        <?php
            if ($facturas->fac_iva==0) {
                $total=($facturas->subt-$facturas->fac_descuento);
            }else{
                $iva=($facturas->subt-$facturas->fac_descuento)*0.12;
                $total=($facturas->subt-$facturas->fac_descuento)+$iva;
            }
            $gtotal=$gtotal+$total;
        ?>
            <tr>
            <td>{{ $loop->iteration}} </td>    
            <td>{{ $facturas->name }}</td>
            <td>{{ $facturas->ent_nombre_entidad }}</td>
            <td>{{ $facturas->srv_tipo_servicio }}</td>
            <td>00000{{ $facturas->fac_num_factura }}</td>
            <td>{{ $facturas->fac_fecha }}</td>
            <td class="text-right">{{number_format($total),2}}$</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->fac_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->fac_id]) }}" target="_blank" class='btn btn-ghost-danger'><i class="fa fa-file-pdf-o"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->fac_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Desea Eliminar Definitivamente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tr>
            <th colspan="6" class="text-right">Total </th>
            <th class="text-right">{{number_format($gtotal)}}$</th>
        </tr>
    </table>
</div>