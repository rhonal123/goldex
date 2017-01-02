
import { NgModule }      from '@angular/core';
import { LocationStrategy, HashLocationStrategy  } from '@angular/common';

import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { BrowserModule } from '@angular/platform-browser';

import { AlertModule, DatepickerModule, Ng2BootstrapModule } from 'ng2-bootstrap/ng2-bootstrap';
import { AppComponent }   from './controllers/app.component';
import { IndexComponent }  from './controllers/index.component';
import { routing } from './app.routing';

import { BancosComponent } from './controllers/bancos/bancos.component';
import { BancoComponent } from './controllers/bancos/banco.component';
import { BancoDeleteComponent } from './controllers/bancos/banco.delete.component';
import { BancoEditComponent } from './controllers/bancos/banco.edit.component';
import { BancoService } from './services/banco.service';

import { CuentasComponent} from './controllers/cuentas/cuentas.component';
import { CuentaComponent} from './controllers/cuentas/cuenta.component';
import { CuentaDeleteComponent} from './controllers/cuentas/cuenta.delete.component';
import { CuentaEditComponent} from './controllers/cuentas/cuenta.edit.component';
import { CuentaService} from './services/cuenta.service';

import { NegociosComponent} from './controllers/negocios/negocios.component';
import { NegocioComponent} from './controllers/negocios/negocio.component';
import { NegocioDeleteComponent} from './controllers/negocios/negocio.delete.component';
import { NegocioEditComponent} from './controllers/negocios/negocio.edit.component';
import { NegocioService} from './services/negocio.service';
  
import { MovimientosComponent} from './controllers/movimientos/movimientos.component';
import { MovimientoComponent} from './controllers/movimientos/movimiento.component';
import { MovimientoDeleteComponent} from './controllers/movimientos/movimiento.delete.component';
import { MovimientoEditComponent} from './controllers/movimientos/movimiento.edit.component';
import { MovimientoService} from './services/movimiento.service';

import { PrestamosComponent } from './controllers/prestamos/prestamos.component';
import { PrestamoComponent } from './controllers/prestamos/prestamo.component';
import { PrestamoDetalleComponent } from './controllers/prestamos/prestamo.detalle.component';
import { PrestamoDeleteComponent } from './controllers/prestamos/prestamo.delete.component';
import { PrestamoEditComponent } from './controllers/prestamos/prestamo.edit.component';
import { PrestamoService } from './services/prestamo.service';

import { AbonosComponent } from  './controllers/abonos/abonos.component';
import { AbonoComponent } from   './controllers/abonos/abono.component';
import { AbonoDetalleComponent } from './controllers/abonos/abono.detalle.component';
import { AbonoDeleteComponent } from './controllers/abonos/abono.delete.component';
import { AbonoEditComponent } from './controllers/abonos/abono.edit.component';
import { AbonoService } from './services/abono.service';

import { UsuariosComponent } from './controllers/usuarios/usuarios.component';
import { UsuarioComponent} from './controllers/usuarios/usuario.component';
import { UsuarioDeleteComponent} from './controllers/usuarios/usuario.delete.component';
import { UsuarioEditComponent} from './controllers/usuarios/usuario.edit.component';
import { UsuarioContrasenaComponent} from './controllers/usuarios/usuario.contrasena.component';
import { UsuarioPermisosComponent} from './controllers/usuarios/usuario.permisos.component';
import { UsuarioService} from './services/usuario.service';


import { TiposComponent } from './controllers/tipos/tipos.component';
import { TipoComponent } from './controllers/tipos/tipo.component';
import { TipoDetalleComponent } from './controllers/tipos/tipo.detalle.component';
import { TipoDeleteComponent } from './controllers/tipos/tipo.delete.component';
import { TipoEditComponent } from './controllers/tipos/tipo.edit.component';
import { TipoService } from './services/tipo.service';


import { CurrentUsuario }  from './services/current.usuario.service';
import { TruncatePipe , AdministradorPipe, CantidadAbonoPipe, MontoBsPipe, FechaPipe, DetalleNegocioPipe, DivisaPipe} from './pipes/pipes';
import { LoginComponent } from './controllers/login.component';


import { DetalleComponent } from './controllers/detalle.component';

@NgModule({
    imports: [
      BrowserModule,
      FormsModule,
      ReactiveFormsModule,
			Ng2BootstrapModule,
      AlertModule,
      routing,
      HttpModule ],
    providers: [ 
      BancoService,
      CuentaService,
      NegocioService,
      PrestamoService,
      CurrentUsuario,
      UsuarioService,
      TipoService,
      AbonoService,
      { 
        provide: LocationStrategy,
        useClass: HashLocationStrategy
      }
    ],
    declarations: [ 
    	AppComponent,IndexComponent,
      BancosComponent,BancoComponent, BancoDeleteComponent,BancoEditComponent,
      CuentasComponent,CuentaComponent,CuentaDeleteComponent,CuentaEditComponent,
      NegociosComponent,NegocioComponent,NegocioDeleteComponent,NegocioEditComponent,
      TruncatePipe,AdministradorPipe,CantidadAbonoPipe,MontoBsPipe,FechaPipe,DetalleNegocioPipe,DivisaPipe,
      PrestamosComponent,PrestamoComponent,PrestamoDeleteComponent,PrestamoEditComponent,PrestamoDetalleComponent,
      LoginComponent,
      UsuariosComponent,UsuarioComponent,UsuarioDeleteComponent,UsuarioEditComponent,UsuarioContrasenaComponent,UsuarioPermisosComponent,
      AbonosComponent,AbonoComponent,AbonoDeleteComponent,AbonoEditComponent,AbonoDetalleComponent,
      DetalleComponent,
      TiposComponent,TipoComponent,TipoDeleteComponent,TipoEditComponent,TipoDetalleComponent
   	],
    bootstrap:    [ AppComponent ]
})
export class AppModule { 

}  