
function inputWidgetOnFocus(input_widget){
    input_widget.style.background = 'green';
    input_widget.style.color = 'black';

}

function inputWidgetOnBlur(input_widget){
    input_widget.style.background = 'black';
    input_widget.style.color = 'green';
    var usernameInput = document.getElementById("username");
    var usernameError = document.getElementById("u_msg");
    if (usernameInput.value.trim() === "") {
        usernameError.innerText = "Username must be filled out";
    } else {
        usernameError.innerText = ""; // Clear the error message if username is filled
    }

}

function validateForm(){
    email = document.getElementById('email').value;
    password = document.getElementById('password').value;
    c_password = document.getElementById('c_password').value;

    if (email.trim() == "") {
        alert("Email must be filled out");
        return false;
    } 

    if (password.trim() == "") {
        alert("Password must be filled out");
        return false;
    } else {
        if (password.length < 8){
            alert("Password must be at least 8 characters long.");
            return false;
        } else{
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/;
            if (!passwordRegex.test(password)) {
                alert("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
                return false;
            }
        }
    }

    if (c_password.trim() == "") {
        alert("Confirm Password must be filled out");
        return false;
    }

    if (password != c_password) {
        alert("Password and Confirm Password must match");
        return false;
    }

    return true;
}