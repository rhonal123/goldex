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
      <a class="btn btn-primary btn-sm" 
        href="{{ route('cuentas.transferencias',[$cuenta->id, 'desde' => $desde, 'hasta' => $hasta ]) }}">         
        Transferencias
      </a>    
      <a class="btn btn-default btn-sm" href="{{ route('cuentas.abonos',[$cuenta->id, 'desde' => $desde, 'hasta' => $hasta ]) }}">
        Abonos 
      </a>
      <a class="btn btn-default btn-sm" href="{{ route('cuentas.gastos',[$cuenta->id, 'desde' => $desde, 'hasta' => $hasta ]) }}">
        Gastos  
      </a>
    </div>
    <div class="col-md-6" align="right">
       <form action="{{ route('cuentas.transferencias', $cuenta->id) }}" 
        method="GET" 
        class="form-inline">
       <div class="form-group">
         <div class="form-group">
            <label for="search_desde">Desde</label>
            <input id="search_desde"
              name="desde" type="text" 
              class="form-control input-sm"
              value="{{ Request::get('desde') }}">
          </div>
         <div class="form-group">
            <label for="search_hasta">Hasta</label>
            <input id="search_hasta" 
              name="hasta" type="text" 
              class="form-control input-sm" 
              value="{{ Request::get('hasta') }}">
          </div>
            <button type="submit" class="btn  btn-default">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
        </div>
      </form> 
    </div>
  </div>
  <div class="form-group col-md-12 well well-sm">
    @if($transferencias->count())
      <div class="table-responsive">
        <table class="table table-condensed">
          <thead>
            <tr>
               <th>Descripcion</th>
              <th>Fecha</span></th>
              <th>Tipo</span></th>
              <th>Saldo</span></th>
           </tr>
          </thead>
          <tbody>
            @each('cuentas.transferencia', $transferencias, 'movimiento')
          </tbody>
        </table>
        <div class="col-md-4" align="right">
          <p><b>Gasto : </b>{{number_format($totalTransferencia,2)}}</p> 
          <p><b>Abono : </b>{{number_format($totalAbono,2)}}</p>
          <p><b>Transferencia : </b>{{number_format($totalGasto,2)}}</p>
        </div>
        <div class="col-md-8" align="right">
          <div class="paginador">
            {{ $transferencias->appends(Request::only('desde','hasta'))->links() }}
          </div>
        </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif
    </div>
</div>

<script type="text/javascript">
  $(window).on('load', function() {
    $('#search_desde').datepicker({format: "yyyy/mm/dd",language: 'es'});
    $('#search_hasta').datepicker({format: "yyyy/mm/dd",language: 'es'})
  });
</script>
@endsection