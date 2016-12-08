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
var negocio_1 = require('./../../models/negocio');
var negocio_service_1 = require('./../../services/negocio.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var NegocioComponent = (function () {
    function NegocioComponent(negocioService) {
        this.negocioService = negocioService;
    }
    NegocioComponent.prototype.ngOnInit = function () {
    };
    NegocioComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    NegocioComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', negocio_1.Negocio)
    ], NegocioComponent.prototype, "negocio", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], NegocioComponent.prototype, "modal", void 0);
    NegocioComponent = __decorate([
        core_1.Component({
            selector: 'negocio-component',
            templateUrl: 'resources/assets/app/controllers/templates/negocios/negocio.component.html',
            providers: [negocio_service_1.NegocioService]
        }), 
        __metadata('design:paramtypes', [negocio_service_1.NegocioService])
    ], NegocioComponent);
    return NegocioComponent;
}());
exports.NegocioComponent = NegocioComponent;
//# sourceMappingURL=negocio.component.js.map