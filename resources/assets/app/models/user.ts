import { Permiso } from './permiso';

export class User {

  id: number;
  name: string;
  email: string;
  administrador: boolean;
  permisos: Permiso[];
  
  constructor( ) {
  	this.name = null;
  	this.id= null;
    this.email = null;
    this.administrador= false;
    this.permisos = [];
  }

 	static clone(user: User): User {
     let _user = new User();
     _user.id = user.id;
     _user.name = user.name;
     _user.email = user.email;
    return _user;
  }
}