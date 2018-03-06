@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h3>Transferencia #{{$movimiento->id}}</h3>
  </div>
  <a class="btn btn-link" href="{{ route('movimientos.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>
</div>
@endsection



@section('content')
  @if($errors->has("estado"))
  <div class="col-md-12">
    <div class="alert alert-danger">{{ $errors->first("estado") }}</div>
  </div>
  @endif
    <div class="col-md-12">
      <form action="{{ route('movimientos.update', $movimiento->id) }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('tipo')) has-error @endif">
          <label for="banco-field" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-4">  
            {{ Form::select('tipo',
              $tipos,
              (is_null(old("tipo")) ? $movimiento->tipo : old("tipo")),
              ['class' => 'form-control', 'id'=>'tipo-field']) }}
            @if($errors->has("tipo"))
              <span class="help-block">{{ $errors->first("tipo") }}</span>
            @endif
         </div>
        </div>  

        <div class="form-group @if($errors->has('negocio_id')) has-error @endif">
          <label for="banco-field" class="col-sm-2 control-label">Negocio</label>
          <div class="col-sm-4">
            {{ Form::select('negocio_id',
              $negocios,
              is_null(old("negocio_id")) ? $movimiento->negocio_id : old("negocio_id"),
              ['class' => 'form-control','id'=>'negocio_id-field']) }}
            @if($errors->has("negocio_id"))
              <span class="help-block">{{ $errors->first("negocio_id") }}</span>
            @endif
         </div>
        </div> 
  
        <div id="form-comision" class="form-group @if($errors->has('comision')) has-error @endif">
          <label for="comision-field" class="col-sm-2 control-label">Comision %</label>
          <div class="col-sm-2">
            <input type="number" id="comision-field" name="comision" class="form-control" 
              value="{{ is_null(old("comision")) ? $movimiento->comision : old("comision") }}"
              max="100"
              min="0" />
            @if($errors->has("comision"))
              <span class="help-block">{{ $errors->first("comision") }}</span>
            @endif
         </div>        

         <label id="comision" 
            class="col-sm-2 control-label" 
            style="text-align: left;" > Comision: 0.00 BS </label>
        </div>

        <div class="form-group @if($errors->has('monto')) has-error @endif">
          <label for="monto-field" class="col-sm-2 control-label">Monto</label>
          <div class="col-sm-2">
            <input type="number" id="monto-field" name="monto" class="form-control" 
            value="{{ is_null(old("monto")) ? $movimiento->monto : old("monto") }}"
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
            {{ Form::select('cuenta_id', 
              $cuentas,
              is_null(old("cuenta_id")) ? $movimiento->cuenta_id : old("cuenta_id") ,
              ['class' => 'form-control','id'=>'cuenta_id-field']) }}
            @if($errors->has("cuenta_id"))
              <span class="help-block">{{ $errors->first("cuenta_id") }}</span>
            @endif
         </div>
        </div> 

        <div id="form-referencia" class="form-group @if($errors->has('referencia')) has-error @endif">
          <label for="referencia-field" class="col-sm-2 control-label">Referencia</label>
          <div class="col-sm-4">
            <input type="text" id="referencia-field" name="referencia" class="form-control"
               value="{{ is_null(old("referencia")) ? $movimiento->referencia : old("referencia") }}"/>
            @if($errors->has("referencia"))
              <span class="help-block">{{ $errors->first("referencia") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('fecha')) has-error @endif">
          <label for="fecha-field" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-4">
                <div class='input-group date' id='fecha'>
                    <input type="text" id="fecha-field" name="fecha" class="form-control" value="{{ is_null(old("fecha")) ? $movimiento->fecha : old("fecha") }}" />
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
            <textarea  id="descripcion-field" name="descripcion" class="form-control" >{{ is_null(old("descripcion")) ? $movimiento->descripcion : old("descripcion") }}</textarea>
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
  @include('movimientos.form_script')
@endsection
 
