import { Headers, Http , RequestOptions, Response,  HttpModule, URLSearchParams } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 
import { Abono } from '../models/abono';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class AbonoService extends GeneralServicio {

	url = '/sistema/abonos';  

	constructor(private http: Http) {
    super()
  }

  getAbonos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.url,{search: searchs}).
      map((res:Response) => res.json())
      .catch(this.handleError);
  }

  create(abono: Abono ): Promise<Abono> {
    return this.http
      .post(this.url,JSON.stringify({abono: abono}),this.options)
      .toPromise()
      .then(res => res.json() as Abono )
      .catch(this.handleError);
  }

  delete(abono: Abono): Promise<Abono> {
    return this.http.delete(this.url+"/"+abono.id,this.options)
      .toPromise()
      .then(res => res.json() as Abono )
      .catch(this.handleError);
  }

  update(abono: Abono ): Promise<Abono> {
    return this.http
      .patch(this.url+"/"+abono.id,JSON.stringify({abono: abono}),this.options)
      .toPromise()
      .then(res => res.json() as Abono )
      .catch(this.handleError);
  }

  guardar(abono: Abono ): Promise<Abono> {
    if(abono.id) {
      return this.update(abono);
    }
    else {
      return this.create(abono);
    }
  }

}