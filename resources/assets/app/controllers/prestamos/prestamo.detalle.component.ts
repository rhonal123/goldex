import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';
import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'prestamo-detalle-component',
  template: `
    <detalle [nombre]="'Negocio :'" [contenido]="prestamo.negocio|detalleNegocio" ></detalle>
    <detalle [nombre]="'Tipo :'" [contenido]="prestamo.tipo" ></detalle>
    <detalle [nombre]="'Fecha :'" [contenido]="prestamo.fecha" ></detalle>
    <detalle [nombre]="'Usuario :'" [contenido]="prestamo.user.name" ></detalle>
    <detalle [nombre]="'Cuenta :'" [contenido]="prestamo.cuenta.numero" *ngIf="prestamo.tipo == 'efectivo'"></detalle>
    <detalle [nombre]="'Referencia :'" [contenido]="prestamo.referencia" *ngIf="prestamo.tipo == 'efectivo'"></detalle>
    <div class="col-md-12">
      <div class="col-md-6 row">
        <blockquote style="height: 185px;">
          <p><label> Descripción :</label>{{prestamo.descripcion}}</p>
        </blockquote>
      </div>
      <div class="col-md-6 row">
        <blockquote>
        <label><strong>Totales :</strong></label>
        <table class="table table-hover">
          <tr>
            <td style="text-align: right;"><strong> Precio Puro (gramos): </strong></td>
            <td style="text-align: left"><strong> {{prestamo.precio_material|number:'1.2-2'}} Bs.</strong></td>
          </tr>
          <tr>
            <td style="text-align: right;"><strong> Cantidad de puro: </strong></td>
            <td style="text-align: left;"> <strong> {{prestamo.monto/prestamo.precio_material|number:'1.2-2'}} Grs.</strong></td>
          </tr>

          <tr *ngIf="prestamo.tipo == 'efectivo'">
            <td style="text-align: right;"><strong> Comision: </strong></td>
            <td style="text-align: left;"> <strong> {{prestamo.comision|number:'1.2-2'}} Bs.</strong></td>
          </tr>
          <tr>
            <td style="text-align: right;"><strong> Monto: </strong></td>
            <td style="text-align: left;"> <strong> {{prestamo.monto|number:'1.2-2'}} Bs.</strong></td>
          </tr>
        </table>
        </blockquote>
      </div>
    </div>
  `
})
export class PrestamoDetalleComponent {

  @Input() prestamo: Prestamo;
}