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
var negocio_service_1 = require('./../../services/negocio.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var NegocioComponent = (function () {
    function NegocioComponent(negocioService) {
        this.negocioService = negocioService;
        this.total = 0.0;
        this.totalGramos = 0.0;
    }
    NegocioComponent.prototype.isTransferencia = function (movimiento) {
        return movimiento.tipo === "TRANSFERENCIA";
    };
    NegocioComponent.prototype.isEfectivo = function (movimiento) {
        return movimiento.tipo === "EFECTIVO";
    };
    NegocioComponent.prototype.totalGramo = function (movimiento) {
        if (movimiento.precio_puro === 0 || movimiento.precio_puro == undefined) {
            return 0;
        }
        else {
            return movimiento.saldo / movimiento.precio_puro;
        }
    };
    NegocioComponent.prototype.ngOnInit = function () {
        this.modal.onShown.subscribe(function (event) {
        });
    };
    NegocioComponent.prototype.setModel = function (negocio) {
        var _this = this;
        this.negocio = negocio;
        this.movimientos = [];
        this.abonos = [];
        this.total = 0.0;
        this.totalGramos = 0.0;
        this.negocioService.movimientos_creados(this.negocio.id).subscribe(function (res) {
            _this.movimientos = res;
            for (var _i = 0, _a = _this.movimientos; _i < _a.length; _i++) {
                var movimiento = _a[_i];
                _this.total += movimiento.saldo;
                _this.totalGramos += _this.totalGramo(movimiento);
            }
        });
    };
    NegocioComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    NegocioComponent.prototype.openModal = function () {
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], NegocioComponent.prototype, "modal", void 0);
    NegocioComponent = __decorate([
        core_1.Component({
            selector: 'negocio-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">\n<div class=\"modal-dialog\" style=\"width:85%; height:80%;\" >\n<div class=\"modal-content\" *ngIf=\"negocio\" >\n  <div class=\"modal-header\">\n    <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n      <span aria-hidden=\"true\">&times;</span>\n    </button>\n      <h4 class=\"modal-title\">Detalle Negocio {{negocio.id}}</h4>\n  </div>\n  <div class=\"modal-body\">\n    <div class=\"panel-body\">\n      <div  class=\"col-md-12\">\n        <negocio-detalle-component [negocio]=\"negocio\"></negocio-detalle-component>\n      </div>\n\n      <div  class=\"col-md-12\">\n        <negocio-detalle-component [negocio]=\"negocio\"></negocio-detalle-component>\n      </div>\n      <h4 class=\"pull-right\">Movimientos Pendientes por cerrar. </h4>\n      <div  class=\"col-md-8 col-md-offset-4\" align=\"rigth\">\n        <div class=\"list-group-item\" *ngFor=\"let movimiento of movimientos\" >\n          <h4 class=\"list-group-item-heading\">\n            <strong>{{movimiento.tipo}}</strong>\n             <span *ngIf=\"isTransferencia(movimiento)\">{{movimiento.referencia}}</span>\n             <span *ngIf=\"isTransferencia(movimiento)\">{{movimiento.cuenta.banco.nombre}}</span>\n             <span *ngIf=\"isTransferencia(movimiento)\">{{movimiento.cuenta.numero}}</span>\n             <span> Fecha {{movimiento.fecha}}</span>\n          </h4>\n          <div class=\"row\">\n          <div class=\"col-md-4\"> \n            <label>Monto</label>\n            <span>{{movimiento.monto|number:'1.2-2'}}</span>\n          </div>\n          <div class=\"col-md-4\" align=\"center\" *ngIf=\"isEfectivo(movimiento)\">\n            <label>Comision</label>\n            <span>{{movimiento.comision}}%</span>\n          </div>\n          <div [ngClass]=\"{'col-md-4': isEfectivo(movimiento),'col-md-8': isTransferencia(movimiento)}\"  align=\"right\"> \n            <label>Total </label>\n            <span>{{movimiento.saldo|number:'1.2-2'}}</span>\n          </div>\n          <div class=\"col-md-6\" align=\"right\"> \n            <label>Precio Gramo </label>\n            <span>{{movimiento.precio_puro|number:'1.2-2'}}</span>\n          </div>\n          <div class=\"col-md-6\" align=\"right\"> \n            <label>Total Gramo </label>\n            <span>{{totalGramo(movimiento)|number:'1.2-2'}}</span>\n          </div>\n          </div>\n        </div>\n      </div>\n      <div  class=\"col-md-8 col-md-offset-4\">\n        <label><strong>Totales :</strong></label>\n        <table class=\"table table-hover\" align=\"right\">\n          <tr>\n            <td style=\"text-align: right;\"><strong> Total  : </strong></td>\n            <td style=\"text-align: left\"><strong> {{total|number:'1.2-2'}} Bs.</strong></td>\n          </tr>\n          <tr >\n            <td style=\"text-align: right;\"><strong> Total Gramos: </strong></td>\n            <td style=\"text-align: left;\"> <strong> {{totalGramos|number:'1.2-2'}} Gramos.</strong></td>\n          </tr>\n        </table>\n      </div>\n    </div>\n  </div>\n</div>\n</div>\n</div>",
            providers: [negocio_service_1.NegocioService]
        }), 
        __metadata('design:paramtypes', [negocio_service_1.NegocioService])
    ], NegocioComponent);
    return NegocioComponent;
}());
exports.NegocioComponent = NegocioComponent;
//# sourceMappingURL=negocio.component.js.map