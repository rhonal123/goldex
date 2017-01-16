import { Component,ViewContainerRef, ViewChild,  Input, OnInit, } from '@angular/core';
import { Router, CanActivate } from '@angular/router';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CurrentUsuario } from './../services/current.usuario.service';
import { User } from './../models/user';

import { UsuarioContrasenaComponent} from './usuarios/usuario.contrasena.component';
import 'rxjs/add/operator/catch' 

@Component({
  selector: 'app-component',
  templateUrl:'assets/app.component.html',
  providers: [CurrentUsuario]
})
export class AppComponent  implements OnInit  {
  user: User; 

  @ViewChild(UsuarioContrasenaComponent)
  usuarioContrasenaComponent :UsuarioContrasenaComponent ;

  public constructor(private route: Router,private viewContainerRef:ViewContainerRef,private currentUsuario: CurrentUsuario) {

  }

  ngOnInit(): void {
    this.currentUsuario.getCurrentUser().subscribe(
      elemento => {
        localStorage['user'] = this.user;
        this.user = elemento as User
      },
      err => {
        this.user = null
        this.route.navigate(['/login']);
      });
  }

  onCambiarContrasena(): void {
    this.usuarioContrasenaComponent.setModel(this.user);
    this.usuarioContrasenaComponent.openModal(this);
   }

  cerrarSesion(): void {
    this.currentUsuario.logout();
  }

  canToDo(operacion: string): boolean
  {
    return true;
  }  
}