<!-- Trab Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_id', 'Trabajadores:') !!}
    {!! Form::select('trab_id',$trabajadores ,null, ['class' => 'form-control']) !!}
</div>

<!-- Srv Tipo Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('srv_tipo_servicio', 'Tipo Servicio:') !!}
    {!! Form::select('srv_tipo_servicio',['Internet'=>'Internet','TV'=>'TV','SMS'=>'SMS','Telefono'=>'Telefono','Planes Pos-Pago'=>'Planes Pos-Pago','Planes Pre-Pago'=>'Planes Pre-Pago'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servicios.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
