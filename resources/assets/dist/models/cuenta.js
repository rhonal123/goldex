"use strict";
var Cuenta = (function () {
    function Cuenta() {
        this.id = null;
        this.numero = null;
        this.banco_id = null;
        this.banco = null;
        this.created_at = null;
        this.updated_at = null;
    }
    Cuenta.clone = function (cuenta) {
        var _cuenta = new Cuenta();
        _cuenta.id = cuenta.id;
        _cuenta.numero = cuenta.numero;
        _cuenta.banco_id = cuenta.banco_id;
        _cuenta.banco = cuenta.banco;
        _cuenta.created_at = cuenta.created_at;
        _cuenta.updated_at = cuenta.updated_at;
        return _cuenta;
    };
    return Cuenta;
}());
exports.Cuenta = Cuenta;
//# sourceMappingURL=cuenta.js.map