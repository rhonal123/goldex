import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';

import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'abono-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="abono">
  <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Detalle Abono {{abono.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
      <abono-detalle-component [abono]="abono"></abono-detalle-component>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [AbonoService]
})
export class AbonoComponent implements OnInit {

  abono: Abono;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private abonoService: AbonoService) {
    
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
   
 