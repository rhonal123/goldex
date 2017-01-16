import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';

import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'usuario-contrasena-component',
  template:  `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content">
  <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Cambiar Contraseña Usuario</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body" *ngIf="usuario">
      <form [formGroup]="usuarioForm" (ngSubmit)="onSubmit()" class="form-horizontal">
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.password}">
          <label for="password" class="col-sm-2 control-label" for="password">Password</label>
          <div class="col-sm-10">
            <input id="password" class="form-control" formControlName="password" placeholder="password"  type="password" pattern=".{8,}">
            <span *ngIf="formErrors.password" id="errorusername" class="help-block">{{ formErrors.password}}</span>
          </div>
        </div>
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.password_confirmation}">
          <label for="password_confirmation" class="col-sm-2 control-label" for="password_confirmation">Password Confirmation</label>
          <div class="col-sm-10">
            <input  id="password_confirmation" class="form-control" formControlName="password_confirmation" placeholder="password_confirmation"  type="password" pattern=".{8,}">
            <span  *ngIf="formErrors.password_confirmation" id="errorusername" class="help-block">{{ formErrors.password_confirmation}}</span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12" align="right">
            <input type="button" class="btn btn-default" (click)="guardar()" value="Guardar">
          </div>
         </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
  `,
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
   
 