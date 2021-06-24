<!-- Cli Id Field -->
<div class="form-group">
    {!! Form::label('cli_id', 'Cliente:') !!}
    <p>{{ $facturas->cli_id }}</p>
</div>

<!-- Ent Id Field -->
<div class="form-group">
    {!! Form::label('ent_id', 'Entidad:') !!}
    <p>{{ $facturas->ent_id }}</p>
</div>

<!-- Srv Id Field -->
<div class="form-group">
    {!! Form::label('srv_id', 'Servicio:') !!}
    <p>{{ $facturas->srv_id }}</p>
</div>

<!-- Fac Num Factura Field -->
<div class="form-group">
    {!! Form::label('fac_num_factura', 'Factura Nº:') !!}
    <p>{{ $facturas->fac_num_factura }}</p>
</div>

<!-- Fac Fecha Field -->
<div class="form-group">
    {!! Form::label('fac_fecha', 'Fecha:') !!}
    <p>{{ $facturas->fac_fecha }}</p>
</div>

