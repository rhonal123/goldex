import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { MovimientosComponent } from './movimientos.component';

@Component({
  selector: 'movimiento-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="movimiento">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Eliminar Movimiento {{movimiento.id}}</h4>
</div>
<div class="modal-body">
  <div class="panel-body"  >
    <div class="col-md-12">
      <movimiento-detalle-component  [movimiento]="movimiento"></movimiento-detalle-component>
      <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label> 
      <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
  `,
  providers: [MovimientoService]
})
export class MovimientoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  movimiento: Movimiento;
  private component : MovimientosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private movimientoService: MovimientoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: MovimientosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.movimientoService.delete(this.movimiento).then((movimiento) => {
      this.hideModal();
      this.component.eliminar(movimiento);
    }).catch( error => {
       this.mensaje = error.mensaje;
    })
  }
}
   
 