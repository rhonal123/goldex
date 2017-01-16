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
var usuario_contrasena_component_1 = require('./usuarios/usuario.contrasena.component');
require('rxjs/add/operator/catch');
var AppComponent = (function () {
    function AppComponent(route, viewContainerRef, currentUsuario) {
        this.route = route;
        this.viewContainerRef = viewContainerRef;
        this.currentUsuario = currentUsuario;
    }
    AppComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.currentUsuario.getCurrentUser().subscribe(function (elemento) {
            localStorage['user'] = _this.user;
            _this.user = elemento;
        }, function (err) {
            _this.user = null;
            _this.route.navigate(['/login']);
        });
    };
    AppComponent.prototype.onCambiarContrasena = function () {
        this.usuarioContrasenaComponent.setModel(this.user);
        this.usuarioContrasenaComponent.openModal(this);
    };
    AppComponent.prototype.cerrarSesion = function () {
        this.currentUsuario.logout();
    };
    AppComponent.prototype.canToDo = function (operacion) {
        return true;
    };
    __decorate([
        core_1.ViewChild(usuario_contrasena_component_1.UsuarioContrasenaComponent), 
        __metadata('design:type', usuario_contrasena_component_1.UsuarioContrasenaComponent)
    ], AppComponent.prototype, "usuarioContrasenaComponent", void 0);
    AppComponent = __decorate([
        core_1.Component({
            selector: 'app-component',
            templateUrl: 'assets/app.component.html',
            providers: [current_usuario_service_1.CurrentUsuario]
        }), 
        __metadata('design:paramtypes', [router_1.Router, core_1.ViewContainerRef, current_usuario_service_1.CurrentUsuario])
    ], AppComponent);
    return AppComponent;
}());
exports.AppComponent = AppComponent;
//# sourceMappingURL=app.component.js.map