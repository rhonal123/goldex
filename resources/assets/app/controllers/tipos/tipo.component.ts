import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'tipo-component',
  template: `<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" style="width:85%; height:80%;">
    <div class="modal-content" *ngIf="tipo">
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Detalle Tipo {{tipo.id}}</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <div  class="col-md-12">
            <tipo-detalle-component [tipo]="tipo"></tipo-detalle-component>
          </div>
         </div>
      </div>
    </div>
  </div>
</div>
`,
  providers: [TipoService]
})
export class TipoComponent implements OnInit {
  tipo: Tipo;

  @ViewChild('modal') modal: ModalDirective;

  constructor(private tipoService: TipoService) {
    
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
   
 