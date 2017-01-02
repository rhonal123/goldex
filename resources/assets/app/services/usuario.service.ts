import { Headers, Http , RequestOptions, Response, HttpModule, URLSearchParams } from '@angular/http';
import { Injectable,  ViewChild, ElementRef  } from '@angular/core';
import { GeneralServicio } from './general.servicio'; 
import { Observable } from 'rxjs/Observable';
import { Paginacion } from '../models/paginacion';
import { Permiso } from '../models/permiso';
import { User } from '../models/user';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class UsuarioService extends GeneralServicio  {

	url = '/sistema/usuarios'; 

	constructor(private http: Http) {
    super();
  }

  getUsers(page :any,searchs? :URLSearchParams):  Observable<Paginacion> {
    searchs = (searchs? searchs: new URLSearchParams());
    searchs.set("page",page);
    return this.http
      .get(this.url,{search: searchs})
      .map((res:Response) => res.json())
     .catch(this.handleError);
  }


  create(user: User ): Promise<User> {
    return this.http
      .post(this.url,JSON.stringify({user: user}),this.options)
      .toPromise()
      .then(res => res.json() as User )
      .catch(this.handleError);
  }

  delete(user: User): Promise<User> {
    return this.http
      .delete(this.url+"/"+user.id,this.options)
      .toPromise()
      .then(res => res.json() as User )
      .catch(this.handleError);
  }

  update(user: User ): Promise<User> {
    return this.http
      .patch(this.url+"/"+user.id,JSON.stringify({
          user:{
            'name': user.name,
            'email': user.email,
            'administrador': user.administrador
          }
        }),this.options)
      .toPromise()
      .then(res => res.json() as User )
      .catch(this.handleError);
  }

  guardar(user: User ): Promise<User> {
    if(user.id) {
      return this.update(user);
    }
    else {
      return this.create(user);
    }
  }

  permisos(user: User): Observable<Permiso[]>{
    return this.http
      .get(`sistema/usuarios/${user.id}/permisos`,this.options)
      .map((res:Response) => res.json())
     .catch(this.handleError);
  }


  agregarPermiso(user: User, permiso: Permiso ): Promise<Permiso[]> {
    return this.http
      .patch(`sistema/usuarios/${user.id}/permisos`,JSON.stringify({
          permiso:{
            'codigo': permiso.codigo
          }
        }),this.options)
      .toPromise()
      .then(res => res.json() as Permiso[] )
      .catch(this.handleError);
  }

  quitarPermiso(user: User, permiso: Permiso ): Promise<Permiso[]> {
    return this.http
      .delete(`sistema/usuarios/${user.id}/permisos/${permiso.codigo}`,this.options)
      .toPromise()
      .then(res => res.json() as Permiso[] )
      .catch(this.handleError);
  }



  cambiarContrasena(usuario :User ,datos :any): Promise<any> {
    let content = JSON.stringify({ 
        user:{
          "password":datos.password,
          "password_confirmation":datos.password_confirmation
        }
    })
    return this.http
      .patch(`sistema/usuarios/${usuario.id}/password`,content,this.options)
      .toPromise()
      .then(res => res.json() as User )
      .catch(this.handleError);
  }

}