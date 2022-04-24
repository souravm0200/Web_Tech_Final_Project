// get elements
const f_name = document.querySelector('input[type="f_name"]');
const l_name = document.querySelector('input[type="l_name"]');
const gender = document.querySelector('input[type="radio"]');
const dob = document.querySelector('input[type="date"]');
const username = document.querySelector('input[type="username"]');
const password = document.querySelector('input[type="password"]');
const re_rpassword = document.querySelector('input[id="re_password"]');
const email = document.querySelector('input[type="email"]');
const phone = document.querySelector('input[type="phone"]');
const salary = document.querySelector('input[type="salary"]');
const address = document.querySelector('input[type="address"]');
const usertype = document.querySelector('input[type="hidden"]');
const form = document.getElementById('form');

//errors
const f_name_error = document.getElementById('f_name-error');
const f_name_error_notAlpha = document.getElementById('f_name-error_notAlpha');
const l_name_error_notAlpha = document.getElementById('l_name-error_notAlpha');
const l_name_error = document.getElementById('l_name-error');
const username_error = document.getElementById('username-error');
const username_error_notAvailable = document.getElementById('username-error_notAvailable');
const username_error_notAlphaNum = document.getElementById('username-error_notAlphaNum');
const password_error = document.getElementById('password-error');
const re_password_error = document.getElementById('re_password-error');
const re_password_null_error = document.getElementById('re_password_null-error');
const email_error = document.getElementById('email-error');
const email_error_invalid = document.getElementById('email-error_invalid');
const phone_error = document.getElementById('phone-error');
const phone_error_invalid = document.getElementById('phone-error_invalid');
const salary_error_invalid = document.getElementById('salary-error_invalid');
const address_error = document.getElementById('address-error');

function required(input, errorId) {
    input.addEventListener('input', function () {
        if (this.value.length <= 0) {
            errorId.style.display = "block";
        }
        if (this.value.length > 0) {
            errorId.style.display = "none";
        }
    });
}

function matchPass(input, errorId) {
    input.addEventListener('input', function () {
        if (this.value != password.value && this.value.length > 0) {
            isAllValid = false;
            errorId.style.display = "block";
            if (re_password_null_error.style.display == "block") {
                errorId.style.display = "none";
            }
        }
        if (this.value == password.value) {
            isAllValid = true;
            errorId.style.display = "none";
        }
    });
}
// NULL ERROR HANDLING
form.addEventListener('submit', (e) => {
    let ulangth = f_name.value.length;
    let plangth = password.value.length;
    let fnlangth = f_name.value.length;
    let lnlangth = l_name.value.length;
    let unlangth = username.value.length;
    let emlangth = email.value.length;
    let phlangth = phone.value.length;
    let adlangth = address.value.length;
    let passlangth = password.value.length;
    let repasslangth = re_rpassword.value.length;
    if (ulangth <= 0 || plangth <= 0 || fnlangth <= 0 || lnlangth <= 0 || unlangth <= 0 || emlangth <= 0 || phlangth <= 0 || adlangth <= 0 || passlangth <= 0 || repasslangth <= 0) {
        e.preventDefault();
        if (ulangth <= 0) {
            f_name_error.style.display = "block";
        }
        if (plangth <= 0) {
            password_error.style.display = "block";
        }
        if (fnlangth <= 0) {
            f_name_error.style.display = "block";
        }
        if (lnlangth <= 0) {
            l_name_error.style.display = "block";
        }
        if (unlangth <= 0) {
            username_error.style.display = "block";
        }
        if (emlangth <= 0) {
            email_error.style.display = "block";
        }
        if (phlangth <= 0) {
            phone_error.style.display = "block";
        }
        if (adlangth <= 0) {
            address_error.style.display = "block";
        }
    }
});
// VALIDATION HANDLING
let isAllValid = true;

function onlyAlpha(input, errorId) {
    let isValid = false;
    input.addEventListener('input', function () {
        let val = input.value;
        if (val == '') {
            isAllValid = false;
            return isAllValid;
        }
        for (let x = 0; x < val.length; x++) {
            let ch = val.charAt(x);
            if (!((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z') || ch == ' ')) {
                isAllValid = isValid = false;
                break;
            } else
                isAllValid = isValid = true;
        }
        if (!isValid && val.length != 0) {
            errorId.style.display = "block";
        } else
            errorId.style.display = "none";
    });
    return isValid;
}

function onlyAlphaNumeric(input, errorId) {
    let isValid = false;
    input.addEventListener('input', function () {
        let val = input.value;
        for (let x = 0; x < val.length; x++) {
            let ch = val.charAt(x);
            if (!((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z') || (ch >= '0' && ch <= '9'))) {
                isAllValid = isValid = false;
                break;
            } else
                isAllValid = isValid = true;
        }
        if (!isValid && val.length != 0) {
            errorId.style.display = "block";
        } else
            errorId.style.display = "none";
    });
    return isValid;
}

function mailCheck(input, errorId) {
    let isValid = false;
    input.addEventListener('input', function () {
        let val = input.value;
        if (val == '') {
            isAllValid = false;
            return isAllValid;
        }
        if (val.indexOf('@') == -1 || val.indexOf('.') == -1)
            isAllValid = isValid = false;
        else
            isAllValid = isValid = true;
        if (!isValid && val.length != 0) {
            errorId.style.display = "block";
        } else {
            errorId.style.display = "none";
        }

    });
    return isValid;
}

function phoneChech(input, errorId) {
    let isValid = false;
    input.addEventListener('input', function () {
        let val = input.value;
        if (val == '') {
            isAllValid = false;
            return isAllValid;
        }
        for (let x = 0; x < val.length; x++) {
            let ch = val.charAt(x);
            if (!((ch >= '0' && ch <= '9') || (ch == ' ') || (ch == '+') || (ch == '(') || (ch == ')') || (ch == '-')) || val.length > 17) {
                isAllValid = isValid = false;
                break;
            } else
                isAllValid = isValid = true;
        }
        if (!isValid && val.length != 0) {
            errorId.style.display = "block";
        } else
            errorId.style.display = "none";
    });
    return isValid;
}

function salaryCheck(input, errorId) {
    let isValid = false;
    input.addEventListener('input', function () {
        let val = input.value;
        if (val == '') {
            isAllValid = false;
            return isAllValid;
        }
        for (let x = 0; x < val.length; x++) {
            let ch = val.charAt(x);
            if (!((ch >= '0' && ch <= '9'))) {
                isAllValid = isValid = false;
                break;
            } else
                isAllValid = isValid = true;
        }
        if (!isValid && val.length != 0) {
            errorId.style.display = "block";
        } else
            errorId.style.display = "none";
    });
    return isValid;
}
//AJAX - Check Username
function checkUsername() {
    let isValid = false;
    username.addEventListener('input', function () {
        let chkUname = username.value;
        load('../controllers/checkUsername.php', 'username=' + chkUname, function (response) {
            if (response.responseText == 'false' && chkUname.length != 0) {
                console.log(response);
                isAllValid = isValid = false;
                username_error_notAvailable.style.display = "block";
            }
            if (response.responseText == 'true') {
                console.log(response);
                isAllValid = isValid = true;
                username_error_notAvailable.style.display = "none";
            }
        });
    })
}
const regBtn = document.getElementById('regBtn');

function submitCheck() {
    form.addEventListener('submit', (e) => {
        if (!isAllValid) {
            e.preventDefault();
        } else if (isAllValid && regBtn != null) {
            e.preventDefault();
            let formData = {
                'usertype': usertype.value,
                'username': username.value,
                'password': password.value,
                'fname': f_name.value,
                'lname': l_name.value,
                'gender': gender.value,
                'dob': dob.value,
                'email': email.value,
                'phone': phone.value,
                'address': address.value,
            };
            let userdata = JSON.stringify(formData);
            load('../controllers/RegistrationCheck.php', 'userdata=' + userdata, function (response) {
                if (response.responseText == 'true') {
                    alert('Registration Successful');
                    window.location.href = 'editProfile.php?username=' + username.value;
                } else {
                    alert('Registration Failed');
                }
            });
        }
    });
}
//nul error checking
if (f_name)
    required(f_name, f_name_error);
if (l_name)
    required(l_name, l_name_error);
if (username) {
    required(username, username_error);
    checkUsername();
}
if (password)
    required(password, password_error);
if (re_rpassword)
    required(re_rpassword, re_password_null_error);
if (email)
    required(email, email_error);
if (phone)
    required(phone, phone_error);
if (address)
    required(address, address_error);
//pass match
if (re_rpassword)
    matchPass(re_rpassword, re_password_error);

//only alpha first name
if (f_name)
    onlyAlpha(f_name, f_name_error_notAlpha);
if (l_name)
    onlyAlpha(l_name, l_name_error_notAlpha);
//only alpha numeric username
if (username)
    onlyAlphaNumeric(username, username_error_notAlphaNum);
// email check
if (email)
    mailCheck(email, email_error_invalid);
//phone check
if (phone)
    phoneChech(phone, phone_error_invalid);
if (salary)
    salaryCheck(salary, salary_error_invalid);

submitCheck();