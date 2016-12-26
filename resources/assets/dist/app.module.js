"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var common_1 = require('@angular/common');
var forms_1 = require('@angular/forms');
var http_1 = require('@angular/http');
var platform_browser_1 = require('@angular/platform-browser');
var ng2_bootstrap_1 = require('ng2-bootstrap/ng2-bootstrap');
var app_component_1 = require('./controllers/app.component');
var index_component_1 = require('./controllers/index.component');
var app_routing_1 = require('./app.routing');
var bancos_component_1 = require('./controllers/bancos/bancos.component');
var banco_component_1 = require('./controllers/bancos/banco.component');
var banco_delete_component_1 = require('./controllers/bancos/banco.delete.component');
var banco_edit_component_1 = require('./controllers/bancos/banco.edit.component');
var banco_service_1 = require('./services/banco.service');
var cuentas_component_1 = require('./controllers/cuentas/cuentas.component');
var cuenta_component_1 = require('./controllers/cuentas/cuenta.component');
var cuenta_delete_component_1 = require('./controllers/cuentas/cuenta.delete.component');
var cuenta_edit_component_1 = require('./controllers/cuentas/cuenta.edit.component');
var cuenta_service_1 = require('./services/cuenta.service');
var negocios_component_1 = require('./controllers/negocios/negocios.component');
var negocio_component_1 = require('./controllers/negocios/negocio.component');
var negocio_delete_component_1 = require('./controllers/negocios/negocio.delete.component');
var negocio_edit_component_1 = require('./controllers/negocios/negocio.edit.component');
var negocio_service_1 = require('./services/negocio.service');
var movimientos_component_1 = require('./controllers/movimientos/movimientos.component');
var movimiento_component_1 = require('./controllers/movimientos/movimiento.component');
var movimiento_delete_component_1 = require('./controllers/movimientos/movimiento.delete.component');
var movimiento_edit_component_1 = require('./controllers/movimientos/movimiento.edit.component');
var movimiento_service_1 = require('./services/movimiento.service');
var prestamos_component_1 = require('./controllers/prestamos/prestamos.component');
var prestamo_component_1 = require('./controllers/prestamos/prestamo.component');
var prestamo_delete_component_1 = require('./controllers/prestamos/prestamo.delete.component');
var prestamo_edit_component_1 = require('./controllers/prestamos/prestamo.edit.component');
var prestamo_service_1 = require('./services/prestamo.service');
var pipes_1 = require('./pipes/pipes');
var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            imports: [
                platform_browser_1.BrowserModule, forms_1.FormsModule, forms_1.ReactiveFormsModule,
                ng2_bootstrap_1.Ng2BootstrapModule, ng2_bootstrap_1.AlertModule,
                app_routing_1.routing,
                http_1.HttpModule],
            providers: [
                banco_service_1.BancoService, cuenta_service_1.CuentaService, negocio_service_1.NegocioService, movimiento_service_1.MovimientoService, prestamo_service_1.PrestamoService,
                {
                    provide: common_1.LocationStrategy,
                    useClass: common_1.HashLocationStrategy
                }
            ],
            declarations: [
                app_component_1.AppComponent, index_component_1.IndexComponent, bancos_component_1.BancosComponent, banco_component_1.BancoComponent,
                banco_delete_component_1.BancoDeleteComponent, banco_edit_component_1.BancoEditComponent, cuentas_component_1.CuentasComponent,
                cuenta_component_1.CuentaComponent, cuenta_delete_component_1.CuentaDeleteComponent, cuenta_edit_component_1.CuentaEditComponent,
                negocios_component_1.NegociosComponent, negocio_component_1.NegocioComponent, negocio_delete_component_1.NegocioDeleteComponent,
                negocio_edit_component_1.NegocioEditComponent, pipes_1.TruncatePipe, movimientos_component_1.MovimientosComponent,
                movimiento_component_1.MovimientoComponent, movimiento_delete_component_1.MovimientoDeleteComponent, movimiento_edit_component_1.MovimientoEditComponent,
                prestamos_component_1.PrestamosComponent, prestamo_component_1.PrestamoComponent, prestamo_delete_component_1.PrestamoDeleteComponent,
                prestamo_edit_component_1.PrestamoEditComponent,
            ],
            bootstrap: [app_component_1.AppComponent]
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map