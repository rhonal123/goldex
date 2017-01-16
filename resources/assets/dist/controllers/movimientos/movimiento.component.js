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
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\">\n<div class=\"modal-content\" *ngIf=\"movimiento\">\n<div class=\"modal-header\">\n  <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n    <span aria-hidden=\"true\">&times;</span>\n  </button>\n  <h4 class=\"modal-title\">Movimiento {{movimiento.id}}</h4>\n</div>\n<div class=\"modal-body\">\n  <div class=\"panel-body\">\n    <div class=\"col-md-12\">\n      <movimiento-detalle-component  [movimiento]=\"movimiento\"></movimiento-detalle-component>\n  </div>\n</div> <!-- end  modal-body --> \n</div>\n</div>\n</div>\n  ",
            providers: [movimiento_service_1.MovimientoService]
        }), 
        __metadata('design:paramtypes', [movimiento_service_1.MovimientoService])
    ], MovimientoComponent);
    return MovimientoComponent;
}());
exports.MovimientoComponent = MovimientoComponent;
//# sourceMappingURL=movimiento.component.js.map