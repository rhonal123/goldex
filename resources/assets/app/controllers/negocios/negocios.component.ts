import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';

import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import {URLSearchParams} from '@angular/http';  
import { Paginacion } from './../../models/paginacion';
import { NegocioEditComponent } from './negocio.edit.component';
import { NegocioDeleteComponent } from './negocio.delete.component';
import { NegocioComponent } from './negocio.component';
import { ChangeDetectorRef } from '@angular/core';

@Component({
  selector: 'negocios-component',
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
      <input type="text" [(ngModel)]="search" class="form-control col-md-6" placeholder="buscar" (keyup)="loadTable()">
      <button type="button" class="btn  btn-default" (click)="loadTable()"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr><th>Id</th><th>Nombre</th><th>Rif</th><th>Descripcion</th><th>Direccion</th><th>Encargado</th><th>Telefono</th><th></th></tr>
      </thead>
      <tbody class="negocios">
        <tr *ngFor="let negocio of negocios" >
          <td ><span>{{negocio.id | truncate }}</span></td>
          <td ><span>{{negocio.nombre | truncate }}</span></td>
          <td ><span>{{negocio.rif | truncate }}</span></td>
          <td ><span>{{negocio.descripcion | truncate }}</span></td>
          <td ><span>{{negocio.direccion | truncate }}</span></td>
          <td ><span>{{negocio.encargado | truncate }}</span></td>
          <td ><span>{{negocio.telefono | truncate }}</span></td>
          <td align="right">
          <span  dropdown >
            <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
            <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
              <li  role="menuitem" (click)="onSelect(negocio)" >
                <a class="dropdown-item" >Mostrar</a>
              </li>
              <li role="menuitem" (click)="onEditar(negocio)">
                <a class="dropdown-item" >Editar</a>
              </li>
              <li role="menuitem" (click)="onEliminar(negocio)">
                <a class="dropdown-item" >Eliminar</a>
              </li>
            </ul>
          </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
        <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p> <strong>Pagina: {{current_page}} Total de Negocios {{total}}</strong> </p>
    </div>
  </div>
</div>  
<negocio-delete-component></negocio-delete-component>
<negocio-component></negocio-component>
<negocio-edit-component></negocio-edit-component> 
`,
  providers: [NegocioService]
})
export class NegociosComponent implements OnInit  , AfterViewInit {


  private negocios: Negocio[];
  private negocio: Negocio;

  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private search: string;
  private sort: string = "id";
  private observable:  Observable<Paginacion>;
  private obser: any;
  //private loading: boolean;;
 
 

  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(NegocioComponent)
  private negocioComponent: NegocioComponent;

  @ViewChild(NegocioEditComponent)
  private negocioEditComponent: NegocioEditComponent;

  @ViewChild(NegocioDeleteComponent)
  private negocioDeleteComponent: NegocioDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private negocioService: NegocioService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    if(this.obser != undefined){
      this.obser.unsubscribe();
    }
    this.observable = this.negocioService.getNegocios(this.current_page.toString(),this.serach());
    this.obser = this.observable.subscribe(data =>{
  
        this.negocios = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });
  }


  onRefrescar(): void {
    this.limpiar()
    this.loadTable()
  }

  limpiar() :void {
    this.search = ""
  }


  ngOnInit(): void {
    this.loadTable(); 
  }


  agregar(): void {
  	let negocio = new Negocio();
    this.negocio = negocio;
    this.negocioEditComponent.setModel(negocio)
    this.negocioEditComponent.openModal(this);
  }

  onSelect(negocio: Negocio): void {
    this.negocio = negocio;
    this.negocioComponent.setModel(negocio)
    this.negocioComponent.openModal();
  }

	onEditar(negocio: Negocio): void {
    this.negocio = negocio;
    this.negocioEditComponent.setModel(negocio)
    this.negocioEditComponent.openModal(this);
  }	

	onEliminar(negocio: Negocio): void {
    this.negocio = negocio;
    this.negocioDeleteComponent.negocio = negocio;
    this.negocioDeleteComponent.openModal(this);
  }
 

	changeTable(negocio: Negocio): void 
	{
		for(let m in this.negocios)
		{
			if(this.negocios[m].id === negocio.id )
			{
				this.negocios[m] = negocio;
				return;
			}
		}
		this.negocios.push(negocio);
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

	eliminar(negocio : Negocio): void 
	{
		for(let m in this.negocios)
		{
			if(this.negocios[m].id === negocio.id )
			{	
				let position = +m 
				this.negocios.splice(position,1)
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