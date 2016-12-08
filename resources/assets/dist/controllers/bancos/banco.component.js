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
var banco_1 = require("./../../models/banco");
var banco_service_1 = require("./../../services/banco.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var BancoComponent = (function () {
    function BancoComponent(bancoService) {
        this.bancoService = bancoService;
    }
    BancoComponent.prototype.ngOnInit = function () {
    };
    BancoComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    BancoComponent.prototype.openModal = function () {
        this.modal.show();
    };
    return BancoComponent;
}());
__decorate([
    core_1.Input(),
    __metadata("design:type", banco_1.Banco)
], BancoComponent.prototype, "banco", void 0);
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], BancoComponent.prototype, "modal", void 0);
BancoComponent = __decorate([
    core_1.Component({
        selector: 'banco-component',
        templateUrl: 'app/templates/bancos/banco.component.html',
        providers: [banco_service_1.BancoService]
    }),
    __metadata("design:paramtypes", [banco_service_1.BancoService])
], BancoComponent);
exports.BancoComponent = BancoComponent;
//# sourceMappingURL=banco.component.js.map