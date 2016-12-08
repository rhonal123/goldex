import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NegociosComponent } from './negocios.component';

@Component({
  selector: 'negocio-delete-component',
  templateUrl: 'resources/assets/app/controllers/templates/negocios/negocio.delete.component.html',
  providers: [NegocioService]
})
export class NegocioDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  negocio: Negocio;
  private component : NegociosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private negocioService: NegocioService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: NegociosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.negocioService.delete(this.negocio).then((negocio) => {
      this.hideModal();
      this.component.eliminar(negocio);
    }).catch( error => {
      this.mensaje = error.mensaje;
    })
  }
}
   
 