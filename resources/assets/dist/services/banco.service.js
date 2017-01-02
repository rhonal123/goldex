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
var BancoService = (function (_super) {
    __extends(BancoService, _super);
    function BancoService(http) {
        _super.call(this);
        this.http = http;
        this.url = '/sistema/bancos';
    }
    BancoService.prototype.getBancos = function (page, searchs) {
        searchs = (searchs ? searchs : new http_1.URLSearchParams());
        searchs.set("page", page);
        return this.http.get(this.url, { search: searchs }).
            map(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    BancoService.prototype.create = function (banco) {
        return this.http
            .post(this.url, JSON.stringify({ banco: banco }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    BancoService.prototype.delete = function (banco) {
        return this.http.delete(this.url + "/" + banco.id, this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    BancoService.prototype.update = function (banco) {
        return this.http
            .patch(this.url + "/" + banco.id, JSON.stringify({ banco: banco }), this.options)
            .toPromise()
            .then(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    BancoService.prototype.guardar = function (banco) {
        if (banco.id) {
            return this.update(banco);
        }
        else {
            return this.create(banco);
        }
    };
    BancoService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], BancoService);
    return BancoService;
}(general_servicio_1.GeneralServicio));
exports.BancoService = BancoService;
//# sourceMappingURL=banco.service.js.map