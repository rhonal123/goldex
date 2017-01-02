import { Component, Input, ViewContainerRef,  OnInit  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { User } from './../models/user';
import { CurrentUsuario } from './../services/current.usuario.service';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'index-component',
  templateUrl: 'app/templates/login.component.html',
  providers: [CurrentUsuario]
})
export class LoginComponent implements OnInit {

	user: User;


  private form: FormGroup;
  private formErrors: any = {
    'email':'',
    'password':''
  };

  constructor(private activatedRoute: ActivatedRoute,private router: Router,private currentUsuario: CurrentUsuario, private fB: FormBuilder ) {

  }

  formBuilder(): void 
  {
    this.form = this.fB.group({
      'email': '',
      'password': ''
    });
   this.form.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  onValueChanged(data?: any) {
    if (!this.form) { return; }
     this.formErrors.email  = "";
     this.formErrors.password  = "";

  }


  inciar():void{
    let value = this.form.value;
    this.currentUsuario.login(value).then(usuario => {
      ///this.router.navigate(['miMoney'])
     window.location.href= this.currentUsuario.root;
    }).catch((errores)=>{
      console.log(errores.nombre);
       this.formErrors['email'] =  errores.email
       this.formErrors['password'] =  errores.password
    });

  }

  ngOnInit(): void {
    this.activatedRoute.params.subscribe(params => {
 	  	  this.formBuilder();
		    this.form.setValue({
		      'email': '',
		      'password': ''
		    });
      this.currentUsuario.getCurrentUser().subscribe(
        elemento => {
          window.location.href= this.currentUsuario.root;
        });
    });
  }
}