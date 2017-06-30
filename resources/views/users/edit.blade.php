@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h3>users #{{$user->id}}</h3>
  </div>
   <a class="btn btn-link" href="{{ route('users.index') }}">
    <i class="glyphicon glyphicon-backward"></i> Regresar
  </a>
</div>
@endsection


@section('content')
   
    <div class="col-md-12">
      <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
         
        <div class="form-group @if($errors->has('name')) has-error @endif">
          <label for="name-field" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-4">
            <input type="text" id="name-field" name="name" class="form-control" value="{{ is_null(old("name")) ? $user->name : old("name") }}"/>
            @if($errors->has("name"))
              <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
         </div>
        </div>

        <div class="form-group @if($errors->has('email')) has-error @endif">
          <label for="email-field" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" id="email-field" name="email" class="form-control" value="{{ is_null(old("email")) ? $user->email : old("email") }}"/>
            @if($errors->has("email"))
              <span class="help-block">{{ $errors->first("email") }}</span>
            @endif
         </div>
        </div>

 

        <div class="form-group @if($errors->has('administrador')) has-error @endif">
          <label for="administrador-field" class="col-sm-2 control-label">Administrador</label>
          <div class="col-sm-4">

            {{ Form::select('administrador',
              array(0=>'comun',1=>'adminsitrador'),
              is_null(old("administrador")) ? $user->administrador : old("administrador"),
              ['class' => 'form-control']) }}

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
  
@endsection
 
