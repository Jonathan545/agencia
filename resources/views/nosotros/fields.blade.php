<!-- Ent Rep Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_rep_legal', 'Representante:') !!}
    {!! Form::text('ent_rep_legal', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Ent Nombre Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_nombre_entidad', 'Entidad:') !!}
    {!! Form::text('ent_nombre_entidad', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Ent Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ent_ubicacion', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Ent Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_correo', 'Correo:') !!}
    {!! Form::text('ent_correo', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Ent Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_telefono', 'Telefono:') !!}
    {!! Form::number('ent_telefono', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Ent Sitio Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ent_sitio_web', 'Sitio Web:') !!}
    {!! Form::text('ent_sitio_web', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('nosotros.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
