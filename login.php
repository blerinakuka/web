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
          <h2>LOGIN</h2>
          <form class="login_form" action="./login_handler.php" method="post" name="form" onsubmit="return validated()">
            <input type="text" class="input-box" name="username" placeholder="Username" required>
            <div id="name1_error">Fill out your username correctly</div>
            <input type="password" class="input-box" name="password" placeholder="Password" required>
            <div id="password_error">Fill out your password correctly</div>
            <button type="submit" class="submit-btn">Submit</button>   
          </form>
          <a href="register.php" class="acc">Don't have an account?</a>
        </div>
      </div>
    </div>
  </div>
  <?php
    include 'subComponents/footer.php';
  ?>
  <script src="javascript/validation.js"></script>
</body>
</html> 
