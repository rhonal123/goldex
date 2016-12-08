
import { Banco } from './banco';


export class Cuenta {
  
  id: number;
  numero: string;
  banco_id: number;
  banco: Banco;
  created_at: string;
  updated_at: string;

  constructor( ) {
    this.id = null;
    this.numero =  null;
    this.banco_id =  null;
    this.banco =  null;
    this.created_at = null;
    this.updated_at = null;
    
  }

 	static clone(cuenta: Cuenta): Cuenta {
     let _cuenta = new Cuenta();
     _cuenta.id = cuenta.id;
     _cuenta.numero = cuenta.numero;
     _cuenta.banco_id = cuenta.banco_id;
     _cuenta.banco = cuenta.banco
     _cuenta.created_at = cuenta.created_at;
     _cuenta.updated_at = cuenta.updated_at;
    return _cuenta;
  }

}

 