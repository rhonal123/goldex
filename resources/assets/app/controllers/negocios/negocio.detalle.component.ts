import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'negocio-detalle-component',
  template: `
<detalle [nombre]="'Nombre :'" [contenido]="negocio.nombre" ></detalle>
<detalle [nombre]="'Rif :'" [contenido]="negocio.rif" ></detalle>
<detalle [nombre]="'Descripcion :'" [contenido]="negocio.descripcion" ></detalle>
<detalle [nombre]="'Direccion :'" [contenido]="negocio.direccion" ></detalle>
<detalle [nombre]="'Encargado :'" [contenido]="negocio.encargado" ></detalle>
<detalle [nombre]="'Telefono :'" [contenido]="negocio.telefono" ></detalle>
  `
})
export class NegocioDetalleComponent {
  @Input()
  negocio: Negocio;
}
