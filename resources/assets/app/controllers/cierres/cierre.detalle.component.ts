import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cierre } from './../../models/cierre';
import { Movimiento } from './../../models/movimiento';
import { Abono } from './../../models/abono';

import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'cierre-detalle-component',
  template: `
    <detalle [nombre]="'Negocio :'" [contenido]="cierre.negocio|detalleNegocio" ></detalle>
    <detalle [nombre]="'Fecha :'" [contenido]="cierre.fecha" ></detalle>
    <detalle [nombre]="'Estado :'" [contenido]="cierre.estado" ></detalle>
    <div class="col-md-12">
	     <tabset>
		    <tab [heading]="countAbono()"> 
          <div class="list-group-item" *ngFor="let abono of abonos" >
            <h4 class="list-group-item-heading">
              <strong>{{abono.tipo.tipo}}</strong>
              <span *ngIf="abono.afecta_banco">{{abono.referencia}}</span>
              <span *ngIf="abono.afecta_banco">{{abono.cuenta.banco.nombre}}</span>
              <span *ngIf="abono.afecta_banco">{{abono.cuenta.numero}}</span>
              <span> Fecha {{abono.fecha}}</span>
            </h4>
            <div class="row">
              <div class="col-md-6" align="center">
                <label> Tasa</label>
                <span>{{abono.tasa}}%</span>
              </div>
              <div class="col-md-6" align="right"> 
                <label> Cantidad </label>
                <span>{{abono.cantidad|number:'1.2-2'}}{{abono.tipo.simbolo}}</span>
              </div>
              <div class="col-md-6" align="right"> 
                <label> Total </label>
                <span>{{abono.saldo|number:'1.2-2'}}</span>
              </div>
            </div>
          </div>
		    </tab>
		    <tab [heading]="countMovimientos()">
		    	<div class="list-group-item" *ngFor="let movimiento of movimientos" >
          	<h4 class="list-group-item-heading">
            	<strong>{{movimiento.tipo}}</strong>
             	<span *ngIf="isTransferencia(movimiento)">{{movimiento.referencia}}</span>
             	<span *ngIf="isTransferencia(movimiento)">{{movimiento.cuenta.banco.nombre}}</span>
             	<span *ngIf="isTransferencia(movimiento)">{{movimiento.cuenta.numero}}</span>
             	<span> Fecha {{movimiento.fecha}}</span>
          	</h4>
          	<div class="row">
          		<div class="col-md-4"> 
            		<label>Monto</label>
            		<span>{{movimiento.monto|number:'1.2-2'}}</span>
          		</div>
          		<div class="col-md-4" align="center" *ngIf="isEfectivo(movimiento)">
            		<label>Comision</label>
            		<span>{{movimiento.comision}}%</span>
          		</div>
          		<div [ngClass]="{'col-md-4': isEfectivo(movimiento),'col-md-8': isTransferencia(movimiento)}"  align="right"> 
            		<label>Total </label>
            		<span>{{movimiento.saldo|number:'1.2-2'}}</span>
          		</div>
          		<div class="col-md-6" align="right"> 
            		<label>Precio Gramo </label>
            		<span>{{movimiento.precio_puro|number:'1.2-2'}}</span>
          		</div>
          		<div class="col-md-6" align="right"> 
            		<label>Total Gramo </label>
            		<span>{{totalGramo(movimiento)|number:'1.2-2'}}</span>
          		</div>
          	</div>
	        </div>
		    </tab> <!-- End TAB  -->
		  </tabset>
    </div>
    <div class="col-md-6 col-md-offset-6" style="margin-top: 40px;">
        <blockquote>
        <label><strong>Totales :</strong></label>
        <table class="table table-hover">
          <tr>
            <td style="text-align: right;"><strong> Prestamo : </strong></td>
            <td style="text-align: left"><strong> {{cierre.prestamo|number:'1.2-2'}} Bs.</strong></td>
          </tr>
          <tr>
            <td style="text-align: right;"><strong> Abono : </strong></td>
            <td style="text-align: left;"> <strong> {{cierre.abono|number:'1.2-2'}} Bs.</strong></td>
          </tr>

          <tr>
            <td style="text-align: right;"><strong> Total: </strong></td>
            <td style="text-align: left;"> <strong> {{cierre.saldo|number:'1.2-2'}} Bs.</strong></td>
          </tr>

        </table>
        </blockquote>
    </div>
  `
})
export class CierreDetalleComponent {

  @Input() cierre: Cierre;

  @Input() movimientos: Movimiento[] =[];
  @Input() abonos: Abono[] =[];

  countAbono() :string {
  	return ` Total de Abonos ${this.abonos.length}`;
  }

  countMovimientos() :string{
  	return ` Total de Movimientos ${this.movimientos.length}`;
  }


  isTransferencia(movimiento: Movimiento): boolean {
    return movimiento.tipo === "TRANSFERENCIA"
  }

  isEfectivo(movimiento: Movimiento): boolean {
    return movimiento.tipo === "EFECTIVO"
  }

  totalGramo(movimiento: Movimiento): number {
    if(movimiento.precio_puro === 0 || movimiento.precio_puro == undefined) {
      return 0
    }
    else{
      return movimiento.saldo /  movimiento.precio_puro 
    }
  }


}
 