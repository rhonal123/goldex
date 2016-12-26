
import { ModuleWithProviders }  from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppComponent }   from './controllers/app.component';
import { IndexComponent }  from './controllers/index.component';


import {BancosComponent} from './controllers/bancos/bancos.component';
import {CuentasComponent} from './controllers/cuentas/cuentas.component';
import {NegociosComponent} from './controllers/negocios/negocios.component';
import {MovimientosComponent} from './controllers/movimientos/movimientos.component';
import { PrestamosComponent } from './controllers/prestamos/prestamos.component';

const appRoutes: Routes = [
  {
    path: '',
    redirectTo: 'miMoney',
    pathMatch: 'full'
  },
  {
    path: 'miMoney',
    component: IndexComponent 
  },
  {
    path: 'bancos',
    component: BancosComponent 
  },
  {
    path: 'cuentas',
    component: CuentasComponent 
  },
  {
    path: 'negocios',
    component: NegociosComponent 
  },
  {
    path: 'movimientos',
    component: MovimientosComponent 
  },
  {
    path: 'prestamos',
    component: PrestamosComponent 
  },



];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);