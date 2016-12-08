import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { CuentaService } from './../../services/cuenta.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'cuenta-component',
  templateUrl: 'resources/assets/app/controllers/templates/cuentas/cuenta.component.html',
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
   
 