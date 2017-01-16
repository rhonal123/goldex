import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NegociosComponent } from './negocios.component';

@Component({
  selector: 'negocio-delete-component',
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
      <div class="col-md-12" align="right">
        <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label> 
        <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>`,
  providers: [NegocioService]
})
export class NegocioDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  negocio: Negocio;
  private component : NegociosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private negocioService: NegocioService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: NegociosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.negocioService.delete(this.negocio).then((negocio) => {
      this.hideModal();
      this.component.eliminar(negocio);
    }).catch( error => {
      this.mensaje = error.mensaje;
    })
  }
}
   
 