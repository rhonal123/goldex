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
var core_1 = require("@angular/core");
var negocio_1 = require("./../../models/negocio");
var negocio_service_1 = require("./../../services/negocio.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var NegocioDeleteComponent = (function () {
    function NegocioDeleteComponent(negocioService) {
        this.negocioService = negocioService;
    }
    NegocioDeleteComponent.prototype.ngOnInit = function () {
    };
    NegocioDeleteComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    NegocioDeleteComponent.prototype.openModal = function (component) {
        this.component = component;
        this.mensaje = "";
        this.modal.show();
    };
    NegocioDeleteComponent.prototype.eliminar = function () {
        var _this = this;
        this.negocioService.delete(this.negocio).then(function (negocio) {
            _this.hideModal();
            _this.component.eliminar(negocio);
        }).catch(function (error) {
            _this.mensaje = error.mensaje;
        });
    };
    return NegocioDeleteComponent;
}());
__decorate([
    core_1.Input(),
    __metadata("design:type", negocio_1.Negocio)
], NegocioDeleteComponent.prototype, "negocio", void 0);
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], NegocioDeleteComponent.prototype, "modal", void 0);
NegocioDeleteComponent = __decorate([
    core_1.Component({
        selector: 'negocio-delete-component',
        templateUrl: 'app/templates/negocios/negocio.delete.component.html',
        providers: [negocio_service_1.NegocioService]
    }),
    __metadata("design:paramtypes", [negocio_service_1.NegocioService])
], NegocioDeleteComponent);
exports.NegocioDeleteComponent = NegocioDeleteComponent;
//# sourceMappingURL=negocio.delete.component.js.map