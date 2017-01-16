import { Component, Input, OnInit, ViewChild,   AfterViewInit, ChangeDetectorRef } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { Paginacion } from './../../models/paginacion';

import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';
import {URLSearchParams} from '@angular/http';  

import {Subscription} from 'rxjs';
import { AbonoEditComponent } from './abono.edit.component';
import { AbonoDeleteComponent } from './abono.delete.component';
import { AbonoComponent } from './abono.component';
import { JqueryComponent } from './../jquery.component';

@Component({
  selector: 'abonos-component',
  template: `
<div class="col-md-2 ">
  <button type="button" class="btn btn-sm btn-default" (click)="agregar()">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  </button>
  <button type="button" class="btn btn-sm btn-default" (click)="loadTable()">
    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
</div>
<div class="col-md-10" align="right">
  <div class="form-inline">
    <div class="form-group">
      <button type="button" class="btn btn-default" (click)="openModal()"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span></button>
    </div>
  </div>
</div>

<div *ngIf="mensaje">
  <p class="bg-warning">{{mensaje}}</p>
</div>
<div class="col-md-12" *ngIf="isLoading$ | async">
  <p class="text-primary">Cargando Información ...........</p>
</div>

<div class="col-md-12">  
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr><th>Id</th><th>Negocio</th><th>Tipo</th><th>Cantidad</th><th>Monto</th><th>Fecha</th><th></th></tr>
      </thead>
      <tbody class="abonos" >
        <tr *ngFor="let abono of abonos" [class.active]="abono === activeAbono" (click)="onActive(abono)">
          <td ><span>{{abono.id}}</span></td>
          <td ><span>{{abono.negocio|detalleNegocio}}</span></td>
          <td ><span>{{abono.tipo.tipo}}</span></td>
          <td ><span>{{abono|cantidadAbono}}</span></td>
          <td ><span>{{abono.monto|number:'1.2-2'|montoBs}}</span></td>
          <td ><span>{{abono.fecha|fecha}}</span></td>
          <td align="right">
            <span  dropdown >
              <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
              <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
                <li  role="menuitem" (click)="onSelect(abono)" >
                  <a class="dropdown-item" >Mostrar</a>
                </li>
                <li role="menuitem" (click)="onEditar(abono)">
                  <a class="dropdown-item" >Editar</a>
                </li>
                <li role="menuitem" (click)="onEliminar(abono)">
                  <a class="dropdown-item" >Eliminar</a>
                </li>
              </ul>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
      <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p><strong>Pagina: {{current_page}} Total de Abonos {{total}}</strong></p>
    </div>
  </div>
</div>

<abono-delete-component></abono-delete-component>
<abono-component></abono-component>
<abono-edit-component></abono-edit-component> 


<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Filtar </h4>
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

        <div  class="form-group">
          <label for="negocio_id" class="col-sm-2 control-label" for="estado">Negocio</label>
          <div class="col-sm-10">
            <select id="negocio_id" class="form-control" style="width: 100%;"></select>
          </div> 
        </div>

        <div  class="form-group">
          <label for="tipo_id" class="col-sm-2 control-label" for="estado">Tipo</label>
          <div class="col-sm-10">
            <select id="tipo_id" class="form-control" style="width: 100%;"></select>
          </div> 
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-10 col-sm-2">
            <button type="button" class="btn  btn-default" (click)="loadTable()"> Filtrar <span class="glyphicon glyphicon-filter" aria-hidden="true"></span></button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [AbonoService]
})
export class AbonosComponent implements OnInit  , AfterViewInit {


  private abonos: Abono[];
  private abono: Abono;
  private activeAbono:  Abono;
  private isLoading$: BehaviorSubject<boolean> = new BehaviorSubject(false);
  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private search: string;
  private sort: string = "id";
  private mensaje: string = "";
  private observable:  Observable<Paginacion>;
  private subscription: Subscription;
 


  private jDesde:any;
  private jHasta: any;
  private jnegocio: any;
  private jtipo: any;


  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(AbonoComponent)
  private abonoComponent: AbonoComponent;

  @ViewChild(AbonoEditComponent)
  private abonoEditComponent: AbonoEditComponent;

  @ViewChild(AbonoDeleteComponent)
  private abonoDeleteComponent: AbonoDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private abonoService: AbonoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this.mensaje = ""
    this.isLoading$.next(true);
    if(this.subscription != undefined){
      this.subscription.unsubscribe();
      this.isLoading$.next(false);
    }
    this.observable = this.abonoService.getAbonos(this.current_page.toString(),this.serach());
    this.subscription = this.observable.subscribe(data =>{
        this.abonos = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.subscription = undefined;
    },
    (erro) => {
      this.isLoading$.next(false);
    },()=>{
      this.isLoading$.next(false);
    });

  }

  ngOnInit(): void {
    this.jDesde   = JqueryComponent.fechaSinValorIncial("#search_desde");
    this.jHasta   = JqueryComponent.fechaSinValorIncial("#search_hasta");
    this.jnegocio = JqueryComponent.negocios("#negocio_id");
    this.jtipo    = JqueryComponent.tipos("#tipo_id");
    this.loadTable(); 
  }

  agregar(): void {
  	let abono = new Abono();
    this.abono = abono;
    this.abonoEditComponent.setModel(abono)
    this.abonoEditComponent.openModal(this);
  }

  onSelect(abono: Abono): void {
    this.abono = abono;
    this.abonoComponent.abono = abono;
    this.abonoComponent.openModal();
  }

	onEditar(abono: Abono): void {
    this.abono = abono;
    this.abonoEditComponent.setModel(abono)
    this.abonoEditComponent.openModal(this);
  }	

	onEliminar(abono: Abono): void {
    this.abono = abono;
    this.abonoDeleteComponent.abono = abono;
    this.abonoDeleteComponent.openModal(this);
  }
 

	changeTable(abono: Abono): void 
	{
		for(let m in this.abonos)
		{
			if(this.abonos[m].id === abono.id )
			{
				this.abonos[m] = abono;
				return;
			}
		}
		this.abonos.push(abono);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();
    let desde = this.jDesde.val();
    let hasta = this.jHasta.val();
    let negocio_id = this.jnegocio.val();
    let tipo_id = this.jtipo.val();

    if(desde) { 
      param.set("desde",desde)
    }  
    if(hasta) {
      param.set("hasta",hasta)
    }  
    if(tipo_id) {
      param.set("tipo_id",tipo_id)
    }  
    if(negocio_id) {
      param.set("negocio_id",negocio_id);
    }  
    return param;
  };

	eliminar(abono : Abono): void 
	{
		for(let m in this.abonos)
		{
			if(this.abonos[m].id === abono.id )
			{	console.log(this.abonos);
				let position = +m 
				this.abonos.splice(position,1)
				console.log(+m + 1);
				console.log(this.abonos);
				return;
			}
		}
	}


  pageChanged(event: any ): void 
  {
    this.current_page = event.page;
    this._changeDetectionRef.detectChanges();
    this.loadTable();
  }
 

  onActive(abono: Abono  ): any {
    this.activeAbono = abono;
  }

  openModal():void{
    this.modal.show()
  }

  hideModal(): void{
    this.modal.hide();
  }
 

}
   
 