import { Pipe  } from '@angular/core';
import { Abono } from './../models/abono';
import { Negocio } from './../models/negocio';

let capitalize= (cadena: string ) => cadena.replace(/\b\w/g,(e:string)=> e.toUpperCase());

@Pipe({
  name: 'truncate'
})
export class TruncatePipe {
  transform(value: string, args: string[] = [] ) : string {
    let limit = args.length > 0 ? parseInt(args[0], 10) : 15;
    let trail = args.length > 1 ? args[1] : '...';
    return value.length > limit ? value.substring(0, limit) + trail : value;
  }
}
 
@Pipe({
  name: 'administrador'
})
export class AdministradorPipe {
  transform(value: any ) : string {
    return ( JSON.parse(value)? "Administrador":"comun");
  }
}

@Pipe({
  name: 'cantidadAbono'
})
export class CantidadAbonoPipe {
  transform(value: Abono ) : string {
    return `${value.cantidad} ${value.tipo.simbolo}`;
  }
}
 

@Pipe({
  name: 'montoBs'
})
export class MontoBsPipe {
  transform(value: string ) : string {
    return `${value} Bs`;
  }
}
 


@Pipe({
  name: 'detalleNegocio'
})
export class DetalleNegocioPipe {
  transform(value: Negocio ) : string {
    return capitalize(` ${value.rif} ${value.nombre}`);
  }
}

@Pipe({
  name: 'fecha'
})
export class FechaPipe {
  transform(value: any ) : string {
    let fecha = new Date(value.toString());
    return `${fecha.getFullYear()}/${fecha.getMonth()+1}/${fecha.getDate()}`;
  }
}




@Pipe({
  name: 'divisa'
})
export class DivisaPipe {
  transform(value: boolean ) : string {
    return (value? "Divisa":"No Divisa");
  }
}