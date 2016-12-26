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
var PrestamoService = (function () {
    function PrestamoService(http) {
        this.http = http;
        this.url = '/sistema/prestamos';
        this.options = new http_1.RequestOptions({
            headers: new http_1.Headers({
                'Content-Type': 'application/json',
                'Accept': 'application/json, text/javascript, */*; q=0.01'
            })
        });
    }
    PrestamoService.prototype.getPrestamos = function (page, searchs) {
        searchs = (searchs ? searchs : new http_2.URLSearchParams());
        searchs.set("page", page);
        return this.http.get(this.url, { search: searchs }).map(function (res) { return res.json(); });
    };
    PrestamoService.prototype.create = function (prestamo) {
        return this.http
            .post(this.url, JSON.stringify({ prestamo: prestamo }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamoService.prototype.delete = function (prestamo) {
        return this.http.delete(this.url + "/" + prestamo.id)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamoService.prototype.update = function (prestamo) {
        return this.http
            .patch(this.url + "/" + prestamo.id, JSON.stringify({ prestamo: prestamo }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamoService.prototype.guardar = function (prestamo) {
        if (prestamo.id) {
            return this.update(prestamo);
        }
        else {
            return this.create(prestamo);
        }
    };
    PrestamoService.prototype.handleError = function (error) {
        console.error('Ocurrio un Error ', error.status, error.text);
        return Promise.reject(error.json());
    };
    PrestamoService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], PrestamoService);
    return PrestamoService;
}());
exports.PrestamoService = PrestamoService;
//# sourceMappingURL=prestamo.service.js.map