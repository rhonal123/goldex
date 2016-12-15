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
var core_1 = require("@angular/core");
var movimiento_1 = require("./../../models/movimiento");
var movimiento_service_1 = require("./../../services/movimiento.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var forms_1 = require("@angular/forms");
var MovimientoEditComponent = (function () {
    function MovimientoEditComponent(movimientoService, fB) {
        this.movimientoService = movimientoService;
        this.fB = fB;
        this.tipos = ["efectivo", "transferencia"];
        this.clasificaciones = ["clasificacion1", "clasificacion2", "clasificacion3", "clasificacion4"];
        this.formErrors = {
            'negocio_id': '',
            'monto': '',
            'fecha': '',
            'descripcion': '',
            'tipo': '',
            'clasificacion': '',
            'cuenta_id': '',
            'puro': '',
            'cuenta_destino': '',
            'banco_destino_id': ''
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
        this.movimiento = this.movimientoForm.value;
        this.movimiento.cuenta_id = this.jcuenta.val();
        this.movimiento.banco_destino_id = this.jbancoDestino.val();
        this.movimiento.negocio_id = this.jnegocio.val();
        this.movimiento.fecha = this.jfecha.val();
        console.log("------------------------------------");
        console.log(this.jfecha.val());
        console.log(this.movimiento);
        this.movimientoService.guardar(this.movimiento).then(function (movimiento) {
            _this.component.changeTable(movimiento);
            _this.hideModal();
        }).catch(function (errores) {
            _this.formErrors['negocio_id'] = errores.negocio_id;
            _this.formErrors['monto'] = errores.monto;
            _this.formErrors['fecha'] = errores.fecha;
            _this.formErrors['descripcion'] = errores.descripcion;
            _this.formErrors['tipo'] = errores.tipo;
            _this.formErrors['clasificacion'] = errores.clasificacion;
            _this.formErrors['cuenta_id'] = errores.cuenta_id;
            _this.formErrors['puro'] = errores.puro;
            _this.formErrors['cuenta_destino'] = errores.cuenta_destino;
            _this.formErrors['banco_destino_id'] = errores.banco_destino_id;
        });
    };
    MovimientoEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.formBuilder();
        var formatoBanco = function presentacion(banco) {
            return banco.nombre || banco.text;
        };
        var formatoCuenta = function presentacion(cuenta) {
            return cuenta.numero || cuenta.text;
        };
        this.modal.onShown.subscribe(function (event) {
            _this.jfecha = $("#search_fecha").datepicker({ format: "yyyy/mm/dd" });
            if (_this.movimiento.fecha) {
                _this.jfecha.val(movimiento_1.Movimiento.strFecha(_this.movimiento));
            }
            if (_this.movimiento.id && _this.movimiento.banco_destino) {
                var op = document.createElement("option");
                op.setAttribute("value", _this.movimiento.banco_destino_id.toString());
                op.appendChild(document.createTextNode(_this.movimiento.banco_destino.nombre));
                $("#banco_destino_id").empty();
                $("#banco_destino_id").append(op);
            }
            _this.jbancoDestino = $("#banco_destino_id").select2({
                ajax: {
                    url: "/sistema/bancos",
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
                escapeMarkup: function (markup) { return markup; },
                minimumInputLength: 0,
                templateSelection: formatoBanco,
                templateResult: formatoBanco,
            });
            if (_this.movimiento.id && _this.movimiento.cuenta) {
                var op = document.createElement("option");
                op.setAttribute("value", _this.movimiento.cuenta.id.toString());
                op.appendChild(document.createTextNode(_this.movimiento.cuenta.numero));
                $("#cuenta_id").empty();
                $("#cuenta_id").append(op);
            }
            _this.jcuenta = $("#cuenta_id").select2({
                ajax: {
                    url: "/sistema/cuentas",
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
                placeholder: 'Seleccione una Cuenta ',
                escapeMarkup: function (markup) { return markup; },
                minimumInputLength: 0,
                templateSelection: formatoCuenta,
                templateResult: formatoCuenta,
            });
            if (_this.movimiento.id && _this.movimiento.negocio) {
                var op = document.createElement("option");
                op.setAttribute("value", _this.movimiento.negocio.id.toString());
                op.appendChild(document.createTextNode(_this.movimiento.negocio.nombre));
                $("#negocio_id").empty();
                $("#negocio_id").append(op);
            }
            _this.jnegocio = $("#negocio_id").select2({
                ajax: {
                    url: "/sistema/negocios",
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
                placeholder: 'Seleccione un Negocio ',
                escapeMarkup: function (markup) { return markup; },
                minimumInputLength: 0,
                templateSelection: formatoBanco,
                templateResult: formatoBanco,
            });
        });
    };
    MovimientoEditComponent.prototype.formBuilder = function () {
        var _this = this;
        this.movimientoForm = this.fB.group({
            'id': '',
            'negocio_id': '',
            'monto': '',
            'fecha': '',
            'descripcion': '',
            'tipo': '',
            'clasificacion': '',
            'cuenta_id': '',
            'puro': '',
            'cuenta_destino': '',
            'banco_destino_id': '',
            'created_at': '',
            'updated_at': ''
        });
        this.movimientoForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    MovimientoEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    MovimientoEditComponent.prototype.setModel = function (movimiento) {
        this.movimiento = movimiento;
        this.movimientoForm.setValue({
            'id': movimiento.id,
            'negocio_id': movimiento.negocio_id,
            'monto': movimiento.monto,
            'fecha': movimiento.fecha,
            'descripcion': movimiento.descripcion,
            'tipo': movimiento.tipo,
            'clasificacion': movimiento.clasificacion,
            'cuenta_id': movimiento.cuenta_id,
            'puro': movimiento.puro,
            'cuenta_destino': movimiento.cuenta_destino,
            'banco_destino_id': movimiento.banco_destino_id,
            'created_at': movimiento.created_at,
            'updated_at': movimiento.updated_at
        });
    };
    MovimientoEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    return MovimientoEditComponent;
}());
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], MovimientoEditComponent.prototype, "modal", void 0);
__decorate([
    core_1.Input(),
    __metadata("design:type", movimiento_1.Movimiento)
], MovimientoEditComponent.prototype, "movimiento", void 0);
MovimientoEditComponent = __decorate([
    core_1.Component({
        selector: 'movimiento-edit-component',
        templateUrl: 'app/templates/movimientos/movimiento.edit.component.html',
        providers: [movimiento_service_1.MovimientoService]
    }),
    __metadata("design:paramtypes", [movimiento_service_1.MovimientoService, forms_1.FormBuilder])
], MovimientoEditComponent);
exports.MovimientoEditComponent = MovimientoEditComponent;
//# sourceMappingURL=movimiento.edit.component.js.map