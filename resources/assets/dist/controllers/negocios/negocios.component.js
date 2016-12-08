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
var negocio_1 = require("./../../models/negocio");
var negocio_service_1 = require("./../../services/negocio.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var http_1 = require("@angular/http");
var negocio_edit_component_1 = require("./negocio.edit.component");
var negocio_delete_component_1 = require("./negocio.delete.component");
var negocio_component_1 = require("./negocio.component");
var core_2 = require("@angular/core");
var NegociosComponent = (function () {
    function NegociosComponent(route, negocioService, _changeDetectionRef) {
        this.route = route;
        this.negocioService = negocioService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
        this.sort = "id";
    }
    NegociosComponent.prototype.ngAfterViewInit = function () {
    };
    NegociosComponent.prototype.loadTable = function () {
        var _this = this;
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.negocioService.getNegocios(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            data = data;
            _this.negocios = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    NegociosComponent.prototype.ngOnInit = function () {
        this.loadTable();
    };
    NegociosComponent.prototype.agregar = function () {
        var negocio = new negocio_1.Negocio();
        this.negocio = negocio;
        this.negocioEditComponent.setModel(negocio);
        this.negocioEditComponent.openModal(this);
    };
    NegociosComponent.prototype.onSelect = function (negocio) {
        this.negocio = negocio;
        this.negocioComponent.negocio = negocio;
        this.negocioComponent.openModal();
    };
    NegociosComponent.prototype.onEditar = function (negocio) {
        this.negocio = negocio;
        this.negocioEditComponent.setModel(negocio);
        this.negocioEditComponent.openModal(this);
    };
    NegociosComponent.prototype.onEliminar = function (negocio) {
        this.negocio = negocio;
        this.negocioDeleteComponent.negocio = negocio;
        this.negocioDeleteComponent.openModal(this);
    };
    NegociosComponent.prototype.changeTable = function (negocio) {
        for (var m in this.negocios) {
            if (this.negocios[m].id === negocio.id) {
                this.negocios[m] = negocio;
                return;
            }
        }
        this.negocios.push(negocio);
    };
    NegociosComponent.prototype.serach = function () {
        var param = new http_1.URLSearchParams();
        if (this.search) {
            param.set("search", this.search);
            param.set("sort", this.sort);
        }
        return param;
    };
    ;
    NegociosComponent.prototype.eliminar = function (negocio) {
        for (var m in this.negocios) {
            if (this.negocios[m].id === negocio.id) {
                console.log(this.negocios);
                var position = +m;
                this.negocios.splice(position, 1);
                console.log(+m + 1);
                console.log(this.negocios);
                return;
            }
        }
    };
    NegociosComponent.prototype.pageChanged = function (event) {
        this.current_page = event.page;
        this._changeDetectionRef.detectChanges();
        this.loadTable();
    };
    return NegociosComponent;
}());
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], NegociosComponent.prototype, "modal", void 0);
__decorate([
    core_1.ViewChild(negocio_component_1.NegocioComponent),
    __metadata("design:type", negocio_component_1.NegocioComponent)
], NegociosComponent.prototype, "negocioComponent", void 0);
__decorate([
    core_1.ViewChild(negocio_edit_component_1.NegocioEditComponent),
    __metadata("design:type", negocio_edit_component_1.NegocioEditComponent)
], NegociosComponent.prototype, "negocioEditComponent", void 0);
__decorate([
    core_1.ViewChild(negocio_delete_component_1.NegocioDeleteComponent),
    __metadata("design:type", negocio_delete_component_1.NegocioDeleteComponent)
], NegociosComponent.prototype, "negocioDeleteComponent", void 0);
NegociosComponent = __decorate([
    core_1.Component({
        selector: 'negocios-component',
        templateUrl: 'app/templates/negocios/negocios.component.html',
        providers: [negocio_service_1.NegocioService]
    }),
    __metadata("design:paramtypes", [router_1.Router, negocio_service_1.NegocioService, core_2.ChangeDetectorRef])
], NegociosComponent);
exports.NegociosComponent = NegociosComponent;
//# sourceMappingURL=negocios.component.js.map