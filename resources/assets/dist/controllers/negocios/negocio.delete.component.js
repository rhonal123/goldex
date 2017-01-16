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
    __decorate([
        core_1.Input(), 
        __metadata('design:type', negocio_1.Negocio)
    ], NegocioDeleteComponent.prototype, "negocio", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], NegocioDeleteComponent.prototype, "modal", void 0);
    NegocioDeleteComponent = __decorate([
        core_1.Component({
            selector: 'negocio-delete-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\" >\n<div class=\"modal-content\" *ngIf=\"negocio\" >\n  <div class=\"modal-header\">\n    <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n      <span aria-hidden=\"true\">&times;</span>\n    </button>\n      <h4 class=\"modal-title\">Detalle Negocio {{negocio.id}}</h4>\n  </div>\n  <div class=\"modal-body\">\n    <div class=\"panel-body\">\n      <div  class=\"col-md-12\">\n        <negocio-detalle-component [negocio]=\"negocio\"></negocio-detalle-component>\n      </div>\n      <div class=\"col-md-12\" align=\"right\">\n        <label class=\"label label-danger\" role=\"alert\" *ngIf=\"mensaje\">{{mensaje}}</label> \n        <button type=\"button\" class=\"btn btn-danger\" (click)=\"eliminar()\">Eliminar</button>\n      </div>\n    </div>\n  </div>\n</div>\n</div>\n</div>",
            providers: [negocio_service_1.NegocioService]
        }), 
        __metadata('design:paramtypes', [negocio_service_1.NegocioService])
    ], NegocioDeleteComponent);
    return NegocioDeleteComponent;
}());
exports.NegocioDeleteComponent = NegocioDeleteComponent;
//# sourceMappingURL=negocio.delete.component.js.map