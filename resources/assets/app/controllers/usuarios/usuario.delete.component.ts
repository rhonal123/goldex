import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';

@Component({
  selector: 'usuario-delete-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content" *ngIf="user">
  <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Eliminar Usuario {{user.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div class="col-md-12">
        <detalle [nombre]="'Nombre :'" [contenido]="user.name" ></detalle>
        <detalle [nombre]="'Email :'" [contenido]="user.email" ></detalle>
        <detalle [nombre]="'Administador :'" [contenido]="user.administrador|administrador" ></detalle>
      </div>          
      <div class="col-md-12" align="right">
          <label class="label label-danger" role="alert" *ngIf="mensaje">{{mensaje}}</label>
        <button type="button" class="btn btn-danger" (click)="eliminar()">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [UsuarioService]
})
export class UsuarioDeleteComponent implements OnInit {

  private mensaje: string;

  @Input()
  user: User;
  private component : UsuariosComponent;

  @ViewChild('modal') modal: ModalDirective;

  constructor(private userService: UsuarioService) {

  }
  ngOnInit(): void {
		
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal(component: UsuariosComponent) :void {
    this.component = component;
    this.mensaje = "";
    this.modal.show();
  }

  eliminar():void 
  {
    this.userService.delete(this.user).then((user) => {
      this.hideModal();
      this.component.eliminar(user);
    }).catch( error => {
      this.mensaje = error.cuentas;
    })


  }
}
   
 