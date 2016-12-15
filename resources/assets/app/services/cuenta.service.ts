import { Injectable,  ViewChild, ElementRef } from '@angular/core';

import { Banco } from '../models/banco';
import { Cuenta } from '../models/cuenta';
import { Cuentas } from '../models/cuentas';


import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule } from '@angular/http';
import { URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';
/// <reference path="jquery.d.ts" />

@Injectable()
export class CuentaService {
	private cuentasUrl = '/sistema/cuentas'; 
  private headers = new Headers({ 'Content-Type': 'application/json' });
 
	constructor(private http: Http) { }

  getCuentas(page :any,searchs? :URLSearchParams):  Observable<Cuentas> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.cuentasUrl,{search: searchs}).
      map((res:Response) => res.json());
  }


  create(cuenta: Cuenta ): Promise<Cuenta> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .post(this.cuentasUrl,JSON.stringify({cuenta: cuenta}),options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  delete(cuenta: Cuenta): Promise<Cuenta> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http.delete(this.cuentasUrl+"/"+cuenta.id,options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  update(cuenta: Cuenta ): Promise<Cuenta> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .patch(this.cuentasUrl+"/"+cuenta.id,JSON.stringify({cuenta: cuenta}),options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  guardar(cuenta: Cuenta ): Promise<Cuenta> {
    if(cuenta.id)
    {
      return this.update(cuenta);
    }
    else
    {
      return this.create(cuenta);
    }
  }

	private handleError(error: Response): Promise<any> {
  	console.error('Ocurrio un Error ', error.status, error.text); // for demo purposes only
  	return Promise.reject(error.json());
	}

}