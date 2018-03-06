@extends('layouts.app')

@section('content')
  <div class="cli-md-12"  >

<h3>Procedimiento para cargar Caja chica </h3>
	<ol>
	   <li> ir a abono</li>
	   <li> agregar un nuevo abono</li>
	   <li> seleccionar efectivo</li>
	   <li> No seleccionar negocio</li>
	   <li> guardar </li>
	</ol>

<h3>Transferir de caja chica a un negocio o cuenta</h3>
	<ol>
	  <li> ir a transferencias</li>
	  <li> agregar una transferencia </li>
	  <li> seleccionar efectivo </li>
	  <li> seleccionar negocio</li>
	  <li> ingresas comisión, monto y fecha del movimiento</li>
	  <li> guardar </li>
	</ol>

<h3>Reporte de Efectivo </h3>
	<ol>
	  <li> ir a Reporte</li>
	  <li> en la seccion de reporte efectivo llenar el rango de fecha </li>
	  <li> generar reporte </li>
	</ol>

<h3>Devoluciones</h3>
	<ol>
	  <li> ir a transferencias </li>
	  <li> seleccionar una transferencia </li>
	  <li> hacer clic en el botón de devliuciones</li>
	  <li> ingresar Tipo, negocio destino, monto, fecha, descripción.</li>
	  <li> guardar </li>
	</ol>
	<p>
  	Nota: se generar un abono asociado al negocio origen y una transferencia al negocio destino, por lo cual se genera una deuda al negocio seleccionado, en caso de no selecciona un negocio, slio se genera una abono contra el monto de la transferencia. 
	</p>



  </div>
@endsection
