
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Prestamo } from '../models/prestamo';
import { Headers, Http , RequestOptions, Response, HttpModule, URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 
import { Paginacion } from '../models/paginacion';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class PrestamoService extends GeneralServicio  {

  url = '/sistema/prestamos'; 

  constructor(private http: Http) {
    super()
  }

  getPrestamos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
    .get(this.url,{search: searchs})
    .map((res:Response) => res.json())
    .catch(this.handleError);
  }

  create(prestamo: Prestamo ): Promise<Prestamo> {
    return this.http
      .post(this.url,JSON.stringify({prestamo: prestamo}),this.options)
      .toPromise()
      .then(res => res.json() as Prestamo )
      .catch(this.handleError);
  }

  delete(prestamo: Prestamo): Promise<Prestamo> {
    return this.http
      .delete(this.url+"/"+prestamo.id)
      .toPromise()
      .then(res => res.json() as Prestamo )
      .catch(this.handleError);
  }

  update(prestamo: Prestamo): Promise<Prestamo> {
    return this.http
      .patch(this.url+"/"+prestamo.id,JSON.stringify({prestamo: prestamo}),this.options)
      .toPromise()
      .then(res => res.json() as Prestamo )
      .catch(this.handleError);
  }

  guardar(prestamo: Prestamo): Promise<Prestamo> {
    if(prestamo.id) {
      return this.update(prestamo);
    }
    else {
      return this.create(prestamo);
    }
  }

}
