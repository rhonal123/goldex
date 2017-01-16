import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cierre } from './../../models/cierre';
import { CierreService } from './../../services/cierre.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CierresComponent } from './cierres.component';

@Component({
  selector: 'cierre-delete-component',
  template:`
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="cierre">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Eliminar Cierre {{cierre.id}}</h4>
</div>
<div class="modal-body">
  <div class="panel-body"  >
    <div class="col-md-12">
      <cierre-detalle-component  [cierre]="cierre"></cierre-detalle-component>
      <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label> 
      <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
`,
  providers: [CierreService]
})
export class CierreDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  cierre: Cierre;
  private component : CierresComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private cierreService: CierreService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: CierresComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.cierreService.delete(this.cierre).then((cierre) => {
      this.hideModal();
      this.component.eliminar(cierre);
    }).catch( error => {
      this.mensaje = error.cuentas;
    })


  }
}
   
 