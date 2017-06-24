@extends('layouts.app')
@section('header')
<div class="page-header">
  <h3>Cuenta #{{$cuenta->id}}</h3>
  <form action="{{ route('cuentas.destroy', $cuenta->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('cuentas.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" role="group" 
          href="{{ route('cuentas.edit', $cuenta->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Editar</a>
        <button type="submit" class="btn btn-default">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </form>
  </div>
@endsection

@section('content')
  @include('layouts/flash')
  <div class="row">
    <div class="col-md-12">

      <form action="#">
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">ID</label> 
            <p class="form-control-static">{{$cuenta->id}}</p>
          </blockquote>
        </div>
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">CUENTA</label> 
            <p class="form-control-static">{{$cuenta->numero}}</p>
          </blockquote>
        </div>

         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">BANCO</label> 
            <p class="form-control-static">{{$cuenta->banco->nombre}}</p>
          </blockquote>
        </div>
       
      </form>
    </div>
  </div>

@endsection

