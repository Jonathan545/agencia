<!-- Ent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_id', 'Entidad:') !!}
    {!! Form::select('ent_id', $entidad ,null, ['class' => 'form-control']) !!}
</div>

<!-- Trab Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_nombres', 'Nombres:') !!}
    {!! Form::text('trab_nombres', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_apellidos', 'Apellidos:') !!}
    {!! Form::text('trab_apellidos', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_genero', 'Genero:') !!}
    {!! Form::select('trab_genero',['MUJER'=>'MUJER','HOMBRE'=>'HOMBRE'],null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Estado Civil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_estado_civil', 'Estado Civil:') !!}
    {!! Form::select('trab_estado_civil', ['Soltero'=>'Soltero',
    'Casado'=>'Casado',
    'Viudo'=>'Viudo',
    'Divorciado'=>'Divorciado',
    'Union Libre'=>'Union Libre'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_telefono', ' Telefono:') !!}
    {!! Form::text('trab_telefono', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_correo', 'Correo:') !!}
    {!! Form::text('trab_correo', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_cedula', 'Cedula:') !!}
    {!! Form::text('trab_cedula', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Trab Rol Trabajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_rol_trabajo', 'Rol Trabajo:') !!}
    {!! Form::text('trab_rol_trabajo', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('trabajadores.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
