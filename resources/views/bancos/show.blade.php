@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>Bancos #{{$banco->id}}</h3>
  <form action="{{ route('bancos.destroy', $banco->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('bancos.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" role="group" 
          href="{{ route('bancos.edit', $banco->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Editar</a>
        <button type="submit" class="btn btn-default">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </form>
</div>
</div>

@endsection

@section('content')
  @include('layouts/flash')
    <div class="col-md-12">
      <form action="#">
        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">ID</label> 
            <p class="form-control-static">{{$banco->id}}</p>
          </blockquote>
        </div>
        <div class="form-group col-md-4">
          <blockquote>
             <label for="nombre">NOMBRE</label>
             <p class="form-control-static">{{$banco->nombre}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-6">
          <blockquote>
             <label for="nombre">CUENTAS</label>
            <ul class="list-group">
            @foreach($banco->cuentas as $cuenta)
              <li class="list-group-item">{{$cuenta->numero}}</li>
            @endforeach
            </ul>
          </blockquote>
        </div>

      </form>
    </div>

@endsection