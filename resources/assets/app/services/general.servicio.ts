

import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Router, CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot } from '@angular/router';
import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule, URLSearchParams } from '@angular/http';
import 'rxjs/add/operator/toPromise';
import { User } from '../models/user';
import { Observable }     from 'rxjs/Observable';

export class  GeneralServicio {

  public options = new RequestOptions({ 
      headers: new Headers({ 
      'Content-Type': 'application/json',
      'Accept' :'application/json, text/javascript,'
      })
  });

	protected handleError(error: Response): Promise<any> {
    ///console.error('Ocurrio un Error,,,, ', error.status, error.text);
    if(error.status === 401) {
      //alert("usuario no Logueado")
      return Promise.reject({usuario: "usuario no Logueado"});
    }
    else if(error.status === 403 ) {
      alert("No posee los permisos suficientes para ejecutar esta accion")
      return Promise.reject({usuario: "No posee los permisos suficientes para ejecutar esta accion"});
    }
    else{
      return Promise.reject(error.json());
    }
	}
}