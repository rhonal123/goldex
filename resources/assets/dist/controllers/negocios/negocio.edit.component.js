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
var negocio_1 = require("./../../models/negocio");
var negocio_service_1 = require("./../../services/negocio.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var forms_1 = require("@angular/forms");
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
            'created_at': '',
            'updated_at': ''
        });
        this.negocioForm.valueChanges.subscribe(function (data) { return _this.onValueChanged(data); });
    };
    NegocioEditComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    NegocioEditComponent.prototype.setModel = function (negocio) {
        this.negocio = negocio;
        this.negocioForm.setValue(negocio_1.Negocio.clone(negocio));
    };
    NegocioEditComponent.prototype.openModal = function (component) {
        this.component = component;
        this.modal.show();
    };
    return NegocioEditComponent;
}());
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], NegocioEditComponent.prototype, "modal", void 0);
__decorate([
    core_1.Input(),
    __metadata("design:type", negocio_1.Negocio)
], NegocioEditComponent.prototype, "negocio", void 0);
NegocioEditComponent = __decorate([
    core_1.Component({
        selector: 'negocio-edit-component',
        templateUrl: 'app/templates/negocios/negocio.edit.component.html',
        providers: [negocio_service_1.NegocioService]
    }),
    __metadata("design:paramtypes", [negocio_service_1.NegocioService, forms_1.FormBuilder])
], NegocioEditComponent);
exports.NegocioEditComponent = NegocioEditComponent;
//# sourceMappingURL=negocio.edit.component.js.map