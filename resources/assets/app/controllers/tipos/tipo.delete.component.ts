import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { TiposComponent } from './tipos.component';

@Component({
  selector: 'tipo-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="tipo">
  <div class="modal-header">
     <button type="button" class="close" (click)="hideModal()" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
    <h4 class="modal-title">Eliminar Tipo {{tipo.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <tipo-detalle-component [tipo]="tipo"></tipo-detalle-component>
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
  providers: [TipoService]
})
export class TipoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  tipo: Tipo;
  private component : TiposComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private tipoService: TipoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: TiposComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.tipoService.delete(this.tipo).then((tipo) => {
      this.hideModal();
      this.component.eliminar(tipo);
    }).catch( error => {
      this.mensaje = error.tipos;
    })


  }
}
   
 