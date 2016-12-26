import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';
import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { PrestamosComponent } from './prestamos.component';

@Component({
  selector: 'prestamo-delete-component',
  templateUrl: 'app/templates/prestamos/prestamo.detele.component.html',
  providers: [PrestamoService]
})
export class PrestamoDeleteComponent implements OnInit {

  mensaje: string;

  @Input()
  prestamo: Prestamo;
  component : PrestamosComponent;
  @ViewChild('modal') modal: ModalDirective;

  constructor(private prestamoService: PrestamoService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: PrestamosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.prestamoService.delete(this.prestamo).then((prestamo) => {
      this.hideModal();
      this.component.eliminar(prestamo);
    }).catch( error => {
       this.mensaje = error.mensaje;
    })
  }
}
   
 