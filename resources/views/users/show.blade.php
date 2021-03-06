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
          href="{{ route('users.permisos', $user->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Permisos</a>

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

@endsection

