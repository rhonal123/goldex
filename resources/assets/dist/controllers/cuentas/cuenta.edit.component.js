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
var forms_1 = require('@angular/forms');
var core_1 = require('@angular/core');
var cuenta_service_1 = require('./../../services/cuenta.service');
var banco_service_1 = require('./../../services/banco.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var jquery_component_1 = require('./../jquery.component');
var CuentaEditComponent = (function () {
    function CuentaEditComponent(cuentaService, bancoService, fB) {
        this.cuentaService = cuentaService;
        this.bancoService = bancoService;
        this.fB = fB;
        this.formErrors = {
            'nombre': ''
        };
    }
    CuentaEditComponent.prototype.onValueChanged = function (data) {
        if (!this.cuentaForm) {
            return;
        }
        for (var field in this.formErrors) {
            this.formErrors[field] = '';
        }
    };
    CuentaEditComponent.prototype.guardar = function () {
        var _this = this;
        this.cuenta = this.cuentaForm.value;
        this.cuenta.banco_id = this.bancoSelect.val();
        this.cuentaService.guardar(this.cuenta).then(function (cuenta) {
            _this.component.changeTable(cuenta);
            _this.hideModal();
        }).catch(function (errores) {
            console.log(errores.numero);
            _this.formErrors['numero'] = errores.numero;
            _this.formErrors['banco_id'] = errores.banco_id;
        });
    };
    CuentaEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.formBuilder();
        this.modal.onShown.subscribe(function (event) {
            _this.bancoSelect = jquery_component_1.JqueryComponent.bancos("form #banco_id", _this.cuenta.banco);
        });
    };
    CuentaEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.cuentaForm = this.fB.group({
            'id': '',
            'numero': '',
            'banco_id': '',
        });
        this.cuentaForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    CuentaEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    CuentaEditComponent.prototype.setModel = function (cuenta) {
        this.cuenta = cuenta;
        this.cuentaForm.setValue({
            'id': cuenta.id,
            'numero': cuenta.numero,
            'banco_id': cuenta.banco_id
        });
    };
    CuentaEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], CuentaEditComponent.prototype, "modal", void 0);
    CuentaEditComponent = __decorate([
        core_1.Component({
            selector: 'cuenta-edit-component',
            templateUrl: 'app/templates/cuentas/cuenta.edit.component.html',
            providers: [cuenta_service_1.CuentaService]
        }), 
        __metadata('design:paramtypes', [cuenta_service_1.CuentaService, banco_service_1.BancoService, forms_1.FormBuilder])
    ], CuentaEditComponent);
    return CuentaEditComponent;
}());
exports.CuentaEditComponent = CuentaEditComponent;
//# sourceMappingURL=cuenta.edit.component.js.map