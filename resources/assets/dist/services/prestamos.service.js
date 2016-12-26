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
var PrestamosService = (function () {
    function PrestamosService(http) {
        this.http = http;
        this.url = '/sistema/prestamos';
    }
    PrestamosService.prototype.getPrestamos = function (page, searchs) {
        searchs = (searchs ? searchs : new http_2.URLSearchParams());
        searchs.set("page", page);
        return this.http.get(this.url, { search: searchs }).map(function (res) { return res.json(); });
    };
    PrestamosService.prototype.create = function (prestamo) {
        return this.http
            .post(this.url, JSON.stringify({ prestamo: prestamo }))
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamosService.prototype.delete = function (prestamo) {
        return this.http.delete(this.url + "/" + prestamo.id)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamosService.prototype.update = function (prestamo) {
        return this.http
            .patch(this.url + "/" + prestamo.id, JSON.stringify({ prestamo: prestamo }))
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    PrestamosService.prototype.guardar = function (prestamo) {
        if (prestamo.id) {
            return this.update(prestamo);
        }
        else {
            return this.create(prestamo);
        }
    };
    PrestamosService.prototype.handleError = function (error) {
        console.error('Ocurrio un Error ', error.status, error.text);
        return Promise.reject(error.json());
    };
    PrestamosService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], PrestamosService);
    return PrestamosService;
}());
exports.PrestamosService = PrestamosService;
//# sourceMappingURL=prestamos.service.js.map