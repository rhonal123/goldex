import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';
import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'prestamo-component',
  templateUrl: 'app/templates/prestamos/prestamo.component.html',
  providers: [PrestamoService]
})
export class PrestamoComponent implements OnInit {
  @Input()
  prestamo: Prestamo;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private prestamoService: PrestamoService) {

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
   
 