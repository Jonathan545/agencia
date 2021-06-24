<div class="table-responsive-sm">
    <table class="table table-striped" id="registroDeActividades-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Clientes</th>
        <th>Servicio Contratado</th>
        <th>Tipo Contrato</th>
        <th>Servicio Contratado</th>
        <th>Inicio Contrato</th>
        <th>Fecha Facturar</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registroDeActividades as $registroDeActividades)
            <tr>
                <td>{{ $loop->iteration}} </td>  
                <td>{{ $registroDeActividades->name }}</td>
            <td>{{ $registroDeActividades->srv_id }}</td>
            <td>{{ $registroDeActividades->rgt_tipo_contrato }}</td>
            <td>{{ $registroDeActividades->rgt_servicio_contratado }}</td>
            <td>{{ $registroDeActividades->rgt_inicio_contrato }}</td>
            <td>{{ $registroDeActividades->rgt_fecha_facturar }}</td>
                <td>
                    {!! Form::open(['route' => ['registroDeActividades.destroy', $registroDeActividades->rgt_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registroDeActividades.show', [$registroDeActividades->rgt_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('registroDeActividades.edit', [$registroDeActividades->rgt_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Desea Eliminar Definitivamente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>