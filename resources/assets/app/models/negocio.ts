

 

export class Negocio {
  id: number;
  nombre: string;
	rif: string;
	descripcion: string;
	direccion: string;
	encargado: string;
	telefono: string;
  created_at: string;
  updated_at: string;
  
  constructor() {
    this.id = null;
    this.nombre = null;
    this.rif = null;
    this.descripcion = null;
    this.direccion = null;
    this.encargado = null;
    this.telefono = null;
    this.created_at = null;
    this.updated_at = null;
  }

 	static clone(negocio: Negocio): Negocio {
 		let _negocio = new Negocio();
 		_negocio.id = negocio.id;
 		_negocio.nombre= negocio.nombre;
 		_negocio.rif= negocio.rif;
 		_negocio.descripcion= negocio.descripcion;
 		_negocio.direccion= negocio.direccion;
 		_negocio.encargado= negocio.encargado;;
 		_negocio.telefono = negocio.telefono;
 		_negocio.created_at = negocio.created_at;
 		_negocio.updated_at = negocio.updated_at;
    return _negocio;
  }


}

 
