import { Permiso } from './permiso';

export class User {

  id: number;
  name: string;
  email: string;
  administrador: boolean;
  permisos: Permiso[];

}