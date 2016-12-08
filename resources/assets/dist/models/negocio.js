"use strict";
var Negocio = (function () {
    function Negocio() {
        this.id = null;
        this.nombre = null;
        this.rif = null;
        this.descripcion = null;
        this.direccion = null;
        this.encargado = null;
        this.telefono = null;
        this.created_at = null;
        this.updated_at = null;
    }
    Negocio.clone = function (negocio) {
        var _negocio = new Negocio();
        _negocio.id = negocio.id;
        _negocio.nombre = negocio.nombre;
        _negocio.rif = negocio.rif;
        _negocio.descripcion = negocio.descripcion;
        _negocio.direccion = negocio.direccion;
        _negocio.encargado = negocio.encargado;
        ;
        _negocio.telefono = negocio.telefono;
        _negocio.created_at = negocio.created_at;
        _negocio.updated_at = negocio.updated_at;
        return _negocio;
    };
    return Negocio;
}());
exports.Negocio = Negocio;
//# sourceMappingURL=negocio.js.map