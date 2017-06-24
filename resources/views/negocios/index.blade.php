@extends('layouts.app')
 
@section('header')
  <div class="page-header clearfix">
    <h3>
      Negocio
    </h3>
  </div>
      <a class="btn btn-success" href="{{ route('negocios.create') }}">
      <i class="glyphicon glyphicon-plus"></i></a>
@endsection


@section('content')
  @include('layouts/flash')
  <div class="row">
    <div class="col-md-12">
      @if($negocios->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th>RIF</th>
              <th>ENCARGADO</th>
              <th>TELEFONO</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('negocios.negocio', $negocios, 'negocio')
          </tbody>
        </table>
        <div class="paginador">
          {!! $negocios->render() !!}
        </div>
        
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>
  </div>

@endsection


 

