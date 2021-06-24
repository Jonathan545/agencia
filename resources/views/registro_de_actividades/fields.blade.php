<!-- Cli Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_id', 'Cliente:') !!}
    {!! Form::select('cli_id', $clientes,null, ['class' => 'form-control']) !!}
</div>

<!-- Srv Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('srv_id', 'Servicios:') !!}
    {!! Form::select('srv_id',$servicios ,null, ['class' => 'form-control']) !!}
</div>

<!-- Rgt Tipo Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rgt_tipo_contrato', 'Tipo Contrato:') !!}
    {!! Form::text('rgt_tipo_contrato', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Rgt Servicio Contratado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rgt_servicio_contratado', 'Servicio Contratado:') !!}
    {!! Form::text('rgt_servicio_contratado', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Rgt Inicio Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rgt_inicio_contrato', 'Inicio Contrato:') !!}
    {!! Form::text('rgt_inicio_contrato', null, ['class' => 'form-control','id'=>'rgt_inicio_contrato','required'=>'required']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#rgt_inicio_contrato').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Rgt Fecha Facturar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rgt_fecha_facturar', 'Fecha Facturar:') !!}
    {!! Form::text('rgt_fecha_facturar', null, ['class' => 'form-control','id'=>'rgt_fecha_facturar','required'=>'required']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#rgt_fecha_facturar').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('registroDeActividades.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
