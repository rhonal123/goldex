@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header">
    <h3>Configuracion </h3>
  </div>
</div>
@endsection

@section('content')
    <div class="col-md-12">
    @if( isset($operacion) )
      @if($operacion)
        <div class="alert alert-success" role="alert">Opearcion Exitosa</div>
      @else
        <div class="alert alert-danger" role="alert">Error</div>
      @endif
    @endif 
      <form action="{{ route('configuracion') }}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group @if($errors->has('anoTransito')) has-error @endif">
          <label for="anoTransito-field" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-4">
            <input type="text" id="anoTransito-field" name="anoTransito" class="form-control"
               value="{{ is_null(old("anoTransito")) ? $configuracion->anoTransito->format('Y/m/d') : old("anoTransito") }}"/>
            @if($errors->has("anoTransito"))
              <span class="help-block">{{ $errors->first("anoTransito") }}</span>
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
<script type="text/javascript">
$(window).on('load', function() {
  $("#anoTransito-field").datepicker({format: "yyyy/mm/dd",language: 'es'});
}); 
</script>
@endsection
 
