<div class="table-responsive-sm">
    <table class="table table-striped" id="centroDeLlamadas-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Clientes</th>
        <th>Promociones</th>
        <th>Trabajador</th>
        <th>Ayuda Cliente</th>
        <th>Contrato Servicios</th>
        <th>Servicios Tecnicos</th>
        <th>Soluciones Problemas</th>
        <th>Puntos Pago</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($centroDeLlamadas as $centroDeLlamadas)
            <tr>
                <td>{{ $loop->iteration}} </td>  
                <td>{{ $centroDeLlamadas->name }}</td>
            <td>{{ $centroDeLlamadas->prom_id }}</td>
            <td>{{ $centroDeLlamadas->trab_nombres.' '.$centroDeLlamadas->trab_apellidos }}</td>
            <td>{{ $centroDeLlamadas->call_ayuda_cliente }}</td>
            <td>{{ $centroDeLlamadas->call_contrato_servicios }}</td>
            <td>{{ $centroDeLlamadas->call_servicios_tecnicos }}</td>
            <td>{{ $centroDeLlamadas->call_soluciones_problemas }}</td>
            <td>{{ $centroDeLlamadas->call_puntos_pago }}</td>
                <td>
                    {!! Form::open(['route' => ['centroDeLlamadas.destroy', $centroDeLlamadas->call_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('centroDeLlamadas.show', [$centroDeLlamadas->call_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('centroDeLlamadas.edit', [$centroDeLlamadas->call_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Desea Eliminar Definitivamente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>