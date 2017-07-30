@extends('layouts.app')
 
@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      Transferencias
    </h3>
  </div>
    <a class="btn btn-sm btn-success" href="{{ route('movimientos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('movimientos.reporte') }}">
      <i class="glyphicon glyphicon-print"></i>
    </a>
    @include('movimientos/search')
</div>
@endsection

@section('content')
  @include('layouts/flash')

    <div class="col-md-12">
      @if($movimientos->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
                <th>Id</th>
                <th>Negocio o Socio</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Saldo</th>
                <th>Referencia</th>
                <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('movimientos.movimiento', $movimientos, 'movimiento')
          </tbody>
        </table>
        <div class="paginador">
          {{ $movimientos->appends(Request::only('descripcion','ordenar','ordenarTipo'))->links() }}
        </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>


@endsection


 
