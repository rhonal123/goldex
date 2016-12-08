import { Injectable,  ViewChild, ElementRef } from '@angular/core';

import { Movimiento } from '../models/movimiento';
import { Movimientos } from '../models/movimientos';

import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule } from '@angular/http';
import { URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class MovimientoService {

	private movimientosUrl = '/laravel/helloworld/public/sistema/movimientos'; 
  private headers = new Headers({ 'Content-Type': 'application/json' });
 
	constructor(private http: Http) { }

  getMovimientos(page :any,searchs? :URLSearchParams):  Observable<Movimientos> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.movimientosUrl,{search: searchs}).
      map((res:Response) => res.json());
  }


  create(movimiento: Movimiento ): Promise<Movimiento> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .post(this.movimientosUrl,JSON.stringify({movimiento: movimiento}),options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  delete(movimiento: Movimiento): Promise<Movimiento> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http.delete(this.movimientosUrl+"/"+movimiento.id,options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  update(movimiento: Movimiento ): Promise<Movimiento> {
    let headers = new Headers({ 'Content-Type': 'application/json',
          'Accept' :'application/json, text/javascript, */*; q=0.01' });
    let options = new RequestOptions({ headers: headers });
    return this.http
      .patch(this.movimientosUrl+"/"+movimiento.id,JSON.stringify({movimiento: movimiento}),options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  guardar(movimiento: Movimiento ): Promise<Movimiento> {
    if(movimiento.id)
    {
      return this.update(movimiento);
    }
    else
    {
      return this.create(movimiento);
    }
  }

	private handleError(error: Response): Promise<any> {
  	console.error('Ocurrio un Error ', error.status, error.text); // for demo purposes only
  	return Promise.reject(error.json());
	}

}