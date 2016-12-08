"use strict";
var User = (function () {
    function User() {
        this.name = null;
        this.id = null;
        this.email = null;
        this.created_at = null;
        this.updated_at = null;
    }
    User.clone = function (user) {
        var _user = new User();
        _user.id = user.id;
        _user.name = user.name;
        _user.email = user.email;
        _user.created_at = user.created_at;
        _user.updated_at = user.updated_at;
        return _user;
    };
    return User;
}());
exports.User = User;
//# sourceMappingURL=user.js.map