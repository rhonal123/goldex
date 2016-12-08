import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'negocio-component',
  templateUrl: 'resources/assets/app/controllers/templates/negocios/negocio.component.html',
  providers: [NegocioService]
})
export class NegocioComponent implements OnInit {
  @Input()
  negocio: Negocio;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private negocioService: NegocioService) {

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
   
 