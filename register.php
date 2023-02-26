<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>Login And Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/login.css">
 <script src="javascript/script.js"></script>
</head>
<?php
 include 'subComponents/header.php';

?>



<body>
  
  <div class="loginbody">
    <div class="card">
      <div class="inner-box" id="card">
      <div class="card-font">
    <h2>REGISTER</h2>

    <form class="login_form" action="" method="post" name="form" onsubmit="return validated()">


        <input type="email" class="input-box" name="register-emailaddress" placeholder="Email" required>
        <div id="email_error">Fill out your email correctly</div>
  <input type="text" class="input-box" name="register-username" placeholder="Username" required>
  <div id="name1_error">Fill out your username correctly</div>
  <input type="password" class="input-box" name="register-password" placeholder="Password" required>
  <div id="password_error">Fill out your password correctly</div>

   <input  name="register-btn" type="submit" class="submit-btn" value="signup"/>
  

  </form>
  <div class="acc">
  <a href="login.php" class="acc">Already have an account?</a></div>
 
      </div>
     
    
      </div>
    </div>
  </div>

  <?php
 include 'subComponents/footer.php';
 include_once 'new/registerController.php';


?>
<script src="javascript/register.js"></script>
</body>
</html>