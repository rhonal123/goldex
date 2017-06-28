@extends('layouts.app')
 
@section('header')
  <div class="page-header clearfix">
    <h3>
      Movimientos
    </h3>
  </div>
<div class="row">
  <div class="col-md-6">
    <a class="btn btn-sm btn-success" href="{{ route('movimientos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('movimientos.reporte') }}">
      <i class="glyphicon glyphicon-print"></i>
    </a>
  </div>
  <div class="col-md-6" align="right">
    @include('movimientos/search')
  </div>
</div>
@endsection

@section('content')
  @include('layouts/flash')
  <div class="row">
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
                <th>Precio Gramos</th>
                <th>Saldo</th>
                <th>Estado</th>
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
  </div>

@endsection


 
