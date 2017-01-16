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
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\">\n<div class=\"modal-content\" *ngIf=\"banco\">\n  <div class=\"modal-header\">\n    <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n      <span aria-hidden=\"true\">&times;</span>\n    </button>\n    <h4 class=\"modal-title\">Eliminar Banco {{banco.id}}</h4>\n  </div>\n  <div class=\"modal-body\">\n    <div class=\"panel-body\">\n      <div  class=\"col-md-12\">\n        <detalle [nombre]=\"'Banco :'\" [contenido]=\"banco.nombre\" ></detalle>\n      </div>\n    </div>\n    <div class=\"col-md-12\" align=\"right\">\n      <label class=\"label label-danger\" role=\"alert\" *ngIf=\"mensaje\">{{mensaje}}</label>\n      <button type=\"button\" class=\"btn btn-danger\" (click)=\"eliminar()\">Eliminar</button>\n    </div>\n  </div>\n</div>\n</div>\n</div>\n  ",
            providers: [banco_service_1.BancoService]
        }), 
        __metadata('design:paramtypes', [banco_service_1.BancoService])
    ], BancoDeleteComponent);
    return BancoDeleteComponent;
}());
exports.BancoDeleteComponent = BancoDeleteComponent;
//# sourceMappingURL=banco.delete.component.js.map