import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Cierre } from './../../models/cierre';
import { Paginacion } from './../../models/paginacion';

import { CierreService } from './../../services/cierre.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';
import { URLSearchParams} from '@angular/http';  

import {Subscription} from 'rxjs';
import { CierreEditComponent } from './cierre.edit.component';
import { CierreDeleteComponent } from './cierre.delete.component';
import { CierreComponent } from './cierre.component';
import { ChangeDetectorRef } from '@angular/core';
import { JqueryComponent } from './../jquery.component';

@Component({
  selector: 'cierres-component',
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
      <input type="text" [(ngModel)]="search" class="form-control col-md-6" placeholder="buscar" (keyup.enter)="loadTable()">
      <button type="button" class="btn  btn-default" (click)="loadTable()"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
        <tr><th>Id</th><th>Negocio o socio </th><th>Abono</th><th>Prestamo</th><th>Saldo</th><th>Fecha</th><th>Estado</th><th></th></tr>
      </thead>
      <tbody class="cierres" >
        <tr *ngFor="let cierre of cierres">
          <td ><span>{{cierre.id}}</span></td>
          <td ><span>{{cierre.negocio|detalleNegocio}}</span></td>
          <td ><span>{{cierre.abono|number:'1.2-2'|montoBs}}</span></td>
          <td ><span>{{cierre.prestamo|number:'1.2-2'|montoBs}}</span></td>
          <td ><span>{{cierre.saldo|number:'1.2-2'|montoBs}}</span></td>
          <td ><span>{{cierre.fecha}}</span></td>
          <td ><span>{{cierre.estado}}</span></td>
          <td align="right">
            <span  dropdown > 
              <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
              <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
                <li  role="menuitem" (click)="onSelect(cierre)" >
                  <a class="dropdown-item" >Mostrar</a>
                </li>
                <li role="menuitem" (click)="onEditar(cierre)">
                  <a class="dropdown-item" >Editar</a>
                </li>
                <li role="menuitem" (click)="onImprimir(cierre)">
                  <a class="dropdown-item" >Imprimir</a>
                </li>
              </ul>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
      <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p><strong>Pagina: {{current_page}} Total de Cierres {{total}}</strong></p>
    </div>
  </div>
</div>
<cierre-delete-component></cierre-delete-component>
<cierre-component></cierre-component>
<cierre-edit-component></cierre-edit-component> 
`,
  providers: [CierreService]
})
export class CierresComponent implements OnInit  , AfterViewInit {


  private cierres: Cierre[];
  private cierre: Cierre;
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
 

  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(CierreComponent)
  private cierreComponent: CierreComponent;

  @ViewChild(CierreEditComponent)
  private cierreEditComponent: CierreEditComponent;

  @ViewChild(CierreDeleteComponent)
  private cierreDeleteComponent: CierreDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private cierreService: CierreService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this.mensaje = ""
    this.isLoading$.next(true);
    if(this.subscription != undefined){
      this.subscription.unsubscribe();
      this.isLoading$.next(false);
    }
    this.observable = this.cierreService.getCierres(this.current_page.toString(),this.serach());
    this.subscription = this.observable.subscribe(data =>{
        this.cierres = data.data;
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
    this.loadTable(); 
  }


  agregar(): void {
  	let cierre = new Cierre();
    this.cierre = cierre;
    this.cierreEditComponent.setModel(cierre)
    this.cierreEditComponent.openModal(this);
  }

  onSelect(cierre: Cierre): void {
    this.cierre = cierre;
    this.cierreComponent.setModel(cierre);
    this.cierreComponent.openModal();
  }

	onEditar(cierre: Cierre): void {
    if(cierre.estado == "CERRADO"){
      alert("Estado Cerrado, no puede ser editado ")
    }
    else{
      this.cierre = cierre;
      this.cierreEditComponent.setModel(cierre)
      this.cierreEditComponent.openModal(this);
    }
  }	

	onEliminar(cierre: Cierre): void {
    this.cierre = cierre;
    this.cierreDeleteComponent.cierre = cierre;
    this.cierreDeleteComponent.openModal(this);
  }
 
  onImprimir(cierre: Cierre): void {
    let params = this.serach();
    JqueryComponent.downloadPdf(`/sistema/cierres/${cierre.id}/imprimir`,"cierre.pdf");
  }

	changeTable(cierre: Cierre): void 
	{
		for(let m in this.cierres)
		{
			if(this.cierres[m].id === cierre.id )
			{
				this.cierres[m] = cierre;
				return;
			}
		}
		this.cierres.push(cierre);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();
    if(this.search)
    {
      param.set("search",this.search)
      param.set("sort",this.sort)
    }  
    return param;
  };

	eliminar(cierre : Cierre): void 
	{
		for(let m in this.cierres)
		{
			if(this.cierres[m].id === cierre.id )
			{	console.log(this.cierres);
				let position = +m 
				this.cierres.splice(position,1)
				console.log(+m + 1);
				console.log(this.cierres);
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
} 