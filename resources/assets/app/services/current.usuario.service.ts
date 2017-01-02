import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Router, CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot } from '@angular/router';
import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule, URLSearchParams } from '@angular/http';
import 'rxjs/add/operator/toPromise';
import { User } from '../models/user';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 

/// <reference path="jquery.d.ts" />
///import 'rxjs/Rx';
import 'rxjs/add/operator/map'
//import 'rxjs/add/operator/catch'


@Injectable()
export class CurrentUsuario extends GeneralServicio {
	logoutURL = '/logout'; 
	root = '/'; 
  user: User;
  loggedIn = false;

	constructor(private http: Http,private router: Router) {
    super();
    this.loggedIn = !!localStorage.getItem('user');
	}

  getCurrentUser():  Observable<User>
  { 
    return this.http.get("/current_user",this.options).map(res => {
      this.user = res.json()
      return this.user 
    })
    .catch(this.handleError);
  }

	logout(): void{
		this.http.get(this.logoutURL).toPromise().then( response => {
		  this.loggedIn = false;
      localStorage.removeItem('user');
      window.location.href= this.root;
    })
	}

  login(values: any ): Promise<Boolean> {
    return this.http.post('/login',JSON.stringify(values),this.options )
      .toPromise()
      .then((res:Response) => {
        if (res.status == 200 ) {
          localStorage.setItem('user', res.json());
          this.loggedIn = true;
        }
        return res.status == 200;
      }).catch(this.handleError);
  }
 
  cambiarContrasena(datos: any ): Promise<any> {
    let content = JSON.stringify({ 
    		usuario:{
    			"password":datos.password,
					"password_confirmation":datos.password_confirmation
				},
  	})
    return this.http
      .patch("/",content,this.options)
      .toPromise()
      .then(res => res.json() as User )
      .catch(this.handleError);
  }

  isLoggedIn() {
    return this.loggedIn;
  }

  canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot) {
    if (localStorage.getItem('user')) {
        return true;
    } 
    // not logged in so redirect to login page with the return url
    this.router.navigate(['/login'], { queryParams: { returnUrl: state.url }});
    return false;
  }
}