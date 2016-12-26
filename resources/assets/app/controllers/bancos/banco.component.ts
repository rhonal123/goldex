import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { Prestamo } from './../../models/prestamo';

import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'banco-component',
  templateUrl: 'app/templates/bancos/banco.component.html',
  providers: [BancoService]
})
export class BancoComponent implements OnInit {
  @Input()
  banco: Banco;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private bancoService: BancoService) {
    
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
   
 