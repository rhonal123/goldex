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
var movimiento_1 = require('./../../models/movimiento');
var movimiento_service_1 = require('./../../services/movimiento.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var http_1 = require('@angular/http');
var movimiento_edit_component_1 = require('./movimiento.edit.component');
var movimiento_delete_component_1 = require('./movimiento.delete.component');
var movimiento_component_1 = require('./movimiento.component');
var movimiento_precio_puro_component_1 = require('./movimiento.precio.puro.component');
var jquery_component_1 = require('./../jquery.component');
var core_2 = require('@angular/core');
var MovimientosComponent = (function () {
    function MovimientosComponent(route, movimientoService, _changeDetectionRef) {
        this.route = route;
        this.movimientoService = movimientoService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
        this.ordenar = "fecha";
        this.ordenarTipo = "asc";
    }
    MovimientosComponent.prototype.limpiar = function () {
        this.texto = null;
        this.jDesde.datepicker("setDate", null);
        this.jHasta.datepicker("setDate", null);
        this.jnegocio.empty();
        this.jcuenta.empty();
        this.tipo = null;
        this.referencia = null;
    };
    MovimientosComponent.prototype.onRefrescar = function () {
        this.limpiar();
        this.loadTable();
    };
    MovimientosComponent.prototype.loadTable = function () {
        var _this = this;
        this._changeDetectionRef.detectChanges();
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.movimientoService.getMovimientos(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            _this.movimientos = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    MovimientosComponent.prototype.ngOnInit = function () {
        this.jDesde = jquery_component_1.JqueryComponent.fechaSinValorIncial("#search_desde");
        this.jHasta = jquery_component_1.JqueryComponent.fechaSinValorIncial("#search_hasta");
        this.jnegocio = jquery_component_1.JqueryComponent.negocios("#negocio_id");
        this.jcuenta = jquery_component_1.JqueryComponent.cuentas("#cuenta_id");
        this.a = document.createElement("a");
        document.body.appendChild(this.a);
        this.loadTable();
    };
    MovimientosComponent.prototype.agregar = function () {
        var movimiento = new movimiento_1.Movimiento();
        this.movimiento = movimiento;
        this.movimientoEditComponent.setModel(movimiento);
        this.movimientoEditComponent.openModal(this);
    };
    MovimientosComponent.prototype.onSelect = function (movimiento) {
        this.movimiento = movimiento;
        this.movimientoComponent.movimiento = movimiento;
        this.movimientoComponent.openModal();
    };
    MovimientosComponent.prototype.onEditar = function (movimiento) {
        if (movimiento.estado === "CREADO") {
            this.movimiento = movimiento;
            this.movimientoEditComponent.setModel(movimiento);
            this.movimientoEditComponent.openModal(this);
        }
        else {
            alert("No Puedes Modificar Este movimiento.");
        }
    };
    MovimientosComponent.prototype.onAsignarPrecio = function (movimiento) {
        if (movimiento.estado === "CREADO") {
            this.movimiento = movimiento;
            this.movimientoPrecioPuroComponent.setModel(movimiento);
            this.movimientoPrecioPuroComponent.openModal(this);
        }
        else {
            alert("No Puedes Asignar Precio.");
        }
    };
    MovimientosComponent.prototype.onEliminar = function (movimiento) {
        if (movimiento.estado === "CREADO") {
            this.movimiento = movimiento;
            this.movimientoDeleteComponent.movimiento = movimiento;
            this.movimientoDeleteComponent.openModal(this);
        }
        else {
            alert("No Puedes Eliminar Este movimiento.");
        }
    };
    MovimientosComponent.prototype.changeTable = function (movimiento) {
        for (var m in this.movimientos) {
            if (this.movimientos[m].id === movimiento.id) {
                this.movimientos[m] = movimiento;
                return;
            }
        }
        this.movimientos.push(movimiento);
    };
    MovimientosComponent.prototype.serach = function () {
        var param = new http_1.URLSearchParams();
        var desde = this.jDesde.val();
        var hasta = this.jHasta.val();
        var negocio_id = this.jnegocio.val();
        var cuenta_id = this.jcuenta.val();
        if (this.texto) {
            param.set("descripcion", this.texto);
        }
        if (desde) {
            param.set("desde", desde);
        }
        if (hasta) {
            param.set("hasta", hasta);
        }
        if (this.tipo) {
            param.set("tipo", this.tipo);
        }
        if (negocio_id) {
            param.set("negocio_id", negocio_id);
        }
        if (cuenta_id) {
            param.set("cuenta_id", cuenta_id);
        }
        if (this.referencia) {
            param.set("referencia", this.referencia);
        }
        if (this.ordenar) {
            param.set("ordenar", this.ordenar);
        }
        if (this.ordenarTipo) {
            param.set("ordenarTipo", this.ordenarTipo);
        }
        return param;
    };
    ;
    MovimientosComponent.prototype.eliminar = function (movimiento) {
        for (var m in this.movimientos) {
            if (this.movimientos[m].id === movimiento.id) {
                var position = +m;
                this.movimientos.splice(position, 1);
                return;
            }
        }
    };
    MovimientosComponent.prototype.imprimir = function () {
        var params = this.serach();
        jquery_component_1.JqueryComponent.downloadPdf("/sistema/reporte/movimientos?" + params.toString(), "reporteMoviminetos.pdf");
    };
    MovimientosComponent.prototype.pageChanged = function (event) {
        this.current_page = event.page;
        this._changeDetectionRef.detectChanges();
        this.loadTable();
    };
    MovimientosComponent.prototype.onActive = function (movimiento) {
        this.activeMovimiento = movimiento;
    };
    MovimientosComponent.prototype.openModal = function () {
        this.modal.show();
    };
    MovimientosComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], MovimientosComponent.prototype, "modal", void 0);
    __decorate([
        core_1.ViewChild(movimiento_component_1.MovimientoComponent), 
        __metadata('design:type', movimiento_component_1.MovimientoComponent)
    ], MovimientosComponent.prototype, "movimientoComponent", void 0);
    __decorate([
        core_1.ViewChild(movimiento_edit_component_1.MovimientoEditComponent), 
        __metadata('design:type', movimiento_edit_component_1.MovimientoEditComponent)
    ], MovimientosComponent.prototype, "movimientoEditComponent", void 0);
    __decorate([
        core_1.ViewChild(movimiento_delete_component_1.MovimientoDeleteComponent), 
        __metadata('design:type', movimiento_delete_component_1.MovimientoDeleteComponent)
    ], MovimientosComponent.prototype, "movimientoDeleteComponent", void 0);
    __decorate([
        core_1.ViewChild(movimiento_precio_puro_component_1.MovimientoPrecioPuroComponent), 
        __metadata('design:type', movimiento_precio_puro_component_1.MovimientoPrecioPuroComponent)
    ], MovimientosComponent.prototype, "movimientoPrecioPuroComponent", void 0);
    MovimientosComponent = __decorate([
        core_1.Component({
            selector: 'movimientos-component',
            template: "\n<div class=\"col-md-2 \">\n  <button type=\"button\" class=\"btn btn-sm btn-default\" (click)=\"agregar()\">\n    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>\n  </button>\n  <button type=\"button\" class=\"btn btn-sm btn-default\" (click)=\"onRefrescar()\">\n    <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>\n  </button>\n</div>\n\n<div class=\"col-md-10\" align=\"right\">\n  <div class=\"form-inline\">\n    <div class=\"form-group\">\n      <input type=\"text\" [(ngModel)]=\"texto\" class=\"form-control col-md-6\" placeholder=\"buscar\" (keyup)=\"loadTable()\"  >\n      <button type=\"button\" class=\"btn  btn-default\" (click)=\"loadTable()\">\n        <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></button>\n      <button type=\"button\" class=\"btn  btn-default\" (click)=\"openModal()\">\n        <span class=\"glyphicon glyphicon-filter\" aria-hidden=\"true\"></span></button>\n    </div>\n  </div>\n</div>\n\n<div class=\"col-md-12\">\n  <div class=\"table-responsive\">\n    <table class=\"table table-striped\">\n      <thead>\n        <tr>\n        <th>Id</th><th>Negocio o Socio</th><th>Descripcion</th><th>Fecha</th><th>Tipo</th><th>Precio Gramos</th><th>Saldo</th><th>Estado</th><th></th>\n        </tr>\n      </thead>\n      <tbody class=\"movimientos\">\n        <tr *ngFor=\"let movimiento of movimientos\" [class.active]=\"movimiento === activeMovimiento\" (click)=\"onActive(movimiento)\">\n          <td><span>{{movimiento.id}}</span></td>\n          <td><span>{{movimiento.negocio.nombre}}</span></td>\n          <td><span>{{movimiento.descripcion}}</span></td>\n          <td><span>{{movimiento.fecha}}</span></td>\n          <td><span>{{movimiento.tipo}}</span></td>\n          <td><span>{{movimiento.precio_puro}}</span></td>\n          <td><span>{{movimiento.saldo}}</span></td>\n          <td><span>{{movimiento.estado}}</span></td>\n          <td align=\"right\">\n            <span  dropdown >\n              <span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\" dropdownToggle ></span>\n              <ul class=\"dropdown-menu dropdown-menu-right\" dropdownMenu  role=\"menu\" aria-labelledby=\"split-button\">\n                <li  role=\"menuitem\" (click)=\"onSelect(movimiento)\" >\n                  <a class=\"dropdown-item\" >Mostrar</a>\n                </li>\n                <li role=\"menuitem\" (click)=\"onEditar(movimiento)\">\n                  <a class=\"dropdown-item\" >Editar</a>\n                </li>\n                <li role=\"menuitem\" (click)=\"onEliminar(movimiento)\">\n                  <a class=\"dropdown-item\" >Eliminar</a>\n                </li>\n                <li role=\"menuitem\" (click)=\"onAsignarPrecio(movimiento)\">\n                  <a class=\"dropdown-item\" >Asignar Precio Puro</a>\n                </li>\n              </ul>\n              </span>\n          </td>\n        </tr>\n      </tbody>\n    </table>\n    <div align=\"right\">\n      <pagination [totalItems]=\"total\" [(ngModel)]=\"current_page\"  [itemsPerPage]=\"per_page\" (pageChanged)=\"pageChanged($event)\" [boundaryLinks]=\"true\" [maxSize]=\"10\" [rotate]=\"false\" previousText=\"&lsaquo;\" nextText=\"&rsaquo;\" firstText=\"&laquo;\" lastText=\"&raquo;\"></pagination><p><strong>Pagina: {{current_page}} Total de Movimientos {{total}}</strong></p>\n    </div>\n  </div>\n</div>\n<movimiento-delete-component></movimiento-delete-component>\n<movimiento-component></movimiento-component>\n<movimiento-edit-component></movimiento-edit-component> \n<movimiento-precio-puro-component></movimiento-precio-puro-component>\n\n<div bsModal #modal=\"bs-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"  >\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n  <div class=\"modal-header\">\n    <button type=\"button\" class=\"close\" (click)=\"hideModal()\" aria-label=\"Close\">\n      <span aria-hidden=\"true\">&times;</span>\n    </button>\n    <h4 class=\"modal-title\">Detalle Busquedad</h4>\n  </div>\n  \n  <div class=\"modal-body\">\n    <div class=\"panel-body\">\n\n      <div class=\"form-horizontal\">\n        <div class=\"form-group\">\n          <label for=\"search_desde\" class=\"col-md-2 control-label\">Desde</label>\n          <div class=\"col-md-4\">\n            <input id=\"search_desde\" type=\"text\" data-provide=\"datepicker\" class=\"form-control input-sm\" >\n          </div>\n \n          <label for=\"search_hasta\" class=\"col-md-2 control-label\">Hasta</label>\n          <div class=\"col-md-4\">\n            <input id=\"search_hasta\" type=\"text\" data-provide=\"datepicker\" class=\"form-control input-sm\" >\n          </div>\n        </div>\n \n        <div class=\"form-group\">\n          <label for=\"tipo\" class=\"col-md-2 control-label\">Tipo</label>\n          <div class=\"col-md-10\">\n            <select id=\"tipo\" [(ngModel)]=\"tipo\" class=\"form-control input-sm\">\n              <option value=\"TRANSFERENCIA\">TRANSFERENCIA</option>\n              <option value=\"EFECTIVO\">EFECTIVO</option>\n            </select>\n          </div>\n        </div>\n<!--\n        <div class=\"form-group\">\n          <label for=\"referencia\" class=\"col-md-2 control-label\">Referencia</label>\n          <div class=\"col-md-10\">\n            <input id=\"referencia\" [(ngModel)]=\"referencia\" type=\"text\" class=\"form-control input-sm\" >\n          </div>\n        </div>\n-->\n        <div  class=\"form-group\">\n          <label for=\"negocio_id\" class=\"col-sm-2 control-label\" for=\"estado\">Negocio</label>\n          <div class=\"col-sm-10\">\n            <select id=\"negocio_id\" class=\"form-control\" style=\"width: 100%;\"></select>\n          </div> \n        </div>\n\n\n        <div  class=\"form-group\">\n          <label for=\"cuenta_id\" class=\"col-sm-2 control-label\" for=\"estado\">Cuenta</label>\n          <div class=\"col-sm-10\">\n            <select id=\"cuenta_id\" class=\"form-control\" style=\"width: 100%;\"></select>\n          </div> \n        </div>\n\n        <div  class=\"form-group\">\n          <label for=\"ordenar\" class=\"col-sm-2 control-label\" for=\"estado\">Ordenar Por </label>\n          <div class=\"col-sm-5\">\n            <select class=\"form-control\" [(ngModel)]=\"ordenar\" style=\"width: 100%;\">\n              <option value=\"fecha\">Fecha</option>\n              <option value=\"id\">Id</option>\n            </select>\n          </div>\n          <div class=\"col-sm-5\">\n            <select class=\"form-control\" [(ngModel)]=\"ordenarTipo\" style=\"width: 100%;\">\n              <option value=\"asc\">Ascendente</option>\n              <option value=\"desc\">Descendente</option>\n            </select>\n          </div>  \n        </div>\n\n        <div class=\"form-group\">\n          <div class=\"col-md-12\" align=\"right\">\n            <button type=\"button\" class=\"btn  btn-default\"\n                    (click)=\"limpiar()\">\n              <span class=\"glyphicon glyphicon-ban-circle\" aria-hidden=\"true\"></span>\n            </button>\n            <button type=\"button\" class=\"btn  btn-default\"\n                    (click)=\"loadTable()\">\n              <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>\n            </button>\n            <button type=\"button\" class=\"btn  btn-default\"\n                    (click)=\"imprimir()\">\n              <span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span>\n            </button>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n</div>\n</div> \n\n  ",
            providers: [movimiento_service_1.MovimientoService]
        }), 
        __metadata('design:paramtypes', [router_1.Router, movimiento_service_1.MovimientoService, core_2.ChangeDetectorRef])
    ], MovimientosComponent);
    return MovimientosComponent;
}());
exports.MovimientosComponent = MovimientosComponent;
//# sourceMappingURL=movimientos.component.js.map