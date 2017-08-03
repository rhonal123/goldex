<tr>
  <td><span>{{$abono->id}}</span></td>
  <td><span>{{$abono->cuenta}}</span></td>
  <td><span>{{$abono->descripcion}}</span></td>
  <td><span>{{$abono->referencia}}</span></td>
  <td><span>{{$abono->fecha}}</span></td>
  <td><span>{{$abono->tipo}}</span></td>
  <td><span>{{number_format( $abono->saldo, 2)}}</span></td>
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
          <a href="{{ route('abonos.show', $abono->id) }}""> 
            <i class="glyphicon glyphicon-eye-open"></i> 
            Mostrar
          </a>
        </li>
        <li role="menuitem">
          <a href="{{ route('abonos.edit', $abono->id) }}">
             <i class="glyphicon glyphicon-edit"></i>  Editar
          </a>
        </li>
        <li role="menuitem" (click)="onEliminar(abono)">
          <form action="{{ route('abonos.destroy', $abono->id) }}" method="POST" style="display: inline;"    
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