@extends('layouts.app')
@section('header')
<div class="page-header">
  <h3>Movimiento #{{$movimiento->id}}</h3>
  <form action="{{ route('movimientos.destroy', $movimiento->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('movimientos.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" role="group" 
          href="{{ route('movimientos.edit', $movimiento->id) }}">
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
            <p class="form-control-static">{{$movimiento->id}}</p>
          </blockquote>
        </div>

       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">TIPO</label> 
            <p class="form-control-static">{{$movimiento->tipo}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">FECHA</label> 
            <p class="form-control-static">{{$movimiento->fecha}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DESCRIPCION</label> 
            <p class="form-control-static">{{$movimiento->descripcion}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">NEGOCIO</label> 
            <p class="form-control-static">{{$movimiento->negocio->nombre}}</p>
          </blockquote>
        </div>
 

        @if ($movimiento->tipo == "TRANSFERENCIA")
 
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">CUENTA</label> 
            <p class="form-control-static">{{$movimiento->cuenta->numero}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">REFERENCIA</label> 
            <p class="form-control-static">{{$movimiento->referencia}}</p>
          </blockquote>
        </div>

        @else 

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">COMISION</label> 
            <p class="form-control-static">{{$movimiento->comision}}</p>
          </blockquote>
        </div>

        @endif      


       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">SALDO</label> 
            <p class="form-control-static">{{ number_format( $movimiento->saldo, 2) }}</p>
          </blockquote>
        </div>
 
 

      </form>
    </div>
  </div>

@endsection


