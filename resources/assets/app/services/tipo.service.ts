import { Headers, Http , RequestOptions, Response , URLSearchParams} from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Tipo } from '../models/tipo';
import { Paginacion } from '../models/paginacion';
import { HttpModule } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

import { GeneralServicio } from './general.servicio'; 

@Injectable()
export class TipoService extends GeneralServicio {

	private url = '/sistema/tipos'; 

	constructor(private http: Http) {
    super()
  }

  getTipos(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.url,{search: searchs})
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }

  create(tipo: Tipo ): Promise<Tipo> {
    return this.http
      .post(this.url,JSON.stringify({tipo: tipo}),this.options)
      .toPromise()
      .then(res => res.json() as Tipo )
      .catch(this.handleError);
  }

  delete(tipo: Tipo): Promise<Tipo> {
    return this.http
      .delete(this.url+"/"+tipo.id,this.options)
      .toPromise()
      .then(res => res.json() as Tipo )
      .catch(this.handleError);
  }

  update(tipo: Tipo ): Promise<Tipo> {
    return this.http
      .patch(this.url+"/"+tipo.id,JSON.stringify({tipo: tipo}),this.options)
      .toPromise()
      .then(res => res.json() as Tipo )
      .catch(this.handleError);
  }

  guardar(tipo: Tipo ): Promise<Tipo> {
    if(tipo.id) {
      return this.update(tipo);
    }
    else {
      return this.create(tipo);
    }
  }
}