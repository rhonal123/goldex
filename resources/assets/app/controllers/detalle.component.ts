import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 


@Component({
	selector: "detalle",
	template: `
    <div [class]="clase">
      <blockquote>
        <p><label>{{nombre}}</label>{{contenido}}</p>
      </blockquote>
    </div>
	`
}) 
export class DetalleComponent {
	@Input() clase: string = "col-md-3";
	@Input('nombre') nombre: string;
	@Input('contenido') contenido: string; 
}
 