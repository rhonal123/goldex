
@extends('layouts.app')

 

@section('header')
<div class="page-header">
  <h3>Cuentas #{{$cuenta->id}}</h3>
</div>
   <a class="btn btn-link" href="{{ route('cuentas.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>

@endsection


@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('cuentas.update', $cuenta->id) }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group @if($errors->has('numero')) has-error @endif">
          <label for="numero-field" class="col-sm-2 control-label">Numero</label>
          <div class="col-sm-4">
            <input type="text" id="numero-field" name="numero" class="form-control" 
              value="{{ is_null(old("numero")) ? $cuenta->numero : old("numero") }}"/>
            @if($errors->has("numero"))
              <span class="help-block">{{ $errors->first("numero") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('banco_id')) has-error @endif">
          <label for="banco-field" class="col-sm-2 control-label">Banco</label>
          <div class="col-sm-4">
            {{ Form::select('banco_id', $items, is_null(old("banco_id")) ? $cuenta->banco_id : old("banco_id") ,['class' => 'form-control']) }}
            @if($errors->has("banco_id"))
              <span class="help-block">{{ $errors->first("banco_id") }}</span>
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
 
