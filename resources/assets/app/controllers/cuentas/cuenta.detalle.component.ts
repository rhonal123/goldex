import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'cuenta-detalle-component',
  template: `
    <detalle [nombre]="'Numero :'" [contenido]="cuenta.numero" ></detalle>
    <detalle [nombre]="'Banco :'" [contenido]="cuenta.banco.nombre" ></detalle>
  `
})
export class CuentaDetalleComponent {

  @Input() cuenta: Cuenta;

}