import { Headers, Http , RequestOptions, Response , HttpModule, URLSearchParams  } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Observable }     from 'rxjs/Observable';
import { Negocio } from '../models/negocio';
import { Movimiento } from '../models/movimiento';
import { Abono } from '../models/abono';
import { Paginacion } from '../models/paginacion';
import { GeneralServicio } from './general.servicio'; 
import 'rxjs/add/operator/toPromise';

@Injectable()
export class NegocioService extends GeneralServicio {

	private negociosUrl = '/sistema/negocios'; 
  private headers = new Headers({ 'Content-Type': 'application/json' });
 
	constructor(private http: Http) {
    super()
  }

  getNegocios(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.negociosUrl,{search: searchs})
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }


  movimientos_creados(id :number):  Observable<Movimiento[]> {
    return this.http
      .get(`/sistema/negocios/${id}/movimientos`)
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }

  abonos_creados(id :number):  Observable<Abono[]> {
    return this.http
      .get(`/sistema/negocios/${id}/abonos`)
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }

  create(negocio: Negocio ): Promise<Negocio> {
    return this.http
      .post(this.negociosUrl,JSON.stringify({negocio: negocio}),this.options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  delete(negocio: Negocio): Promise<Negocio> {
    return this.http
      .delete(this.negociosUrl+"/"+negocio.id,this.options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  update(negocio: Negocio ): Promise<Negocio> {
    return this.http
      .patch(this.negociosUrl+"/"+negocio.id,JSON.stringify({negocio: negocio}),this.options)
      .toPromise()
      .then(res => res.json() as Negocio )
      .catch(this.handleError);
  }

  guardar(negocio: Negocio ): Promise<Negocio> {
    if(negocio.id) {
      return this.update(negocio);
    }
    else  {
      return this.create(negocio);
    }
  }
}