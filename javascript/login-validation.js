// get elements
const usernameElement = document.querySelector('input[type="username"]');
const passwordElement = document.querySelector('input[type="password"]');
const loginFormElement = document.getElementById('login');

//errors
const username_error = document.getElementById('username-error');
const password_error = document.getElementById('password-error');

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
loginFormElement.addEventListener('submit', (e) => {
    let ulangth = usernameElement.value.length;
    let plangth = passwordElement.value.length;
    if (ulangth <= 0 || plangth <= 0) {
        e.preventDefault();
        if (ulangth <= 0) {
            username_error.style.display = "block";
        }
        if (plangth <= 0) {
            password_error.style.display = "block";
        }
    }
});
required(usernameElement, username_error);
required(passwordElement, password_error);