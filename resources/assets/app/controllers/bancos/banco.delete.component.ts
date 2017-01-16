import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { BancosComponent } from './bancos.component';

@Component({
  selector: 'banco-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="banco">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Eliminar Banco {{banco.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <detalle [nombre]="'Banco :'" [contenido]="banco.nombre" ></detalle>
      </div>
    </div>
    <div class="col-md-12" align="right">
      <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label>
      <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [BancoService]
})
export class BancoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  banco: Banco;
  private component : BancosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private bancoService: BancoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: BancosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.bancoService.delete(this.banco).then((banco) => {
      this.hideModal();
      this.component.eliminar(banco);
    }).catch( error => {
      this.mensaje = error.cuentas;
    })


  }
}
   
 