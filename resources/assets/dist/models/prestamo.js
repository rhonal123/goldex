"use strict";
var Prestamo = (function () {
    function Prestamo() {
        this.id = null;
        this.negocio_id = null;
        this.negocio = null;
        this.cuenta_id = null;
        this.cuenta = null;
        this.user_id = null;
        this.user = null;
        this.monto = 0.0;
        this.comision = 0.0;
        this.precio_material = 0.0;
        this.referencia = null;
        this.descripcion = null;
        this.fecha = null;
        this.tipo = "efectivo";
    }
    Prestamo.strFecha = function (prestamo) {
        prestamo.fecha = new Date(prestamo.fecha.toString());
        return prestamo.fecha.getFullYear() + "/" + (prestamo.fecha.getMonth() + 1) + "/" + prestamo.fecha.getDate();
    };
    return Prestamo;
}());
exports.Prestamo = Prestamo;
//# sourceMappingURL=prestamo.js.map