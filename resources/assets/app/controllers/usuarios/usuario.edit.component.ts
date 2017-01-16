import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder, FormArray, FormControl } from '@angular/forms';


@Component({
  selector: 'usuario-edit-component',
  template: `


<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog" style="width:85%; height:80%;" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Editar Usuario</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body" *ngIf="user">
        <form [formGroup]="userForm" (ngSubmit)="guardar()" class="form-horizontal">

          <div [ngClass]="{'form-group': true, 'has-error': formErrors.name}"  >
            <label for="name" class="col-sm-2 control-label" for="name">Nombre</label>
            <div class="col-sm-10">
              <input  id="name" type="text" class="form-control" formControlName="name" aria-describedby="errornombre" placeholder="Nombre del Usuario" required >
              <span  *ngIf="formErrors.name" id="errorname" class="help-block">{{ formErrors.name}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true, 'has-error': formErrors.email}"  >
            <label for="email" class="col-sm-2 control-label" for="email">Email</label>
            <div class="col-sm-10">
              <input  id="email" type="email" class="form-control" formControlName="email" aria-describedby="errornombre" placeholder="Nombre del Usuario" required >
              <span  *ngIf="formErrors.email" id="erroremail" class="help-block">{{ formErrors.email}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true, 'has-error': formErrors.password}" *ngIf="!user.id">
            <label for="password" class="col-sm-2 control-label" for="password">Password</label>
            <div class="col-sm-10">
              <input  id="password" type="password" class="form-control" formControlName="password" aria-describedby="errorpassword" placeholder="password del Usuario" required >
              <span  *ngIf="formErrors.password" id="erroremail" class="help-block">{{ formErrors.password}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true, 'has-error': formErrors.password_confirmation}" *ngIf="!user.id">
            <label for="password_confirmation" class="col-sm-2 control-label" for="password_confirmation">Password Confirmation</label>
            <div class="col-sm-10">
              <input  id="password_confirmation" type="password" class="form-control" formControlName="password_confirmation" aria-describedby="errornombre" placeholder="password del Usuario" required >
              <span  *ngIf="formErrors.password_confirmation" id="erroremail" class="help-block">{{ formErrors.password_confirmation}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true, 'has-error': formErrors.administrador}"  >
            <label for="administrador" class="col-sm-2 control-label" for="administrador">Administrador </label>
            <div class="col-sm-10"  style="padding-top: 7px;">  
              <select   id="administrador" class="form-control" type="checkbox" formControlName="administrador">
                  <option value="true">administrador</option>
                  <option value="false">comun</option>
              </select>
              <span  *ngIf="formErrors.administrador" id="erroremail" class="help-block">{{ formErrors.administrador}}</span>
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
export class UsuarioEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  userForm: FormGroup;
  component : UsuariosComponent;

  //@ViewChild('userForm') currentForm: NgForm;
  
  @Input() user: User;

  private formErrors: any = {
    'name':'',
    'email': '',
    'password': '',
    'password_confirmation': '',
    'administrador':''
  };

  constructor(private userService: UsuarioService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.userForm) { return; }
     this.formErrors.name  = "";
     this.formErrors.email  = "";
    /*for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }*/
  }

  guardar(): void
  {
    let user = this.userForm.value;
    user.id = this.user.id;
    console.log(user)
    this.userService.guardar(user).then(user => {
      this.component.changeTable(user);
      this.hideModal();
    }).catch( errores =>{
       this.formErrors['name'] =  errores.name;
       this.formErrors['email'] =  errores.email;
       this.formErrors['password'] =  errores.password;
       this.formErrors['password_confirmation'] =  errores.password_confirmation;
    });


  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {  
    this.userForm = this.fB.group({
      'name': '',
      'email': '',
      'password': '',
      'password_confirmation': '',
      'administrador': '' 
    });
   this.userForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(user: User): void {
    this.user = user;
    this.userForm.setValue({
      'name':user.name  || '' ,
      'email': user.email  || '',
      'password': '',
      'password_confirmation': '',
      'administrador': this.user.administrador  || ''
    });
  }

  openModal(component: UsuariosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 