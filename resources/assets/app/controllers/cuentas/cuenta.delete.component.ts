import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { CuentaService } from './../../services/cuenta.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CuentasComponent } from './cuentas.component';

@Component({
  selector: 'cuenta-delete-component',
  templateUrl: 'app/templates/cuentas/cuenta.detele.component.html',
  providers: [CuentaService]
})
export class CuentaDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  cuenta: Cuenta;
  private component : CuentasComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private cuentaService: CuentaService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: CuentasComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.cuentaService.delete(this.cuenta).then((cuenta) => {
      this.hideModal();
      this.component.eliminar(cuenta);
    }).catch( error => {
       this.mensaje = error.mensaje;
    })
  }
}
   
 