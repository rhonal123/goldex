import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { CuentaService } from './../../services/cuenta.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CuentasComponent } from './cuentas.component';

@Component({
  selector: 'cuenta-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog" style="width:85%; height:80%;" >
    <div class="modal-content" *ngIf="cuenta" >
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Eliminar Cuenta {{cuenta.id}}</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <div class="col-md-12">
            <cuenta-detalle-component [cuenta]="cuenta"></cuenta-detalle-component>
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
  providers: [CuentaService]
})
export class CuentaDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  cuenta: Cuenta;
  private component : CuentasComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private cuentaService: CuentaService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: CuentasComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.cuentaService.delete(this.cuenta).then((cuenta) => {
      this.hideModal();
      this.component.eliminar(cuenta);
    }).catch( error => {
       this.mensaje = error.mensaje;
    })
  }
}
   
 