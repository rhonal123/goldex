<tr>
  <td>{{Welcome::clasificacion($movimiento)}}</td>
  <td><span>{{$movimiento->negocio->nombre}}</span></td>
  <td><span>{{$movimiento->descripcion}}</span></td>
  <td><span>{{$movimiento->fecha}}</span></td>
  <td><span>{{$movimiento->tipo}}</span></td>
  <td><span>{{number_format( $movimiento->saldo, 2)}}</span></td>    
</tr>