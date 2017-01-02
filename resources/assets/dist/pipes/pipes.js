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
var capitalize = function (cadena) { return cadena.replace(/\b\w/g, function (e) { return e.toUpperCase(); }); };
var TruncatePipe = (function () {
    function TruncatePipe() {
    }
    TruncatePipe.prototype.transform = function (value, args) {
        if (args === void 0) { args = []; }
        var limit = args.length > 0 ? parseInt(args[0], 10) : 15;
        var trail = args.length > 1 ? args[1] : '...';
        return value.length > limit ? value.substring(0, limit) + trail : value;
    };
    TruncatePipe = __decorate([
        core_1.Pipe({
            name: 'truncate'
        }), 
        __metadata('design:paramtypes', [])
    ], TruncatePipe);
    return TruncatePipe;
}());
exports.TruncatePipe = TruncatePipe;
var AdministradorPipe = (function () {
    function AdministradorPipe() {
    }
    AdministradorPipe.prototype.transform = function (value) {
        return (JSON.parse(value) ? "Administrador" : "comun");
    };
    AdministradorPipe = __decorate([
        core_1.Pipe({
            name: 'administrador'
        }), 
        __metadata('design:paramtypes', [])
    ], AdministradorPipe);
    return AdministradorPipe;
}());
exports.AdministradorPipe = AdministradorPipe;
var CantidadAbonoPipe = (function () {
    function CantidadAbonoPipe() {
    }
    CantidadAbonoPipe.prototype.transform = function (value) {
        return value.cantidad + " " + value.tipo.simbolo;
    };
    CantidadAbonoPipe = __decorate([
        core_1.Pipe({
            name: 'cantidadAbono'
        }), 
        __metadata('design:paramtypes', [])
    ], CantidadAbonoPipe);
    return CantidadAbonoPipe;
}());
exports.CantidadAbonoPipe = CantidadAbonoPipe;
var MontoBsPipe = (function () {
    function MontoBsPipe() {
    }
    MontoBsPipe.prototype.transform = function (value) {
        return value + " Bs";
    };
    MontoBsPipe = __decorate([
        core_1.Pipe({
            name: 'montoBs'
        }), 
        __metadata('design:paramtypes', [])
    ], MontoBsPipe);
    return MontoBsPipe;
}());
exports.MontoBsPipe = MontoBsPipe;
var DetalleNegocioPipe = (function () {
    function DetalleNegocioPipe() {
    }
    DetalleNegocioPipe.prototype.transform = function (value) {
        return capitalize(" " + value.rif + " " + value.nombre);
    };
    DetalleNegocioPipe = __decorate([
        core_1.Pipe({
            name: 'detalleNegocio'
        }), 
        __metadata('design:paramtypes', [])
    ], DetalleNegocioPipe);
    return DetalleNegocioPipe;
}());
exports.DetalleNegocioPipe = DetalleNegocioPipe;
var FechaPipe = (function () {
    function FechaPipe() {
    }
    FechaPipe.prototype.transform = function (value) {
        var fecha = new Date(value.toString());
        return fecha.getFullYear() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getDate();
    };
    FechaPipe = __decorate([
        core_1.Pipe({
            name: 'fecha'
        }), 
        __metadata('design:paramtypes', [])
    ], FechaPipe);
    return FechaPipe;
}());
exports.FechaPipe = FechaPipe;
var DivisaPipe = (function () {
    function DivisaPipe() {
    }
    DivisaPipe.prototype.transform = function (value) {
        return (value ? "Divisa" : "No Divisa");
    };
    DivisaPipe = __decorate([
        core_1.Pipe({
            name: 'divisa'
        }), 
        __metadata('design:paramtypes', [])
    ], DivisaPipe);
    return DivisaPipe;
}());
exports.DivisaPipe = DivisaPipe;
//# sourceMappingURL=pipes.js.map