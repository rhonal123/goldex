import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { Prestamo } from './../../models/prestamo';

import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'tipo-component',
  templateUrl: 'app/templates/tipos/tipo.component.html',
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
   
 