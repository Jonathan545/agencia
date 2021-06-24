<!-- Srv Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('srv_id', 'Servicio:') !!}
    {!! Form::select('srv_id',$servicios ,null, ['class' => 'form-control']) !!}
</div>

<!-- Prom Descuentos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_descuentos', 'Descuentos:') !!}
    {!! Form::text('prom_descuentos'  ,null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Prom Planes Prepago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_planes_prepago', 'Planes Prepago:') !!}
    {!! Form::text('prom_planes_prepago', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Prom Planes Pospago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_planes_pospago', ' Planes Pospago:') !!}
    {!! Form::text('prom_planes_pospago', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Prom Combos Bonos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_combos_bonos', 'Combos Bonos:') !!}
    {!! Form::text('prom_combos_bonos', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Prom Celulares Promocion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_celulares_promocion', 'Celulares Promocion:') !!}
    {!! Form::text('prom_celulares_promocion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('paquetesYPromociones.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
