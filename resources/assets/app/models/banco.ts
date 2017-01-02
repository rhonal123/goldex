export class Banco {
  id: number;
  nombre: string;
  created_at: string;
  updated_at: string;
  
  constructor(id: number, nombre: string, created_at?: string, updated_at?: string ) {
  	this.nombre = nombre;
  	this.id= id;
  	this.created_at = (created_at? created_at: null );
 		this.updated_at = (updated_at? updated_at: null );
  }
 	static clone(banco: Banco): Banco {
    return new Banco(banco.id,banco.nombre,banco.created_at,banco.updated_at);
  }
}