"use strict";
var Banco = (function () {
    function Banco(id, nombre, created_at, updated_at) {
        this.nombre = nombre;
        this.id = id;
        this.created_at = (created_at ? created_at : null);
        this.updated_at = (updated_at ? updated_at : null);
    }
    Banco.clone = function (banco) {
        return new Banco(banco.id, banco.nombre, banco.created_at, banco.updated_at);
    };
    return Banco;
}());
exports.Banco = Banco;
//# sourceMappingURL=banco.js.map