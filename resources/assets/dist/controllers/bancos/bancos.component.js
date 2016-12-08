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
var banco_1 = require("./../../models/banco");
var banco_service_1 = require("./../../services/banco.service");
var modal_component_1 = require("ng2-bootstrap/components/modal/modal.component");
var http_1 = require("@angular/http");
var banco_edit_component_1 = require("./banco.edit.component");
var banco_delete_component_1 = require("./banco.delete.component");
var banco_component_1 = require("./banco.component");
var core_2 = require("@angular/core");
var BancosComponent = (function () {
    function BancosComponent(route, bancoService, _changeDetectionRef) {
        this.route = route;
        this.bancoService = bancoService;
        this._changeDetectionRef = _changeDetectionRef;
        this.current_page = 1;
        this.sort = "id";
    }
    BancosComponent.prototype.ngAfterViewInit = function () {
    };
    BancosComponent.prototype.loadTable = function () {
        var _this = this;
        if (this.obser != undefined) {
            this.obser.unsubscribe();
        }
        this.observable = this.bancoService.getBancos(this.current_page.toString(), this.serach());
        this.obser = this.observable.subscribe(function (data) {
            data = data;
            _this.bancos = data.data;
            _this.per_page = data.per_page;
            _this.total = data.total;
            _this.current_page = data.current_page;
            _this.obser = undefined;
        });
    };
    BancosComponent.prototype.ngOnInit = function () {
        this.loadTable();
    };
    BancosComponent.prototype.agregar = function () {
        var banco = new banco_1.Banco(null, null, null, null);
        this.banco = banco;
        this.bancoEditComponent.setModel(banco);
        this.bancoEditComponent.openModal(this);
    };
    BancosComponent.prototype.onSelect = function (banco) {
        this.banco = banco;
        this.bancoComponent.banco = banco;
        this.bancoComponent.openModal();
    };
    BancosComponent.prototype.onEditar = function (banco) {
        this.banco = banco;
        this.bancoEditComponent.setModel(banco);
        this.bancoEditComponent.openModal(this);
    };
    BancosComponent.prototype.onEliminar = function (banco) {
        this.banco = banco;
        this.bancoDeleteComponent.banco = banco;
        this.bancoDeleteComponent.openModal(this);
    };
    BancosComponent.prototype.changeTable = function (banco) {
        for (var m in this.bancos) {
            if (this.bancos[m].id === banco.id) {
                this.bancos[m] = banco;
                return;
            }
        }
        this.bancos.push(banco);
    };
    BancosComponent.prototype.serach = function () {
        var param = new http_1.URLSearchParams();
        if (this.search) {
            param.set("search", this.search);
            param.set("sort", this.sort);
        }
        return param;
    };
    ;
    BancosComponent.prototype.eliminar = function (banco) {
        for (var m in this.bancos) {
            if (this.bancos[m].id === banco.id) {
                console.log(this.bancos);
                var position = +m;
                this.bancos.splice(position, 1);
                console.log(+m + 1);
                console.log(this.bancos);
                return;
            }
        }
    };
    BancosComponent.prototype.pageChanged = function (event) {
        this.current_page = event.page;
        this._changeDetectionRef.detectChanges();
        this.loadTable();
    };
    BancosComponent.prototype.onActive = function (banco) {
        this.activeBanco = banco;
    };
    return BancosComponent;
}());
__decorate([
    core_1.ViewChild('modal'),
    __metadata("design:type", modal_component_1.ModalDirective)
], BancosComponent.prototype, "modal", void 0);
__decorate([
    core_1.ViewChild(banco_component_1.BancoComponent),
    __metadata("design:type", banco_component_1.BancoComponent)
], BancosComponent.prototype, "bancoComponent", void 0);
__decorate([
    core_1.ViewChild(banco_edit_component_1.BancoEditComponent),
    __metadata("design:type", banco_edit_component_1.BancoEditComponent)
], BancosComponent.prototype, "bancoEditComponent", void 0);
__decorate([
    core_1.ViewChild(banco_delete_component_1.BancoDeleteComponent),
    __metadata("design:type", banco_delete_component_1.BancoDeleteComponent)
], BancosComponent.prototype, "bancoDeleteComponent", void 0);
BancosComponent = __decorate([
    core_1.Component({
        selector: 'bancos-component',
        templateUrl: 'app/templates/bancos/bancos.component.html',
        providers: [banco_service_1.BancoService]
    }),
    __metadata("design:paramtypes", [router_1.Router, banco_service_1.BancoService, core_2.ChangeDetectorRef])
], BancosComponent);
exports.BancosComponent = BancosComponent;
//# sourceMappingURL=bancos.component.js.map