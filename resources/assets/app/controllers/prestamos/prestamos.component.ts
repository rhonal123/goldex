import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';

import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import {URLSearchParams} from '@angular/http';  

import { Paginacion } from './../../models/paginacion';

import { PrestamoEditComponent } from './prestamo.edit.component';
import { PrestamoDeleteComponent } from './prestamo.delete.component';
import { PrestamoComponent } from './prestamo.component';
import { ChangeDetectorRef } from '@angular/core';
import { JqueryComponent } from './../jquery.component';



@Component({
  selector: 'prestamos-component',
  templateUrl: 'app/templates/prestamos/prestamos.component.html',
  providers: [PrestamoService]
})
export class PrestamosComponent implements OnInit  , AfterViewInit {

  private prestamos: Prestamo[];
  private prestamo: Prestamo;
  private activePrestamo:  Prestamo;

  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private search: string;

  private tipo: string;
  private search_desde: string;
  private search_hasta: string;

  private observable:  Observable<Paginacion>;
  private obser: any;

  private jDesde:any;
  private jHasta: any;
  private jnegocio: any;


  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(PrestamoComponent)
  private prestamoComponent: PrestamoComponent;

  @ViewChild(PrestamoEditComponent)
  private prestamoEditComponent: PrestamoEditComponent;

  @ViewChild(PrestamoDeleteComponent)
  private prestamoDeleteComponent: PrestamoDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private prestamoService: PrestamoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this._changeDetectionRef.detectChanges();

    if(this.obser != undefined){
      this.obser.unsubscribe();
    }

    this.observable = this.prestamoService.getPrestamos(
      this.current_page.toString(),
      this.serach()
    );
    
    this.obser = this.observable.subscribe(data =>{
        this.prestamos = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });

  }

  ngOnInit(): void {
    this.jDesde = JqueryComponent.fecha("#search_desde");
    this.jHasta = JqueryComponent.fecha("#search_hasta");
    this.jnegocio =JqueryComponent.negocios("#negocio_id");
    this.loadTable(); 
  }

  agregar(): void {
  	let prestamo = new Prestamo( );
    this.prestamo = prestamo;
    this.prestamoEditComponent.setModel(prestamo)
    this.prestamoEditComponent.openModal(this);
  }

  onSelect(prestamo: Prestamo): void {
    this.prestamo = prestamo;
    this.prestamoComponent.prestamo = prestamo;
    this.prestamoComponent.openModal();
  }

	onEditar(prestamo: Prestamo): void {
    this.prestamo = prestamo;
    this.prestamoEditComponent.setModel(prestamo)
    this.prestamoEditComponent.openModal(this);
  }	

	onEliminar(prestamo: Prestamo): void {
    this.prestamo = prestamo;
    this.prestamoDeleteComponent.prestamo = prestamo;
    this.prestamoDeleteComponent.openModal(this);
  }
 

	changeTable(prestamo: Prestamo): void 
	{
		for(let m in this.prestamos)
		{
			if(this.prestamos[m].id === prestamo.id )
			{
				this.prestamos[m] = prestamo;
				return;
			}
		}
		this.prestamos.push(prestamo);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();
    let desde = this.jDesde.val();
    let hasta = this.jHasta.val();
    let negocio_id = this.jnegocio.val();
    if(this.search) {
      param.set("texto",this.search)
    }  
    if(desde) { 
      param.set("desde",desde)
    }  
    if(hasta) {
      param.set("hasta",hasta)
    }  
    if(this.tipo) {
      param.set("tipo",this.tipo)
    }  
    if(negocio_id) {
      param.set("negocio_id",negocio_id);
    }  
    return param;
  };

	eliminar(prestamo : Prestamo): void 
	{
		for(let m in this.prestamos)
		{
			if(this.prestamos[m].id === prestamo.id )
			{	
				let position = +m 
				this.prestamos.splice(position,1)
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
 

  onActive(prestamo: Prestamo  ): any {
    this.activePrestamo = prestamo;
  }

  openModal( ):void{
    this.modal.show()
  }

  hideModal(): void{
    this.modal.hide();
  }
 

}
   
 