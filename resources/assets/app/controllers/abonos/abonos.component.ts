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
  templateUrl: 'app/templates/abonos/abonos.component.html',
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
    this.jDesde   = JqueryComponent.fecha("#search_desde");
    this.jHasta   = JqueryComponent.fecha("#search_hasta");
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
   
 