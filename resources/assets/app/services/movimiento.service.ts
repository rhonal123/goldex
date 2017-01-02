import { Headers, Http , RequestOptions, Response , URLSearchParams} from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Movimiento } from '../models/movimiento';
import { Paginacion } from '../models/paginacion';
import { HttpModule } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

import { GeneralServicio } from './general.servicio'; 

@Injectable()
export class MovimientoService extends GeneralServicio {

	private movimientosUrl = '/sistema/movimientos'; 

	constructor(private http: Http) {
    super()
  }

  getMovimientos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.movimientosUrl,{search: searchs})
      .map((res:Response) => res.json())
      .catch(this.handleError);

  }


  create(movimiento: Movimiento ): Promise<Movimiento> {
    return this.http
      .post(this.movimientosUrl,JSON.stringify({movimiento: movimiento}),this.options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  delete(movimiento: Movimiento): Promise<Movimiento> {
    return this.http
      .delete(this.movimientosUrl+"/"+movimiento.id,this.options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  update(movimiento: Movimiento ): Promise<Movimiento> {
    return this.http
      .patch(this.movimientosUrl+"/"+movimiento.id,JSON.stringify({movimiento: movimiento}),this.options)
      .toPromise()
      .then(res => res.json() as Movimiento )
      .catch(this.handleError);
  }

  guardar(movimiento: Movimiento ): Promise<Movimiento> {
    if(movimiento.id) {
      return this.update(movimiento);
    }
    else {
      return this.create(movimiento);
    }
  }


}