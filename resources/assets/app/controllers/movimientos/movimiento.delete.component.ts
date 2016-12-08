import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { MovimientosComponent } from './movimientos.component';

@Component({
  selector: 'movimiento-delete-component',
  templateUrl: 'app/templates/movimientos/movimiento.detele.component.html',
  providers: [MovimientoService]
})
export class MovimientoDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  movimiento: Movimiento;
  private component : MovimientosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private movimientoService: MovimientoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: MovimientosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.movimientoService.delete(this.movimiento).then((movimiento) => {
      this.hideModal();
      this.component.eliminar(movimiento);
    }).catch( error => {
       this.mensaje = error.mensaje;
    })
  }
}
   
 