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
var banco_1 = require('./../../models/banco');
var banco_service_1 = require('./../../services/banco.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var BancoDeleteComponent = (function () {
    function BancoDeleteComponent(bancoService) {
        this.bancoService = bancoService;
    }
    BancoDeleteComponent.prototype.ngOnInit = function () {
    };
    BancoDeleteComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    BancoDeleteComponent.prototype.openModal = function (component) {
        this.component = component;
        this.mensaje = "";
        this.modal.show();
    };
    BancoDeleteComponent.prototype.eliminar = function () {
        var _this = this;
        this.bancoService.delete(this.banco).then(function (banco) {
            _this.hideModal();
            _this.component.eliminar(banco);
        }).catch(function (error) {
            _this.mensaje = error.cuentas;
        });
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', banco_1.Banco)
    ], BancoDeleteComponent.prototype, "banco", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], BancoDeleteComponent.prototype, "modal", void 0);
    BancoDeleteComponent = __decorate([
        core_1.Component({
            selector: 'banco-delete-component',
            templateUrl: 'resources/assets/app/controllers/templates/bancos/banco.detele.component.html',
            providers: [banco_service_1.BancoService]
        }), 
        __metadata('design:paramtypes', [banco_service_1.BancoService])
    ], BancoDeleteComponent);
    return BancoDeleteComponent;
}());
exports.BancoDeleteComponent = BancoDeleteComponent;
//# sourceMappingURL=banco.delete.component.js.map