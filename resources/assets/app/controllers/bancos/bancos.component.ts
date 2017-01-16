import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { Paginacion } from './../../models/paginacion';

import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';
import { URLSearchParams} from '@angular/http';  

import {Subscription} from 'rxjs';
import { BancoEditComponent } from './banco.edit.component';
import { BancoDeleteComponent } from './banco.delete.component';
import { BancoComponent } from './banco.component';
import { ChangeDetectorRef } from '@angular/core';

@Component({
  selector: 'bancos-component',
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
        <tr><th>Id</th><th>Marca</th><th></th></tr>
      </thead>
      <tbody class="bancos" >
        <tr *ngFor="let banco of bancos">
          <td ><span>{{banco.id}}</span></td>
          <td ><span>{{banco.nombre}}</span></td>
          <td align="right">
            <span  dropdown >
              <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
              <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
                <li  role="menuitem" (click)="onSelect(banco)" >
                  <a class="dropdown-item" >Mostrar</a>
                </li>
                <li role="menuitem" (click)="onEditar(banco)">
                  <a class="dropdown-item" >Editar</a>
                </li>
                <li role="menuitem" (click)="onEliminar(banco)">
                  <a class="dropdown-item" >Eliminar</a>
                </li>
              </ul>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
    <div align="right">
      <pagination [totalItems]="total" [(ngModel)]="current_page"  [itemsPerPage]="per_page" (pageChanged)="pageChanged($event)" [boundaryLinks]="true" [maxSize]="10" [rotate]="false" previousText="&lsaquo;" nextText="&rsaquo;" firstText="&laquo;" lastText="&raquo;"></pagination><p><strong>Pagina: {{current_page}} Total de Bancos {{total}}</strong></p>
    </div>
  </div>
</div>

<banco-delete-component></banco-delete-component>
<banco-component></banco-component>
<banco-edit-component></banco-edit-component> 
`,
  providers: [BancoService]
})
export class BancosComponent implements OnInit  , AfterViewInit {


  private bancos: Banco[];
  private banco: Banco;
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
 

  @ViewChild(BancoComponent)
  private bancoComponent: BancoComponent;

  @ViewChild(BancoEditComponent)
  private bancoEditComponent: BancoEditComponent;

  @ViewChild(BancoDeleteComponent)
  private bancoDeleteComponent: BancoDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private bancoService: BancoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this.mensaje = ""
    this.isLoading$.next(true);
    if(this.subscription != undefined){
      this.subscription.unsubscribe();
      this.isLoading$.next(false);
    }
    this.observable = this.bancoService.getBancos(this.current_page.toString(),this.serach());
    this.subscription = this.observable.subscribe(data =>{
        this.bancos = data.data;
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
  	let banco = new Banco();
    this.banco = banco;
    this.bancoEditComponent.setModel(banco)
    this.bancoEditComponent.openModal(this);
  }

  onSelect(banco: Banco): void {
    this.banco = banco;
    this.bancoComponent.banco = banco;
    this.bancoComponent.openModal();
  }

	onEditar(banco: Banco): void {
    this.banco = banco;
    this.bancoEditComponent.setModel(banco)
    this.bancoEditComponent.openModal(this);
  }	

	onEliminar(banco: Banco): void {
    this.banco = banco;
    this.bancoDeleteComponent.banco = banco;
    this.bancoDeleteComponent.openModal(this);
  }
 

	changeTable(banco: Banco): void 
	{
		for(let m in this.bancos)
		{
			if(this.bancos[m].id === banco.id )
			{
				this.bancos[m] = banco;
				return;
			}
		}
		this.bancos.push(banco);
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

	eliminar(banco : Banco): void 
	{
		for(let m in this.bancos)
		{
			if(this.bancos[m].id === banco.id )
			{	console.log(this.bancos);
				let position = +m 
				this.bancos.splice(position,1)
				console.log(+m + 1);
				console.log(this.bancos);
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
   
 