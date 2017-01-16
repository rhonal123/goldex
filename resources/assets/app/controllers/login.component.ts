import { Component, Input, ViewContainerRef,  OnInit  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { User } from './../models/user';
import { CurrentUsuario } from './../services/current.usuario.service';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'index-component',
  template: `
<div class="col-md-6 col-md-offset-6">
  <div class="panel panel-primary">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
      <form [formGroup]="form" (ngSubmit)="inciar()" class="form-horizontal">
         
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.email}"  >
          <label class="col-sm-2 control-label" for="email"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Email</label> 
          <div class="col-sm-10">
            <input  id="email" type="email" class="form-control" formControlName="email" aria-describedby="erroremail" required >
            <span  *ngIf="formErrors.email" id="errornombre" class="help-block">{{ formErrors.email}}</span>
          </div>
        </div>

        <div [ngClass]="{'form-group': true, 'has-error': formErrors.password}"  >
          <label for="password" class="col-sm-2 control-label" for="password"><span class="glyphicon glyphicon glyphicon-lock" aria-hidden="true"></span> Password</label>
          <div class="col-sm-10">
            <input  id="password" type="password" class="form-control" formControlName="password" aria-describedby="errorpassword" required >
            <span  *ngIf="formErrors.password" id="errornombre" class="help-block">{{ formErrors.password}}</span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12" align="right">
            <input type="button" class="btn btn-default" (click)="inciar()" value="Iniciar">
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
`,
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