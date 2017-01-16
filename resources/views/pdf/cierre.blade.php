<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cierre</title> 
  </head>
  <body>
    <div class="divcabezera">
    <table class="cabezera">
      <thead>
        <tr>
          <th style="width: 25%;"><h3 > Goldex</h3></th>
          <th style="width: 50%;"><h3> Cierre. </h3></th>
          <th style="width: 15%;" align="right">Fecha {{$cierre->fecha}}</th>
          <th style="width: 10%;" align="right">Estado {{$cierre->estado}}</th>
        </tr>
        @if ($cierre->negocio)
        <tr>
          <th>
            <p><strong>Negocio o socio :</strong>{{$cierre->negocio->nombre}} {{$cierre->negocio->rif}}</p>
          </th>
        </tr>
        @endif
      </thead>
    </table>
    </div>
    <h3>Prestamos Efectivo </h3>
    <table class="tablecontenido" cellpadding="4">
         <thead  border="1">
          <tr valign="bottom"  align="center">
            <th style="width: 10%"   border="1"><strong>Id</strong></th>
            <th style="width: 35%"   border="1"><strong>Descripcion</strong></th>
            <th style="width: 15%"  border="1"><strong>Fecha</strong></th>
            <th style="width: 10%"   border="1"><strong>%</strong></th>
            <th style="width: 15%"  border="1"><strong>Monto</strong></th>
            <th style="width: 15%"  border="1"><strong>Total</strong></th>
          </tr>
        </thead>
        <tbody >
          @foreach ($cierre->movimientos as $movimiento)
          	@if ($movimiento->tipo == 'EFECTIVO')
            <tr valign="bottom" align="center">
            <td style="width: 10%;"  border="1">{{$movimiento->id}}</td>
            <td style="width: 35%;"  border="1">{{$movimiento->descripcion}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->fecha}}</td>
            <td style="width: 10%;"  border="1" >{{$movimiento->comision}}</td>
            <td style="width: 15%;" border="1">{{number_format($movimiento->monto,2)}}</td>
            <td style="width: 15%;" border="1">{{number_format($movimiento->saldo,2)}}</td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>

    <h3>Prestamos Transferencias </h3>
    <table class="tablecontenido" cellpadding="4">
         <thead  border="1">
          <tr valign="bottom"  align="center">
            <th style="width: 10%"   border="1"><strong>Id</strong></th>
            <th style="width: 35%"   border="1"><strong>Descripcion</strong></th>
            <th style="width: 15%"  border="1"><strong>Cuenta</strong></th>
            <th style="width: 15%"  border="1"><strong>Referencia</strong></th>
            <th style="width: 15%"  border="1"><strong>Fecha</strong></th>
            <th style="width: 10%"  border="1"><strong>Monto</strong></th>

          </tr>
        </thead>
        <tbody >
          @foreach ($cierre->movimientos as $movimiento)
          	@if ($movimiento->tipo != 'EFECTIVO')
            <tr valign="bottom" align="center">
            <td style="width: 10%;"  border="1">{{$movimiento->id}}</td>
            <td style="width: 35%;"  border="1">{{$movimiento->descripcion}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->cuenta->numero}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->referencia}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->fecha}}</td>
            <td style="width: 10%;" border="1">{{number_format($movimiento->saldo,2)}}</td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>



    <h3>Abonos</h3>
    <table class="tablecontenido" cellpadding="4">
         <thead  border="1">
          <tr valign="bottom"  align="center">
            <th style="width: 10%"  border="1"><strong>Id</strong></th>
            <th style="width: 30%"  border="1"><strong>Tipo</strong></th>
            <th style="width: 20%"  border="1"><strong>Cantidad</strong></th>
            <th style="width: 15%"  border="1"><strong>Tasa</strong></th>
            <th style="width: 15%"  border="1"><strong>Monto</strong></th>
            <th style="width: 10%"  border="1"><strong>Fecha</strong></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cierre->abonos as $abono)
          	<tr valign="bottom" align="center">
	            <td style="width: 10%;"  border="1">{{$abono->id}}</td>
	            <td style="width: 30%;"  border="1">{{$abono->tipo->tipo}}</td>
	            <td style="width: 20%;"  border="1">{{number_format($abono->cantidad,2)}}</td>
	            <td style="width: 15%;"  border="1">{{number_format($abono->tasa,2)}}</td>
	            <td style="width: 15%;"  border="1">{{number_format($abono->monto,2)}}</td>
	            <td style="width: 10%;"  border="1">{{$abono->fecha}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

		<h3>Totales</h3>
    <table class="tablecontenido" cellpadding="4">
        <tbody>
          	<tr valign="bottom" align="center">
	            <td style="width: 10%;"  border="1">Abono</td>
	            <td style="width: 30%;"  border="1">{{number_format($cierre->abono,2)}} Bs</td>
            </tr>
          	<tr valign="bottom" align="center">
	            <td style="width: 10%;"  border="1">Prestado</td>
	            <td style="width: 30%;"  border="1">{{number_format($cierre->prestamo,2)}} Bs</td>
            </tr>
          	<tr valign="bottom" align="center">
	            <td style="width: 10%;"  border="1">Saldo</td>
	            <td style="width: 30%;"  border="1">{{number_format($cierre->saldo,2)}} Bs</td>
            </tr>
        </tbody>
      </table>

  </body>
</html>
 