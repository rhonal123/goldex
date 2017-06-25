@extends('layouts.app')

@section('header')
  <div class="page-header clearfix">
    <h3>
      Bancos 
    </h3>
  </div>
  <div class="col-md-6">
    <a class="btn btn-success" href="{{ route('bancos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
  </div>
  <div class="col-md-6">
    @include('layouts/search')
  </div>
@endsection
@section('content')
  @include('layouts/flash')
  <div class="row">
    <div class="col-md-12">
      @if($bancos->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('bancos.banco', $bancos, 'banco')
          </tbody>
        </table>
        <div class="paginador">
          {{ $bancos->appends(Request::only('search'))->links() }}
        </div>
      </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      @endif
    </div>
  </div>
@endsection





