@extends('layouts.app')

@section('header')
<div class="col-md-12">
 
  <div class="page-header">
    <h3>GASTO / Create </h3>
  </div>
  <a class="btn btn-link" href="{{ route('gastos.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>
 
</div>
@endsection

@section('content')
 
    <div class="col-md-12">
      <form id="form-movimiento" action="{{ route('gastos.store') }}" method="POST"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('monto')) has-error @endif">
          <label for="monto-field" class="col-sm-2 control-label">Monto</label>
          <div class="col-sm-2">
            <input type="number" id="monto-field" name="monto" class="form-control" 
            value="{{ is_null(old("monto")) ? 0 : old("monto") }}"
            step="any"
            />
            @if($errors->has("monto"))
              <span class="help-block">{{ $errors->first("monto") }}</span>
            @endif
         </div>
          <label id="total" class="col-sm-2 control-label" style="text-align: left;" > Total: 0.00 BS </label>
        </div>

        <div id="form-cuenta" class="form-group @if($errors->has('cuenta_id')) has-error @endif">
          <label for="banco-field" class="col-sm-2 control-label">Cuenta</label>
          <div class="col-sm-4">
            {{ Form::select('cuenta_id', array('' => 'Seleccione un negocio') + $cuentas, old("cuenta_id"),['class' => 'form-control','id'=>'cuenta_id-field']) }}
            @if($errors->has("cuenta_id"))
              <span class="help-block">{{ $errors->first("cuenta_id") }}</span>
            @endif
         </div>
        </div> 


        <div class="form-group @if($errors->has('negocio_id')) has-error @endif">
          <label for="negocio-field" class="col-sm-2 control-label">Negocio</label>
          <div class="col-sm-4">
            {{ Form::select('negocio_id', array('' => 'Seleccione un negocio') + $negocios, old("negocio_id"),['class' => 'form-control','id'=>'negocio_id-field']) }}
            @if($errors->has("negocio_id"))
              <span class="help-block">{{ $errors->first("negocio_id") }}</span>
            @endif
         </div>
        </div> 
        
        <div id="form-referencia" class="form-group @if($errors->has('referencia')) has-error @endif">
          <label for="referencia-field" class="col-sm-2 control-label">Referencia</label>
          <div class="col-sm-4">
            <input type="text" id="referencia-field" name="referencia" class="form-control" value="{{ old("referencia") }}"/>
            @if($errors->has("referencia"))
              <span class="help-block">{{ $errors->first("referencia") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('fecha')) has-error @endif">
          <label for="fecha-field" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-4">
                <div class='input-group date' id='fecha'>
                    <input type="text" id="fecha-field" name="fecha" class="form-control" value="{{ old("fecha") }}" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            @if($errors->has("fecha"))
              <span class="help-block">{{ $errors->first("fecha") }}</span>
            @endif
         </div>
        </div>
        
        <div class="form-group @if($errors->has('descripcion')) has-error @endif">
          <label for="descripcion-field" class="col-sm-2 control-label">Descripción</label>
          <div class="col-sm-4">
            <textarea  id="descripcion-field" name="descripcion" class="form-control" >{{ old("descripcion") }}</textarea>
            @if($errors->has("descripcion"))
              <span class="help-block">{{ $errors->first("descripcion") }}</span>
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

  @include('gastos.form_script')
@endsection
 
