import { Injectable,  ViewChild, ElementRef } from '@angular/core';

import { Negocio } from '../models/negocio';
import { Negocios } from '../models/negocios';

import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule } from '@angular/http';
import { URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class NegocioService {

	private negociosUrl = '/sistema/negocios'; 
  private headers = new Headers({ 'Content-Type': 'application/json' });
 
	constructor(private http: Http) { }

  getNegocios(page :any,searchs? :URLSearchParams):  Observable<Negocios> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.negociosUrl,{search: searchs}).
      map((res:Response) => res.json());
  }


  create(negocio: Negocio ): Promise<Negocio> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .post(this.negociosUrl,JSON.stringify({negocio: negocio}),options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  delete(negocio: Negocio): Promise<Negocio> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http.delete(this.negociosUrl+"/"+negocio.id,options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  update(negocio: Negocio ): Promise<Negocio> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .patch(this.negociosUrl+"/"+negocio.id,JSON.stringify({negocio: negocio}),options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  guardar(negocio: Negocio ): Promise<Negocio> {
    if(negocio.id)
    {
      return this.update(negocio);
    }
    else
    {
      return this.create(negocio);
    }
  }

	private handleError(error: Response): Promise<any> {
  	console.error('Ocurrio un Error ', error.status, error.text); // for demo purposes only
  	return Promise.reject(error.json());
	}

}