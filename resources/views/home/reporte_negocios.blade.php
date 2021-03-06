@extends('layouts.app')
@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      Negocios / Reporte
    </h3>
  </div>
</div>
@endsection

@section('content')
  @include('layouts/flash')
    <div class="col-md-8">

      <form id="form-reporte" 
        action="{{ route('reportenegocio') }}" 
        method="POST" 
        target="_blank"
        class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="form-group">
          <label for="search_desde" class="col-md-2 control-label">Desde</label>
          <div class="col-md-4">
            <input id="search_desde" name="desde" type="text"  class="form-control input-sm" required>
          </div>
 
          <label for="search_hasta" class="col-md-2 control-label">Hasta</label>
          <div class="col-md-4">
            <input id="search_hasta" name="hasta" type="text" data-provide="datepicker" class="form-control input-sm" required >
          </div>
        </div>

        <div  class="form-group">
          <label for="ordenar" class="col-sm-2 control-label" for="estado">Fecha </label>
          <div class="col-sm-5">
            <select class="form-control" name="ordenarTipo" style="width: 100%;">
              <option value="asc">Ascendente</option>
              <option value="desc">Descendente</option>
            </select>
          </div>  

           <div class="col-sm-5">
            <select class="form-control" name="tipo" style="width: 100%;">
              <option value="pdf">pdf</option>
              <option value="excel">excel</option>
            </select>
          </div>  
        </div>

        <div class="form-group">
          <div class="col-md-12" align="right">
            <button type="submit" class="btn  btn-default">
              <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </form> 
    </div>



<script type="text/javascript">
  $(window).on('load', function() {
    let fecha = new Date();
    let ano = fecha.getFullYear();
    let mes = fecha.getMonth();
    $('#search_desde').datepicker({format: "yyyy/mm/dd",language: 'es'});
    $('#search_desde').datepicker('setDate', new Date(ano,mes,1));

    $('#search_hasta').datepicker({format: "yyyy/mm/dd",language: 'es'})
    $('#search_hasta').datepicker('setDate', new Date(ano,mes+1,0));


  });
</script>


@endsection


 
