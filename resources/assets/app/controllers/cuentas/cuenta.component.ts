import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { CuentaService } from './../../services/cuenta.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'cuenta-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog" style="width:85%; height:80%;" >
    <div class="modal-content"  *ngIf="cuenta" >
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Detalle Cuenta {{cuenta.id}}</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <div class="col-md-12">
            <cuenta-detalle-component [cuenta]="cuenta"></cuenta-detalle-component>
          </div>
         </div>
      </div>
    </div>
  </div>
</div>
  `,
  providers: [CuentaService]
})
export class CuentaComponent implements OnInit {
  @Input()
  cuenta: Cuenta;

  @ViewChild('modal') modal: ModalDirective;
  constructor(private cuentaService: CuentaService) {


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
   
 