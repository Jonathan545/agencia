<div class="table-responsive-sm">
    <table class="table table-striped" id="facturaDetalles-table">
        <thead>
            <tr>
                <th>Fac Id</th>
        <th>Fac Tipo Pago</th>
        <th>Fac Descripcion</th>
        <th>Fac Valor Servicio</th>
        <th>Fac Descuento</th>
        <th>Fac Iva</th>
        <th>Fac Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturaDetalles as $facturaDetalles)
            <tr>
                <td>{{ $facturaDetalles->fac_id }}</td>
            <td>{{ $facturaDetalles->fac_tipo_pago }}</td>
            <td>{{ $facturaDetalles->fac_descripcion }}</td>
            <td>{{ $facturaDetalles->fac_valor_servicio }}</td>
            <td>{{ $facturaDetalles->fac_descuento }}</td>
            <td>{{ $facturaDetalles->fac_iva }}</td>
            <td>{{ $facturaDetalles->fac_total }}</td>
                <td>
                    {!! Form::open(['route' => ['facturaDetalles.destroy', $facturaDetalles->fadet_idid], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturaDetalles.show', [$facturaDetalles->fadet_idid]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('facturaDetalles.edit', [$facturaDetalles->fadet_idid]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>