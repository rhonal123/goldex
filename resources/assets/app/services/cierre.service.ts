import { Headers, Http , RequestOptions, Response,URLSearchParams, HttpModule } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Banco } from '../models/banco';
import { Movimiento } from '../models/movimiento';
import { Abono } from '../models/abono';
import { Cierre } from '../models/cierre';
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 


import 'rxjs/add/operator/toPromise';

@Injectable()
export class CierreService extends GeneralServicio {

  url = '/sistema/cierres';

	constructor(private http: Http) {
    super()
   }

  getCierres(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.url,{search: searchs})
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }


  getCierre(id: number): Promise<Cierre> {
     return this.http
      .get(this.url+"/"+id,this.options)
      .toPromise()
      .then(res => res.json() as Cierre )
      .catch(this.handleError);
  }
 

  create(cierre: Cierre,operacion:string): Promise<Cierre> {
    return this.http
      .post(this.url,this.formatoCierre(cierre,operacion),this.options)
      .toPromise()
      .then(res => res.json() as Cierre )
      .catch(this.handleError);
  }

  update(cierre: Cierre,operacion:string ): Promise<Cierre> {
    return this.http
      .patch(`/sistema/cierres/${cierre.id}`,this.formatoCierre(cierre,operacion),this.options)
      .toPromise()
      .then(res => res.json() as Cierre )
      .catch(this.handleError);
  }

  formatoCierre(cierre: Cierre, operacion: string ): string {
    return JSON.stringify({
      cierre:{
        id: cierre.id,
        negocio_id: cierre.negocio_id,      
        fecha: cierre.fecha,
        movimientos: cierre.movimientos.map(value => {
          return { id: value.id }  
        }),
        abonos: cierre.abonos.map(value => {
          return { id: value.id }  
        }),
        operacion: operacion
      }
    })
  }


  delete(cierre: Cierre): Promise<Cierre> {
    return this.http
      .delete(this.url+"/"+cierre.id,this.options)
      .toPromise()
      .then(res => res.json() as Cierre )
      .catch(this.handleError);
  }


  guardar(cierre: Cierre,operacion: string): Promise<Cierre> {
    if(cierre.id) {
      return this.update(cierre,operacion);
    }
    else {
      return this.create(cierre,operacion);
    }
  }



  abonospendientes(id :number):  Observable<Abono[]> {
    return this.http
      .get(`/webservices/negocios/${id}/abonospendientes`)
      .map((res:Response) => res.json())
      .catch(this.handleError);

  }
  movimientospendites(id :number):  Observable<Movimiento[]> {
    return this.http
      .get(`/webservices/negocios/${id}/movimientospendites`)
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }



}