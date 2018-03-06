@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>GASTO #{{$gasto->id}}</h3>
  <form action="{{ route('gastos.destroy', $gasto->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('gastos.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" 
          href="{{ route('gastos.create') }}">
        <i class="glyphicon glyphicon-plus"></i>
        Nuevo
        </a>
        <a class="btn btn-default" role="group" 
          href="{{ route('gastos.edit', $gasto->id) }}">
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
            <label for="nome">FECHA</label> 
            <p class="form-control-static">{{$gasto->fecha->format('Y-m-d h:i a')}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DESCRIPCION</label> 
            <p class="form-control-static">{{$gasto->descripcion}}</p>
          </blockquote>
        </div>

       @if ($gasto->negocio != null )
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">NEGOCIO</label> 
            <p class="form-control-static">{{$gasto->negocio->nombre }}</p>
          </blockquote>
        </div>
        @endif 
        
        @if ($gasto->tipo == "TRANSFERENCIA")
 
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">CUENTA</label> 
            <p class="form-control-static">{{$gasto->cuenta->numero}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">REFERENCIA</label> 
            <p class="form-control-static">{{$gasto->referencia}}</p>
          </blockquote>
        </div>
        @endif      

       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">SALDO</label> 
            <p class="form-control-static">{{ number_format( $gasto->saldo, 2) }} Bs.</p>
          </blockquote>
        </div>

      </form>
    </div>


@endsection


