import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';

import { Paginacion } from './../../models/paginacion';

import { CuentaService } from './../../services/cuenta.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { URLSearchParams } from '@angular/http';  


import { CuentaEditComponent } from './cuenta.edit.component';
import { CuentaDeleteComponent } from './cuenta.delete.component';
import { CuentaComponent } from './cuenta.component';

 

import { ChangeDetectorRef } from '@angular/core'; 

@Component({
  selector: 'cuentas-component',
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
      <input type="text" [(ngModel)]="search" class="form-control col-md-6" placeholder="buscar" (keyup)="loadTable()"  >
      <button type="button" class="btn  btn-default" (click)="loadTable()"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr><th>Id</th><th>Nuemro</th><th>Banco</th><th></th></tr>
      </thead>
      <tbody class="cuentas">
        <tr *ngFor="let cuenta of cuentas" >
          <td ><span>{{cuenta.id}}</span></td>
          <td ><span>{{cuenta.numero}}</span></td>
          <td ><span>{{cuenta.banco.nombre}}</span></td>
          <td align="right">
          <span  dropdown >
            <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
            <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
              <li  role="menuitem" (click)="onSelect(cuenta)" >
                <a class="dropdown-item" >Mostrar</a>
              </li>
              <li role="menuitem" (click)="onEditar(cuenta)">
                <a class="dropdown-item" >Editar</a>
              </li>
              <li role="menuitem" (click)="onEliminar(cuenta)">
                <a class="dropdown-item" >Eliminar</a>
              </li>
            </ul>
          </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
      <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p><strong>Pagina: {{current_page}} Total de Cuentas {{total}}</strong></p>
    </div>
  </div>
</div>
<cuenta-delete-component></cuenta-delete-component>
<cuenta-component></cuenta-component>
<cuenta-edit-component></cuenta-edit-component> 
  ` ,
  providers: [CuentaService]
})
export class CuentasComponent implements OnInit  , AfterViewInit {


  private cuentas: Cuenta[];
  private cuenta: Cuenta;

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
 

  @ViewChild(CuentaComponent)
  private cuentaComponent: CuentaComponent;

  @ViewChild(CuentaEditComponent)
  private cuentaEditComponent: CuentaEditComponent;

  @ViewChild(CuentaDeleteComponent)
  private cuentaDeleteComponent: CuentaDeleteComponent;


  ngAfterViewInit() {
    this.loadTable(); 

  }

  constructor( private router: Router,private cuentaService: CuentaService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  limpiar() :void {
    this.search = ""
  }

  onRefrescar(): void {
    this.limpiar()
    this.loadTable()
  }



  loadTable(): void {
    if(this.obser != undefined){
      this.obser.unsubscribe();
    }
    this.observable = this.cuentaService.getCuentas(this.current_page.toString(),this.serach());
    this.obser = this.observable.subscribe(data =>{
 
        this.cuentas = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });

  }

  ngOnInit(): void {

  }


  agregar(): void {
  	let cuenta = new Cuenta();
    this.cuenta = cuenta;
    this.cuentaEditComponent.setModel(cuenta)
    this.cuentaEditComponent.openModal(this);
  }

  onSelect(cuenta: Cuenta): void {
    this.cuenta = cuenta;
    this.cuentaComponent.cuenta = cuenta;
    this.cuentaComponent.openModal();
  }

	onEditar(cuenta: Cuenta): void {
    this.cuenta = cuenta;
    console.log(cuenta)
    this.cuentaEditComponent.setModel(cuenta)
    this.cuentaEditComponent.openModal(this);
  }	

	onEliminar(cuenta: Cuenta): void {
    this.cuenta = cuenta;
    this.cuentaDeleteComponent.cuenta = cuenta;
    this.cuentaDeleteComponent.openModal(this);
  }
 
	changeTable(cuenta: Cuenta): void 
	{
		for(let m in this.cuentas)
		{
			if(this.cuentas[m].id === cuenta.id )
			{
				this.cuentas[m] = cuenta;
				return;
			}
		}
		this.cuentas.push(cuenta);
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

	eliminar(cuenta : Cuenta): void 
	{
		for(let m in this.cuentas)
		{
			if(this.cuentas[m].id === cuenta.id )
			{	console.log(this.cuentas);
				let position = +m 
				this.cuentas.splice(position,1)
				console.log(+m + 1);
				console.log(this.cuentas);
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
   
 