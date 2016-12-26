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
var prestamo_1 = require('./../../models/prestamo');
var prestamo_service_1 = require('./../../services/prestamo.service');
var modal_component_1 = require('ng2-bootstrap/components/modal/modal.component');
var http_1 = require('@angular/http');
var prestamo_edit_component_1 = require('./prestamo.edit.component');
var prestamo_delete_component_1 = require('./prestamo.delete.component');
var prestamo_component_1 = require('./prestamo.component');
var core_2 = require('@angular/core');
var PrestamosComponent = (function () {
    function PrestamosComponent(route, prestamoService, _changeDetectionRef) {
        this.route = route;
        this.prestamoService = prestamoService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
    }
    PrestamosComponent.prototype.ngAfterViewInit = function () {
    };
    PrestamosComponent.prototype.loadTable = function () {
        var _this = this;
        this._changeDetectionRef.detectChanges();
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.prestamoService.getPrestamos(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            _this.prestamos = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    PrestamosComponent.prototype.ngOnInit = function () {
        this.jDesde = $("#search_desde").datepicker({ format: "yyyy/mm/dd" });
        this.jHasta = $("#search_hasta").datepicker({ format: "yyyy/mm/dd" });
        var formato = function (obj) { return obj.nombre; };
        this.jnegocio = $("#negocio_id").select2({
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
            templateSelection: formato,
            templateResult: formato,
        });
        this.loadTable();
    };
    PrestamosComponent.prototype.agregar = function () {
        var prestamo = new prestamo_1.Prestamo();
        this.prestamo = prestamo;
        this.prestamoEditComponent.setModel(prestamo);
        this.prestamoEditComponent.openModal(this);
    };
    PrestamosComponent.prototype.onSelect = function (prestamo) {
        this.prestamo = prestamo;
        this.prestamoComponent.prestamo = prestamo;
        this.prestamoComponent.openModal();
    };
    PrestamosComponent.prototype.onEditar = function (prestamo) {
        this.prestamo = prestamo;
        this.prestamoEditComponent.setModel(prestamo);
        this.prestamoEditComponent.openModal(this);
    };
    PrestamosComponent.prototype.onEliminar = function (prestamo) {
        this.prestamo = prestamo;
        this.prestamoDeleteComponent.prestamo = prestamo;
        this.prestamoDeleteComponent.openModal(this);
    };
    PrestamosComponent.prototype.changeTable = function (prestamo) {
        for (var m in this.prestamos) {
            if (this.prestamos[m].id === prestamo.id) {
                this.prestamos[m] = prestamo;
                return;
            }
        }
        this.prestamos.push(prestamo);
    };
    PrestamosComponent.prototype.serach = function () {
        var param = new http_1.URLSearchParams();
        var desde = this.jDesde.val();
        var hasta = this.jHasta.val();
        var negocio_id = this.jnegocio.val();
        if (this.search) {
            param.set("texto", this.search);
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
        return param;
    };
    ;
    PrestamosComponent.prototype.eliminar = function (prestamo) {
        for (var m in this.prestamos) {
            if (this.prestamos[m].id === prestamo.id) {
                var position = +m;
                this.prestamos.splice(position, 1);
                return;
            }
        }
    };
    PrestamosComponent.prototype.pageChanged = function (event) {
        this.current_page = event.page;
        this._changeDetectionRef.detectChanges();
        this.loadTable();
    };
    PrestamosComponent.prototype.onActive = function (prestamo) {
        this.activePrestamo = prestamo;
    };
    PrestamosComponent.prototype.openModal = function () {
        this.modal.show();
    };
    PrestamosComponent.prototype.hideModal = function () {
        this.modal.hide();
    };
    __decorate([
        core_1.ViewChild('modal'), 
        __metadata('design:type', modal_component_1.ModalDirective)
    ], PrestamosComponent.prototype, "modal", void 0);
    __decorate([
        core_1.ViewChild(prestamo_component_1.PrestamoComponent), 
        __metadata('design:type', prestamo_component_1.PrestamoComponent)
    ], PrestamosComponent.prototype, "prestamoComponent", void 0);
    __decorate([
        core_1.ViewChild(prestamo_edit_component_1.PrestamoEditComponent), 
        __metadata('design:type', prestamo_edit_component_1.PrestamoEditComponent)
    ], PrestamosComponent.prototype, "prestamoEditComponent", void 0);
    __decorate([
        core_1.ViewChild(prestamo_delete_component_1.PrestamoDeleteComponent), 
        __metadata('design:type', prestamo_delete_component_1.PrestamoDeleteComponent)
    ], PrestamosComponent.prototype, "prestamoDeleteComponent", void 0);
    PrestamosComponent = __decorate([
        core_1.Component({
            selector: 'prestamos-component',
            templateUrl: 'app/templates/prestamos/prestamos.component.html',
            providers: [prestamo_service_1.PrestamoService]
        }), 
        __metadata('design:paramtypes', [router_1.Router, prestamo_service_1.PrestamoService, core_2.ChangeDetectorRef])
    ], PrestamosComponent);
    return PrestamosComponent;
}());
exports.PrestamosComponent = PrestamosComponent;
//# sourceMappingURL=prestamos.component.js.map