@extends('layouts.app')

@section('header')
<div class="col-md-12">
  <div class="page-header clearfix">
    <h3>
      Gatos
    </h3>
  </div>
    <a class="btn btn-sm btn-success" href="{{ route('gastos.create') }}">
      <i class="glyphicon glyphicon-plus"></i>
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('gastos.reporte') }}">
      <i class="glyphicon glyphicon-print"></i>
    </a>

    <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#filterModal">
      <i class="glyphicon glyphicon-filter"></i>
    </button>


    @include('gastos/search')
</div>
@endsection

@section('content')
  @include('layouts/flash')

    <div class="col-md-12">
      @if($gastos->count())
      <div class="table-responsive">
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Saldo</th>
                 <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @each('gastos.movimiento', $gastos, 'gasto')
          </tbody>
        </table>
        <div class="paginador">
          {{ $gastos->appends(Request::only('descripcion','ordenar','ordenarTipo','desde','hasta','negocio_id','cuenta_id'))->links() }}
        </div>
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      </div>
      @endif

    </div>


<form id="form-reporte" method="GET" class="form-horizontal">
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="filterModalLabel">Filtro Gastos</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="ordenar" value="fecha" >
        <input type="hidden" name="ordenarTipo" value="asc" >
        <div class="form-group">
          <label for="descripcion" class="col-md-2 control-label">Descripción</label>
          <div class="col-md-10">
            <input id="descripcion" name="descripcion"  value="{{$descripcion}}" type="text" class="form-control input-sm" placeholder="Buscar">
          </div>
        </div>

        <div class="form-group">
          <label for="search_desde" class="col-md-2 control-label">Desde</label>
          <div class="col-md-4">
            <input id="search_desde" name="desde" type="text"  class="form-control input-sm" >
          </div>
 
          <label for="search_hasta" class="col-md-2 control-label">Hasta</label>
          <div class="col-md-4">
            <input id="search_hasta" name="hasta" type="text" data-provide="datepicker" class="form-control input-sm">
          </div>
        </div>

        <div  class="form-group">
          <label for="cuenta_id" class="col-sm-2 control-label" for="estado">Cuenta</label>
          <div class="col-sm-10">
            {{
              Form::select('cuenta_id', 
               array('' => 'Seleccione una cuenta ') +$cuentas,
               $cuenta_id,
               ['class' => 'form-control','id'=>'cuenta_id-field', 'style' => 'width: 100%']) 
            }}
          </div> 
        </div>
      
        <div  class="form-group">
          <label for="negocio_id" class="col-sm-2 control-label" for="estado">Negocio</label>
          <div class="col-sm-10">
            {{
              Form::select('negocio_id', 
               array('' => 'Seleccione un negocio') + $negocios,
               $negocio_id,
               ['class' => 'form-control','id'=>'negocio_id-field', 'style' => 'width: 100%'] )
            }}
            </div> 
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-default">Filtrar</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
  $(window).on('load', function() {
    let fecha = new Date();
    let ano = fecha.getFullYear();
    let mes = fecha.getMonth();
    $('#search_desde').datepicker({format: "yyyy/mm/dd",language: 'es'});
    $('#search_desde').datepicker('setDate', new Date('{{$desde}}'));

    $('#search_hasta').datepicker({format: "yyyy/mm/dd",language: 'es'})
    $('#search_hasta').datepicker('setDate', new Date('{{$hasta}}'));

    $("#negocio_id-field").select2();
    $("#cuenta_id-field").select2();
  });
</script>



@endsection


 
