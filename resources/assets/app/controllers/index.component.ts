import { Component, Input, ViewContainerRef,  OnInit  } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../models/user';
import { CurrentUsuario } from './../services/current.usuario.service';

@Component({
  selector: 'index-component',
  templateUrl: 'app/templates/index.component.html',
  providers: [CurrentUsuario]
})
export class IndexComponent implements OnInit {

	user: User;

  constructor( private route: Router,private currentUsuario: CurrentUsuario) {


  }

  ngOnInit(): void {
  	this.user = this.currentUsuario.user;
  	console.log("blalblabla-->",this.user);
  }

}
 
