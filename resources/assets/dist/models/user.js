"use strict";
var User = (function () {
    function User() {
        this.name = null;
        this.id = null;
        this.email = null;
        this.administrador = false;
        this.permisos = [];
    }
    User.clone = function (user) {
        var _user = new User();
        _user.id = user.id;
        _user.name = user.name;
        _user.email = user.email;
        return _user;
    };
    return User;
}());
exports.User = User;
//# sourceMappingURL=user.js.map