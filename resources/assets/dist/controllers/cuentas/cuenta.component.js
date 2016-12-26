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
var cuenta_1 = require('./../../models/cuenta');
var cuenta_service_1 = require('./../../services/cuenta.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var CuentaComponent = (function () {
    function CuentaComponent(cuentaService) {
        this.cuentaService = cuentaService;
    }
    CuentaComponent.prototype.ngOnInit = function () {
    };
    CuentaComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    CuentaComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', cuenta_1.Cuenta)
    ], CuentaComponent.prototype, "cuenta", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], CuentaComponent.prototype, "modal", void 0);
    CuentaComponent = __decorate([
        core_1.Component({
            selector: 'cuenta-component',
            templateUrl: 'app/templates/cuentas/cuenta.component.html',
            providers: [cuenta_service_1.CuentaService]
        }), 
        __metadata('design:paramtypes', [cuenta_service_1.CuentaService])
    ], CuentaComponent);
    return CuentaComponent;
}());
exports.CuentaComponent = CuentaComponent;
//# sourceMappingURL=cuenta.component.js.map