import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { Prestamo } from './../../models/prestamo';

import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'abono-component',
  templateUrl: 'app/templates/abonos/abono.component.html',
  providers: [AbonoService]
})
export class AbonoComponent implements OnInit {

  abono: Abono;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private abonoService: AbonoService) {
    
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
   
 