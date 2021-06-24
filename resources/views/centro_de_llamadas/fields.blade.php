<!-- Cli Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_id', 'Clientes:') !!}
    {!! Form::select('cli_id',$clientes ,null, ['class' => 'form-control']) !!}
</div>

<!-- Prom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prom_id', 'Promociones:') !!}
    {!! Form::select('prom_id',$promo ,null, ['class' => 'form-control']) !!}
</div>

<!-- Trab Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trab_id', 'Trabajador:') !!}
    {!! Form::select('trab_id',$trabajadores ,null, ['class' => 'form-control']) !!}
</div>

<!-- Call Ayuda Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_ayuda_cliente', 'Ayuda Cliente:') !!}
    {!! Form::text('call_ayuda_cliente', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Call Contrato Servicios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_contrato_servicios', 'Contrato Servicios:') !!}
    {!! Form::text('call_contrato_servicios', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Call Servicios Tecnicos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_servicios_tecnicos', 'Servicios Tecnicos:') !!}
    {!! Form::text('call_servicios_tecnicos', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Call Soluciones Problemas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_soluciones_problemas', 'Soluciones Problemas:') !!}
    {!! Form::text('call_soluciones_problemas', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Call Puntos Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_puntos_pago', 'Puntos Pago:') !!}
    {!! Form::text('call_puntos_pago', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('centroDeLlamadas.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
