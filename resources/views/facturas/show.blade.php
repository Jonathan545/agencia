<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

<div>    
    <div class="pd-2 mb-2 bg-dark text-white text-center">    
        <strong >Factura</strong><br>
    </div>
    <div align="center">
                    <font size="5" face="Homer Simpson UI"><b>SEYTU</b></font>
                    <font face=""> <sub><i>"Rapidez para tu vida"</i></sub></font>
                    </div>
</div>
<div style="margin-left: 500px;">
    <div style="margin-top: 10px; width: 200px;" class="bg-dark text-white">
        <strong>Factura Nº</strong>
        <strong style="margin-right: 100px;">Fecha</strong>
    </div>
    <div style="margin-top: 10px; width: 200px;">
        <strong>00000{{$facturas->fac_num_factura}} </strong>
        <strong style="margin-right: 100px;">{{$facturas->fac_fecha}} </strong>
    </div>
    
</div>
<strong class="pd-2 mb-2 bg-secondary text-center">{{$facturas->ent_nombre_entidad}} </strong><br>
<strong>Direccion: {{$facturas->ent_ubicacion}} </strong><br>
<strong>Telefono: {{$facturas->ent_telefono}} </strong><br>
<strong>Correo: {{$facturas->ent_correo}} </strong><br>
<strong>Sitio Web: {{$facturas->ent_sitio_web}} </strong><br>

<div>
    <div class="pd-2 mb-2 bg-dark text-white text-center" style="margin-top: 10px; width: 300px;text-align: center;">
        <strong>Facturar A</strong>
    </div>
    <div style="margin-top: 10px; width: 300px;">
        <strong>Cliente:</strong>
        <strong>{{$facturas->name}} </strong>
    </div>
    <div style="margin-top: 10px; width: 300px;">
        <strong>Cedula:</strong>
        <strong>{{$facturas->cli_cedula}} </strong>
    </div>
    <div style="margin-top: 10px; width: 300px;">
        <strong>Direccion:</strong>
        <strong>{{$facturas->cli_direccion}} </strong>
    </div>
    <div style="margin-top: 10px; width: 300px;">
        <strong>Telefono:</strong>
        <strong>{{$facturas->cli_telefono}} </strong>
    </div>
</div>

<table style="margin-top: 20px;width: 100%;">
    <tr class="pd-2 mb-2 bg-dark text-white text-center" >
        <th>Nº</th>
        <th>Cantidad</th>
        <th>Descripcion del Servicio</th>
        <th>Valor Inicial</th>
        <th>Total</th>
    </tr>
    <?php $subt=0; $total=0 ?>
    @foreach($detalle as $dt)
        <tr>
            <?php $subt=$subt+($dt->fadet_cant*$dt->fadet_valor)?>
            <td>{{$loop->iteration}} </td>
            <td>{{$dt->fadet_cant}} </td>
            <td>{{$dt->srv_tipo_servicio}} </td>
            <td style="text-align: right;">{{number_format($dt->fadet_valor,2)}}$ </td>
            <td style="text-align: right;">{{number_format($dt->fadet_valor*$dt->fadet_cant,2)}}$ </td>
        </tr>
    @endforeach
    <?php
$fac_descuento=$facturas->fac_descuento;
$iva=($subt-$fac_descuento)*0.12;
$total=($subt-$fac_descuento+$iva);
?>

<tfoot>
  <tr>
    <th colspan="3"></th>
    <th style="text-align:right;">Subtotal</th>
    <th style="text-align:right;">{{number_format($dt->fadet_valor*$dt->fadet_cant,2)}}</th>
  </tr>
  
<tr>  
    <th colspan="3"></th>
    <th style="text-align:right;">Descuento 
         <th style="text-align:right;">{{($facturas->fac_descuento)}}</th>
    </th>
</tr>
  <tr>  
    <th colspan="3"></th>
    <th style="text-align:right;">Iva  
         <th style="text-align:right;">{{($facturas->fac_iva)}}</th>
    </th>
</tr>
  <tr>
    <th colspan="3"></th>
    <th style="text-align:right;">Total</th>
    <th style="text-align:right;">{{number_format($total,2) }}</th>
  </tr>
</tfoot>

</table>