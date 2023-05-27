function login() {
    var userid = $("#userid").val();
    var password = $("password").val();

    if (validateUserId(userid) == false | validatePassword(password) == false) {
        return false;
    }
}

function validateUserId(userid) {
    if (userid == "") {
        alert("UserID required.\n");
        return false;
    } else if (checkUserId(userid) == false) {
        alert("Unknown User ID.\n");
        return false;
    } else {
        return true;
    }
}

function checkUserId(userid) {
    const regex = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/;
    return regex.test(String(userid).toUpperCase());
}

function validatePassword(password) {
    if (password == "") {
        alert("Password required.\n");
        return false;
    } else {
        return true;
    }
}