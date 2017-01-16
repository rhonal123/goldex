
import { Banco } from './banco';


export class Cuenta {
  
  id: number;
  numero: string;
  banco_id: number;
  banco: Banco;
  created_at: string;
  updated_at: string;
}

 