<div class="table-responsive">
  <table class="table table-condensed table-striped">
    <thead>
      <tr>
        <th>CODIGO</th>
        <th>PERMISO</th>
        <th class="text-right">OPTIONS</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($permisos as $clave => $valor)
   	@if (preg_match($codigo,$clave) == 1)
    <tr>
      <td>{{$clave}}</td>
      <td>{{$valor}}</td>
      <td align="right">
        <div>
          @if ($user->hasPermiso($clave))
           <button type="button" 
                    data-url="{{ route('users.permisos_change', ['id'=> $user->id, 'permiso_id' => $clave ]) }}"
                    data-estado="INACTIVAR"
                    data-value="{{ csrf_token() }}"
                    class="btn btn-primary permisos" > 
                    INACTIVAR?
                  </button>
          @else
          <button type="button" 
                    data-url="{{ route('users.permisos_change', ['id'=> $user->id, 'permiso_id' => $clave ]) }}"
                    data-estado="ACTIVAR"
                    data-value="{{ csrf_token() }}"
                    class="btn btn-primary permisos"> 
                    ACTIVAR?
                  </button>
          @endif 
        </div>
      </td>
    </tr>
		@endif
    @endforeach
    </tbody>
  </table>
</div>