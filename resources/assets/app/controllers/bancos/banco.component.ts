import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'banco-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="banco">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Detalle Banco {{banco.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <detalle [nombre]="'Banco :'" [contenido]="banco.nombre" ></detalle>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [BancoService]
})
export class BancoComponent implements OnInit {

  banco: Banco;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private bancoService: BancoService) {
    
  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal() :void {
    this.modal.show();
  }
}
   
 