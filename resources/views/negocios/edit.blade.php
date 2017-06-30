@extends('layouts.app')

@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>Cuentas #{{$negocio->id}}</h3>
</div>
   <a class="btn btn-link" href="{{ route('negocios.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a><div class="col-md-12">

</div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('negocios.update', $negocio->id) }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group @if($errors->has('nombre')) has-error @endif">
          <label for="nombre-field" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-4">
            <input type="text" id="nombre-field" name="nombre" class="form-control" 
              value="{{ is_null(old("nombre")) ? $negocio->nombre : old("nombre") }}"/>
            @if($errors->has("nombre"))
              <span class="help-block">{{ $errors->first("nombre") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('rif')) has-error @endif">
          <label for="rif-field" class="col-sm-2 control-label">Rif</label>
          <div class="col-sm-4">
            <input type="text" id="rif-field" name="rif" class="form-control" 
              value="{{ is_null(old("rif")) ? $negocio->rif : old("rif") }}"/>
            @if($errors->has("rif"))
              <span class="help-block">{{ $errors->first("rif") }}</span>
            @endif
         </div>
        </div>
 
        <div class="form-group @if($errors->has('encargado')) has-error @endif">
          <label for="encargado-field" class="col-sm-2 control-label">Encargado</label>
          <div class="col-sm-4">
            <input type="text" id="encargado-field" name="encargado" class="form-control" 
              value="{{ is_null(old("encargado")) ? $negocio->encargado : old("encargado") }}"/>
            @if($errors->has("encargado"))
              <span class="help-block">{{ $errors->first("encargado") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('telefono')) has-error @endif">
          <label for="telefono-field" class="col-sm-2 control-label">Encargado</label>
          <div class="col-sm-4">
            <input type="text" id="telefono-field" name="telefono" class="form-control" 
              value="{{ is_null(old("telefono")) ? $negocio->telefono : old("telefono") }}"/>
            @if($errors->has("telefono"))
              <span class="help-block">{{ $errors->first("telefono") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('descripcion')) has-error @endif">
          <label for="descripcion-field" class="col-sm-2 control-label">Encargado</label>
          <div class="col-sm-4">
            <input type="text" id="descripcion-field" name="descripcion" class="form-control" 
              value="{{ is_null(old("descripcion")) ? $negocio->descripcion : old("descripcion") }}"/>
            @if($errors->has("descripcion"))
              <span class="help-block">{{ $errors->first("descripcion") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('direccion')) has-error @endif">
          <label for="direccion-field" class="col-sm-2 control-label">Encargado</label>
          <div class="col-sm-4">
            <input type="text" id="direccion-field" name="direccion" class="form-control" 
              value="{{ is_null(old("direccion")) ? $negocio->direccion : old("direccion") }}"/>
            @if($errors->has("direccion"))
              <span class="help-block">{{ $errors->first("direccion") }}</span>
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
 
