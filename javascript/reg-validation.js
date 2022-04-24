'use strict'
//name validation
function nameValidation(name) {
var error;
if (name === "") {
error = "Enter Your Name";
        alert(error);
        return false;
 } else {
     let pattern = ['<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3',
                '4', '5', '6', '7', '8', '9'
            ];
            
            for (var i = 0; i < pattern.length; i++) {

                if (name.includes(pattern[i])) {

                    error = "Name accepts only charecter";
                    alert(error);
                    return false;
                    break;


                }

            }

        return true;

    }

}

//email validation
function emailValidation(email) {
   if (email.includes("@") && email.includes(".com")) {
    return true;

    } else {
        alert("Invalid Email");
        return false;
    }

}
//username validation
function usernameValidation(username) {
 if (username.includes(" ")) {
   alert("invalid username");
        return false;
    } else {
        return true;
    }

}
//pass validation
function passwordValidator(password, cpassword) {
    if (password != cpassword) {
        alert("password and confirm password does not match");
        return false;
    }
    if (!checkUpperCase(password)) {
        alert('The password requires a capital letter.');
        return false;
    }
    if (!checkLowerCase(password)) {
        alert('The password requires a lower case letter.');
        return false;
    }
    if (!checkLength(password)) {
        alert('Password must contain at least 8 charecter and less than 20.');
        return false;
    }
    if (!checkSpecialCharacter(password)) {
        alert('The password requires a special character.');
        return false;
    }
    if (!checkNumber(password)) {
        alert('The password requires a Number.');
        return false;
    }
    if (checkUpperCase(password) && checkLowerCase(password) && checkLength(password) && checkSpecialCharacter(password) && checkNumber(password)) {
        return true;
    }

}

function checkUpperCase(password) {
    var upper = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < upper.length; j++) {
            if (password[i] === upper[j]) {
                return true;
            }
        }
    }
}

function checkLowerCase(password) {
    var lower = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < lower.length; j++) {
            if (password[i] === lower[j]) {
                return true;
            }
        }
    }
}

function checkLength(password) {
    for (var i = 0; i < password.length; i++) {
        if (password.length >= 8 && password.length <= 20) {
            return true;
        }
    }
}

function checkSpecialCharacter(password) {
    var specialCharacters = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "+"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < specialCharacters.length; j++) {
            if (password[i] === specialCharacters[j]) {
                return true;
            }
        }
    }
}

function checkNumber(password) {
    var number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    for (var i = 0; i < password.length; i++) {
        for (var j = 0; j < number.length; j++) {
            if (password[i] === number[j]) {
                return true;
            }
        }
    }
}
//mobile number 
function checkMobileNumber(mobileNumber) {


    if (toString(parseInt(mobileNumber)) == mobileNumber) {
        console.log(parseInt(mobileNumber));
        return true;
    } else {

        alert('Mobile number should contain only digit');
        return false;

    }
}
function addStudent() {
    var f_name = document.getElementById("f_name").value;
    var l_name = document.getElementById("l_name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var mobileNumber = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("re_password").value;
    var add = document.getElementById("address").value;
    var gender = document.getElementById("gender").value;
    var submit = document.getElementById("Submit").value;
    console.log(submit)
    
    if (f_name == "" || l_name=="" || username == "" || email == "" || password == "" || cpassword == "" || add == "" || gender == "" || mobileNumber == "") {

        document.getElementById('response').innerHTML = "Please Fill all the information";

    } else {

        if (nameValidation(f_name)) {

            if (nameValidation(l_name)) {

            if (emailValidation(email)) {

                if (isNaN(mobileNumber) == false) {

                    if (passwordValidator(password, cpassword)) {

                        if (usernameValidation(username)) {
                                //ajax
                            var xhttp = new XMLHttpRequest();
                            xhttp.open('POST', '../../controllers/addStudent.php', true);
                            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                            xhttp.onreadystatechange = function () {

                                if (this.readyState == 4 && this.status == 200) {

                                    if (this.responseText == "Succesfull") {
                                        document.getElementById('response').innerHTML = "Student added succesfully";
                                       
                                    } else {
                                        document.getElementById('response').innerHTML = "Some error occured during adding student";
                                    }
                                }
                            }

                            xhttp.send('submit=' + submit  + 
                            '&username='+ username + 
                            '&password=' + password + 
                            '&f_name=' + f_name +
                            '&l_name=' + l_name + 
                            '&email=' + email  + 
                            '&gender=' + gender + 
                            '&phone=' + mobileNumber+ 
                            '&address=' + add);
                           
                               
                        } else {
                            document.getElementById('response').innerHTML = "Invalid First Name \n Enter First Name Again";
                            
                        }
                         

                    } else {
                        document.getElementById('response').innerHTML = "Invalid Last Name \n Enter Last Name Again";
                       
                    }

                } else {
                    document.getElementById('response').innerHTML = "Enter Username Again";
                    
                }
                

            } else {
                document.getElementById('response').innerHTML = "Enter Password Again";
                
            }

        } else {
            document.getElementById('response').innerHTML = "Mobile Number accepts only Numbers";
        }} else {
            document.getElementById('response').innerHTML = "Invalid Email \n Enter Email Again";
        }



    }




}



