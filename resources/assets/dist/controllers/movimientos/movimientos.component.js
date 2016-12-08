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
var router_1 = require("@angular/router");
var movimiento_1 = require("./../../models/movimiento");
var movimiento_service_1 = require("./../../services/movimiento.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var http_1 = require("@angular/http");
var movimiento_edit_component_1 = require("./movimiento.edit.component");
var movimiento_delete_component_1 = require("./movimiento.delete.component");
var movimiento_component_1 = require("./movimiento.component");
var core_2 = require("@angular/core");
var MovimientosComponent = (function () {
    function MovimientosComponent(route, movimientoService, _changeDetectionRef) {
        this.route = route;
        this.movimientoService = movimientoService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
    }
    MovimientosComponent.prototype.ngAfterViewInit = function () {
    };
    MovimientosComponent.prototype.loadTable = function () {
        var _this = this;
        this._changeDetectionRef.detectChanges();
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.movimientoService.getMovimientos(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            data = data;
            _this.movimientos = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    MovimientosComponent.prototype.ngOnInit = function () {
        this.jDesde = $("#search_desde").datepicker({ format: "yyyy/mm/dd" });
        this.jHasta = $("#search_hasta").datepicker({ format: "yyyy/mm/dd" });
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
        this.movimiento = movimiento;
        this.movimientoEditComponent.setModel(movimiento);
        this.movimientoEditComponent.openModal(this);
    };
    MovimientosComponent.prototype.onEliminar = function (movimiento) {
        this.movimiento = movimiento;
        this.movimientoDeleteComponent.movimiento = movimiento;
        this.movimientoDeleteComponent.openModal(this);
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
        if (this.clasificacion) {
            param.set("clasificacion", this.clasificacion);
        }
        return param;
    };
    ;
    MovimientosComponent.prototype.eliminar = function (movimiento) {
        for (var m in this.movimientos) {
            if (this.movimientos[m].id === movimiento.id) {
                console.log(this.movimientos);
                var position = +m;
                this.movimientos.splice(position, 1);
                console.log(+m + 1);
                console.log(this.movimientos);
                return;
            }
        }
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
    return MovimientosComponent;
}());
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], MovimientosComponent.prototype, "modal", void 0);
__decorate([
    core_1.ViewChild(movimiento_component_1.MovimientoComponent),
    __metadata("design:type", movimiento_component_1.MovimientoComponent)
], MovimientosComponent.prototype, "movimientoComponent", void 0);
__decorate([
    core_1.ViewChild(movimiento_edit_component_1.MovimientoEditComponent),
    __metadata("design:type", movimiento_edit_component_1.MovimientoEditComponent)
], MovimientosComponent.prototype, "movimientoEditComponent", void 0);
__decorate([
    core_1.ViewChild(movimiento_delete_component_1.MovimientoDeleteComponent),
    __metadata("design:type", movimiento_delete_component_1.MovimientoDeleteComponent)
], MovimientosComponent.prototype, "movimientoDeleteComponent", void 0);
MovimientosComponent = __decorate([
    core_1.Component({
        selector: 'movimientos-component',
        templateUrl: 'resources/assets/app/controllers/templates/movimientos/movimientos.component.html',
        providers: [movimiento_service_1.MovimientoService]
    }),
    __metadata("design:paramtypes", [router_1.Router, movimiento_service_1.MovimientoService, core_2.ChangeDetectorRef])
], MovimientosComponent);
exports.MovimientosComponent = MovimientosComponent;
//# sourceMappingURL=movimientos.component.js.map