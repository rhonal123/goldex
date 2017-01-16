import { Banco } from './banco';
import { Negocio } from './negocio';
import { Cuenta } from './cuenta';
import { Tipo } from './tipo'
import { User } from './user'

export class Abono {

  id: number;
  user_id: number;
  tipo_id: number;
  monto: number;
  saldo: number;
  afecta_banco: boolean;
  cuenta_id: number;
  referencia: string;
  tasa: number;
  fecha: Date;
  negocio_id: number;
  cantidad: number;
  estado: string;
  tipo: Tipo;
  negocio: Negocio;
  cuenta: Cuenta;
}

 

