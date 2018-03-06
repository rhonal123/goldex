@extends('layouts.app')
@section('header')
<div class="col-md-12">
<div class="page-header">
  <h3>Transferencia #{{$movimiento->id}}</h3>
  <form action="{{ route('movimientos.destroy', $movimiento->id) }}" method="POST" style="display: inline;" 
    onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="btn-group" role="group" aria-label="...">
        <a class="btn btn-default" 
          href="{{ route('movimientos.index') }}">
          <i class="glyphicon glyphicon-backward"></i>
          Regresar</a>
        <a class="btn btn-default" 
          href="{{ route('movimientos.create') }}">
          <i class="glyphicon glyphicon-plus"></i>
          Nuevo
        </a>
        <a class="btn btn-default" role="group" 
          href="{{ route('abonos.create', [ 'transferencia_id' => $movimiento->id]) }}">
          <i class="glyphicon glyphicon-plus"></i> 
          Agregar Devolucion </a>
        <a class="btn btn-default" role="group" 
          href="{{ route('movimientos.edit', $movimiento->id) }}">
          <i class="glyphicon glyphicon-edit"></i> 
          Editar</a>
        <button type="submit" class="btn btn-default">Eliminar <i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('content')
  @include('layouts/flash')

    <div class="col-md-12">

      <form action="#">

       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">TIPO</label> 
            <p class="form-control-static">{{$movimiento->tipo}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">FECHA</label> 
            <p class="form-control-static">{{$movimiento->fecha->format('Y-m-d h:i a')}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">DESCRIPCION</label> 
            <p class="form-control-static">{{$movimiento->descripcion}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">NEGOCIO</label> 
            <p class="form-control-static">{{$movimiento->negocio->nombre}}</p>
          </blockquote>
        </div>
 

        @if ($movimiento->tipo == "TRANSFERENCIA")
 
       <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">CUENTA</label> 
            <p class="form-control-static">{{$movimiento->cuenta->numero}}</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">REFERENCIA</label> 
            <p class="form-control-static">{{$movimiento->referencia}}</p>
          </blockquote>
        </div>

        @else 

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">COMISION</label> 
            <p class="form-control-static">{{$movimiento->comision}} %</p>
          </blockquote>
        </div>

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">MONTO</label> 
            <p class="form-control-static">{{ number_format( $movimiento->monto, 2) }} Bs.</p>
          </blockquote>
        </div>
        @endif      

        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">SALDO</label> 
            <p class="form-control-static">{{ number_format( $movimiento->saldo, 2) }} Bs.</p>
          </blockquote>
        </div>

        @if($movimiento->devoluciones()->count()) 
        <div class="form-group col-md-4">
          <blockquote>
            <label for="nome">MONTO DEUDA </label> 
            <p class="form-control-static">{{ number_format( $movimiento->saldo - $movimiento->totalDevoluciones(), 2) }} Bs.</p>
          </blockquote>
        </div>
        @endif 
      </form>

    </div>
    <div class="col-md-12">
    @if($movimiento->devoluciones()->count()) 
      <div class="table-responsive">
      <h3>Devoluciones</h3>
        <table class="table table-condensed table-striped" style="font-size: 12px">
          <thead>
            <tr>
              <th>Id</th>
              <th>Cuenta</th>
              <th>Descripcion</th>
              <th>Referencia</th>
              <th>Fecha</th>
              <th>Tipo</th>
              <th>Saldo</th>
              <th>Negocio<th>
              <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($movimiento->devoluciones()->get() as $detalle)
          <tr>
            <td><span>{{$detalle->id }}</span></td>
            <td>
              <span>{{ $detalle->tipo == "EFECTIVO" ? "---" : Welcome::cuentaStr($detalle->cuenta_id) }}</span>
            </td>
            <td><span>{{$detalle->descripcion }}</span></td>
            <td><span>{{$detalle->referencia }}</span></td>
            <td><span>{{$detalle->fecha }}</span></td>
            <td><span>{{$detalle->tipo }}</span></td>
            <td><span>{{number_format( $detalle->saldo, 2) }}</span></td>
            <td><span> @if(is_null($detalle->destino))
            --
            @else
               {{ is_null($detalle->destino->negocio) ?  "N/D": $detalle->destino->negocio->nombre}} 
            @endif </span></td>
            <td><span><a class="btn btn-default btn-sm" href=" {{ route('abonos.show', $detalle->id)  }}  ">detalle</a></span></td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="8" style="text-align: right;"> <strong>Total devoluciones : {{ number_format( $movimiento->totalDevoluciones(), 2) }}</strong> </td>
          </tr>
        </tfoot>
      </table>
    @endif      
    </div>
@endsection


