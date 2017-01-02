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
  templateUrl: 'app/templates/cuentas/cuentas.component.html',
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

  constructor( private route: Router,private cuentaService: CuentaService,private _changeDetectionRef: ChangeDetectorRef) {

  
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
   
 