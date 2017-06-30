@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h3>Cambiar Contraseña {{ Auth::user()->name }} </h3>
  </div>
</div>
@endsection

@section('content')
    <div class="col-md-12">
      <form action="{{ route('password') }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group @if($errors->has('password')) has-error @endif">
          <label for="password-field" class="col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-4">
            <input type="password" id="password-field" name="password" class="form-control" value="{{ old("password") }}"/>
            @if($errors->has("password"))
              <span class="help-block">{{ $errors->first("password") }}</span>
            @endif
         </div>
        </div>
    
        <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
          <label for="password_confirmation-field" class="col-sm-2 control-label">Contraseña Confirmacion</label>
          <div class="col-sm-4">
            <input type="password" id="password_confirmation-field" name="password_confirmation" class="form-control" value="{{ old("password_confirmation") }}"/>
            @if($errors->has("password_confirmation"))
              <span class="help-block">{{ $errors->first("password_confirmation") }}</span>
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
 
@endsection
 
