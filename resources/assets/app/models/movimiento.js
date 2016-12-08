"use strict";
var Movimiento = (function () {
    function Movimiento() {
        this.id = null;
        this.negocio_id = null;
        this.negocio = null;
        this.monto = null;
        this.fecha = null;
        this.descripcion = null;
        this.tipo = null;
        this.clasificacion = null;
        this.cuenta_id = null;
        this.cuenta = null;
        this.user_id = null;
        this.user = null;
        this.puro = null;
        this.cuenta_destino = null;
        this.banco_destino_id = null;
        this.banco_destino = null;
        this.created_at = null;
        this.updated_at = null;
    }
    Movimiento.strFecha = function (movimiento) {
        var date = new Date(movimiento.fecha);
        return date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate();
    };
    Movimiento.clone = function (movimiento) {
        var _movimiento = new Movimiento();
        _movimiento.id = movimiento.id;
        _movimiento.negocio_id = movimiento.negocio_id;
        _movimiento.negocio = movimiento.negocio;
        _movimiento.monto = movimiento.monto;
        _movimiento.fecha = movimiento.fecha;
        _movimiento.descripcion = movimiento.descripcion;
        _movimiento.tipo = movimiento.tipo;
        _movimiento.clasificacion = movimiento.clasificacion;
        _movimiento.cuenta_id = movimiento.cuenta_id;
        _movimiento.cuenta = movimiento.cuenta;
        _movimiento.user_id = movimiento.user_id;
        _movimiento.user = movimiento.user;
        _movimiento.puro = movimiento.puro;
        _movimiento.cuenta_destino = movimiento.cuenta_destino;
        _movimiento.banco_destino_id = movimiento.banco_destino_id;
        _movimiento.banco_destino = movimiento.banco_destino;
        _movimiento.created_at = movimiento.created_at;
        _movimiento.updated_at = movimiento.updated_at;
        return _movimiento;
    };
    return Movimiento;
}());
exports.Movimiento = Movimiento;
//# sourceMappingURL=movimiento.js.map