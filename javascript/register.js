let name1 = document.forms['form']['register-username'];
let password = document.forms['form']['register-password'];
let email = document.forms['form']['register-email'];

let name1_error = document.getElementById('name1_error');
let password_error = document.getElementById('password_error');
let email_error = document.getElementById('email_error');

name1.addEventListener('textInput', name1_Verify);
password.addEventListener('textInput', password_Verify);
email.addEventListener('textInput', email_Verify);


function validated(){
    if(!email_Verify()){
        email_error.style.display = "block";
        password.focus();
        return false;
    }
    if(!name1_Verify()){
        name1_error.style.display = "block";
        name1.focus();
        return false;
    }
    if(!password_Verify()){
        password_error.style.display = "block";
        password.focus();
        return false;
    }
    return true;
}

function email_Verify(){
    if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value)){
        email_error.style.display = "none";
        return true;
    }
}

function name1_Verify(){
    if(/^[a-zA-Z0-9._-]{3,15}$/.test(name1.value)){
        name1_error.style.display = "none";
        return true;
    }
}

function password_Verify(){
    if(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(password.value)){
        password_error.style.display = "none";
        return true;
    }
}
