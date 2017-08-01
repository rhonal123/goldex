@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>user #{{$user->id}}</h3>
  <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('users.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" role="group" 
          href="{{ route('users.edit', $user->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Editar</a>

        <a class="btn btn-default" role="group" 
          href="{{ route('users.password', $user->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Cambiar Contraseña</a>

        <button type="submit" class="btn btn-default">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('content')
  @include('layouts/flash')
 
    <div class="col-md-12">
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">ID</label> 
            <p class="form-control-static">{{$user->id}}</p>
          </blockquote>
        </div>
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">NAME</label> 
            <p class="form-control-static">{{$user->name}}</p>
          </blockquote>
        </div>
 
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">EMAIL</label> 
            <p class="form-control-static">{{$user->email}}</p>
          </blockquote>
        </div>
 
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">TIPO</label> 
            <p class="form-control-static">{{ ($user->administrador ? "ADMINISTRADOR" : "COMUN") }}</p>
          </blockquote>
        </div>

    <div class="col-md-12">
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
            <tr>
              <td>{{$clave}}</td>
              <td>{{$valor}}</td>
              <td align="right">
                <div>
                @if ($user->hasPermiso($clave))
                  <button type="button" 
                    data-url="{{ route('users.permisos', ['id'=> $user->id, 'permiso_id' => $clave ]) }}"
                    data-estado="INACTIVAR"
                    data-value="{{ csrf_token() }}"
                    class="btn btn-primary permisos" > 
                    INACTIVAR?
                  </button>
                @else
                  <button type="button" 
                    data-url="{{ route('users.permisos', ['id'=> $user->id, 'permiso_id' => $clave ]) }}"
                    data-estado="ACTIVAR"
                    data-value="{{ csrf_token() }}"
                    class="btn btn-primary permisos"> 
                    ACTIVAR?
                  </button>
                @endif 
                </button>

                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
  </div>
 



<script>


$(document).on('click','.permisos',function(){
  var url     =  $(this).data('url');
  var estado  =  $(this).data('estado');
  var value   =  $(this).data('value');
  var btn     = $(this).button('procesando');
  var _this = this;
  var request = $.ajax({
    url: url,
    method: "POST",
    data: {
      _method: "PATCH",
      _token : value,
      tipo: estado
    },
    dataType: "json",
    beforeSend: function(){
      $(_this).empty().append("procesando...");
    }
  });
  request.done(function( ) {
    ///btn.button('reset');
    if(estado === "ACTIVAR") {
      $(_this).data('estado',"INACTIVAR");
      $(_this).empty().append("INACTIVAR?");
    }
    else{
      $(_this).data('estado',"ACTIVAR");
      $(_this).empty().append("ACTIVAR?");
    }
  });

});

</script>

@endsection

