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
  templateUrl: 'app/templates/negocios/negocios.component.html',
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
    this.negocioComponent.negocio = negocio;
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
			{	console.log(this.negocios);
				let position = +m 
				this.negocios.splice(position,1)
				console.log(+m + 1);
				console.log(this.negocios);
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
   
 