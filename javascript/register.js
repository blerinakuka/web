
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
      }  return true;
    
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