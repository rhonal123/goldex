import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { UsuariosComponent } from './usuarios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder, FormArray, FormControl } from '@angular/forms';


@Component({
  selector: 'usuario-edit-component',
  templateUrl: 'app/templates/usuarios/usuario.edit.component.html',
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
    console.log(user)
    this.userForm.setValue({
      'name':user.name,
      'email': user.email,
      'password': '',
      'password_confirmation': '',
      'administrador': this.user.administrador
    });
  }

  openModal(component: UsuariosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 