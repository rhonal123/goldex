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

<div class="col-md-12">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">

    @foreach (array('Banco','Cuenta','NegocioSocio','Abono','Transferencias','Gastos') as $valor)
    <li role="presentation">
      <a href="#{{$valor}}" aria-controls="{{$valor}}" role="tab" data-toggle="tab">{{$valor}}</a>
    </li>
    @endforeach
  </ul>


  <div class="tab-content">
  @foreach (array('Banco'=> '/A/', 'Cuenta' => '/B/',
      'NegocioSocio' =>'/C/', 'Abono' => '/F/',
      'Transferencias' => '/I/','Gastos' => '/J/') as $clave => $valor)
    <div role="tabpanel" class="tab-pane" id="{{$clave}}">
        @include('users.listado_permisos', ['user' => $user, 'permisos' => $permisos, 'codigo' => $valor])
    </div>
  @endforeach
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

