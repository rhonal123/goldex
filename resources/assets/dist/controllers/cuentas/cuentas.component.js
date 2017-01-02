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
var router_1 = require('@angular/router');
var cuenta_1 = require('./../../models/cuenta');
var cuenta_service_1 = require('./../../services/cuenta.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var http_1 = require('@angular/http');
var cuenta_edit_component_1 = require('./cuenta.edit.component');
var cuenta_delete_component_1 = require('./cuenta.delete.component');
var cuenta_component_1 = require('./cuenta.component');
var core_2 = require('@angular/core');
var CuentasComponent = (function () {
    function CuentasComponent(route, cuentaService, _changeDetectionRef) {
        this.route = route;
        this.cuentaService = cuentaService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
        this.sort = "id";
    }
    CuentasComponent.prototype.ngAfterViewInit = function () {
        this.loadTable();
    };
    CuentasComponent.prototype.loadTable = function () {
        var _this = this;
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.cuentaService.getCuentas(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            _this.cuentas = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    CuentasComponent.prototype.ngOnInit = function () {
    };
    CuentasComponent.prototype.agregar = function () {
        var cuenta = new cuenta_1.Cuenta();
        this.cuenta = cuenta;
        this.cuentaEditComponent.setModel(cuenta);
        this.cuentaEditComponent.openModal(this);
    };
    CuentasComponent.prototype.onSelect = function (cuenta) {
        this.cuenta = cuenta;
        this.cuentaComponent.cuenta = cuenta;
        this.cuentaComponent.openModal();
    };
    CuentasComponent.prototype.onEditar = function (cuenta) {
        this.cuenta = cuenta;
        console.log(cuenta);
        this.cuentaEditComponent.setModel(cuenta);
        this.cuentaEditComponent.openModal(this);
    };
    CuentasComponent.prototype.onEliminar = function (cuenta) {
        this.cuenta = cuenta;
        this.cuentaDeleteComponent.cuenta = cuenta;
        this.cuentaDeleteComponent.openModal(this);
    };
    CuentasComponent.prototype.changeTable = function (cuenta) {
        for (var m in this.cuentas) {
            if (this.cuentas[m].id === cuenta.id) {
                this.cuentas[m] = cuenta;
                return;
            }
        }
        this.cuentas.push(cuenta);
    };
    CuentasComponent.prototype.serach = function () {
        var param = new http_1.URLSearchParams();
        if (this.search) {
            param.set("search", this.search);
            param.set("sort", this.sort);
        }
        return param;
    };
    ;
    CuentasComponent.prototype.eliminar = function (cuenta) {
        for (var m in this.cuentas) {
            if (this.cuentas[m].id === cuenta.id) {
                console.log(this.cuentas);
                var position = +m;
                this.cuentas.splice(position, 1);
                console.log(+m + 1);
                console.log(this.cuentas);
                return;
            }
        }
    };
    CuentasComponent.prototype.pageChanged = function (event) {
        this.current_page = event.page;
        this._changeDetectionRef.detectChanges();
        this.loadTable();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], CuentasComponent.prototype, "modal", void 0);
    __decorate([
        core_1.ViewChild(cuenta_component_1.CuentaComponent), 
        __metadata('design:type', cuenta_component_1.CuentaComponent)
    ], CuentasComponent.prototype, "cuentaComponent", void 0);
    __decorate([
        core_1.ViewChild(cuenta_edit_component_1.CuentaEditComponent), 
        __metadata('design:type', cuenta_edit_component_1.CuentaEditComponent)
    ], CuentasComponent.prototype, "cuentaEditComponent", void 0);
    __decorate([
        core_1.ViewChild(cuenta_delete_component_1.CuentaDeleteComponent), 
        __metadata('design:type', cuenta_delete_component_1.CuentaDeleteComponent)
    ], CuentasComponent.prototype, "cuentaDeleteComponent", void 0);
    CuentasComponent = __decorate([
        core_1.Component({
            selector: 'cuentas-component',
            templateUrl: 'app/templates/cuentas/cuentas.component.html',
            providers: [cuenta_service_1.CuentaService]
        }), 
        __metadata('design:paramtypes', [router_1.Router, cuenta_service_1.CuentaService, core_2.ChangeDetectorRef])
    ], CuentasComponent);
    return CuentasComponent;
}());
exports.CuentasComponent = CuentasComponent;
//# sourceMappingURL=cuentas.component.js.map