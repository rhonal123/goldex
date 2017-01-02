import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
  selector: 'tipo-detalle-component',
  template: `
    <detalle [nombre]="'Id :'" [contenido]="tipo.id"></detalle>
    <detalle [nombre]="'Tipo :'" [contenido]="tipo.tipo"></detalle>
    <detalle [nombre]="'Simbo :'" [contenido]="tipo.simbolo"></detalle>
    <detalle [nombre]="'Tasa :'" [contenido]="tipo.tasa"></detalle>
    <detalle [nombre]="'Divisa :'" [contenido]="tipo.divisa|divisa"></detalle>

  `
})
export class TipoDetalleComponent {
  @Input() tipo: Tipo;
}