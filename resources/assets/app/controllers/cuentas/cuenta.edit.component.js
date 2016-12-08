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
var cuenta_1 = require('./../../models/cuenta');
var cuenta_service_1 = require('./../../services/cuenta.service');
var banco_service_1 = require('./../../services/banco.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var core_2 = require('@angular/core');
var forms_1 = require('@angular/forms');
///<reference path="./jquery.d.ts" />
var CuentaEditComponent = (function () {
    function CuentaEditComponent(cuentaService, bancoService, fB) {
        this.cuentaService = cuentaService;
        this.bancoService = bancoService;
        this.fB = fB;
        this.onShown = new core_2.EventEmitter();
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
    CuentaEditComponent.prototype.ngAfterViewInit = function () {
        /// $("#banco_id").trigger('change');
    };
    /*
    var para = document.createElement("p");
    var node = document.createTextNode("This is new.");
    para.appendChild(node);
    
    var element = document.getElementById("div1");
    element.appendChild(para);
    */
    CuentaEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.formBuilder();
        var formato = function presentacion(banco) {
            return banco.nombre || banco.text;
        };
        this.modal.onShown.subscribe(function (event) {
            if (_this.cuenta.id) {
                var op = document.createElement("option");
                op.setAttribute("value", _this.cuenta.banco.id.toString());
                op.appendChild(document.createTextNode(_this.cuenta.banco.nombre));
                $("#banco_id").empty();
                $("#banco_id").append(op);
            }
            _this.bancoSelect = $("#banco_id").select2({
                ajax: {
                    url: "http://localhostsistema/bancos",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            search: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * data.per_page) < data.total
                            }
                        };
                    }
                },
                placeholder: 'Seleccione un Banco ',
                escapeMarkup: function (markup) { console.log(markup); return markup; },
                minimumInputLength: 0,
                templateSelection: formato,
                templateResult: formato,
            });
        });
    };
    CuentaEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.cuentaForm = this.fB.group({
            'id': '',
            'numero': '',
            'banco_id': '',
            'banco': null,
            'created_at': '',
            'updated_at': ''
        });
        this.cuentaForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    CuentaEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    CuentaEditComponent.prototype.setModel = function (cuenta) {
        this.cuenta = cuenta;
        this.cuentaForm.setValue(cuenta_1.Cuenta.clone(cuenta));
    };
    CuentaEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], CuentaEditComponent.prototype, "modal", void 0);
    __decorate([
        core_1.Output(), 
        __metadata('design:type', core_2.EventEmitter)
    ], CuentaEditComponent.prototype, "onShown", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', cuenta_1.Cuenta)
    ], CuentaEditComponent.prototype, "cuenta", void 0);
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