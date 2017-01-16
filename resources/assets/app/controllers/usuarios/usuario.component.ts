import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'usuario-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" style="width:85%; height:80%;">
    <div class="modal-content" *ngIf="user">
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Detalle Usuario {{user.id}}</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <div  class="col-md-12">
          <detalle [nombre]="'Nombre :'" [contenido]="user.name" ></detalle>
          <detalle [nombre]="'Email :'" [contenido]="user.email" ></detalle>
          <detalle [nombre]="'Administador :'" [contenido]="user.administrador|administrador" ></detalle>
          </div>
         </div>
      </div>
    </div>
  </div>
</div>
`,
  providers: [UsuarioService]
})
export class UsuarioComponent implements OnInit {
  
  user: User;

  @ViewChild('modal') modal: ModalDirective;


  constructor(private userService: UsuarioService) {
    
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
   
 