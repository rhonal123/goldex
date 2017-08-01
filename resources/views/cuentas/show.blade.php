@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>
    <a href="{{ route('cuentas.show', $cuenta->id) }}""> 
     Cuenta #{{$cuenta->numero}}
    </a>
  </h3>

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
</div>
@endsection

@section('content')
  @include('layouts/flash')
  <div class="col-md-12">
  <div class="row" style="margin-bottom: 5px;">
    <div class="col-md-6">
      <a class="btn btn-default btn-sm" 
        href="{{ route('cuentas.transferencias',[$cuenta->id]) }}">         
        Transferencias
      </a>    
      <a class="btn btn-default btn-sm" href="{{ route('cuentas.abonos',[$cuenta->id]) }}">
        Abonos 
      </a>
      <a class="btn btn-default btn-sm" href="{{ route('cuentas.gastos',[$cuenta->id ]) }}">
        Gastos  
      </a>
    </div>
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

  <div class="form-group col-md-4">
    <blockquote>
      <label for="nome">SALDO</label> 
      <p class="form-control-static">{{number_format($cuenta->saldo,2)}}</p>
    </blockquote>
  </div>

</div>


@endsection

