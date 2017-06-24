@extends('layouts.app')

@section('header')
  <div class="page-header clearfix">
    <h3>
      Bancos
    </h3>
  </div>
      <a class="btn btn-success" href="{{ route('bancos.create') }}">
      <i class="glyphicon glyphicon-plus"></i></a>

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if($bancos->count())
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
        {!! $bancos->render() !!}
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      @endif
    </div>
  </div>
@endsection