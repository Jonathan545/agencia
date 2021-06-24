<div class="table-responsive-sm">
    <table class="table table-striped" id="trabajadores-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Entidad</th>
        <th> Nombres</th>
        <th> Apellidos</th>
        <th> Genero</th>
        <th> Estado Civil</th>
        <th> Telefono</th>
        <th> Correo</th>
        <th> Cedula</th>
        <th> Rol Trabajo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trabajadores as $trabajadores)
            <tr>
                <td>{{ $loop->iteration}} </td>  
                <td>{{ $trabajadores->ent_nombre_entidad }}</td>
            <td>{{ $trabajadores->trab_nombres }}</td>
            <td>{{ $trabajadores->trab_apellidos }}</td>
            <td>{{ $trabajadores->trab_genero }}</td>
            <td>{{ $trabajadores->trab_estado_civil }}</td>
            <td>{{ $trabajadores->trab_telefono }}</td>
            <td>{{ $trabajadores->trab_correo }}</td>
            <td>{{ $trabajadores->trab_cedula }}</td>
            <td>{{ $trabajadores->trab_rol_trabajo }}</td>
                <td>
                    {!! Form::open(['route' => ['trabajadores.destroy', $trabajadores->trab_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trabajadores.show', [$trabajadores->trab_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('trabajadores.edit', [$trabajadores->trab_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Desea Eliminar Definitivamente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>