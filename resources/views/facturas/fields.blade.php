<?php 

if(isset($facturas)){
  $descuento=$facturas->fac_descuento;
  $iva=$facturas->fac_iva;
  $fac_descuento=$facturas->fac_descuento;
  $fac_iva=$facturas->fac_iva;
}else{
  $descuento=0;
  $iva=0;
  $fac_descuento=0;
  $fac_iva=0;
}

 ?>
<style>
  .table{
    border-collapse:collapse;
  }
</style>
@section('scripts')
<script>

$(()=>{ ///funcion que indica que se cargo la pagina
  calculos();
})
$(document).on("input","#fac_descuento",function(){
  calculos();
})
$(document).on("click","#fac_iva",function(){
  calculos();
  // if ($ (this).prop('checked') ){

  // }else{
    
  // }

})
function calculos(){
  const descuento=$("#fac_descuento").val();
  const subt=$("#subtotal").html();
  let iva=0;
  if( $("#fac_iva").prop('checked') ){
    iva=(subt-descuento)*0.12;
  }
  $("#iva_valor").html(iva.toFixed(2));
  const total=(subt-descuento+iva);
  $("#total").html(total.toFixed(2));
}

</script>
@endsection




<table border="0" width="80%">

  <tr>
    <th colspan="10" class="text-center bg-primary">DATOS PRINCIPALES</th>
  </tr>
  <tr>
    <td>Cliente:</td>
    <td>{!! Form::select('cli_id',$clientes ,null, ['class' => 'form-control']) !!}</td>
    <td>Entidad:</td>
    <td>{!! Form::select('ent_id',$entidad ,null, ['class' => 'form-control']) !!}</td>
  </tr>
<tr> 
    <td>Servicio:</td>
    <td>{!! Form::select('srv_id',$servicios ,null, ['class' => 'form-control']) !!}</td>
    <td>Factura Nº:</td>
    <td>{!! Form::text('fac_num_factura',$facNo, ['class' => 'form-control']) !!}</td>
</tr>

 <tr>
    <th colspan="10" class="text-center bg-primary">DETALLE DE LA FACTURA</th>
  </tr>

<tr>    
 <!-- <td>Fac_id</td> -->
 <!-- <td> {!! Form::number('fac_id', null, ['class' => 'form-control']) !!}</td> -->
 <td>Cantidad</td>
 <td>Descripcion del Servicio</td>
 <td>Valor inicial</td>
 <td style="width: 200px; text-align:center;">Valor servicio</td>

</tr>
<tr>  
 <td>
  {!! Form::number('fadet_cant', null, ['class' => 'form-control']) !!}
</td>
<td>
  {!! Form::select('srv_id',$servicios ,null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</td>
<td>
  {!! Form::number('fadet_valor', null, ['class' => 'form-control']) !!}
</td>

<td>
  <button class="btn btn-primary fa fa-floppy-o"></button>
</td>

</tr>

  
<?php $subt=0;$total=0?>
@isset($facturaDetalles)
  @forelse($facturaDetalles as $fd)

   <?php $subt=$subt+ ($fd->fadet_valor*$fd->fadet_cant) ?>
  
    <tr>
    <td>{{$fd->fadet_cant}}</td>
    <td>{{$fd->srv_tipo_servicio}}</td>
    <!-- <td>{{$fd->fadet_valor}}</td> -->
    <td align="right">{{number_format( $fd->fadet_valor,2) }} $</td>
    <td align="right">{{number_format( ($fd->fadet_valor*$fd->fadet_cant),2) }} $</td>
  <td>
      <a href="{{route('facturaDetalles.destroy',[$fd->fadet_id])}}" class="btn btn-ghost-danger btn-sm"> <i class="fa fa-trash"></i> </a>
    </td>  
    
  
  </tr>
  @empty
    <tr><th colspan="4">No existen datos</th> </tr>
  @endforelse
  @endisset
  <?php
$total=($subt-$descuento+$iva);

  ?>

<tfoot>
  <tr>
    <th colspan="2"></th>
    <th style="text-align:right;">Subtotal</th>
    <th style="text-align:right;" id="subtotal">{{ number_format($subt,2) }} </th>
  </tr>
  <tr>
    <th colspan="2"></th>
    <th style="text-align:right;">Descuento
    </th>
    <th style="text-align:right;">
      <input type="text" name="fac_descuento" id="fac_descuento" value="{{$fac_descuento}}">
    </th>  
  </tr>
  <tr>
    <th colspan="2"></th>
    <th style="text-align:right;">Iva
      @if($fac_iva==1)
        <input type="checkbox" checked="true" name="fac_iva" id="fac_iva">
      @else
        <input type="checkbox" name="fac_iva" id="fac_iva">
      @endif
    </th>
    <th style="text-align:right;" id="iva_valor">{{number_format($iva,2)}} </th>    
  </tr>
  <tr>
    <th colspan="2"></th>
    <th style="text-align:right;">Total</th>
    <th style="text-align:right;" id="total">{{ number_format($total,2) }} </th>
  </tr>
</tfoot>

</table>
<div class="row">
  <button class="btn btn-primary">Finalizar</button>
</div>





