import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'movimiento-detalle-component',
  template: `
    <detalle [nombre]="'Negocio :'" [contenido]="movimiento.negocio|detalleNegocio" ></detalle>
    <detalle [nombre]="'Fecha :'" [contenido]="movimiento.fecha" ></detalle>
    <detalle [nombre]="'Tipo :'" [contenido]="movimiento.tipo" ></detalle>
    <detalle [nombre]="'Referencia :'" [contenido]="movimiento.referencia" *ngIf="transferencia()" ></detalle>
    <detalle [nombre]="'Cuenta  :'" [contenido]="movimiento.cuenta|detalleCuenta" *ngIf="transferencia()" ></detalle>
    <detalle [nombre]="'Estado  :'" [contenido]="movimiento.estado" ></detalle>
    <div class="col-md-12">
      <div class="col-md-6 row">
        <blockquote style="height: 185px;">
          <p><label> Descripción :</label>{{movimiento.descripcion}}</p>
        </blockquote>
      </div>
      <div class="col-md-6 row">
        <blockquote>
        <label><strong>Totales :</strong></label>
        <table class="table table-hover">
          <tr *ngIf="transferencia()">
            <td style="text-align: right;"><strong> Comisión : </strong></td>
            <td style="text-align: left"><strong> {{movimiento.comision|number:'1.2-2'}} Bs.</strong></td>
          </tr>
          <tr *ngIf="transferencia()">
            <td style="text-align: right;"><strong> Monto : </strong></td>
            <td style="text-align: left;"> <strong> {{movimiento.monto|number:'1.2-2'}} Bs.</strong></td>
          </tr>

          <tr >
            <td style="text-align: right;"><strong> Total: </strong></td>
            <td style="text-align: left;"> <strong> {{movimiento.saldo|number:'1.2-2'}} Bs.</strong></td>
          </tr>

        </table>
        </blockquote>
      </div>
    </div>
  `
})
export class MovimientoDetalleComponent {

  @Input() movimiento: Movimiento;

  transferencia():boolean {
    return (this.movimiento.tipo === "TRANSFERENCIA"? true:false);
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