 

import { Banco } from './banco';
import { Negocio } from './negocio';
import { Cuenta } from './cuenta';
import { User } from './user';

export class Prestamo {

  id: number;
  negocio_id: number;
  negocio: Negocio;
  cuenta_id: number;
  cuenta: Cuenta;
  user_id: number;
  user: User;
	comision: number;
	monto: number;
  precio_material: number;
  referencia: string;
  descripcion: string;
  fecha: Date;
  tipo: string;

  constructor( ) {
	  this.id = null;
	  this.negocio_id = null;
	  this.negocio = null;
	  this.cuenta_id = null;
	  this.cuenta = null;
	  this.user_id = null;
	  this.user = null;
	  this.monto = 0.0;
		this.comision = 0.0;
	  this.precio_material = 0.0;
	  this.referencia = null;
	  this.descripcion = null;
	  this.fecha = null;
	  this.tipo = "efectivo";
  }

  public static strFecha(prestamo: Prestamo) :string {
  	prestamo.fecha = new Date(prestamo.fecha.toString());
    return prestamo.fecha.getFullYear()+"/"+(prestamo.fecha.getMonth()+1)+"/"+prestamo.fecha.getDate();
  }

}

