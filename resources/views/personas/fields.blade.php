<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_telefono', 'Telefono:') !!}
    {!! Form::text('cli_telefono', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->

<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_cedula', 'Cedula:') !!}
    {!! Form::text('cli_cedula', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_genero', 'Genero:') !!}
    {!! Form::select('cli_genero',['MUJER'=>'MUJER','HOMBRE'=>'HOMBRE'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_direccion', 'Direccion:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_tipo', 'Tipo:') !!}
    {!! Form::select('cli_tipo',['C'=>'Cliente','A'=>'Administrador','T'=>'Trabajador'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_estadocivil', 'Estado Civil:') !!}
    {!! Form::select('cli_estadocivil', ['Soltero'=>'Soltero',
    'Casado'=>'Casado',
    'Viudo'=>'Viudo',
    'Divorciado'=>'Divorciado',
    'Union Libre'=>'Union Libre'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_usuario', 'Usuario:') !!}
    {!! Form::text('cli_usuario', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Clave:') !!}
    {!! Form::text('password', null, ['class' => 'form-control','required'=>'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('cli_fenac', 'Fecha Nacimiento:') !!}
    {!! Form::date('cli_fenac', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('personas.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>