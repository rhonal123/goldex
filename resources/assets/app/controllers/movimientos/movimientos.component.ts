import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { Paginacion } from './../../models/paginacion';

import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { URLSearchParams} from '@angular/http';  

import { MovimientoEditComponent } from './movimiento.edit.component';
import { MovimientoDeleteComponent } from './movimiento.delete.component';
import { MovimientoComponent } from './movimiento.component';
import { MovimientoPrecioPuroComponent } from './movimiento.precio.puro.component';

import { JqueryComponent } from './../jquery.component';
import { ChangeDetectorRef } from '@angular/core';
declare var $: any;

@Component({
  selector: 'movimientos-component',
  template: `
<div class="col-md-2 ">
  <button type="button" class="btn btn-sm btn-default" (click)="agregar()">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  </button>
  <button type="button" class="btn btn-sm btn-default" (click)="onRefrescar()">
    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
</div>

<div class="col-md-10" align="right">
  <div class="form-inline">
    <div class="form-group">
      <input type="text" [(ngModel)]="texto" class="form-control col-md-6" placeholder="buscar" (keyup)="loadTable()"  >
      <button type="button" class="btn  btn-default" (click)="loadTable()">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      <button type="button" class="btn  btn-default" (click)="openModal()">
        <span class="glyphicon glyphicon-filter" aria-hidden="true"></span></button>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
        <th>Id</th><th>Negocio o Socio</th><th>Descripcion</th><th>Fecha</th><th>Tipo</th><th>Precio Gramos</th><th>Saldo</th><th>Estado</th><th></th>
        </tr>
      </thead>
      <tbody class="movimientos">
        <tr *ngFor="let movimiento of movimientos" [class.active]="movimiento === activeMovimiento" (click)="onActive(movimiento)">
          <td><span>{{movimiento.id}}</span></td>
          <td><span>{{movimiento.negocio.nombre}}</span></td>
          <td><span>{{movimiento.descripcion}}</span></td>
          <td><span>{{movimiento.fecha}}</span></td>
          <td><span>{{movimiento.tipo}}</span></td>
          <td><span>{{movimiento.precio_puro}}</span></td>
          <td><span>{{movimiento.saldo}}</span></td>
          <td><span>{{movimiento.estado}}</span></td>
          <td align="right">
            <span  dropdown >
              <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
              <ul class="dropdown-menu dropdown-menu-right" dropdownMenu  role="menu" aria-labelledby="split-button">
                <li  role="menuitem" (click)="onSelect(movimiento)" >
                  <a class="dropdown-item" >Mostrar</a>
                </li>
                <li role="menuitem" (click)="onEditar(movimiento)">
                  <a class="dropdown-item" >Editar</a>
                </li>
                <li role="menuitem" (click)="onEliminar(movimiento)">
                  <a class="dropdown-item" >Eliminar</a>
                </li>
                <li role="menuitem" (click)="onAsignarPrecio(movimiento)">
                  <a class="dropdown-item" >Asignar Precio Puro</a>
                </li>
              </ul>
              </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
      <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p><strong>Pagina: {{current_page}} Total de Movimientos {{total}}</strong></p>
    </div>
  </div>
</div>
<movimiento-delete-component></movimiento-delete-component>
<movimiento-component></movimiento-component>
<movimiento-edit-component></movimiento-edit-component> 
<movimiento-precio-puro-component></movimiento-precio-puro-component>

<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Detalle Busquedad</h4>
  </div>
  
  <div class="modal-body">
    <div class="panel-body">

      <div class="form-horizontal">
        <div class="form-group">
          <label for="search_desde" class="col-md-2 control-label">Desde</label>
          <div class="col-md-4">
            <input id="search_desde" type="text" data-provide="datepicker" class="form-control input-sm" >
          </div>
 
          <label for="search_hasta" class="col-md-2 control-label">Hasta</label>
          <div class="col-md-4">
            <input id="search_hasta" type="text" data-provide="datepicker" class="form-control input-sm" >
          </div>
        </div>
 
        <div class="form-group">
          <label for="tipo" class="col-md-2 control-label">Tipo</label>
          <div class="col-md-10">
            <select id="tipo" [(ngModel)]="tipo" class="form-control input-sm">
              <option value="TRANSFERENCIA">TRANSFERENCIA</option>
              <option value="EFECTIVO">EFECTIVO</option>
            </select>
          </div>
        </div>
<!--
        <div class="form-group">
          <label for="referencia" class="col-md-2 control-label">Referencia</label>
          <div class="col-md-10">
            <input id="referencia" [(ngModel)]="referencia" type="text" class="form-control input-sm" >
          </div>
        </div>
-->
        <div  class="form-group">
          <label for="negocio_id" class="col-sm-2 control-label" for="estado">Negocio</label>
          <div class="col-sm-10">
            <select id="negocio_id" class="form-control" style="width: 100%;"></select>
          </div> 
        </div>


        <div  class="form-group">
          <label for="cuenta_id" class="col-sm-2 control-label" for="estado">Cuenta</label>
          <div class="col-sm-10">
            <select id="cuenta_id" class="form-control" style="width: 100%;"></select>
          </div> 
        </div>

        <div  class="form-group">
          <label for="ordenar" class="col-sm-2 control-label" for="estado">Ordenar Por </label>
          <div class="col-sm-5">
            <select class="form-control" [(ngModel)]="ordenar" style="width: 100%;">
              <option value="fecha">Fecha</option>
              <option value="id">Id</option>
            </select>
          </div>
          <div class="col-sm-5">
            <select class="form-control" [(ngModel)]="ordenarTipo" style="width: 100%;">
              <option value="asc">Ascendente</option>
              <option value="desc">Descendente</option>
            </select>
          </div>  
        </div>

        <div class="form-group">
          <div class="col-md-12" align="right">
            <button type="button" class="btn  btn-default"
                    (click)="limpiar()">
              <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn  btn-default"
                    (click)="loadTable()">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn  btn-default"
                    (click)="imprimir()">
              <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div> 

  `, 
  providers: [MovimientoService]
})
export class MovimientosComponent implements OnInit {

  private movimientos: Movimiento[];
  private movimiento: Movimiento;
  private activeMovimiento:  Movimiento;

  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private texto: string;
  private tipo: string
  private referencia: string
  private ordenar: string = "fecha";
  private ordenarTipo: string = "asc";
  private observable:  Observable<Paginacion>;
  private obser: any;

  private jDesde:any;
  private jHasta: any;
  private jnegocio: any;
  private jcuenta: any;
  private a: any;

  @ViewChild('modal') modal: ModalDirective;
 
  @ViewChild(MovimientoComponent)
  private movimientoComponent: MovimientoComponent;

  @ViewChild(MovimientoEditComponent)
  private movimientoEditComponent: MovimientoEditComponent;

  @ViewChild(MovimientoDeleteComponent)
  private movimientoDeleteComponent: MovimientoDeleteComponent;

  @ViewChild(MovimientoPrecioPuroComponent)
  private movimientoPrecioPuroComponent: MovimientoPrecioPuroComponent;

  constructor( private route: Router,private movimientoService: MovimientoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  limpiar(): void{
    this.texto = null;
    this.jDesde.datepicker("setDate",null);
    this.jHasta.datepicker("setDate",null);
    this.jnegocio.empty();
    this.jcuenta.empty();
    this.tipo = null
    this.referencia= null
  }

  onRefrescar(): void {
    this.limpiar()
    this.loadTable()
  }

  loadTable(): void {
    this._changeDetectionRef.detectChanges();

    if(this.obser != undefined){
      this.obser.unsubscribe();
    }

    this.observable = this.movimientoService.getMovimientos(
      this.current_page.toString(),
      this.serach()
    );
    
    this.obser = this.observable.subscribe(data =>{
        this.movimientos = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });
  }

  ngOnInit(): void {
    this.jDesde   = JqueryComponent.fechaSinValorIncial("#search_desde");
    this.jHasta   = JqueryComponent.fechaSinValorIncial("#search_hasta");
    this.jnegocio = JqueryComponent.negocios("#negocio_id");
    this.jcuenta = JqueryComponent.cuentas("#cuenta_id");
    this.a = document.createElement("a");
    document.body.appendChild(this.a);
    this.loadTable(); 
  }

  agregar(): void {
  	let movimiento = new Movimiento( );
    this.movimiento = movimiento;
    this.movimientoEditComponent.setModel(movimiento)
    this.movimientoEditComponent.openModal(this);
  }

  onSelect(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.movimientoComponent.movimiento = movimiento;
    this.movimientoComponent.openModal();
  }

	onEditar(movimiento: Movimiento): void {
    if(movimiento.estado === "CREADO"){
      this.movimiento = movimiento;
      this.movimientoEditComponent.setModel(movimiento)
      this.movimientoEditComponent.openModal(this);
    } 
    else{
      alert("No Puedes Modificar Este movimiento.")
    }
  }	

  onAsignarPrecio(movimiento: Movimiento): void {
    if(movimiento.estado === "CREADO"){
      this.movimiento = movimiento;
      this.movimientoPrecioPuroComponent.setModel(movimiento)
      this.movimientoPrecioPuroComponent.openModal(this);
    } 
    else{
      alert("No Puedes Asignar Precio.")
    }
  }  


	onEliminar(movimiento: Movimiento): void {
    if(movimiento.estado === "CREADO"){
      this.movimiento = movimiento;
      this.movimientoDeleteComponent.movimiento = movimiento;
      this.movimientoDeleteComponent.openModal(this);
    }
    else{
      alert("No Puedes Eliminar Este movimiento.")
    }
  }

	changeTable(movimiento: Movimiento): void 
	{
		for(let m in this.movimientos)
		{
			if(this.movimientos[m].id === movimiento.id )
			{
				this.movimientos[m] = movimiento;
				return;
			}
		}
		this.movimientos.push(movimiento);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();

    let desde = this.jDesde.val();
    let hasta = this.jHasta.val();
    let negocio_id = this.jnegocio.val();
    let cuenta_id = this.jcuenta.val();

    if(this.texto)
    {
      param.set("descripcion",this.texto)
    }  
    if(desde)
    { 
      param.set("desde",desde)
    }  
    if(hasta)
    {
      param.set("hasta",hasta)
    }  
    if(this.tipo)
    {
      param.set("tipo",this.tipo)
    }  
    if(negocio_id)
    {
      param.set("negocio_id",negocio_id)
    }  
    if(cuenta_id)
    {
      param.set("cuenta_id",cuenta_id)
    }  

    if(this.referencia)
    {
      param.set("referencia",this.referencia)
    }  
    if(this.ordenar){
      param.set("ordenar",this.ordenar)
    }
    if(this.ordenarTipo){
      param.set("ordenarTipo",this.ordenarTipo)
    }
    return param;
  };

	eliminar(movimiento : Movimiento): void 
	{
		for(let m in this.movimientos)
		{
			if(this.movimientos[m].id === movimiento.id )
			{	
        let position = +m 
				this.movimientos.splice(position,1)
				return;
			}
		}
	}

  imprimir(){
    let params = this.serach();
    JqueryComponent.downloadPdf(`/sistema/reporte/movimientos?${params.toString()}`,"reporteMoviminetos.pdf");
  }

  pageChanged(event: any ): void 
  {
    this.current_page = event.page;
    this._changeDetectionRef.detectChanges();
    this.loadTable();
  }

  onActive(movimiento: Movimiento  ): any {
    this.activeMovimiento = movimiento;
  }

  openModal( ):void{
    this.modal.show()
  }

  hideModal(): void{
    this.modal.hide();
  }
} 