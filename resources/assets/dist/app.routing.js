"use strict";
var router_1 = require('@angular/router');
var index_component_1 = require('./controllers/index.component');
var current_usuario_service_1 = require('./services/current.usuario.service');
var bancos_component_1 = require('./controllers/bancos/bancos.component');
var cuentas_component_1 = require('./controllers/cuentas/cuentas.component');
var negocios_component_1 = require('./controllers/negocios/negocios.component');
var prestamos_component_1 = require('./controllers/prestamos/prestamos.component');
var usuarios_component_1 = require('./controllers/usuarios/usuarios.component');
var abonos_component_1 = require('./controllers/abonos/abonos.component');
var tipos_component_1 = require('./controllers/tipos/tipos.component');
var login_component_1 = require('./controllers/login.component');
var appRoutes = [
    {
        path: '',
        redirectTo: 'miMoney',
        pathMatch: 'full'
    },
    {
        path: 'miMoney',
        component: index_component_1.IndexComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'bancos',
        component: bancos_component_1.BancosComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'cuentas',
        component: cuentas_component_1.CuentasComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'negocios',
        component: negocios_component_1.NegociosComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'prestamos',
        component: prestamos_component_1.PrestamosComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'usuarios',
        component: usuarios_component_1.UsuariosComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'abonos',
        component: abonos_component_1.AbonosComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'tipos',
        component: tipos_component_1.TiposComponent,
        canActivate: [current_usuario_service_1.CurrentUsuario]
    },
    {
        path: 'login',
        component: login_component_1.LoginComponent
    },
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map