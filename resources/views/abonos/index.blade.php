@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      ABONOS
    </h3>
  </div>

    <a class="btn btn-sm btn-success" href="{{ route('abonos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('abonos.reporte') }}">
      <i class="glyphicon glyphicon-print"></i>
    </a>
    @include('abonos/search')
</div>
@endsection

@section('content')
  @include('layouts/flash')

    <div class="col-md-12">
      @if($abonos->count())
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
                <th>Estado</th>
                <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('abonos.movimiento', $abonos, 'abono')
          </tbody>
        </table>
        <div class="paginador">
          {{ $abonos->appends(Request::only('descripcion','ordenar','ordenarTipo'))->links() }}
        </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>


@endsection


 
