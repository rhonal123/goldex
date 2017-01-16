import { Headers, Http , RequestOptions, Response,URLSearchParams, HttpModule } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Banco } from '../models/banco';
import { Cuenta } from '../models/cuenta';
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 


import 'rxjs/add/operator/toPromise';

@Injectable()
export class CuentaService extends GeneralServicio {

  url = '/sistema/cuentas';

	constructor(private http: Http) {
    super()
   }

  getCuentas(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.url,{search: searchs})
      .map((res:Response) => res.json())
      .catch(this.handleError);
  }


  getCuenta(id: number): Promise<Cuenta> {
     return this.http
      .get(this.url+"/"+id,this.options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }
 




  create(cuenta: Cuenta ): Promise<Cuenta> {
    return this.http
      .post(this.url,JSON.stringify({cuenta: cuenta}),this.options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  delete(cuenta: Cuenta): Promise<Cuenta> {
    return this.http
      .delete(this.url+"/"+cuenta.id,this.options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  update(cuenta: Cuenta ): Promise<Cuenta> {

    return this.http
      .patch(this.url+"/"+cuenta.id,JSON.stringify({cuenta: cuenta}),this.options)
      .toPromise()
      .then(res => res.json() as Cuenta )
      .catch(this.handleError);
  }

  guardar(cuenta: Cuenta ): Promise<Cuenta> {
    if(cuenta.id) {
      return this.update(cuenta);
    }
    else {
      return this.create(cuenta);
    }
  }


}