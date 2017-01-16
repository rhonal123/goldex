import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'abono-detalle-component',
  template: `
    <detalle [nombre]="'Negocio :'" [contenido]="abono.negocio|detalleNegocio" ></detalle>
    <detalle [nombre]="'Tipo :'" [contenido]="abono.tipo.tipo" ></detalle>
    <detalle [nombre]="'Fecha :'" [contenido]="abono.fecha|fecha" ></detalle>
    <detalle [nombre]="'Estado :'" [contenido]="abono.estado" ></detalle>
    <div class="col-md-12">
      <div class="col-md-6 row" *ngIf="abono.afecta_banco == true">
        <blockquote>
          <label><strong>Datos Banco :</strong></label>
          <table class="table table-hover">
            <tr>
              <td style="text-align: right;"><strong>  Banco :</strong></td>
              <td style="text-align: left"><strong>  {{abono.cuenta.banco.nombre}}</strong></td>
            </tr>

            <tr>
              <td style="text-align: right;"><strong> Cuenta </strong></td>
              <td style="text-align: left;"> <strong> {{abono.cuenta.numero}}</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Nro Referencia :</strong></td>
              <td style="text-align: left;"> <strong> {{abono.referencia}}</strong></td>
            </tr>
          </table>
        </blockquote>
      </div>       
      <div class="col-md-6 row  pull-right">
        <blockquote>
          <label><strong>Totales :</strong></label>
          <table class="table table-hover">
            <tr>
              <td style="text-align: right;"><strong> Cantidad: </strong></td>
              <td style="text-align: left"><strong> {{abono.cantidad|number:'1.2-2'|montoBs}}</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Monto: </strong></td>
              <td style="text-align: left;"> <strong> {{abono.monto|number:'1.2-2'|montoBs}}</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Saldo: </strong></td>
              <td style="text-align: left;"> <strong> {{abono.saldo|number:'1.2-2'|montoBs}}</strong></td>
            </tr>
          </table>
        </blockquote>
      </div>
    </div>
  `
})
export class AbonoDetalleComponent {
  @Input() abono: Abono;
}
   
 