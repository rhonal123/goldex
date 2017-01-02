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
var prestamo_service_1 = require('./../../services/prestamo.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var forms_1 = require('@angular/forms');
var jquery_component_1 = require('./../jquery.component');
var PrestamoEditComponent = (function () {
    function PrestamoEditComponent(prestamoService, fB) {
        this.prestamoService = prestamoService;
        this.fB = fB;
        this.puro = 0;
        this.monto = 0;
        this.cantidad = 0;
        this.formErrors = {
            'tipo': '',
            'negocio_id': '',
            'fecha': '',
            'precio_material': '',
            'monto': '',
            'descripcion': '',
            'cuenta_id': '',
            'comision': '',
            'referencia': ''
        };
    }
    PrestamoEditComponent.prototype.onValueChanged = function (data) {
        if (!this.prestamoForm) {
            return;
        }
        for (var field in this.formErrors) {
            this.formErrors[field] = '';
        }
    };
    PrestamoEditComponent.prototype.guardar = function () {
        var _this = this;
        var values = this.prestamoForm.value;
        values.cuenta_id = this.jcuenta.val();
        values.negocio_id = this.jnegocio.val();
        values.fecha = this.jfecha.val();
        this.prestamoService.guardar(values).then(function (prestamo) {
            _this.component.changeTable(prestamo);
            _this.hideModal();
        }).catch(function (errores) {
            _this.formErrors['tipo'] = errores.tipo;
            _this.formErrors['negocio_id'] = errores.negocio_id;
            _this.formErrors['fecha'] = errores.fecha;
            _this.formErrors['precio_material'] = errores.precio_material;
            _this.formErrors['monto'] = errores.monto;
            _this.formErrors['descripcion'] = errores.descripcion;
            _this.formErrors['cuenta_id'] = errores.cuenta_id;
            _this.formErrors['comision'] = errores.comision;
            _this.formErrors['referencia'] = errores.referencia;
        });
    };
    PrestamoEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.formBuilder();
        this.modal.onShown.subscribe(function (event) {
            _this.jfecha = jquery_component_1.JqueryComponent.fecha("form #fecha", _this.prestamo.fecha);
            _this.jcuenta = jquery_component_1.JqueryComponent.cuentas("form #cuenta_id", _this.prestamo.cuenta);
            _this.jnegocio = jquery_component_1.JqueryComponent.negocios("form #negocio_id", _this.prestamo.negocio);
        });
    };
    PrestamoEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.prestamoForm = this.fB.group({
            'id': '',
            'tipo': '',
            'negocio_id': '',
            'fecha': '',
            'precio_material': '',
            'monto': '',
            'descripcion': '',
            'cuenta_id': '',
            'comision': '',
            'referencia': ''
        });
        this.prestamoForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    PrestamoEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    PrestamoEditComponent.prototype.setModel = function (prestamo) {
        this.prestamo = prestamo;
        this.puro = prestamo.precio_material;
        this.monto = prestamo.monto;
        this.calcularPuro();
        this.tipo = this.prestamo.tipo;
        this.prestamoForm.setValue({
            'id': prestamo.id,
            'tipo': prestamo.tipo,
            'negocio_id': prestamo.negocio_id,
            'fecha': prestamo.fecha,
            'precio_material': prestamo.precio_material,
            'monto': prestamo.monto,
            'descripcion': prestamo.descripcion,
            'cuenta_id': prestamo.cuenta_id,
            'comision': prestamo.comision,
            'referencia': prestamo.referencia
        });
    };
    PrestamoEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    PrestamoEditComponent.prototype.cambiarTipo = function () {
        if (this.tipo != "efectivo") {
            this.jcuenta = jquery_component_1.JqueryComponent.cuentas("form #cuenta_id");
        }
    };
    PrestamoEditComponent.prototype.calcularPuro = function () {
        if (this.puro == 0) {
            this.cantidad = 0;
        }
        else {
            this.cantidad = this.monto / this.puro;
        }
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], PrestamoEditComponent.prototype, "modal", void 0);
    PrestamoEditComponent = __decorate([
        core_1.Component({
            selector: 'prestamo-edit-component',
            templateUrl: 'app/templates/prestamos/prestamo.edit.component.html',
            providers: [prestamo_service_1.PrestamoService]
        }), 
        __metadata('design:paramtypes', [prestamo_service_1.PrestamoService, forms_1.FormBuilder])
    ], PrestamoEditComponent);
    return PrestamoEditComponent;
}());
exports.PrestamoEditComponent = PrestamoEditComponent;
//# sourceMappingURL=prestamo.edit.component.js.map