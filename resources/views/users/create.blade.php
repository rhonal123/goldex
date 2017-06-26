@extends('layouts.app')

@section('header')
  <div class="page-header">
    <h3>Usuario / Create </h3>
  </div>
  <a class="btn btn-link" href="{{ route('users.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('users.store') }}" method="POST"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group @if($errors->has('name')) has-error @endif">
          <label for="name-field" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-4">
            <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
            @if($errors->has("name"))
              <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('email')) has-error @endif">
          <label for="email-field" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
            @if($errors->has("email"))
              <span class="help-block">{{ $errors->first("email") }}</span>
            @endif
         </div>
        </div>

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



        <div class="form-group @if($errors->has('administrador')) has-error @endif">
          <label for="administrador-field" class="col-sm-2 control-label">Administrador</label>
          <div class="col-sm-4">
            <select id="administrador-field" name="administrador" class="form-control">
              <option value="true">adminsitrador</option>
              <option value="false">comun</option>
            </select>
            @if($errors->has("administrador"))
              <span class="help-block">{{ $errors->first("administrador") }}</span>
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
 
