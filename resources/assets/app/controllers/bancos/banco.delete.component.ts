import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { BancosComponent } from './bancos.component';

@Component({
  selector: 'banco-delete-component',
  templateUrl: 'app/templates/bancos/banco.detele.component.html',
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
   
 