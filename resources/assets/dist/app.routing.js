"use strict";
var router_1 = require("@angular/router");
var index_component_1 = require("./controllers/index.component");
var bancos_component_1 = require("./controllers/bancos/bancos.component");
var cuentas_component_1 = require("./controllers/cuentas/cuentas.component");
var negocios_component_1 = require("./controllers/negocios/negocios.component");
var movimientos_component_1 = require("./controllers/movimientos/movimientos.component");
var appRoutes = [
    {
        path: '',
        redirectTo: 'miMoney',
        pathMatch: 'full'
    },
    {
        path: 'miMoney',
        component: index_component_1.IndexComponent
    },
    {
        path: 'bancos',
        component: bancos_component_1.BancosComponent
    },
    {
        path: 'cuentas',
        component: cuentas_component_1.CuentasComponent
    },
    {
        path: 'negocios',
        component: negocios_component_1.NegociosComponent
    },
    {
        path: 'movimientos',
        component: movimientos_component_1.MovimientosComponent
    },
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map