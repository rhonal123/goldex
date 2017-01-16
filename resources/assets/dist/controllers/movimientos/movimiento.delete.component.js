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
var MovimientoDeleteComponent = (function () {
    function MovimientoDeleteComponent(movimientoService) {
        this.movimientoService = movimientoService;
    }
    MovimientoDeleteComponent.prototype.ngOnInit = function () {
    };
    MovimientoDeleteComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    MovimientoDeleteComponent.prototype.openModal = function (component) {
        this.component = component;
        this.mensaje = "";
        this.modal.show();
    };
    MovimientoDeleteComponent.prototype.eliminar = function () {
        var _this = this;
        this.movimientoService.delete(this.movimiento).then(function (movimiento) {
            _this.hideModal();
            _this.component.eliminar(movimiento);
        }).catch(function (error) {
            _this.mensaje = error.mensaje;
        });
    };
    __decorate([
        core_1.Input(), 
        __metadata('design:type', movimiento_1.Movimiento)
    ], MovimientoDeleteComponent.prototype, "movimiento", void 0);
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], MovimientoDeleteComponent.prototype, "modal", void 0);
    MovimientoDeleteComponent = __decorate([
        core_1.Component({
            selector: 'movimiento-delete-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"  >\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\" >\n<div class=\"modal-content\" *ngIf=\"movimiento\">\n<div class=\"modal-header\">\n  <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n    <span aria-hidden=\"true\">&times;</span>\n  </button>\n  <h4 class=\"modal-title\">Eliminar Movimiento {{movimiento.id}}</h4>\n</div>\n<div class=\"modal-body\">\n  <div class=\"panel-body\"  >\n    <div class=\"col-md-12\">\n      <movimiento-detalle-component  [movimiento]=\"movimiento\"></movimiento-detalle-component>\n      <label class=\"label label-danger\" role=\"alert\" *ngIf=\"mensaje\">{{mensaje}}</label> \n      <button type=\"button\" class=\"btn btn-danger\" (click)=\"eliminar()\">Eliminar</button>\n    </div>\n  </div>\n</div>\n</div>\n</div>\n</div>\n  ",
            providers: [movimiento_service_1.MovimientoService]
        }), 
        __metadata('design:paramtypes', [movimiento_service_1.MovimientoService])
    ], MovimientoDeleteComponent);
    return MovimientoDeleteComponent;
}());
exports.MovimientoDeleteComponent = MovimientoDeleteComponent;
//# sourceMappingURL=movimiento.delete.component.js.map