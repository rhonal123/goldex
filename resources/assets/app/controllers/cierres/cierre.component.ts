import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cierre } from './../../models/cierre';
import { Movimiento } from './../../models/movimiento';
import { Abono } from './../../models/abono';

import { CierreService } from './../../services/cierre.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'cierre-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="cierre">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Cierre {{cierre.id}}</h4>
</div>
<div class="modal-body">
  <div class="panel-body">
    <div class="col-md-12">
      <cierre-detalle-component  [cierre]="cierre" [movimientos]="movimientos" [abonos]="abonos" ></cierre-detalle-component>
  </div>
</div> <!-- end  modal-body --> 
</div>
</div>
</div>
`,
  providers: [CierreService]
})
export class CierreComponent implements OnInit {

  private cierre: Cierre;
  private movimientos: Movimiento[] =[];
  private abonos: Abono[] =[];

  @ViewChild('modal') modal: ModalDirective;
  constructor(private cierreService: CierreService) {
    
  }

  ngOnInit(): void {
		
  }

  setModel(cierre :Cierre ): void {
    this.cierre = cierre;
    this.movimientos = [];
    this.abonos = [];
    this.cierreService.getCierre(cierre.id).then(c => {
      this.cierre = c
      this.abonos = c.abonos;
      this.movimientos = c.movimientos;
     });
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal() :void {
    this.modal.show();
  }
}
   
 