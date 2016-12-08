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
var forms_1 = require('@angular/forms');
var BancoEditComponent = (function () {
    function BancoEditComponent(bancoService, fB) {
        this.bancoService = bancoService;
        this.fB = fB;
        this.formErrors = {
            'nombre': ''
        };
    }
    BancoEditComponent.prototype.onValueChanged = function (data) {
        if (!this.bancoForm) {
            return;
        }
        for (var field in this.formErrors) {
            this.formErrors[field] = '';
        }
    };
    BancoEditComponent.prototype.guardar = function () {
        var _this = this;
        this.banco = this.bancoForm.value;
        this.bancoService.guardar(this.banco).then(function (banco) {
            _this.component.changeTable(banco);
            _this.hideModal();
        }).catch(function (errores) {
            console.log(errores.nombre);
            _this.formErrors['nombre'] = errores.nombre;
        });
    };
    BancoEditComponent.prototype.ngOnInit = function () {
        this.formBuilder();
    };
    BancoEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.bancoForm = this.fB.group({
            'id': '',
            'nombre': '',
            'created_at': '',
            'updated_at': ''
        });
        this.bancoForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    BancoEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    BancoEditComponent.prototype.setModel = function (banco) {
        this.banco = banco;
        this.bancoForm.setValue(banco_1.Banco.clone(banco));
    };
    BancoEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], BancoEditComponent.prototype, "modal", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', banco_1.Banco)
    ], BancoEditComponent.prototype, "banco", void 0);
    BancoEditComponent = __decorate([
        core_1.Component({
            selector: 'banco-edit-component',
            templateUrl: 'app/templates/bancos/banco.edit.component.html',
            providers: [banco_service_1.BancoService]
        }), 
        __metadata('design:paramtypes', [banco_service_1.BancoService, forms_1.FormBuilder])
    ], BancoEditComponent);
    return BancoEditComponent;
}());
exports.BancoEditComponent = BancoEditComponent;
//# sourceMappingURL=banco.edit.component.js.map