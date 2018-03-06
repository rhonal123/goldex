@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>Abono #{{$abono->id}}</h3>
  <form action="{{ route('abonos.destroy', $abono->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('abonos.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a  class="btn btn-default"
           href="{{ route('abonos.create') }}">
              <i class="glyphicon glyphicon-plus"></i>
              Nuevo
        </a>
        <a class="btn btn-default" role="group" 
          href="{{ route('abonos.edit', $abono->id) }}">
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
            <label for="nome">TIPO</label> 
            <p class="form-control-static">{{$abono->tipo}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">FECHA</label> 
            <p class="form-control-static">{{$abono->fecha->format('Y-m-d h:i a') }}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DESCRIPCION</label> 
            <p class="form-control-static">{{$abono->descripcion}}</p>
          </blockquote>
        </div>

        @if ($abono->tipo == "TRANSFERENCIA")
 
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">CUENTA</label> 
            <p class="form-control-static">{{$abono->cuenta->numero}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">REFERENCIA</label> 
            <p class="form-control-static">{{$abono->referencia}}</p>
          </blockquote>
        </div>
        @endif      

        <div class="form-group col-md-4">
            <blockquote>
              <label for="nome">SALDO</label> 
              <p class="form-control-static">{{ number_format( $abono->saldo, 2) }} Bs.</p>
            </blockquote>
        </div>

        @if($abono->transferencia)
        <div class="form-group col-md-4">
            <blockquote>
              <label for="nome">Abono Asociado a una Devolucion </label> 
              <p>
                <a role="group" class="btn btn-default btn-sm" href="{{ route('movimientos.show', $abono->transferencia->transferencia_id) }}">
                  @if($abono->transferencia->transferencia->cuenta)
                   {{ $abono->transferencia->transferencia->cuenta->numero }}
                  @endif 
                  -- 
                  @if($abono->transferencia->transferencia->negocio)
                   {{ $abono->transferencia->transferencia->negocio->nombre }}
                  @endif 
                </a>                
              </p>  
            </blockquote>
        </div>
        @endif 
      </form>

    </div>


@endsection


