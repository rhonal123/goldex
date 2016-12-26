
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Prestamo } from '../models/prestamo';
import { Headers, Http , RequestOptions, Response } from '@angular/http';
import { HttpModule } from '@angular/http';
import { URLSearchParams } from '@angular/http';
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class PrestamoService {

  url = '/sistema/prestamos'; 
  options = new RequestOptions({ 
      headers: new Headers({ 
      'Content-Type': 'application/json',
      'Accept' :'application/json, text/javascript, */*; q=0.01'
      })
  });

  constructor(private http: Http) { }

  getPrestamos(page :any,searchs? :URLSearchParams):  Observable<any> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http.get(this.url,{search: searchs}).map((res:Response) => res.json());
  }

  create(prestamo: Prestamo ): Promise<Prestamo> {
    return this.http
      .post(this.url,JSON.stringify({prestamo: prestamo}),this.options)
      .toPromise()
      .then(res => res.json() as Prestamo )
      .catch(this.handleError);
  }

  delete(prestamo: Prestamo): Promise<Prestamo> {
    return this.http.delete(this.url+"/"+prestamo.id)
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

  private handleError(error: Response): Promise<any> {
    console.error('Ocurrio un Error ', error.status, error.text); 
    return Promise.reject(error.json());
  }
}
