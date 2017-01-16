

import { Negocio } from './negocio';
import { Movimiento } from './movimiento';
import { Abono } from './abono';

export class Cierre {
	id: number;
	negocio_id: number;
	abono: number;
	prestamo: number;
	saldo: number;
	estado: string;
	fecha: string;
	abonos: Abono[];
	movimientos: Movimiento[];
	negocio: Negocio;
}

