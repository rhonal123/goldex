import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { AbonosComponent } from './abonos.component';

@Component({
  selector: 'abono-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="abono">
  <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Eliminar  Abono {{abono.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <abono-detalle-component [abono]="abono"></abono-detalle-component>
        <div class="col-md-12" align="right">
          <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label>
            <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [AbonoService]
})
export class AbonoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  abono: Abono;
  private component : AbonosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private abonoService: AbonoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: AbonosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void {
    this.abonoService.delete(this.abono).then((abono) => {
      this.hideModal();
      this.component.eliminar(abono);
    }).catch( error => {
      this.mensaje = error.cuentas;
    })
  }
}
   
 