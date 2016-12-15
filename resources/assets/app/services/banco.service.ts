import { Injectable,  ViewChild, ElementRef } from '@angular/core';

import { Banco } from '../models/banco';
import { Bancos } from '../models/bancos';

import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule } from '@angular/http';
import { URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class BancoService {

	bancosUrl = '/sistema/bancos'; 
  headers = new Headers({ 'Content-Type': 'application/json' });
 
	constructor(private http: Http) { }

  getBancos(page :any,searchs? :URLSearchParams):  Observable<Bancos> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.bancosUrl,{search: searchs}).
      map((res:Response) => res.json());
  }


  create(banco: Banco ): Promise<Banco> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .post(this.bancosUrl,JSON.stringify({banco: banco}),options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  delete(banco: Banco): Promise<Banco> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http.delete(this.bancosUrl+"/"+banco.id,options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  update(banco: Banco ): Promise<Banco> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .patch(this.bancosUrl+"/"+banco.id,JSON.stringify({banco: banco}),options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  guardar(banco: Banco ): Promise<Banco> {
    if(banco.id)
    {
      return this.update(banco);
    }
    else
    {
      return this.create(banco);
    }
  }

	private handleError(error: Response): Promise<any> {
  	console.error('Ocurrio un Error ', error.status, error.text); // for demo purposes only
  	return Promise.reject(error.json());
	}

}