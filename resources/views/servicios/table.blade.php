<div class="table-responsive-sm">
    <table class="table table-striped" id="servicios-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Trabajador</th>
        <th>Tipo Servicio</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicios)
            <tr>
                <td>{{ $loop->iteration}} </td>  
                <td>{{ $servicios->trab_nombres.' '.$servicios->trab_apellidos }}</td>
            <td>{{ $servicios->srv_tipo_servicio }}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicios->srv_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicios->srv_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('servicios.edit', [$servicios->srv_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>