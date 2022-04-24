<!DOCTYPE html>
<html lang="en">

<head>
   
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="reg-container">
        <div class="reg-form" id="registration-form" >
            <div class="content-header">
   
                <div class="title">
                    <label>ADD Student </label>
                </div>
                
            </div>
            <div class="heading-container">
                <h2>Student Registration</h2>
                <p>Please Enter All The Necessary Information</p>
                
            </div>
            <div class="group">
                <input type="f_name" name="f_name" id="f_name" placeholder="First Name">
                <span class="error" id="f_name-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="l_name" name="l_name" id="l_name" placeholder="Last Name">
                <span class="error" id="l_name-error">The field is required.</span>
            </div>
            <div class="Rgroup">
                <input type="radio" name="gender" id="gender" value="Male">
                <label>MALE</label>
                <input type="radio" name="gender"id="gender" value="Female">
                <label>Female</label>
                <input type="radio" name="gender"id="gender" value="Other">
                <label>Other</label>
            </div>
            <div class="group">
                <input type="username" name="username" id="username" placeholder="Username">
                <span class="error" id="username-error">The field is required.</span>
            </div>
            <div class="group ">
                <input type="text" name="password" id="password" placeholder="Password">
                <span class="error" id="password-error">The field is required.</span>
            </div>
            <div class="group ">
                <input type="text" id="re_password"  name="re_password" placeholder="Re-Password">
                <span class="error" id="re_password_null-error">The field is required.</span>
                <span class="error" id="re_password-error">Password Missmatch</span>
            </div>
            <div class="group">
                <input type="email" name="email"  id="email" placeholder="Email">
                <span class="error" id="email-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="phone" name="phone" id="phone" placeholder="Phone">
                <span class="error" id="phone-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="address" name="address" id="address" placeholder="Address">
                <span class="error" id="address-error">The field is required.</span>
            </div>
            
            <input type="hidden" name="userType" value="student">
            <input class="RegBtn" type="submit" name="submit" value="submit" id="Submit" onclick="addStudent()">
        </div>
        <h4  align="center" id="response"></h4>
    </div>

    <script type="text/javascript" src="../../javascript/reg-validation.js" ></script>
</body>

</html>