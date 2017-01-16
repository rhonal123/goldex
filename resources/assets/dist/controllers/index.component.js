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
var current_usuario_service_1 = require('./../services/current.usuario.service');
var IndexComponent = (function () {
    function IndexComponent(route, currentUsuario) {
        this.route = route;
        this.currentUsuario = currentUsuario;
    }
    IndexComponent.prototype.ngOnInit = function () {
        this.user = this.currentUsuario.user;
    };
    IndexComponent = __decorate([
        core_1.Component({
            selector: 'index-component',
            template: "\n<div class=\"col-md-12 \">\n</div>  \n  ",
            providers: [current_usuario_service_1.CurrentUsuario]
        }), 
        __metadata('design:paramtypes', [router_1.Router, current_usuario_service_1.CurrentUsuario])
    ], IndexComponent);
    return IndexComponent;
}());
exports.IndexComponent = IndexComponent;
//# sourceMappingURL=index.component.js.map