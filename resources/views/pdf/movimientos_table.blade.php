<table class="tablecontenido" cellpadding="4"  >
         <thead  border="1">
          <tr valign="bottom"  align="center">
            <th style="width: 3%"   border="1"><strong>Id</strong></th>
            <th style="width: 32%"   border="1"><strong>Descripcion</strong></th>
            <th style="width: 15%"  border="1"><strong>Negocio o Socio</strong></th>
            <th style="width: 15%"  border="1"><strong>Cuenta</strong></th>
            <th style="width: 12%"  border="1"><strong>Referencia</strong></th>
            <th style="width: 8%"  border="1"><strong>Fecha</strong></th>
            <th style="width: 15%"  border="1"><strong>Monto</strong></th>

          </tr>
        </thead>
        <tbody >
          @foreach ($movimientos as $movimiento)
            <tr valign="bottom" align="center">
            <td style="width: 3%;"  border="1">{{$movimiento->id}}</td>
            <td style="width: 32%;"  border="1">{{$movimiento->descripcion}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->negocio->nombre}}</td>
            <td style="width: 15%;" border="1">{{$movimiento->cuenta->numero}}</td>
            <td style="width: 12%;" border="1">{{$movimiento->referencia}}</td>
            <td style="width: 8%;" border="1">{{$movimiento->fecha}}</td>
            <td style="width: 15%;" border="1">{{number_format($movimiento->saldo,2)}}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5"></td>
            <td align="right" border="1"><strong>TOTAL :</strong></td>
             
          </tr>
        </tfoot>
      </table>