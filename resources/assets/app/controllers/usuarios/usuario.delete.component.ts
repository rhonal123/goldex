import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';

@Component({
  selector: 'usuario-delete-component',
  templateUrl: 'app/templates/usuarios/usuario.detele.component.html',
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
   
 