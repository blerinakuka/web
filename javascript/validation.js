let name1 = document.forms['form']['username'];
let password = document.forms['form']['password'];

let name1_error = document.getElementById('name1_error');
let password_error = document.getElementById('password_error');

name1.addEventListener('input', name1_Verify);
password.addEventListener('input', password_Verify);

function validated(){
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
