
@extends('layouts.app')

 

@section('header')
<div class="page-header">
  <h3>Bancos #{{$banco->id}}</h3>
</div>
   <a class="btn btn-link" href="{{ route('bancos.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>

@endsection


@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('bancos.update', $banco->id) }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group @if($errors->has('nombre')) has-error @endif">
          <label for="nombre-field" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-4">
            <input type="text" id="nombre-field" name="nombre" class="form-control" 
              value="{{ is_null(old("nombre")) ? $banco->nombre : old("nombre") }}"/>
            @if($errors->has("nombre"))
              <span class="help-block">{{ $errors->first("nombre") }}</span>
            @endif
         </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
 
