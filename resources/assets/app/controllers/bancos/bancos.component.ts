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
  templateUrl: 'app/templates/bancos/bancos.component.html',
  providers: [BancoService]
})
export class BancosComponent implements OnInit  , AfterViewInit {


  private bancos: Banco[];
  private banco: Banco;
  private activeBanco:  Banco;
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
  	let banco = new Banco(null,null,null,null);
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
 

  onActive(banco: Banco  ): any {
    this.activeBanco = banco;
  }

 

}
   
 