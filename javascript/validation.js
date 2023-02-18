function validateLogin() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
  
    var name1_error = document.getElementById("name1_error");
    var password_error = document.getElementById("password_error");
  
    var valid = true;
    var usernameRegex = /^[a-zA-Z0-9_]{3,20}$/; // allow letters, numbers, and underscores, at least 5 characters long
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/; // at least 8 characters long, must contain at least one digit, one lowercase letter, and one uppercase letter
  
    if (username == "" || !usernameRegex.test(username)) {
      name1_error.style.display = "block";
      valid = false;
    } else {
        name1_error.style.display = "none";
    }
  
    if (password == "" || !passwordRegex.test(password)) {
      password_error.style.display = "block";
      valid = false;
    } else {
      password_error.style.display = "none";
    }
  
    return valid;
  }
  