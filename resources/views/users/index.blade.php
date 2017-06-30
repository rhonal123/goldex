
@extends('layouts.app')
 
@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      Usuario
    </h3>
  </div>
  <a class="btn btn-success btn-sm" href="{{ route('users.create') }}">
    <i class="glyphicon glyphicon-plus"></i>
  </a>
  @include('layouts/search')
</div>
@endsection


@section('content')
  @include('layouts/flash')
  
    <div class="col-md-12">
      @if($users->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>TIPO</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('users.user', $users, 'user')
          </tbody>
        </table>
        <div class="paginador">
          {{ $users->appends(Request::only('search'))->links() }}
        </div>
        
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>
 

@endsection


 
