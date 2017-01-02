
import { ModuleWithProviders }  from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppComponent }   from './controllers/app.component';
import { IndexComponent }  from './controllers/index.component';
import { CurrentUsuario } from './services/current.usuario.service';

import { BancosComponent } from './controllers/bancos/bancos.component';
import { CuentasComponent } from './controllers/cuentas/cuentas.component';
import { NegociosComponent } from './controllers/negocios/negocios.component';
import { MovimientosComponent } from './controllers/movimientos/movimientos.component';
import { PrestamosComponent } from './controllers/prestamos/prestamos.component';
import { UsuariosComponent } from './controllers/usuarios/usuarios.component';
import { AbonosComponent } from './controllers/abonos/abonos.component';
import { TiposComponent } from './controllers/tipos/tipos.component';
import { LoginComponent } from './controllers/login.component';

const appRoutes: Routes = [
  {
    path: '',
    redirectTo: 'miMoney',
    pathMatch: 'full'
  },
  {
    path: 'miMoney',
    component: IndexComponent,
    canActivate: [CurrentUsuario]
  },
  {
    path: 'bancos',
    component: BancosComponent,
    canActivate: [CurrentUsuario]
  },
  {
    path: 'cuentas',
    component: CuentasComponent,
    canActivate: [CurrentUsuario]
  },
  {
    path: 'negocios',
    component: NegociosComponent,
    canActivate: [CurrentUsuario] 
  },
  {
    path: 'prestamos',
    component: PrestamosComponent,
    canActivate: [CurrentUsuario] 
  },
  {
    path: 'usuarios',
    component: UsuariosComponent,
    canActivate: [CurrentUsuario] 
  },
  {
    path: 'abonos',
    component: AbonosComponent,
    canActivate: [CurrentUsuario] 
  },
  {
    path: 'tipos',
    component: TiposComponent,
    canActivate: [CurrentUsuario] 
  },
  { 
    path: 'login',
    component: LoginComponent
  },
];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);