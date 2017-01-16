import { Component, Input, ViewContainerRef,  OnInit  } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../models/user';
import { CurrentUsuario } from './../services/current.usuario.service';
import { JqueryComponent } from './jquery.component';

@Component({
  selector: 'index-component',
  template: `
<div class="col-md-12 ">
</div>  
  `,
  providers: [CurrentUsuario]
})
export class IndexComponent implements OnInit {

	user: User;

  constructor( private route: Router,private currentUsuario: CurrentUsuario) {


  }

  ngOnInit(): void {
  	this.user = this.currentUsuario.user;
  }


}
 
