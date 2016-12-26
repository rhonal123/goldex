
import { NgModule }      from '@angular/core';
import { LocationStrategy, HashLocationStrategy  } from '@angular/common';

import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { BrowserModule } from '@angular/platform-browser';

import { AlertModule, DatepickerModule, Ng2BootstrapModule } from 'ng2-bootstrap/ng2-bootstrap';

import { AppComponent }   from './controllers/app.component';

import { IndexComponent }  from './controllers/index.component';

import { routing } from './app.routing';

import {BancosComponent} from './controllers/bancos/bancos.component';
import {BancoComponent} from './controllers/bancos/banco.component';
import {BancoDeleteComponent} from './controllers/bancos/banco.delete.component';
import {BancoEditComponent} from './controllers/bancos/banco.edit.component';
import {BancoService} from './services/banco.service';

import {CuentasComponent} from './controllers/cuentas/cuentas.component';
import {CuentaComponent} from './controllers/cuentas/cuenta.component';
import {CuentaDeleteComponent} from './controllers/cuentas/cuenta.delete.component';
import {CuentaEditComponent} from './controllers/cuentas/cuenta.edit.component';
import {CuentaService} from './services/cuenta.service';

import {NegociosComponent} from './controllers/negocios/negocios.component';
import {NegocioComponent} from './controllers/negocios/negocio.component';
import {NegocioDeleteComponent} from './controllers/negocios/negocio.delete.component';
import {NegocioEditComponent} from './controllers/negocios/negocio.edit.component';
import {NegocioService} from './services/negocio.service';
  
import { MovimientosComponent} from './controllers/movimientos/movimientos.component';
import { MovimientoComponent} from './controllers/movimientos/movimiento.component';
import { MovimientoDeleteComponent} from './controllers/movimientos/movimiento.delete.component';
import { MovimientoEditComponent} from './controllers/movimientos/movimiento.edit.component';
import { MovimientoService} from './services/movimiento.service';

import { PrestamosComponent } from './controllers/prestamos/prestamos.component';
import { PrestamoComponent } from './controllers/prestamos/prestamo.component';
import { PrestamoDeleteComponent } from './controllers/prestamos/prestamo.delete.component';
import { PrestamoEditComponent } from './controllers/prestamos/prestamo.edit.component';
import { PrestamoService } from './services/prestamo.service';


import {TruncatePipe} from './pipes/pipes';


@NgModule({
    imports: [
      BrowserModule,FormsModule,ReactiveFormsModule,
			Ng2BootstrapModule,AlertModule,
      routing,
      HttpModule ],
    providers: [ 
      BancoService,CuentaService,NegocioService,MovimientoService,PrestamoService,
      { 
        provide: LocationStrategy,
        useClass: HashLocationStrategy
      }
    ],
    declarations: [ 
    	AppComponent,IndexComponent,BancosComponent,BancoComponent,
      BancoDeleteComponent,BancoEditComponent,CuentasComponent,
      CuentaComponent,CuentaDeleteComponent,CuentaEditComponent,
      NegociosComponent,NegocioComponent,NegocioDeleteComponent,
      NegocioEditComponent,TruncatePipe,MovimientosComponent,
      MovimientoComponent,MovimientoDeleteComponent,MovimientoEditComponent,
      PrestamosComponent,PrestamoComponent,PrestamoDeleteComponent,
      PrestamoEditComponent,
   	],
    bootstrap:    [ AppComponent ]
})
export class AppModule { 

}

   

  
  