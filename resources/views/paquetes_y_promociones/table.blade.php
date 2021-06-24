<div class="table-responsive-sm">
    <table class="table table-striped" id="paquetesYPromociones-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Servicio</th>
        <th>Descuentos</th>
        <th>Planes Prepago</th>
        <th>Planes Pospago</th>
        <th>Combos Bonos</th>
        <th>Celulares Promocion</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($paquetesYPromociones as $paquetesYPromociones)
       
            <tr>
                <td>{{ $loop->iteration}} </td>  
                <td>{{ $paquetesYPromociones->srv_tipo_servicio }}</td>
            <td>{{ $paquetesYPromociones->prom_descuentos }}</td>
            <td>{{ $paquetesYPromociones->prom_planes_prepago }}</td>
            <td>{{ $paquetesYPromociones->prom_planes_pospago }}</td>
            <td>{{ $paquetesYPromociones->prom_combos_bonos }}</td>
            <td>{{ $paquetesYPromociones->prom_celulares_promocion }}</td>
                <td>
                    {!! Form::open(['route' => ['paquetesYPromociones.destroy', $paquetesYPromociones->prom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('paquetesYPromociones.show', [$paquetesYPromociones->prom_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('paquetesYPromociones.edit', [$paquetesYPromociones->prom_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Desea Eliminar Definitivamente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
       
        @endforeach
        </tbody>
    </table>
</div>