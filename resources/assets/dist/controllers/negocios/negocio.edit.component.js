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
var forms_1 = require('@angular/forms');
var NegocioEditComponent = (function () {
    function NegocioEditComponent(negocioService, fB) {
        this.negocioService = negocioService;
        this.fB = fB;
        this.formErrors = {
            'nombre': '',
            'rif': '',
            'descripcion': '',
            'direccion': '',
            'encargado': '',
            'telefono': ''
        };
    }
    NegocioEditComponent.prototype.onValueChanged = function (data) {
        if (!this.negocioForm) {
            return;
        }
        for (var field in this.formErrors) {
            this.formErrors[field] = '';
        }
    };
    NegocioEditComponent.prototype.guardar = function () {
        var _this = this;
        this.negocio = this.negocioForm.value;
        this.negocioService.guardar(this.negocio).then(function (negocio) {
            _this.component.changeTable(negocio);
            _this.hideModal();
        }).catch(function (errores) {
            console.log(errores.nombre);
            _this.formErrors['nombre'] = errores.nombre;
            _this.formErrors['rif'] = errores.rif;
            _this.formErrors['descripcion'] = errores.descripcion;
            _this.formErrors['direccion'] = errores.direccion;
            _this.formErrors['encargado'] = errores.encargado;
            _this.formErrors['telefono'] = errores.telefono;
        });
    };
    NegocioEditComponent.prototype.ngOnInit = function () {
        this.formBuilder();
    };
    NegocioEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.negocioForm = this.fB.group({
            'id': '',
            'nombre': '',
            'rif': '',
            'descripcion': '',
            'direccion': '',
            'encargado': '',
            'telefono': '',
        });
        this.negocioForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    NegocioEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    NegocioEditComponent.prototype.setModel = function (negocio) {
        this.negocio = negocio;
        this.negocioForm.setValue({
            'id': negocio.id || '',
            'nombre': negocio.id || '',
            'rif': negocio.rif || '',
            'descripcion': negocio.descripcion || '',
            'direccion': negocio.direccion || '',
            'encargado': negocio.encargado || '',
            'telefono': negocio.telefono || '',
        });
    };
    NegocioEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], NegocioEditComponent.prototype, "modal", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', negocio_1.Negocio)
    ], NegocioEditComponent.prototype, "negocio", void 0);
    NegocioEditComponent = __decorate([
        core_1.Component({
            selector: 'negocio-edit-component',
            template: "\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"  >\n  <div class=\"modal-dialog\" style=\"width:85%; height:80%;\" >\n    <div class=\"modal-content\">\n      <div class=\"modal-header\">\n        <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n          <span aria-hidden=\"true\">&times;</span>\n        </button>\n        <h4 class=\"modal-title\">Editar Negocio</h4>\n      </div>\n      <div class=\"modal-body\">\n        <div class=\"panel-body\" *ngIf=\"negocio\">\n        <form [formGroup]=\"negocioForm\" (ngSubmit)=\"guardar()\" class=\"form-horizontal\">\n\n         <div [ngClass]=\"{'form-group': true,'col-md-6': true, 'has-error': formErrors.rif}\"  >\n            <label for=\"rif\" class=\"col-sm-2 control-label\" for=\"rif\">Rif</label>\n            <div class=\"col-sm-10\">\n              <input  id=\"rif\" type=\"text\" class=\"form-control\" formControlName=\"rif\" placeholder=\"Rif del negocio\" >\n              <span  *ngIf=\"formErrors.rif\" class=\"help-block\">{{ formErrors.rif}}</span>\n            </div>\n          </div>\n\n          <div [ngClass]=\"{'form-group': true,'col-md-6': true,'has-error': formErrors.nombre}\"  >\n            <label for=\"nombre\" class=\"col-sm-2 control-label\" for=\"nombre\">Nombre</label>\n            <div class=\"col-sm-10\">\n              <input  id=\"nombre\" type=\"text\" class=\"form-control\" formControlName=\"nombre\" placeholder=\"Nombre del negocio\" >\n              <span  *ngIf=\"formErrors.nombre\" class=\"help-block\">{{ formErrors.nombre}}</span>\n            </div>\n          </div>\n\n          <div [ngClass]=\"{'form-group': true,'col-md-6': true,  'has-error': formErrors.encargado}\"  >\n            <label for=\"encargado\" class=\"col-sm-2 control-label\" for=\"encargado\">Encargado</label>\n            <div class=\"col-sm-10\">\n              <input  id=\"encargado\" type=\"text\" class=\"form-control\" formControlName=\"encargado\" placeholder=\"Encargado del negocio\" >\n              <span  *ngIf=\"formErrors.encargado\" class=\"help-block\">{{ formErrors.encargado}}</span>\n            </div>\n          </div>\n\n         <div [ngClass]=\"{'form-group': true, 'col-md-6': true, 'has-error': formErrors.telefono}\"  >\n            <label for=\"telefono\" class=\"col-sm-2 control-label\" for=\"telefono\">Telefono</label>\n            <div class=\"col-sm-10\">\n              <input  id=\"telefono\" type=\"text\" class=\"form-control\" formControlName=\"telefono\" placeholder=\"Nombre del negocio\" >\n              <span  *ngIf=\"formErrors.telefono\" class=\"help-block\">{{ formErrors.telefono}}</span>\n            </div>\n          </div>\n\n\n         <div [ngClass]=\"{'form-group': true,'col-md-12': true, 'has-error': formErrors.descripcion}\"  >\n            <label for=\"descripcion\" class=\"col-sm-1 control-label\" for=\"descripcion\">Descripci\u00F3n</label>\n            <div class=\"col-sm-10\">\n              <textarea id=\"descripcion\" class=\"form-control\" formControlName=\"descripcion\" placeholder=\"Descripcion del negocio\"  rows=\"3\"></textarea>  \n              <span  *ngIf=\"formErrors.descripcion\" class=\"help-block\">{{ formErrors.descripcion}}</span>\n            </div>\n          </div>\n           \n         <div [ngClass]=\"{'form-group': true,'col-md-12': true, 'has-error': formErrors.direccion}\"  >\n            <label for=\"direccion\" class=\"col-sm-1 control-label\" for=\"direccion\">Direcci\u00F3n</label>\n            <div class=\"col-sm-10\">\n              <textarea  id=\"direccion\" class=\"form-control\" formControlName=\"direccion\" placeholder=\"Direcci\u00F3n del negocio\" rows=\"3\" ></textarea>\n              <span  *ngIf=\"formErrors.direccion\" class=\"help-block\">{{ formErrors.direccion}}</span>\n            </div>\n          </div>\n\n          <div class=\"form-group\">\n            <div class=\"col-sm-12\" align=\"right\">\n              <input type=\"button\" class=\"btn btn-default\" (click)=\"guardar()\" value=\"Guardar\">\n            </div>\n          </div>\n        </form>\n         </div>\n      </div>\n    </div>\n  </div>\n</div>\n  ",
            providers: [negocio_service_1.NegocioService]
        }), 
        __metadata('design:paramtypes', [negocio_service_1.NegocioService, forms_1.FormBuilder])
    ], NegocioEditComponent);
    return NegocioEditComponent;
}());
exports.NegocioEditComponent = NegocioEditComponent;
//# sourceMappingURL=negocio.edit.component.js.map