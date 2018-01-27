@extends('layouts.app')

@section('header')
<div class="col-md-12">
 
  <div class="page-header">
    <h3>ABONO / Create </h3>
  </div>
  <a class="btn btn-link" href="{{ route('abonos.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>
 
</div>
@endsection

@section('content')
 
    <div class="col-md-12">
      <form id="form-movimiento" action="{{ route('abonos.store') }}" method="POST"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group @if($errors->has('tipo')) has-error @endif">
          <label for="banco-field" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-4">  
            {{ Form::select('tipo',
              $tipos,
              (is_null(old("tipo")) ? "TRANSFERENCIA": old("tipo")),
              ['class' => 'form-control', 'id'=>'tipo-field']) }}
            @if($errors->has("tipo"))
              <span class="help-block">{{ $errors->first("tipo") }}</span>
            @endif
         </div>
        </div>  

        @if(!is_null($transferencia))
          <div class="form-group @if($errors->has('negocio_id')) has-error @endif">
            <label for="banco-field" class="col-sm-2 control-label">Negocio</label>
            <div class="col-sm-4">
              <input type="hidden" name="negocio_id" value="{{ is_null(old("negocio_id")) ? $transferencia->negocio_id : old("negocio_id") }}">
              <input type="hidden" name="transferencia_id" value="{{ is_null(old("transferencia_id")) ? $transferencia->id : old("transferencia_id") }}">
              <input type="text" name="" class="form-control"  value="{{ $transferencia->negocio->nombre }}" disabled>
           </div>
          </div> 
        @else 
          <div class="form-group @if($errors->has('negocio_id')) has-error @endif">
            <label for="banco-field" class="col-sm-2 control-label">Negocio</label>
            <div class="col-sm-4">
              {{ Form::select('negocio_id', $negocios, old("negocio_id"),['class' => 'form-control','id'=>'negocio_id-field']) }}
              @if($errors->has("negocio_id"))
                <span class="help-block">{{ $errors->first("negocio_id") }}</span>
              @endif
           </div>
          </div> 
        @endif

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
            {{ Form::select('cuenta_id', $cuentas, old("cuenta_id"),['class' => 'form-control','id'=>'cuenta_id-field']) }}
            @if($errors->has("cuenta_id"))
              <span class="help-block">{{ $errors->first("cuenta_id") }}</span>
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
            <input type="text" id="fecha-field" name="fecha" class="form-control" value="{{ old("fecha") }}"/>
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

  @include('movimientos.form_script')
@endsection
 
