import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { Movimientos } from './../../models/movimientos';

import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import {URLSearchParams} from '@angular/http';  


import { MovimientoEditComponent } from './movimiento.edit.component';
import { MovimientoDeleteComponent } from './movimiento.delete.component';
import { MovimientoComponent } from './movimiento.component';


import { ChangeDetectorRef } from '@angular/core';
declare var $: any;


@Component({
  selector: 'movimientos-component',
  templateUrl: 'app/templates/movimientos/movimientos.component.html',
  providers: [MovimientoService]
})
export class MovimientosComponent implements OnInit  , AfterViewInit {

  private movimientos: Movimiento[];
  private movimiento: Movimiento;
  private activeMovimiento:  Movimiento;

  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private search: string;
  private tipo: string
  private clasificacion: string


  private observable:  Observable<Movimientos>;
  private obser: any;

  private jDesde:any;
  private jHasta: any;


  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(MovimientoComponent)
  private movimientoComponent: MovimientoComponent;

  @ViewChild(MovimientoEditComponent)
  private movimientoEditComponent: MovimientoEditComponent;

  @ViewChild(MovimientoDeleteComponent)
  private movimientoDeleteComponent: MovimientoDeleteComponent;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private movimientoService: MovimientoService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    this._changeDetectionRef.detectChanges();

    if(this.obser != undefined){
      this.obser.unsubscribe();
    }

    this.observable = this.movimientoService.getMovimientos(
      this.current_page.toString(),
      this.serach()
    );
    
    this.obser = this.observable.subscribe(data =>{
        data = data as Movimientos;
        this.movimientos = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });

  }

  ngOnInit(): void {
    this.jDesde =  ($("#search_desde") as any ).datepicker({format: "yyyy/mm/dd"});
    this.jHasta = ($("#search_hasta") as any).datepicker({format: "yyyy/mm/dd"});
    this.loadTable(); 
  }


  agregar(): void {
  	let movimiento = new Movimiento( );
    this.movimiento = movimiento;
    this.movimientoEditComponent.setModel(movimiento)
    this.movimientoEditComponent.openModal(this);
  }

  onSelect(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.movimientoComponent.movimiento = movimiento;
    this.movimientoComponent.openModal();
  }

	onEditar(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.movimientoEditComponent.setModel(movimiento)
    this.movimientoEditComponent.openModal(this);
  }	

	onEliminar(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.movimientoDeleteComponent.movimiento = movimiento;
    this.movimientoDeleteComponent.openModal(this);
  }
 

	changeTable(movimiento: Movimiento): void 
	{
		for(let m in this.movimientos)
		{
			if(this.movimientos[m].id === movimiento.id )
			{
				this.movimientos[m] = movimiento;
				return;
			}
		}
		this.movimientos.push(movimiento);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();

    let desde = this.jDesde.val();
    let hasta = this.jHasta.val();

    if(this.search)
    {
      param.set("texto",this.search)
    }  
    if(desde)
    { 
      param.set("desde",desde)
    }  
    if(hasta)
    {
      param.set("hasta",hasta)
    }  

    if(this.tipo)
    {
      param.set("tipo",this.tipo)
    }  

    if(this.clasificacion)
    {
      param.set("clasificacion",this.clasificacion)
    }  


    return param;
  };

	eliminar(movimiento : Movimiento): void 
	{
		for(let m in this.movimientos)
		{
			if(this.movimientos[m].id === movimiento.id )
			{	console.log(this.movimientos);
				let position = +m 
				this.movimientos.splice(position,1)
				console.log(+m + 1);
				console.log(this.movimientos);
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
 

  onActive(movimiento: Movimiento  ): any {
    this.activeMovimiento = movimiento;
  }

  openModal( ):void{
    this.modal.show()
  }

  hideModal(): void{
    this.modal.hide();
  }
 

}
   
 