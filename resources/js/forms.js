/**
 * Created by xiewang on 2017/7/6.
 */

function formhash(form, lg_password) {
    // create a new element input, this will be our hashed password field.
    var p = document.createElement("input");

    // add the new element to our form.
    form.appendChild(p);
    p.name = "password";
    p.type = "hidden";
    p.value = hex_sha512(lg_password.value);

    // make sure the plaintext password doesn't get sent
    lg_password.value = "";

    // finally submit the form.
    form.submit();
}

function regformhash(form, username, email, reg_password, reg_confirm) {

    if (username.value == '' || email.value == '' || reg_password.value == '' || reg_confirm.value == '') {
        alert('You must provide all the request details. Please try again.');
        return false;
    }

    // check the username
    var re = /^\w+$/;
    if (!re.test(form.username.value)) {
        alert("Username must contain only letters, numbers and underscores. Please try again.");
        form.username.focus();
        return false;
    }

    // check that the password is sufficiently long(at least 6 chars)
    if (form.reg_password.value.length < 6) {
        alert('Password must be at least 6 characters long. Please try again');
        form.reg_password.focus();
        return false;
    }

    // check that the password has at least one number, one lowercase letter and one uppercase letter
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    if (!re.test(form.reg_password.value)) {
        alert('Password must contain at least one number, one lowercase letter and one uppercase letter. Please try again.');
        form.reg_password.focus();
        return false;
    }

    // check the password and confirmation are the same
    if (reg_password.value != reg_confirm.value) {
        alert('Your password and confirmation do not match. Please try again.');
        form.reg_password.focus();
        return false;
    }

    // create a new element input, this will be our hashed password field.
    var p = document.createElement("input");
    form.appendChild(p);
    p.name = "password";
    p.type = "hidden";
    p.value = hex_sha512(reg_password.value);

    // make sure the plain text doesn't get sent
    reg_password.value = "";
    reg_confirm.value = "";

    form.submit();
    return true;
}
