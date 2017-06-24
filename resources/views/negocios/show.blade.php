@extends('layouts.app')
@section('header')
<div class="page-header">
  <h3>Cuenta #{{$negocio->id}}</h3>
  <form action="{{ route('negocios.destroy', $negocio->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('negocios.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" role="group" 
          href="{{ route('negocios.edit', $negocio->id) }}">
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
            <p class="form-control-static">{{$negocio->id}}</p>
          </blockquote>
        </div>
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">NOMBRE</label> 
            <p class="form-control-static">{{$negocio->nombre}}</p>
          </blockquote>
        </div>

         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">RIF</label> 
            <p class="form-control-static">{{$negocio->rif}}</p>
          </blockquote>
        </div>
       
         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DESCRIPCION</label> 
            <p class="form-control-static">{{$negocio->descripcion}}</p>
          </blockquote>
        </div>

         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DIRECCION</label> 
            <p class="form-control-static">{{$negocio->direccion}}</p>
          </blockquote>
        </div>

         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">ENCARGADO</label> 
            <p class="form-control-static">{{$negocio->encargado}}</p>
          </blockquote>
        </div>

         <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">TELEFONO</label> 
            <p class="form-control-static">{{$negocio->telefono}}</p>
          </blockquote>
        </div>

 

      </form>
    </div>
  </div>

@endsection


