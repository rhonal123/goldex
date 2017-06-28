@extends('layouts.app')
 
@section('header')
  <div class="page-header clearfix">
    <h3>
      Cuentas
    </h3>
  </div>

  <div class="col-md-6">
    <a class="btn btn-success" href="{{ route('cuentas.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
  </div>
  <div class="col-md-6" align="right">
    @include('layouts/search')
  </div>
@endsection

@section('content')
  @include('layouts/flash')
  <div class="row">
    <div class="col-md-12">
      @if($cuentas->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>CUENTA</th>
            <th>BANCO</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('cuentas.cuenta', $cuentas, 'cuenta')
          </tbody>
        </table>
        <div class="paginador">
          {{ $cuentas->appends(Request::only('search'))->links() }}
        </div>
        
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>
  </div>

@endsection


 
