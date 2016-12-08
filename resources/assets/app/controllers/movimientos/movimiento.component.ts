import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'movimiento-component',
  templateUrl: 'app/templates/movimientos/movimiento.component.html',
  providers: [MovimientoService]
})
export class MovimientoComponent implements OnInit {
  @Input()
  movimiento: Movimiento;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private movimientoService: MovimientoService) {

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
   
 