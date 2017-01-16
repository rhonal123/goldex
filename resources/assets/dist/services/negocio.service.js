"use strict";
var __extends = (this && this.__extends) || function (d, b) {
    for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p];
    function __() { this.constructor = d; }
    d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
};
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var http_1 = require('@angular/http');
var core_1 = require('@angular/core');
var general_servicio_1 = require('./general.servicio');
require('rxjs/add/operator/toPromise');
var NegocioService = (function (_super) {
    __extends(NegocioService, _super);
    function NegocioService(http) {
        _super.call(this);
        this.http = http;
        this.negociosUrl = '/sistema/negocios';
        this.headers = new http_1.Headers({ 'Content-Type': 'application/json' });
    }
    NegocioService.prototype.getNegocios = function (page, searchs) {
        searchs = (searchs ? searchs : new http_1.URLSearchParams());
        searchs.set("page", page);
        return this.http
            .get(this.negociosUrl, { search: searchs })
            .map(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.movimientos_creados = function (id) {
        return this.http
            .get("/sistema/negocios/" + id + "/movimientos")
            .map(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.abonos_creados = function (id) {
        return this.http
            .get("/sistema/negocios/" + id + "/abonos")
            .map(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.create = function (negocio) {
        return this.http
            .post(this.negociosUrl, JSON.stringify({ negocio: negocio }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.delete = function (negocio) {
        return this.http
            .delete(this.negociosUrl + "/" + negocio.id, this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.update = function (negocio) {
        return this.http
            .patch(this.negociosUrl + "/" + negocio.id, JSON.stringify({ negocio: negocio }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.guardar = function (negocio) {
        if (negocio.id) {
            return this.update(negocio);
        }
        else {
            return this.create(negocio);
        }
    };
    NegocioService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], NegocioService);
    return NegocioService;
}(general_servicio_1.GeneralServicio));
exports.NegocioService = NegocioService;
//# sourceMappingURL=negocio.service.js.map