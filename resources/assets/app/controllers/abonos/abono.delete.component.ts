import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { AbonosComponent } from './abonos.component';

@Component({
  selector: 'abono-delete-component',
  templateUrl: 'app/templates/abonos/abono.detele.component.html',
  providers: [AbonoService]
})
export class AbonoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  abono: Abono;
  private component : AbonosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private abonoService: AbonoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: AbonosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.abonoService.delete(this.abono).then((abono) => {
      this.hideModal();
      this.component.eliminar(abono);
    }).catch( error => {
      this.mensaje = error.cuentas;
    })


  }
}
   
 