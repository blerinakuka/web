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
    var name1 = document.forms["form"]["username"].value;
    var password = document.forms["form"]["password"].value;
    var repeat_password = document.forms["form"]["repeat_password"].value;
    var email = document.forms["form"]["email"].value;
  
    var name1_error = document.getElementById("name1_error");
    var password_error = document.getElementById("password_error");
    var repeat_password_error = document.getElementById("repeat_password_error");
    var email_error = document.getElementById("email_error");
  
    var valid = true;
    var name_regex = /^[a-zA-Z0-9_]{3,20}$/;
    var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  
    if (name1 == "" || !name_regex.test(name1)) {
      name1_error.style.display = "block";
      valid = false;
    } else {
      name1_error.style.display = "none";
    }
  
    if (email == "" || !email_regex.test(email)) {
      email_error.style.display = "block";
      valid = false;
    } else {
      email_error.style.display = "none";
    }
  
    if (password == "" || !password_regex.test(password)) {
      password_error.style.display = "block";
      valid = false;
    } else {
      password_error.style.display = "none";
    }
  
    if (repeat_password == "" || password != repeat_password) {
      repeat_password_error.innerHTML = "Passwords do not match";
      repeat_password_error.style.display = "block";
      valid = false;
    } else {
      repeat_password_error.style.display = "none";
    }
  
    return valid;
  } 
  