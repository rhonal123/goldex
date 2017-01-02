import { Headers, Http , RequestOptions, Response,  HttpModule, URLSearchParams } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { GeneralServicio } from './general.servicio'; 
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';
import { Banco } from '../models/banco';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class BancoService extends GeneralServicio {

	url = '/sistema/bancos';  

	constructor(private http: Http) {
    super()
  }

  getBancos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.url,{search: searchs}).
      map((res:Response) => res.json())
      .catch(this.handleError);
  }

  create(banco: Banco ): Promise<Banco> {
    return this.http
      .post(this.url,JSON.stringify({banco: banco}),this.options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  delete(banco: Banco): Promise<Banco> {
    return this.http.delete(this.url+"/"+banco.id,this.options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  update(banco: Banco ): Promise<Banco> {
    return this.http
      .patch(this.url+"/"+banco.id,JSON.stringify({banco: banco}),this.options)
      .toPromise()
      .then(res => res.json() as Banco )
      .catch(this.handleError);
  }

  guardar(banco: Banco ): Promise<Banco> {
    if(banco.id) {
      return this.update(banco);
    }
    else {
      return this.create(banco);
    }
  }

}