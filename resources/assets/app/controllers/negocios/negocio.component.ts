import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { Abono } from './../../models/abono';
import { Movimiento } from './../../models/movimiento';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'negocio-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="negocio" >
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <h4 class="modal-title">Detalle Negocio {{negocio.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <negocio-detalle-component [negocio]="negocio"></negocio-detalle-component>
      </div>

      <div  class="col-md-12">
        <negocio-detalle-component [negocio]="negocio"></negocio-detalle-component>
      </div>
      <h4 class="pull-right">Movimientos Pendientes por cerrar. </h4>
      <div  class="col-md-8 col-md-offset-4" align="rigth">
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
      </div>
      <div  class="col-md-8 col-md-offset-4">
        <label><strong>Totales :</strong></label>
        <table class="table table-hover" align="right">
          <tr>
            <td style="text-align: right;"><strong> Total  : </strong></td>
            <td style="text-align: left"><strong> {{total|number:'1.2-2'}} Bs.</strong></td>
          </tr>
          <tr >
            <td style="text-align: right;"><strong> Total Gramos: </strong></td>
            <td style="text-align: left;"> <strong> {{totalGramos|number:'1.2-2'}} Gramos.</strong></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>`,
  providers: [NegocioService]
})
export class NegocioComponent implements OnInit {

  negocio: Negocio;
  abonos :Abono[];
  movimientos :Movimiento[];

  total: number = 0.0;
  totalGramos: number = 0.0;

  @ViewChild('modal') modal: ModalDirective;
  constructor(private negocioService: NegocioService) {

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


  ngOnInit(): void {
    this.modal.onShown.subscribe((event : any) => {

    })
  }

  setModel(negocio: Negocio): void {
    this.negocio = negocio;
    this.movimientos = []
    this.abonos = []
    this.total = 0.0
    this.totalGramos = 0.0
    this.negocioService.movimientos_creados(this.negocio.id).subscribe(res => {
      this.movimientos = res;
      for (let movimiento of this.movimientos) {
        this.total += movimiento.saldo
        this.totalGramos += this.totalGramo(movimiento)
      }
    })
  }


  hideModal(): void {
    this.modal.hide();
  }

  openModal() :void {
    this.modal.show();
  }
}
   
 