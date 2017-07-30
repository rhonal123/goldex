<tr>
  <td><span>{{$movimiento->id}}</span></td>
  <td><span>{{$movimiento->negocio->nombre}}</span></td>
  <td><span>{{$movimiento->descripcion}}</span></td>
  <td><span>{{$movimiento->fecha}}</span></td>
  <td><span>{{$movimiento->tipo}}</span></td>
  <td><span>{{number_format( $movimiento->saldo, 2)}}</span></td>
  <td><span>{{$movimiento->referencia}}</span></td>
  <td align="right">
    <span class="dropdown" >
      <button 
          class="btn btn-default btn-xs" type="button" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="split-button">
        <li  role="menuitem">
          <a href="{{ route('movimientos.show', $movimiento->id) }}""> 
            <i class="glyphicon glyphicon-eye-open"></i> 
            Mostrar
          </a>
        </li>
        <li role="menuitem">
          <a href="{{ route('movimientos.edit', $movimiento->id) }}">
             <i class="glyphicon glyphicon-edit"></i>  Editar
          </a>
        </li>
        <li role="menuitem" (click)="onEliminar(abono)">
          <form action="{{ route('movimientos.destroy', $movimiento->id) }}" method="POST" style="display: inline;"    
            onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="eliminar"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
          </form>
        </li>
      </ul>
    </span>
  </td>
</tr>