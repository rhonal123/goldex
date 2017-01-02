import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { TiposComponent } from './tipos.component';

@Component({
  selector: 'tipo-delete-component',
  templateUrl: 'app/templates/tipos/tipo.detele.component.html',
  providers: [TipoService]
})
export class TipoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  tipo: Tipo;
  private component : TiposComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private tipoService: TipoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: TiposComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.tipoService.delete(this.tipo).then((tipo) => {
      this.hideModal();
      this.component.eliminar(tipo);
    }).catch( error => {
      this.mensaje = error.tipos;
    })


  }
}
   
 