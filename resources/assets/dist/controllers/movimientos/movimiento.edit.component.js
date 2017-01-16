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
var movimiento_service_1 = require('./../../services/movimiento.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var forms_1 = require('@angular/forms');
var jquery_component_1 = require('./../jquery.component');
var MovimientoEditComponent = (function () {
    function MovimientoEditComponent(movimientoService, fB) {
        this.movimientoService = movimientoService;
        this.fB = fB;
        this.tipo = "";
        this.saldo = 0.0;
        this.comision = 0.0;
        this.monto = 0.0;
        this.formErrors = {
            'id': '',
            'monto': '',
            'comision': '',
            'fecha': '',
            'descripcion': '',
            'tipo': '',
            'referencia': '',
            'estado': '',
            'negocio_id': '',
            'cuenta_id': '',
        };
    }
    MovimientoEditComponent.prototype.onValueChanged = function (data) {
        if (!this.movimientoForm) {
            return;
        }
        for (var field in this.formErrors) {
            this.formErrors[field] = '';
        }
    };
    MovimientoEditComponent.prototype.guardar = function () {
        var _this = this;
        var movimiento = this.movimientoForm.value;
        movimiento.cuenta_id = this.jcuenta.val();
        movimiento.negocio_id = this.jnegocio.val();
        movimiento.fecha = this.jfecha.val();
        movimiento.comision = this.comision;
        this.movimientoService.guardar(movimiento).then(function (movimiento) {
            _this.component.changeTable(movimiento);
            _this.hideModal();
        }).catch(function (errores) {
            _this.formErrors['id'] = errores.id;
            _this.formErrors['monto'] = errores.monto;
            _this.formErrors['comision'] = errores.comision;
            _this.formErrors['fecha'] = errores.fecha;
            _this.formErrors['descripcion'] = errores.descripcion;
            _this.formErrors['tipo'] = errores.tipo;
            _this.formErrors['referencia'] = errores.referencia;
            _this.formErrors['estado'] = errores.estado;
            _this.formErrors['negocio_id'] = errores.negocio_id;
            _this.formErrors['cuenta_id'] = errores.cuenta_id;
        });
    };
    MovimientoEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.formBuilder();
        this.modal.onShown.subscribe(function (event) {
            _this.jfecha = jquery_component_1.JqueryComponent.fecha("form #fecha", _this.movimiento.fecha);
            _this.jcuenta = jquery_component_1.JqueryComponent.cuentas("form #cuenta_id", _this.movimiento.cuenta);
            _this.jnegocio = jquery_component_1.JqueryComponent.negocios("form #negocio_id", _this.movimiento.negocio);
        });
    };
    MovimientoEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.movimientoForm = this.fB.group({
            'id': '',
            'monto': '',
            'comision': '',
            'fecha': '',
            'descripcion': '',
            'tipo': '',
            'referencia': '',
            'estado': '',
            'negocio_id': '',
            'cuenta_id': '',
        });
        this.movimientoForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    MovimientoEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    MovimientoEditComponent.prototype.setModel = function (movimiento) {
        this.movimiento = movimiento;
        this.saldo = this.movimiento.saldo || 0;
        this.monto = this.movimiento.monto || 0;
        this.comision = this.movimiento.comision || 0;
        this.movimientoForm.setValue({
            'id': this.movimiento.id || '',
            'monto': this.movimiento.monto || '',
            'comision': this.movimiento.comision || '',
            'fecha': this.movimiento.fecha || '',
            'descripcion': this.movimiento.descripcion || '',
            'tipo': this.movimiento.tipo || '',
            'referencia': this.movimiento.referencia || '',
            'estado': this.movimiento.estado || '',
            'negocio_id': this.movimiento.negocio_id || '',
            'cuenta_id': this.movimiento.cuenta_id || '',
        });
    };
    MovimientoEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    MovimientoEditComponent.prototype.actualizarSaldo = function () {
        this.comision = (Math.abs(this.comision) <= 100 ? Math.abs(this.comision) : 0);
        this.saldo = ((this.comision / 100) + 1) * this.monto;
    };
    MovimientoEditComponent.prototype.cambiarTipo = function () {
        if (this.tipo === "TRANSFERENCIA") {
            this.comision = 0.0;
            this.jcuenta = jquery_component_1.JqueryComponent.cuentas("form #cuenta_id", this.movimiento.cuenta);
            this.actualizarSaldo();
        }
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], MovimientoEditComponent.prototype, "modal", void 0);
    MovimientoEditComponent = __decorate([
        core_1.Component({
            selector: 'movimiento-edit-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"  >\n<div class=\"modal-dialog\" style=\"width:95%; height:80%;\" >\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n  <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n    <span aria-hidden=\"true\">&times;</span>\n  </button>\n  <h4 class=\"modal-title\">Editar Movimiento</h4>\n</div>\n<div class=\"modal-body\">\n  <div class=\"panel-body\" *ngIf=\"movimiento\">\n    <form [formGroup]=\"movimientoForm\" (ngSubmit)=\"guardar()\" class=\"form-horizontal\">\n      \n      <div [ngClass]=\"{'form-group': true, 'col-md-6': true,'has-error': formErrors.negocio_id}\"  >\n        <label for=\"negocio_id\" class=\"col-sm-2 control-label\" for=\"estado\">Negocio o Socio </label>\n        <div class=\"col-sm-10\">\n          <select id=\"negocio_id\" class=\"form-control\"></select>\n          <span  *ngIf=\"formErrors.negocio_id\" class=\"help-block\">{{ formErrors.negocio_id}}</span>\n        </div> \n      </div>\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.tipo}\">\n        <label for=\"tipo\" class=\"col-md-2 control-label\" for=\"tipo\">Tipo</label>\n        <div class=\"col-md-10\">\n          <select id=\"tipo\" formControlName=\"tipo\" class=\"form-control\"  [(ngModel)]=\"tipo\" (click)=\"cambiarTipo()\"> \n            <option values=\"TRANSFERENCIA\">TRANSFERENCIA</option>\n            <option values=\"EFECTIVO\">EFECTIVO</option>\n          </select>\n          <span  *ngIf=\"formErrors.tipo\" id=\"errornombre\" class=\"help-block\">{{ formErrors.tipo}}</span>\n        </div>\n      </div>\n\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.fecha}\"  >\n        <label for=\"fecha\" class=\"col-md-2 control-label\" for=\"tipo\">Fecha</label>\n        <div class=\"col-md-10\">\n          <input id=\"fecha\" type=\"text\" data-provide=\"datepicker\" class=\"form-control input-sm\" >\n          <span  *ngIf=\"formErrors.fecha\" id=\"errornombre\" class=\"help-block\">{{ formErrors.fecha}}</span>\n        </div>\n      </div>\n\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.monto}\">\n        <label for=\"monto\" class=\"col-md-2 control-label\" for=\"monto\"> Monto </label>\n        <div class=\"col-md-8\">\n          <input  id=\"monto\" type=\"number\" class=\"form-control\" formControlName=\"monto\" [(ngModel)]=\"monto\" (keyup)=\"actualizarSaldo()\">\n          <span  *ngIf=\"formErrors.monto\" id=\"errornombre\" class=\"help-block\">{{ formErrors.monto}}</span>\n        </div>\n       <label class=\"col-md-2 control-label\" for=\"monto\"> Bs. </label>\n      </div>\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.cuenta_id}\"  *ngIf=\" tipo=='TRANSFERENCIA'\">\n        <label for=\"cuenta_id\" class=\"col-md-2 control-label\" for=\"tipo\">Cuenta</label>\n        <div class=\"col-md-10\">\n          <select id=\"cuenta_id\" class=\"form-control\"></select>\n          <span  *ngIf=\"formErrors.cuenta_id\" id=\"errornombre\" class=\"help-block\">{{ formErrors.cuenta_id}}</span>\n        </div>\n      </div>\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.referencia}\"  *ngIf=\" tipo == 'TRANSFERENCIA' \">\n        <label for=\"referencia\" class=\"col-md-2 control-label\" for=\"referencia\">Referencia </label>\n        <div class=\"col-md-10\">\n          <input  id=\"referencia\" type=\"text\" class=\"form-control\" formControlName=\"referencia\">\n          <span  *ngIf=\"formErrors.referencia\" id=\"errornombre\" class=\"help-block\">{{ formErrors.referencia}}</span>\n        </div>\n      </div>\n\n      <div [ngClass]=\"{'form-group': true,'col-md-setoff-6':true, 'col-md-6': true,'has-error': formErrors.comision}\" *ngIf=\" tipo == 'EFECTIVO' \"  >\n        <label for=\"comision\" class=\"col-md-2 control-label\" for=\"comision\"> Comision </label>\n        <div class=\"col-md-6\">\n          <input  id=\"comision\" type=\"number\" class=\"form-control\" formControlName=\"comision\" [(ngModel)]=\"comision\" (keyup)=\"actualizarSaldo()\">\n          <span  *ngIf=\"formErrors.comision\" id=\"errornombre\" class=\"help-block\">{{ formErrors.comision}}</span>\n        </div>\n        <label  class=\"col-md-4 control-label\" for=\"comision\">%</label>\n      </div>\n\n\n      <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.descripcion}\"  >\n        <label for=\"descripcion\" class=\"col-md-2 control-label\" for=\"tipo\">Descripci\u00F3n </label>\n        <div class=\"col-md-10\">\n          <textarea id=\"descripcion\" type=\"text\" class=\"form-control\" formControlName=\"descripcion\" row=\"4\" > </textarea> \n          <span  *ngIf=\"formErrors.descripcion\" id=\"errornombre\" class=\"help-block\">{{ formErrors.descripcion}}</span>\n        </div>\n      </div>\n       <div [ngClass]=\"{'form-group': true,'col-md-12': true}\" >\n        <div class=\"col-md-5 pull-right\" >\n          <h4 class=\"page-header\"><strong>Totales :</strong></h4>\n          <table class=\"table table-hover\">\n            <tr>\n              <td style=\"text-align: right;\"><strong> Total : </strong></td>\n              <td style=\"text-align: left;\"> <strong> {{saldo|number:'1.2-2'}} Bs.</strong></td>\n            </tr>\n          </table>\n        </div>\n        <div class=\"col-md-12\"  >\n          <input type=\"button\" class=\"btn btn-primary pull-right\" (click)=\"guardar()\" value=\"Guardar\">\n        </div>\n      </div>  \n\n    </form>\n  </div>\n</div> <!-- end modal body  --> \n</div>\n</div>\n</div>\n  ",
            providers: [movimiento_service_1.MovimientoService]
        }), 
        __metadata('design:paramtypes', [movimiento_service_1.MovimientoService, forms_1.FormBuilder])
    ], MovimientoEditComponent);
    return MovimientoEditComponent;
}());
exports.MovimientoEditComponent = MovimientoEditComponent;
//# sourceMappingURL=movimiento.edit.component.js.map