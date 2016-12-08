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
var http_1 = require('@angular/http');
var http_2 = require('@angular/http');
require('rxjs/add/operator/toPromise');
var NegocioService = (function () {
    function NegocioService(http) {
        this.http = http;
        this.negociosUrl = 'sistema/negocios';
        this.headers = new http_1.Headers({ 'Content-Type': 'application/json' });
    }
    NegocioService.prototype.getNegocios = function (page, searchs) {
        searchs = (searchs ? searchs : new http_2.URLSearchParams());
        searchs.set("page", page);
        return this.http.get(this.negociosUrl, { search: searchs }).
            map(function (res) { return res.json(); });
    };
    NegocioService.prototype.create = function (negocio) {
        var headers = new http_1.Headers({ 'Content-Type': 'application/json',
            'Accept': 'application/json, text/javascript, */*; q=0.01' });
        var options = new http_1.RequestOptions({ headers: headers });
        return this.http
            .post(this.negociosUrl, JSON.stringify({ negocio: negocio }), options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.delete = function (negocio) {
        var headers = new http_1.Headers({ 'Content-Type': 'application/json',
            'Accept': 'application/json, text/javascript, */*; q=0.01' });
        var options = new http_1.RequestOptions({ headers: headers });
        return this.http.delete(this.negociosUrl + "/" + negocio.id, options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    NegocioService.prototype.update = function (negocio) {
        var headers = new http_1.Headers({ 'Content-Type': 'application/json',
            'Accept': 'application/json, text/javascript, */*; q=0.01' });
        var options = new http_1.RequestOptions({ headers: headers });
        return this.http
            .patch(this.negociosUrl + "/" + negocio.id, JSON.stringify({ negocio: negocio }), options)
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
    NegocioService.prototype.handleError = function (error) {
        console.error('Ocurrio un Error ', error.status, error.text); // for demo purposes only
        return Promise.reject(error.json());
    };
    NegocioService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], NegocioService);
    return NegocioService;
}());
exports.NegocioService = NegocioService;
//# sourceMappingURL=negocio.service.js.map