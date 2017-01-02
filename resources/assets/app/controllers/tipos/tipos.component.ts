import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { Paginacion } from './../../models/paginacion';

import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { BehaviorSubject } from 'rxjs/BehaviorSubject';
import { URLSearchParams} from '@angular/http';  

import {Subscription} from 'rxjs';
import { TipoEditComponent } from './tipo.edit.component';
import { TipoDeleteComponent } from './tipo.delete.component';
import { TipoComponent } from './tipo.component';
import { ChangeDetectorRef } from '@angular/core';

@Component({
  selector: 'tipos-component',
  templateUrl: 'app/templates/tipos/tipos.component.html',
  providers: [TipoService]
})
export class TiposComponent implements OnInit   {


  private tipos: Tipo[];
  private tipo: Tipo;
  private activeTipo:  Tipo;
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
 

  @ViewChild(TipoComponent)
  private tipoComponent: TipoComponent;

  @ViewChild(TipoEditComponent)
  private tipoEditComponent: TipoEditComponent;

  @ViewChild(TipoDeleteComponent)
  private tipoDeleteComponent: TipoDeleteComponent;

  constructor( private route: Router,private tipoService: TipoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this.mensaje = ""
    this.isLoading$.next(true);
    if(this.subscription != undefined){
      this.subscription.unsubscribe();
      this.isLoading$.next(false);
    }
    this.observable = this.tipoService.getTipos(this.current_page.toString(),this.serach());
    this.subscription = this.observable.subscribe(data =>{
        this.tipos = data.data;
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
  	let tipo = new Tipo();
    this.tipo = tipo;
    this.tipoEditComponent.setModel(tipo)
    this.tipoEditComponent.openModal(this);
  }

  onSelect(tipo: Tipo): void {
    this.tipo = tipo;
    this.tipoComponent.tipo = tipo;
    this.tipoComponent.openModal();
  }

	onEditar(tipo: Tipo): void {
    this.tipo = tipo;
    this.tipoEditComponent.setModel(tipo)
    this.tipoEditComponent.openModal(this);
  }	

	onEliminar(tipo: Tipo): void {
    this.tipo = tipo;
    this.tipoDeleteComponent.tipo = tipo;
    this.tipoDeleteComponent.openModal(this);
  }
 
	changeTable(tipo: Tipo): void 
	{
		for(let m in this.tipos)
		{
			if(this.tipos[m].id === tipo.id )
			{
				this.tipos[m] = tipo;
				return;
			}
		}
		this.tipos.push(tipo);
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

	eliminar(tipo : Tipo): void 
	{
		for(let m in this.tipos)
		{
			if(this.tipos[m].id === tipo.id )
			{	console.log(this.tipos);
				let position = +m 
				this.tipos.splice(position,1)
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

  onActive(tipo: Tipo  ): any {
    this.activeTipo = tipo;
  }
}
   
 