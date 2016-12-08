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
var movimiento_1 = require('./../../models/movimiento');
var movimiento_service_1 = require('./../../services/movimiento.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var MovimientoComponent = (function () {
    function MovimientoComponent(movimientoService) {
        this.movimientoService = movimientoService;
    }
    MovimientoComponent.prototype.ngOnInit = function () {
    };
    MovimientoComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    MovimientoComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', movimiento_1.Movimiento)
    ], MovimientoComponent.prototype, "movimiento", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], MovimientoComponent.prototype, "modal", void 0);
    MovimientoComponent = __decorate([
        core_1.Component({
            selector: 'movimiento-component',
            templateUrl: 'resources/assets/app/controllers/templates/movimientos/movimiento.component.html',
            providers: [movimiento_service_1.MovimientoService]
        }), 
        __metadata('design:paramtypes', [movimiento_service_1.MovimientoService])
    ], MovimientoComponent);
    return MovimientoComponent;
}());
exports.MovimientoComponent = MovimientoComponent;
//# sourceMappingURL=movimiento.component.js.map