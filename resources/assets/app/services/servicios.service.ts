import { Headers, Http , RequestOptions, Response,  HttpModule, URLSearchParams } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { GeneralServicio } from './general.servicio'; 
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';

import { Banco } from '../models/banco';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class ServiciosService extends GeneralServicio {

	constructor(private http: Http) {
    super()
  }

  tipos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get("webservices/tipos",{search: searchs}).
      map((res:Response) => res.json())
      .catch(this.handleError);
  }

  movimientos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get("webservices/movimientos",{search: searchs}).
      map((res:Response) => res.json())
      .catch(this.handleError);
  }

}