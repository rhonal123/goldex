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
var prestamo_1 = require('./../../models/prestamo');
var prestamo_service_1 = require('./../../services/prestamo.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var PrestamoComponent = (function () {
    function PrestamoComponent(prestamoService) {
        this.prestamoService = prestamoService;
    }
    PrestamoComponent.prototype.ngOnInit = function () {
    };
    PrestamoComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    PrestamoComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', prestamo_1.Prestamo)
    ], PrestamoComponent.prototype, "prestamo", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], PrestamoComponent.prototype, "modal", void 0);
    PrestamoComponent = __decorate([
        core_1.Component({
            selector: 'prestamo-component',
            templateUrl: 'app/templates/prestamos/prestamo.component.html',
            providers: [prestamo_service_1.PrestamoService]
        }), 
        __metadata('design:paramtypes', [prestamo_service_1.PrestamoService])
    ], PrestamoComponent);
    return PrestamoComponent;
}());
exports.PrestamoComponent = PrestamoComponent;
//# sourceMappingURL=prestamo.component.js.map