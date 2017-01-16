import { Negocio } from './negocio';
import { Cuenta } from './cuenta';

export class Movimiento {
  id: number;
  monto: number;
  saldo: number;
  comision: number;
  fecha: string;
  descripcion: number;
  tipo: string;
  referencia: string;
  estado: string;
  negocio_id: number;
  cuenta_id: number;
  precio_puro: number;
  negocio: Negocio;
  cuenta: Cuenta;

} 