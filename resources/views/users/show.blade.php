@extends('layouts.app')
@section('header')
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
@endsection

@section('content')
  @include('layouts/flash')
  <div class="row">
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
              <th>ESTADO</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($permisos as $clave => $valor)
            <tr>
              <td>{{$clave}}</td>
              <td>{{$valor}}</td>
              <td>{{ $user->hasPermiso($clave)? "ACTIVO": "INACTIVO" }}</td>
              <td align="right">
                <div>
                @if ($user->hasPermiso($clave))
                  <form action="{{ route('users.permisos_rm', ['id'=> $user->id, 'permiso_id' => $clave ]) }}" 
                    method="POST" style="display: inline;"    
                    onsubmit="if(confirm('Quites Inactivar este permiso?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="eliminar">
                    <i class="glyphicon glyphicon-minus"></i>INACTIVAR
                  </button>
                  </form>
                @else
                  <form action="{{ route('users.permisos_add', ['id'=> $user->id, 'permiso_id' => $clave ]) }}"  
                    method="POST" style="display: inline;"    
                    onsubmit="if(confirm('Quires Activar este Permiso?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="PATCH">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="eliminar">
                    <i class="glyphicon glyphicon-plus"></i>ACTIVAR
                  </button>
                  </form>
                @endif 
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>

 
    </div>
  </div>

@endsection

