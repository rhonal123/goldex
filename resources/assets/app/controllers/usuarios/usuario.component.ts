import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { Prestamo } from './../../models/prestamo';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'usuario-component',
  templateUrl: 'app/templates/usuarios/usuario.component.html',
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
   
 