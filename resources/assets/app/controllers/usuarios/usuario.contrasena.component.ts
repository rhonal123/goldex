import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';

import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'usuario-contrasena-component',
  templateUrl:  'app/templates/usuarios/usuario.contrasena.component.html',
  providers: [UsuarioService]
})
export class UsuarioContrasenaComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  usuarioForm: FormGroup;
  component : any;
  usuario: User;
  formErrors: any = {
    'password': '',
    'password_confirmation': '',
  };

  constructor(private usuariosService: UsuarioService,private fB: FormBuilder ) {
   
  }

  onValueChanged(data?: any) {
    if (!this.usuarioForm) { return; }
    this.formErrors.password = ""
    this.formErrors.password_confirmation = ""

  }



  guardar(){
    let datos = this.usuarioForm.value;
    this.usuariosService.cambiarContrasena(this.usuario,datos).then(data => {
        alert("contraseña actualizada")
         this.hideModal()
    }).catch((errores)=>{
       this.formErrors['password'] =  errores.password;
       this.formErrors['password_confirmation'] =  errores.password_confirmation;
    });

  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {
    this.usuarioForm = this.fB.group({
      'password': '',
      'password_confirmation': '',
   });
   this.usuarioForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(usuario: User): void {
    this.usuario = usuario;
    this.usuarioForm.setValue(
    {
      'password': '',
      'password_confirmation': '',
    });
  }

  openModal(component: any) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 