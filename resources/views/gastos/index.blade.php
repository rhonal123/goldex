@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      Gatos
    </h3>
  </div>
    <a class="btn btn-sm btn-success" href="{{ route('gastos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('gastos.reporte') }}">
      <i class="glyphicon glyphicon-print"></i>
    </a>
    @include('gastos/search')
</div>
@endsection

@section('content')
  @include('layouts/flash')

    <div class="col-md-12">
      @if($gastos->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Saldo</th>
                <th>Estado</th>
                <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('gastos.movimiento', $gastos, 'gasto')
          </tbody>
        </table>
        <div class="paginador">
          {{ $gastos->appends(Request::only('descripcion','ordenar','ordenarTipo'))->links() }}
        </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>


@endsection


 
